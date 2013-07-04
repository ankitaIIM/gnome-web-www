jQuery(document).ready(function($) {
    $(".scroll").click(function(event){		
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top - 60}, 500);
    });
    
    var aboveHeight = $('header').outerHeight();
    $(window).scroll(function(){
        $('.nav-container').addClass('fixed').css('top','0').next()
        .css('padding-top', '80px');
    });
    
    $('.participants-list').hide();
    $('.view-participants').click(function () {
        if( $('.participants-list').is(":hidden") ) {
            $('.participants-list').show(400);
            $('.view-participants').html("Close");
        } else {
            $('.view-participants').html("Find out who's participating in this round!");
            $('.participants-list').hide(400);
        }
    });
});
