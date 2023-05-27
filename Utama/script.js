
var audio = new Audio();

var playlist = [
    'C:\\Coding\\Html\\projek lagu\\Fifty Fifty - Cupid.mp3'
];

var laguSaatini = 0;

function playSong() {
  audio.src = playlist[laguSaatini];
  audio.play();
}

function pauseSong() {
  audio.pause();
}

function nextSong() {
  laguSaatini++;
  if (laguSaatini >= playlist.length) {
    laguSaatini = 0;
  }
  playSong();
}

function previousSong() {
  laguSaatini--;
  if (laguSaatini < 0) {
    laguSaatini = playlist.length - 1;
  }
  playSong();
}
