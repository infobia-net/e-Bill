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
            response.forEach((webhookSetup) => {
              if (webhookSetup && webhookSetup.result) {
                $("#webhookSetup .resultList").append(
                  `<li style='color:green'><b>Store:${webhookSetup.storeCode}</b> - OK</li>`
                );
                return;
              }

              if (webhookSetup && !webhookSetup.showError) {
                return;
              }

              let errorText = `Can not setup webhook url.`;

              if (webhookSetup.msg) {
                errorText = `${errorText} errorId: ${webhookSetup.msg}`;
              }

              if (webhookSetup.showError) {
                $("#webhookSetup .resultList").append(
                  `<li style='color:red'><b>Store:${webhookSetup.storeCode}</b> - ${errorText}</li>`
                );
              }
              $(".webhookSetupInfo").show();
            });
          }
        });
      });
    },
  });
});
