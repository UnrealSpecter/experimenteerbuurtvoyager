$(document).ready(function(){

    //menu background update
    $('.overlay').addClass('overlay-experimenteerbuurt');
    $('.menu-bg').addClass('nieuws-menu-bg');

});

function introAnimation(){
    $('.posts-wrapper').removeClass(hidden).addClass('animated fadeInRight');
}

// fluid video function
$(function() {

    var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com'], object, embed"),
    $fluidEl = $(".video-wrapper");

	$allVideos.each(function() {
	  $(this)
	    // jQuery .data does not work on object/embed elements
	    .attr('data-aspectRatio', this.height / this.width)
	    .removeAttr('height')
	    .removeAttr('width');

	});

	$(window).resize(function() {

	  var newWidth = $fluidEl.width();
	  $allVideos.each(function() {

	    var $el = $(this);
	    $el
	        .width(newWidth)
	        .height(newWidth * $el.attr('data-aspectRatio'));
	  });

	}).resize();
    console.log('resizing');
});
