// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
player = new YT.Player('doener-video', {
  height: '100%',
  width: '100%',
  videoId: 'nVY0AgW3gSk',
  events: {
    'onReady': onPlayerReady,
    'onStateChange': onPlayerStateChange
  }
});
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
// event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
function onPlayerStateChange(event) {

    if (event.data == YT.PlayerState.ENDED) {
        setTimeout(function(){
            $('.doener-info-video').fadeOut(1500).css('z-index', '-10');
            $('.doer-encouragement').css('z-index', '10').removeClass('invisible').addClass('animated fadeIn');
        },500);

    }

}
