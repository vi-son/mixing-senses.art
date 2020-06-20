function setCookie() {
  const audioPermission = document.querySelector(".audio-permission");
  Cookies.set("vi.son.audio", { useaudio: true }, { expires: 1 });
  audioPermission.style.display = "none";
}

// Audio cookie
window.onload = function() {
  // defining cookie
  var cookie = Cookies.getJSON("vi.son.audio");
  // Cookies.remove("vi.son.audio");
  // console.log(cookie);
  const audioPermission = document.querySelector(".audio-permission");
  if (cookie) {
    audioPermission.style.display = "none";
    return;
  } else {
    const allowMicButtonCookie = document.getElementById("cookie-button-mic");
    const allowSongButtonCookie = document.getElementById("cookie-button-song");
    audioPermission.style.display = "inline";
    // listen for on click
    allowMicButtonCookie.addEventListener("click", setCookie);
    allowSongButtonCookie.addEventListener("click", setCookie);
  }
};

// Tracking cookie
document.addEventListener("DOMContentLoaded", function() {
  const trackingUI = document.querySelector("#tracking-consent");
  _paq.push([
    function() {
      if (this.hasConsent()) {
        trackingUI.style.display = "none";
      } else {
        trackingUI.style.display = "inline";
      }
    }
  ]);
  const buttonOk = document.querySelector("#button-track-ok");
  const buttonOptOut = document.querySelector("#button-track-optout");
  buttonOk.addEventListener("click", () => {
    _paq.push(["setConsentGiven"]);
    _paq.push(["forgetUserOptOut"]);
    trackingUI.style.display = "none";
  });
  buttonOptOut.addEventListener("click", () => {
    _paq.push(["forgetConsentGiven"]);
    _paq.push(["optUserOut"]);
    trackingUI.style.display = "none";
  });
});

// Lazy video loading
document.addEventListener("DOMContentLoaded", function() {
  var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));
  if ("IntersectionObserver" in window) {
    var lazyVideoObserver = new IntersectionObserver(function(
      entries,
      observer
    ) {
      entries.forEach(function(video) {
        if (video.isIntersecting) {
          for (var source in video.target.children) {
            var videoSource = video.target.children[source];
            if (
              typeof videoSource.tagName === "string" &&
              videoSource.tagName === "SOURCE"
            ) {
              videoSource.src = videoSource.dataset.src;
            }
          }
          video.target.load();
          video.target.classList.remove("lazy");
          lazyVideoObserver.unobserve(video.target);
        }
      });
    });
    lazyVideos.forEach(function(lazyVideo) {
      lazyVideoObserver.observe(lazyVideo);
    });
  }
});
