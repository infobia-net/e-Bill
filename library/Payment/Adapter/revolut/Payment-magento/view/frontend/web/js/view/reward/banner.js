/*browser:true*/
/*global define*/

define(["jquery", window.revolutBannerConfig.revolutBannerSdk], function ($, RevolutUpsell) {
  "use strict";
  $(`script[src="${window.revolutBannerConfig.revolutBannerSdk}"]`).attr("id", "revolut-checkout");

  return {
    customer: null,
    RevolutUpsell: null,
    metadata: { channel: "magento2" },
    widgetId: "revolut-reward-banner-widget",

    init: function () {
      if (!window.revolutBannerConfig.isRewardBannerActive) {
        return;
      }

      const rewardBannerWidget = $(`#${this.widgetId}`).clone();
      $(".revolut-pay-register-banner-container").remove();
      $(".page-title-wrapper").after(rewardBannerWidget);

      this.customer = {
        email: window.revolutBannerConfig.email,
        phone: window.revolutBannerConfig.phone,
      };

      this.RevolutUpsell = RevolutUpsell({
        locale: window.revolutBannerConfig.locale,
        publicToken: window.revolutBannerConfig.merchantPublicKey,
      });

      switch (window.revolutBannerConfig.paymentMethodCode) {
        case window.revolutBannerConfig.RevolutCardMethodCode:
        case window.revolutBannerConfig.RevolutPaymentRequestMethodCode:
          return this.enrollmentConfirmationBanner();
        case window.revolutBannerConfig.RevolutPayMethodCode:
          return;
        default:
          return this.promotionalBanner();
      }
    },

    enrollmentConfirmationBanner: function () {
      this.RevolutUpsell.enrollmentConfirmationBanner.mount(document.getElementById(this.widgetId), {
        orderToken: window.revolutBannerConfig.orderPublicId,
        promotionalBanner: true,
        customer: this.customer,
        __metadata: this.metadata,
      });
    },

    promotionalBanner: function () {
      this.RevolutUpsell.promotionalBanner.mount(document.getElementById(this.widgetId), {
        currency: window.revolutBannerConfig.currency,
        customer: this.customer,
        __metadata: this.metadata,
      });
    },
  };
});
