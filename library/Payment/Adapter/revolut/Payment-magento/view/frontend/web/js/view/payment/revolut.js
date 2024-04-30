define(["uiComponent", "Magento_Checkout/js/model/payment/renderer-list"], function (Component, rendererList) {
  "use strict";

  rendererList.push(
    {
      type: "revolut_card",
      component: "Revolut_Payment/js/view/payment/method-renderer/revolut-card",
    },
    {
      type: "revolut_pay",
      component: "Revolut_Payment/js/view/payment/method-renderer/revolut-pay",
    },
    {
      type: "revolut_payment_request",
      component: "Revolut_Payment/js/view/payment/method-renderer/revolut-payment-request",
    }
  );

  return Component.extend({});
});
