/*browser:true*/
/*global define*/

define([
  "ko",
  "jquery",
  "Revolut_Payment/js/view/payment/method-renderer/fast-checkout/revolut-fast-checkout",
], function (ko, $, Component) {
  "use strict";

  return Component.extend({
    method: window.fastCheckoutConfig.RevolutPayPaymentMethodCode,

    createFastCheckoutButton: async function () {
      if (!$("#revolut-pay-fast-checkout-button").length) {
        return false;
      }

      $("#revolut-pay-fast-checkout-button").empty().append("<span></span>");

      const self = this;

      let instance = this.RevolutCheckout().payments({
        locale: window.fastCheckoutConfig.locale,
        publicToken: self.publicKey(),
      });

      const context = this.isCartPage() ? "cart" : "product";
      const pageUrl = this.isCartPage() ? window.fastCheckoutConfig.cartUrl : window.fastCheckoutConfig.productUrl;
      const revolutPayRedirectUrl = window.fastCheckoutConfig.revolutPayRedirectUrl;

      instance.revolutPay.mount("#revolut-pay-fast-checkout-button", {
        currency: self.currency(),
        totalAmount: self.amount(),
        requestShipping: true,
        validate() {
          return self.addToCart().then(function (result) {
            return Promise.resolve(result);
          });
        },
        createOrder: () => {
          return { publicId: self.publicId() };
        },
        buttonStyle: {
          cashback:window.fastCheckoutConfig.revolutPayThemeConfigs.cashback,
          radius: "none",
          cashbackCurrency: self.currency(),
        },
        mobileRedirectUrls: {
          success: revolutPayRedirectUrl,
          failure: pageUrl,
          cancel: pageUrl,
        },
        __metadata: {
          environment: "magento2",
          context: context,
          origin_url: window.fastCheckoutConfig.baseUrl,
        },
      });

      instance.revolutPay.on("payment", function (event) {
        switch (event.type) {
          case "success":
            $("body").loader("show");
            self.validateOrder(null, true).then(() => {
              self.processOrder();
            });
            break;
          case "error":
            self.displayError(event.error.message);
            break;
        }
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
  });
});
