jQuery(document).ready(function($) {
    $(".scroll").click(function(event){		
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
    });
    
    var aboveHeight = $('header').outerHeight();
    $(window).scroll(function(){
 
        if ($(window).scrollTop() > aboveHeight){
            $('.nav-container').addClass('fixed').css('top','0');
            $('.content').css('padding-top','60px');
        } else {
            $('.nav-container').removeClass('fixed');
            $('.content').css('padding-top','0');
        }
    });
});

