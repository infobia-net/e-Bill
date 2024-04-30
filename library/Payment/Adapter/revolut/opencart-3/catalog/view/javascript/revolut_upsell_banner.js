upsellElement = document.createElement("div");

async function fetchUpsellParams() {
  let controllerUrl =
    "/index.php?route=extension/payment/revolut/upsellBannerHandler";
  let response = await fetch(controllerUrl);
  let json = await response.json();
  return json;
}

async function initWidget(publicToken, orderId) {
  const { enrollmentConfirmationBanner } = await RevolutUpsell({
    publicToken: publicToken,
    locale: "auto",
    __metadata: { channel: 'opencart' }
  });
  enrollmentConfirmationBanner.mount(upsellElement, {
    orderToken: orderId,
    promotionalBanner: true,
  });
}
window.addEventListener("DOMContentLoaded", () => {
  staticElement = document.getElementById("content");
  if (staticElement) {
    staticElement.prepend(upsellElement);
    fetchUpsellParams().then((params) => {
      initWidget(params.public_token, params.public_id);
    });
  }
});
