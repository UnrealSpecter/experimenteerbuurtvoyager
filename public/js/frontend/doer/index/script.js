$( document ).ready(function() {
    console.log('asdasd');
    //menu background update
    $('.overlay').addClass('overlay-doer');

    $('.doer').hover(
        function() {
            $(this).children('.caption').css({
                "display": "flex",
                "align-items": "center"
            });
        },
        function() {
            $(this).children('.caption').css({
                "display": "none"
            });
        });

    //modal
    if($("#myModal")){
        $("#myModal").modal()
    }

    $("#gallery").justifiedGallery({
        rowHeight : 250,
        maxRowHeight: 350,
        lastRow : 'nojustify',
        margins : 0
    });
    //set correct button classes
    $('.button').on('click', function(){
        $('.button').each(function(i, obj) {
             if($(obj).hasClass('selected')){
                 $(obj).removeClass('selected');
             }
        });
        var number = $(this).data('number');
        $(this).addClass('selected');
    });

    $('.button').click(function(){
        var mode = $(this).attr('data-mode');
        if(mode == 'aanmelden'){
            $('.content-area').css('overflow-x', 'hidden');
            $('.doener-form').removeClass('hidden');
            $('.doener-overzicht').addClass('hidden');
        }
        if(mode == 'overzicht'){
            $('.content-area').css('overflow-x', 'scroll');
            $('.doener-overzicht').removeClass('hidden');
            $('.doener-form').addClass('hidden');
        }
    });

	//loop categories and store them in the array for use
	var doers = [];
	$('.doer').each(function(index, object) {
		doers.push(object);
	});

	//set start index
	var index = 0;
	//setInterval half a second and loop through categories and removeClass
	var interval = setInterval(function() {
		$(doers[index]).removeClass('hidden');
		index++;
		if(index == doers.length){
			clearInterval(interval);
		}
	}, 250);

    // fullscreen form
    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );
        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );
        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();

});
