window.onload = function() {
  // defining cookie
  var cookie = Cookies.getJSON('vi.son.audio');
  console.log(cookie);
  const audioPermission = document.querySelector(".audio-permission");

  if (cookie) {
    audioPermission.style.display = 'none';
    return;
  } else {
    const allowButton = document.getElementById('allow-mic');
    audioPermission.style.display = 'inline';
    // listen for on click
    allowButton.addEventListener('click', function() {
      Cookies.set('vi.son.audio', { useaudio: true }, { expires: 1 });
      audioPermission.style.display = 'none';
      switchToSong();
    });
  }
 };