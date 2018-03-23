var invisible = 'invisible';
var hamburger = $('.hamburger');
var closebtn = $('.closebtn');
var menuButtons;

$(document).ready(function(){

    hamburger.on("click", function(e) {
        hamburger.toggleClass('is-active');
        openNav();
        animateMenuItems();

    });

    closebtn.on('click', function(e){
        closeNav();
        hamburger.toggleClass('is-active');
    });

});

function animateMenuItems() {

    menuButtons = [];
    //loop categories and store them in the array for use
    $('.menu-button').each(function(index, menuButton) {
      menuButtons.push(menuButton);
    });

    //set start index
    var index = 0;

    //setInterval half a second and loop through categories and removeClass
    if(!animated){
        var interval = setInterval(function() {
            $(menuButtons[index]).removeClass(invisible).addClass('animated fadeInDown');
            index++;
            if(index == menuButtons.length){
                clearInterval(interval);
                $('.experimenteerbuurt-logo').removeClass(invisible).removeClass('animated fadeOut').addClass('animated fadeInUp');
            }
        }, 150);
        animated = true;
    }
    else {
        $('.experimenteerbuurt-logo').removeClass(invisible).removeClass('animated fadeOut').addClass('animated fadeIn');
        $('.menu-button').removeClass(invisible).addClass('animated fadeIn');
    }

}

var animated = false;
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {

    $('.experimenteerbuurt-logo').removeClass('animated fadeInUp').removeClass('animated fadeIn').addClass('animated fadeOut');
    $('.menu-button').addClass(invisible).removeClass('animated fadeInDown');

    setTimeout(function(){
        document.getElementById('myNav').style.width = "0%";
    }, 250);
}
