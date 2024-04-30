/*browser:true*/
/*global define*/

define([
  "jquery",
  "Revolut_Payment/js/view/payment/method-renderer/revolut-payment-component-core",
  "Magento_Checkout/js/model/full-screen-loader",
  "ko",
  "Magento_Checkout/js/model/quote",
  window.checkoutConfig.payment.revolut.revolutSdk,
], function ($, Component, fullScreenLoader, ko, quote, RevolutCheckout) {
  "use strict";

  return Component.extend({
    defaults: {
      template: "Revolut_Payment/payment/revolut-payment-request",
      paymentOptionName: ko.observable("Pay (via Revolut)"),
      revolutSdk: window.checkoutConfig.payment.revolut.revolutSdk,
      paymentRequest: ko.observable(null),
      errorWidgetTarget: "#payment-request-error-widget",
    },

    createRevolutWidgetInstance: function (response) {
      if (!response.success) {
        $("#revolutPaymentRequestForm").hide();
        this.errorCreateRevolutOrder(response.mess);
        this.messageContainer.addErrorMessage({
          message: $.mage.__(response.mess),
        });
        fullScreenLoader.stopLoader();
        return;
      }

      this.createRevolutPaymentRequestButton();
    },

    createRevolutPaymentRequestButton: async function () {
      const self = this;
      const RC = await RevolutCheckout(self.publicId());
      if (self.paymentRequest()) {
        self.paymentRequest().destroy();
      }

      let paymentRequest = RC.paymentRequest({
        target: document.getElementById("revolut-payment-request-element"),
        requestShipping: false,
        onSuccess: () => {
          self.handleSuccess();
        },
        validate: (address) => {
          return self.handleValidate();
        },
        onClick: () => {
          if (!self.validate() || !self.customValidations()) {
            self.createRevolutPaymentRequestButton();
          }
        },
        onError: (error) => {
          self.handleError([error]);
        },
        buttonStyle: window.checkoutConfig.payment.revolut.prButtonStyle,
      });

      paymentRequest.canMakePayment().then((result) => {
        let methodName = result == "googlePay" ? "Google Pay (via Revolut)" : "Apple Pay (via Revolut)";
        result == "googlePay" ? $(".revolut-apple-pay-logo").hide() : $(".revolut-google-pay-logo").hide();
        self.paymentOptionName(methodName);
        if (result) {
          paymentRequest.render();
        } else {
          paymentRequest.destroy();
        }
      });
      self.paymentRequest(paymentRequest);
      fullScreenLoader.stopLoader();
    },

    getCode: function () {
      return "revolut_payment_request";
    },
  });
});
