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
          if (!response.success) {
            let errorMsg = "Something went wrong.";
            if (response.errorMsg) {
              errorMsg = response.errorMsg;
            }
            $("#ApplePayDomainSetup .resultList").append(`<li style='color:red'><b>${errorMsg}</b></li>`);
            return;
          }

          response.result.forEach((result) => {
            if (result.success) {
              $("#ApplePayDomainSetup .resultList").append(`<li style='color:green'><b>${result.domain}</b> - OK</li>`);
            } else {
              if (result.errorMsg) {
                $("#ApplePayDomainSetup .resultList").append(
                  `<li style='color:red'><b>${result.domain}</b> - ${result.errorMsg}</li>`
                );
              }
            }
          });

          $(".ApplePayDomainSetup").show();
        });
      });
    },
  });
});
