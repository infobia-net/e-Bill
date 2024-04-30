/*browser:true*/
/*global define*/

define([
  "ko",
  "jquery",
  "uiComponent",
  "mage/storage",
  "Magento_Checkout/js/model/url-builder",
  "Magento_Customer/js/customer-data",
  "Magento_Ui/js/model/messageList",
  window.fastCheckoutConfig.revolutSdk,
], function (ko, $, Component, storage, urlBuilder, customerData, globalMessageList, RevolutCheckout) {
  "use strict";

  return Component.extend({
    defaults: {
      RevolutCheckout: ko.observable(false),
      isCartPage: ko.observable(false),
      currency: ko.observable(null),
      amount: ko.observable(null),
      publicId: ko.observable(null),
      publicKey: ko.observable(null),
      paymentRequest: ko.observable(null),
      idSelectedCarrier: ko.observable(null),
      addressData: ko.observable(null),
      shippingOptions: [{ id: "free_shipping", amount: "0", description: "", label: "-" }],
    },

    initialize: function () {
      if ($("#product-addtocart-button")) {
        $(".revolut-fast-checkout-container").css({ width: $("#product-addtocart-button").outerWidth() });
      }

      $(`script[src="${window.fastCheckoutConfig.revolutSdk}"]`).attr("id", "revolut-checkout");
      this._super();
      this.RevolutCheckout(RevolutCheckout);
    },

    initFastCheckoutButton: function (isActiveLocation, isShoppingCart) {
      if (!window.fastCheckoutConfig.productId || !isActiveLocation) {
        return false;
      }

      this.isCartPage(isShoppingCart);

      const self = this;

      storage
        .post(
          urlBuilder.createUrl("/revolut/order/create", {}),
          JSON.stringify({
            fastCheckout: true,
            revolut_pay_fast_checkout: self.isRevolutPay(),
          }),
          true
        )
        .done(function (response) {
          if (response && response.success && response.public_id) {
            self.publicId(response.public_id);
            self.publicKey(response.public_key);
            self.currency(response.currency);
            self.amount(response.amount);
            self.createFastCheckoutButton();
          }
        });
    },

    createFastCheckoutButton: async function () {},

    loadShippingOptions: function (address) {
      const self = this;
      return new Promise((resolve, reject) => {
        self.addressData({
          country: address.country,
          state: address.region,
          postcode: address.postalCode,
          city: address.city,
          address: "",
          address_2: "",
        });

        storage
          .post(
            urlBuilder.createUrl("/revolut/fast-checkout/shippingoptions/load", {}),
            JSON.stringify({
              address_data: self.addressData(),
              revolut_public_id: self.publicId(),
            }),
            true
          )
          .done(function (response) {
            if (!response.success) {
              return self.displayError(response.message, true);
            }
            if (response.delivery_methods && response.delivery_methods.length > 0) {
              response.shippingOptions = response.delivery_methods;
              self.idSelectedCarrier(response.shippingOptions[0].id);
            } else {
              reject();
            }

            resolve(response);
          })
          .fail(() => {
            return self.displayError("Something went wrong", true);
          });
      });
    },

    setShippingOption: function (selected_carrier) {
      const self = this;
      return new Promise((resolve, reject) => {
        self.idSelectedCarrier(selected_carrier.id);
        storage
          .post(
            urlBuilder.createUrl("/revolut/fast-checkout/shippingoptions/set", {}),
            JSON.stringify({
              address_data: self.addressData(),
              selected_carrier_id: self.idSelectedCarrier(),
              revolut_public_id: self.publicId(),
            }),
            true
          )
          .done(function (response) {
            if (!response.success) {
              return self.displayError(response.message, true);
            }

            resolve(response);
          })
          .fail(() => {
            return self.displayError("Something went wrong", true);
          });
      });
    },

    addToCart: function () {
      const self = this;
      const form = jQuery("#product_addtocart_form");

      return new Promise((resolve, reject) => {
        if (self.isCartPage()) {
          storage
            .post(
              urlBuilder.createUrl("/revolut/order/create", {}),
              JSON.stringify({
                fastCheckout: true,
                revolut_pay_fast_checkout: self.isRevolutPay(),
              }),
              true
            )
            .done(function (response) {
              if (self.publicId() != response.public_id) {
                resolve(false);
                return self.displayError("Can not update payment amount", true);
              }

              return resolve(true);
            });
          return;
        }

        var validator = form.validation({ radioCheckboxClosest: ".nested" });

        if (!validator.valid()) {
          resolve(false);
          return self.displayError(false, true);
        }

        storage
          .post(
            urlBuilder.createUrl("/revolut/fast-checkout/addtocart", {}),
            JSON.stringify({
              revolut_public_id: self.publicId(),
              revolut_pay_fast_checkout: this.isRevolutPay(),
              product_form: form.serialize(),
            }),
            true
          )
          .done(function (response) {
            if (!response.success) {
              resolve(false);
              return self.displayError(response.message, true);
            }
            customerData.invalidate(["cart"]);
            customerData.reload(["cart"], true);
            resolve(response);
          })
          .fail(() => {
            resolve(false);
            return self.displayError("Something went wrong", true);
          });
      });
    },

    validateOrder: function (address) {
      const self = this;
      return new Promise((resolve, reject) => {
        storage
          .post(
            urlBuilder.createUrl("/revolut/fast-checkout/validate-order", {}),
            JSON.stringify({
              public_id: self.publicId(),
              address: address,
              carrier_id: self.idSelectedCarrier(),
            }),
            true
          )
          .done(function (response) {
            if (response.success) {
              return resolve(response);
            }

            reject(response.message);

            if (self.isRevolutPay()) {
              self.cancelPayment(response.message, response);
            }
          })
          .fail((response) => {
            reject("Something went wrong");

            if (self.isRevolutPay()) {
              return self.cancelPayment(
                "An error occurred while processing your order. Your payment has been canceled.",
                response
              );
            }
          });
      });
    },

    getData: function () {
      return {
        method: this.method,
        additional_data: {
          publicId: this.publicId(),
          setAgreement: true,
        },
      };
    },

    isRevolutPay: function () {
      return this.method == window.fastCheckoutConfig.RevolutPayPaymentMethodCode;
    },

    processOrder: function () {
      const self = this;

      return new Promise((resolve, reject) => {
        let payload = self.getData();

        storage
          .post(
            urlBuilder.createUrl("/revolut/payment-information", {}),
            JSON.stringify({ paymentMethod: payload }),
            true
          )
          .done(function (response) {
            if (!response.success) {
              return self.cancelPayment(response.message, response);
            }

            var clearData = {
              selectedShippingAddress: null,
              shippingAddressFromData: null,
              newCustomerShippingAddress: null,
              selectedShippingRate: null,
              selectedPaymentMethod: null,
              selectedBillingAddress: null,
              billingAddressFromData: null,
              newCustomerBillingAddress: null,
            };

            customerData.set("checkout-data", clearData);
            customerData.invalidate(["cart"]);

            window.location.href = response.redirect_url;
          })
          .fail(function (response) {
            self.cancelPayment(
              "An error occured while processing your order. Your payment has been canceled.",
              response
            );
          });
      });
    },

    cancelPayment: function (customerError, technicalError = null) {
      const self = this;
      storage
        .post(
          urlBuilder.createUrl("/revolut/order/cancel", {}),
          JSON.stringify({
            public_id: self.publicId(),
            cancel_reason: JSON.stringify(technicalError),
          }),
          true
        )
        .done(function () {
          if (customerError) {
            self.displayError(customerError, true);
          }
        });
    },

    displayError: function (message, reInit = false) {
      if (reInit) {
        this.initFastCheckoutButton(reInit, this.isCartPage());
      }

      $("body").loader("hide");
      if (message) {
        this.showErrorMessage(message);
      }
    },

    showErrorMessage: function (message) {
      $("#revolut-fc-error-messages").text(message).show();
      console.error(message);
    },
  });
});
