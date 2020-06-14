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
    const allowMicButton = document.getElementById("button-mic");
    const allowSongButton = document.getElementById("button-song");
    audioPermission.style.display = "inline";
    // listen for on click
    allowMicButton.addEventListener("click", setCookie);
    allowSongButton.addEventListener("click", setCookie);
  }
};
