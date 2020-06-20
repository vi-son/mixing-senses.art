// Tracking
function swapUI(optOut = false) {
  if (optOut) {
    document.querySelector("#tracking-on").style.display = "none";
    document.querySelector("#tracking-off").style.display = "flex";
  } else {
    document.querySelector("#tracking-off").style.display = "none";
    document.querySelector("#tracking-on").style.display = "flex";
  }
}

document.addEventListener("DOMContentLoaded", function() {
  const trackingUI = document.querySelector("#tracking-consent");
  _paq.push([
    function() {
      swapUI(this.isUserOptedOut());
    }
  ]);
  const buttonEnable = document.querySelector("#button-tracking-on");
  const buttonDisable = document.querySelector("#button-tracking-off");
  buttonEnable.addEventListener("click", () => {
    _paq.push(["setConsentGiven"]);
    _paq.push(["forgetUserOptOut"]);
    swapUI(false);
  });
  buttonDisable.addEventListener("click", () => {
    _paq.push(["setConsentGiven"]);
    _paq.push(["optUserOut"]);
    swapUI(true);
  });
});
