/*browser:true*/
/*global define*/

define([
  "jquery",
  "Magento_Payment/js/view/payment/cc-form",
  "Magento_Checkout/js/model/url-builder",
  "mage/storage",
  "Magento_Checkout/js/model/full-screen-loader",
  "ko",
  "Magento_Checkout/js/model/quote",
  "Magento_Checkout/js/action/redirect-on-success",
  "Magento_CheckoutAgreements/js/model/agreement-validator",
  "Magento_Checkout/js/model/payment/additional-validators",
  "Magento_Checkout/js/action/set-payment-information",
  "Magento_Customer/js/customer-data",
  "Magento_CheckoutAgreements/js/model/agreements-assigner",
  "mage/url",
], function (
  $,
  Component,
  urlBuilder,
  storage,
  fullScreenLoader,
  ko,
  quote,
  redirectOnSuccessAction,
  agreementValidator,
  additionalValidators,
  setPaymentInformation,
  customerData,
  agreementsAssigner,
  mageUrl
) {
  "use strict";
  return Component.extend({
    defaults: {
      showPostCode: window.checkoutConfig.payment.revolut.showPostCode,
      revolutCard: ko.observable(null),
      isPaymentTotalUpdateAllowed: ko.observable(true),
      updateOrderTotals: ko.observable(Promise.resolve()),
      publicId: ko.observable(null),
      publicKey: ko.observable(null),
      paymentCurrency: ko.observable(null),
      paymentAmount: ko.observable(null),
      isRewardBannerActive: ko.observable(null),
      displayAmexLogo:ko.observable(false),
      errorCreateRevolutOrder: ko.observable(null),
      retryOrderPlaceActionCount: ko.observable(0),
      cardholderNameField: ko.observable(false),
      errorWidgetTarget: "#show-error-card-error",
      orderCanceledMsg:
        "An error occurred while processing your order. Your payment has been canceled, please review order details and try again.",
      retryOrderPlaceActionLimit: 4,
      retryOrderPlaceActionDelay: 2,
    },

    totals: quote.getTotals(),

    initialize: function () {
      $(`script[src="${window.checkoutConfig.payment.revolut.revolutSdk}"]`).attr("id", "revolut-checkout");
      $(`script[src="${window.checkoutConfig.payment.revolut.revolutBannerSdk}"]`).attr("id", "revolut-checkout");

      this._super();
      let self = this;
      var currentTotals = quote.totals();

      this.totals.subscribe(function (totals) {
        if (!this.publicId() || !this.isPaymentTotalUpdateAllowed()) {
          return;
        }

        if (JSON.stringify(totals.total_segments) == JSON.stringify(currentTotals.total_segments)) {
          return;
        }

        currentTotals = totals;

        fullScreenLoader.startLoader();

        storage.post(urlBuilder.createUrl("/revolut/order/create", {})).done(function (response) {
          self.setPaymentDetails(response);
          self.createRevolutWidgetInstance(response);
        });
      }, this);
    },

    createRevolutForm: function (errorMsg = "") {
      let self = this;
      fullScreenLoader.startLoader();
      if (!window.createRevolutPayments) {
        window.createRevolutPayments = storage.post(urlBuilder.createUrl("/revolut/order/create", {}));
      }

      window.createRevolutPayments.done(function (response) {
        self.setPaymentDetails(response);
        self.createRevolutWidgetInstance(response);
        if (errorMsg && typeof errorMsg !== "object") {
          self.handleError({
            message: errorMsg,
          });
        }
        self.isPlaceOrderActionAllowed(true);
      });
    },

    selectRevolutPaymentMethod: function () {
      $(this.errorWidgetTarget).hide();
      this.createRevolutForm();
    },

    setPaymentDetails: function (response) {
      this.checkAmexLogo(response);
      this.isRewardBannerActive(response.is_reward_banner_active);
      this.paymentAmount(response.amount);
      this.paymentCurrency(response.currency);
      this.publicKey(response.public_key);
      this.publicId(response.public_id);
    },

    checkAmexLogo: function (response) {
      if (
        response.available_card_brands &&
        Array.isArray(response.available_card_brands) &&
        response.available_card_brands.includes("amex")
      ) {
        this.displayAmexLogo(true)
      }
    },

    initObservable: function () {
      this._super();
      return this;
    },

    placeOrder: function (data, event) {
      let self = this;

      if (event) {
        event.preventDefault();
      }

      if (!this.validate() || !this.customValidations()) {
        return false;
      }

      if (this.errorCreateRevolutOrder()) {
        this.messageContainer.addErrorMessage({
          message: $.mage.__(this.errorCreateRevolutOrder()),
        });

        fullScreenLoader.stopLoader();

        return false;
      }

      this.isPlaceOrderActionAllowed(false);
      fullScreenLoader.startLoader();

      $.when(setPaymentInformation(this.messageContainer, this.getData()))
        .done(function () {
          self.updateOrderTotals().then(function () {
            self.revolutCard().submit({
              email: self.getBillingEmail(),
              phone: self.getBillingPhone(),
              name: self.getBillingName(),
              billingAddress: self.getFormattedBillingAddress(),
            });
          });
        })
        .fail(function (response) {
          fullScreenLoader.stopLoader();
        });

      return true;
    },

    getFormattedBillingAddress: function () {
      let address = quote.billingAddress();

      if (!address) return null;

      let streetLine = undefined;
      if (address.street && address.street.length > 0) {
        streetLine = address.street[0];
      }

      return {
        countryCode: address.countryId,
        region: address.regionCode,
        city: address.city,
        streetLine1: streetLine,
        postcode: address.postcode,
      };
    },

    getBillingName: function () {
      let billingAddress = quote.billingAddress();

      if (!billingAddress) return null;

      if (this.cardholderNameField()) {
        return $('#revolut-card-cardholder-name').val();
      };

      if (billingAddress.firstname && billingAddress.lastname) {
        return `${billingAddress.firstname} ${billingAddress.lastname}`;
      }
      
      return "";
    },

    getBillingEmail: function () {
      if (quote.guestEmail) {
        return quote.guestEmail;
      } else if (window.checkoutConfig.customerData && window.checkoutConfig.customerData.email) {
        return window.checkoutConfig.customerData.email;
      }

      return "";
    },

    getBillingPhone: function () {
      let billingAddress = quote.billingAddress();
      if (!billingAddress) return null;

      if (billingAddress.telephone) return billingAddress.telephone;

      let shippingAddress = quote.shippingAddress();
      if (shippingAddress.telephone) return shippingAddress.telephone;

      return "";
    },

    customValidations: function (elm) {
      return agreementValidator.validate() && additionalValidators.validate();
    },

    context: function () {
      return this;
    },

    getCode: function () {
      return "revolut";
    },

    isActive: function () {
      return true;
    },

    getData: function () {
      return {
        method: this.getCode(),
        additional_data: {
          publicId: this.publicId(),
        },
      };
    },

    handleError: function (messages) {
      if (
        !messages ||
        (Array.isArray(messages) && !messages.length && this.orderCanceledMsg == $(this.errorWidgetTarget).text())
      ) {
        return;
      }

      this.isPaymentTotalUpdateAllowed(true);
      $(this.errorWidgetTarget).hide();
      $('#revolutForm').removeClass('revolut-cardfield-error');
      $('#revolut-cardholder-name-container').removeClass('revolut-cardholder-name-error');

      let errorMessage = "";

      if (messages && Array.isArray(messages)) {
        let errorMessages = [];
        messages.forEach(function (message) {
          if (message) {
            errorMessages.push(message.message);
          }
        });
        errorMessage = errorMessages.join(", ");
      } else {
        if (messages.message) {
          errorMessage = messages.message;
        }
      }

      if (errorMessage) {
        $(this.errorWidgetTarget).text(errorMessage);
        $(this.errorWidgetTarget).show();
        $('#revolutForm').addClass('revolut-cardfield-error');
        $('#revolut-cardholder-name-container').addClass('revolut-cardholder-name-error');
        
        if ($('#revolut-card-cardholder-name').val() && $('#revolut-card-cardholder-name').val().trim().split(/\s+/).length >= 2) {
          $('#revolut-cardholder-name-container').removeClass('revolut-cardholder-name-error');
        }
      }

      this.isPlaceOrderActionAllowed(true);
      fullScreenLoader.stopLoader();
    },

    handleSuccess: function () {
      let self = this;
      this.isPaymentTotalUpdateAllowed(false);
      self.updateOrderTotals().then(function () {
        self
          .getPlaceOrderDeferredObject()
          .fail(function (response) {
            self.logError(response);
            self.retryingOrderPlace();

            if (self.retryOrderPlaceActionCount() < self.retryOrderPlaceActionLimit) {
              let retryDelay = self.retryOrderPlaceActionCount() * self.retryOrderPlaceActionDelay * 1000;

              fullScreenLoader.startLoader();
              self.isPlaceOrderActionAllowed(false);
              setTimeout(function () {
                fullScreenLoader.stopLoader();
                self.handleSuccess();
              }, retryDelay);

              return;
            }

            self.cancelPayment(response);
            self.isPlaceOrderActionAllowed(false);
            self.retryOrderPlaceActionCount(0);
          })
          .done(function () {
            self.afterPlaceOrder();
            redirectOnSuccessAction.execute();
          });
      });
    },

    handleRevolutPaySuccess: function () {
      let self = this;
      this.isPaymentTotalUpdateAllowed(false);
      self.updateOrderTotals().then(function () {
        self
          .placeMagentoOrder()
          .then((response) => {
            self.afterPlaceOrder();
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
            redirectOnSuccessAction.execute();
          })
          .catch((response) => {
            self.retryingOrderPlace();

            if (self.retryOrderPlaceActionCount() < self.retryOrderPlaceActionLimit) {
              let retryDelay = self.retryOrderPlaceActionCount() * self.retryOrderPlaceActionDelay * 1000;

              fullScreenLoader.startLoader();
              self.isPlaceOrderActionAllowed(false);
              setTimeout(function () {
                fullScreenLoader.stopLoader();
                self.handleRevolutPaySuccess();
              }, retryDelay);

              return;
            }

            self.cancelPayment(response);
            self.isPlaceOrderActionAllowed(false);
            self.retryOrderPlaceActionCount(0);
          });
      });
    },

    placeMagentoOrder: function () {
      const self = this;
      fullScreenLoader.startLoader();

      return new Promise(function (resolve, reject) {
        let headers = { "Content-Type": "application/json" };
        let payload = self.getData();

        agreementsAssigner(payload);

        fetch(mageUrl.build(urlBuilder.createUrl("/revolut/payment-information", {})), {
          method: "POST",
          headers: headers,
          body: JSON.stringify({ paymentMethod: payload }),
        })
          .then((response) => {
            return response.json();
          })
          .then((response) => {
            fullScreenLoader.stopLoader();

            if (response && response.success) {
              resolve(response);
            }

            reject(response);
          });
      });
    },

    retryingOrderPlace: function () {
      let retryOrderPlaceAction = this.retryOrderPlaceActionCount() + 1;
      this.retryOrderPlaceActionCount(retryOrderPlaceAction);
    },

    cancelPayment: function (technicalError) {
      const self = this;
      fullScreenLoader.startLoader();

      fetch(mageUrl.build(urlBuilder.createUrl("/revolut/order/cancel", {})), {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          public_id: self.publicId(),
          cancel_reason: JSON.stringify(technicalError),
        }),
      }).then((response) => {
        window.createRevolutPayments = null;
        self.createRevolutForm(self.orderCanceledMsg);
        fullScreenLoader.stopLoader();
      });
    },

    logError: function (errorMsg) {
      fetch(mageUrl.build(urlBuilder.createUrl("/revolut/log", {})), {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(errorMsg),
      });
    },

    handleValidate: function () {
      let self = this;
      this.isPaymentTotalUpdateAllowed(true);
      return new Promise(function (resolve, reject) {
        if (!self.validate() || !self.customValidations()) {
          return resolve(false);
        }

        if (self.isPlaceOrderActionAllowed()) {
          $.when(setPaymentInformation(self.messageContainer, self.getData()))
            .done(function () {
              return resolve(true);
            })
            .fail(function (response) {
              return resolve(false);
            });

          return;
        }

        fullScreenLoader.stopLoader();
        reject("Place Order action is not allowed.");
      });
    },

    handleCancel: function () {
      this.isPaymentTotalUpdateAllowed(true);
      fullScreenLoader.stopLoader();
    },
  });
});
