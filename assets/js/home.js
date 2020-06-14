function setCookie() {
  const audioPermission = document.querySelector(".audio-permission");
  Cookies.set("vi.son.audio", { useaudio: true }, { expires: 1 });
  audioPermission.style.display = "none";
}

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

document.addEventListener("DOMContentLoaded", function() {
  var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));
  // console.log(lazyVideos);

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
