/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
define(["jquery", "uiClass"], function ($, Class) {
  "use strict";

  return Class.extend({
    setup: function (setupUrl) {
      $(document).ready(function () {
        $.ajax({
          url: setupUrl,
          data: {},
          type: "GET",
          dataType: "json",
        }).done(function (response) {
          if (response && response.length) {
            response.forEach((addressValidationWebhookSetup) => {
              if (addressValidationWebhookSetup && addressValidationWebhookSetup.result) {
                $("#addressValidationWebhookSetup .resultList").append(
                  `<li style='color:green'><b>Store:${addressValidationWebhookSetup.storeCode}</b> - OK</li>`
                );
                return;
              }

              if (addressValidationWebhookSetup && !addressValidationWebhookSetup.showError) {
                return;
              }

              let errorText = `Can not setup address validation webhook url.`;

              if (addressValidationWebhookSetup.msg) {
                errorText = `${errorText} errorId: ${addressValidationWebhookSetup.msg}`;
              }

              if (addressValidationWebhookSetup.showError) {
                $("#addressValidationWebhookSetup .resultList").append(
                  `<li style='color:red'><b>Store:${addressValidationWebhookSetup.storeCode}</b> - ${errorText}</li>`
                );
              }

              $(".addressValidationWebhookSetupInfo").show();
            });
          }
        });
      });
    },
  });
});
