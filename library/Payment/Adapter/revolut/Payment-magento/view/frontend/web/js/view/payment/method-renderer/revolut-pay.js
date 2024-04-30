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
      template: "Revolut_Payment/payment/revolut-pay",
      revolutSdk: window.checkoutConfig.payment.revolut.revolutSdk,
      revolutPay: ko.observable(null),
      errorWidgetTarget: "#show-error-pay-error",
    },

    createRevolutWidgetInstance: function (response) {
      if (!response.success) {
        $("#revolutPayForm").hide();
        this.errorCreateRevolutOrder(response.mess);
        this.messageContainer.addErrorMessage({
          message: $.mage.__(response.mess),
        });
        fullScreenLoader.stopLoader();
        return;
      }

      let payInstance = this.revolutPay();
      let self = this;

      if (payInstance !== null) {
        payInstance.destroy();
      }

      payInstance = RevolutCheckout.payments({
        locale: window.checkoutConfig.payment.revolut.locale,
        publicToken: this.publicKey(),
      });

      const context = "checkout";
      const pageUrl = window.checkoutConfig.payment.revolut.checkoutUrl;
      const revolutPayRedirectUrl = window.checkoutConfig.payment.revolut.redirectUrl;

      const paymentOptions = {
        currency: self.paymentCurrency(),
        totalAmount: parseInt(self.paymentAmount()),
        validate: () => {
          return self.handleValidate();
        },
        createOrder: () => {
          return { publicId: self.publicId() };
        },
        customer: {
          name: self.getBillingName(),
          email: self.getBillingEmail(),
          phone: self.getBillingPhone(),
        },
        metadata: {
          environment: "magento",
          context: context,
          origin_url: window.checkoutConfig.payment.revolut.originUrl,
        },
        mobileRedirectUrls: {
          success: revolutPayRedirectUrl,
          failure: pageUrl,
          cancel: pageUrl,
        },
        buttonStyle: {
          cashback: window.checkoutConfig.payment.revolut.revButtonStyle.cashback,
          cashbackCurrency: self.paymentCurrency(),
          radius: "none",
          height: "50px",
        },
      };

      payInstance.revolutPay.mount(document.getElementById("revolut-pay-element"), paymentOptions);

      payInstance.revolutPay.on("payment", function (event) {
        switch (event.type) {
          case "success":
            self.handleRevolutPaySuccess();
            break;
          case "error":
            self.handleError({
              message: [event.error.message].filter(Boolean).join(" "),
            });
            break;
          case "cancel":
            self.handleCancel();
            break;
        }
      });

      self.revolutPay(payInstance);
      fullScreenLoader.stopLoader();
    },

    getCode: function () {
      return "revolut_pay";
    },
  });
});
