(function($) {
"use strict";
$(window).on('load', function(){

        var $preloader = $('.ct-preloader');
        var $content = $('.ct-preloader-content');

        var $timeout = setTimeout(function(){
            $($preloader).addClass('animated').addClass('fadeOut');
            $($content).addClass('animated').addClass('fadeOut');
        }, 0);
        var $timeout2 = setTimeout(function(){
            $($preloader).css('display', 'none').css('z-index', '-9999');
        }, 1200);
    });
	
	
	//prettyPhoto 
jQuery(document).ready(function(){
	jQuery('a[data-gal]').each(function() {
	    jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});
}); 

    if($(".menuButon").length > 0)
    {
        $("#openMenu").animatedModal({
                modalTarget:'menuModal',
                animatedIn:'bounceInLeft',
                animatedOut:'bounceOutUp',
                color:'#3498db'
                
        });
    }
    if($(".mainMenu").length > 0)
    {
        var subStatus = true;
        $(".hasChildItem > a").click(function(e){
           e.preventDefault();
           if($(this).parent('li').hasClass('active'))
           {
               $(this).parent('li').removeClass('active');
               $(this).next('ul.subMenu').slideUp('slow');
           }
           else
           {
                $(".mainMenu ul li.hasChildItem.active ul.subMenu").slideUp('slow');
                $(".mainMenu ul li.hasChildItem.active").removeClass("active");
                $(this).parent().toggleClass('active');
                $(this).next('ul.subMenu').slideToggle('slow');
            }
        });
    }
     
	
	$(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        $('.back-to-top').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
   
   
    //========================
    // Fixed Header
    //========================
    if($("#header").length > 0)
    {
        $(window).on('scroll', function(){
            if($(window).scrollTop() > 5)
            {
                $("#header").addClass('fixedHeader');
            }
            else
            {
                $("#header").removeClass('fixedHeader');
            }
        });
    }
	
	//========================
    // Nice Scroll
    //========================
    $("html").niceScroll({
	cursorcolor:"#161616",
	 cursorwidth:18, 
	 cursorborder:false,
	 zindex:9999,
	 cursorborderradius:0,
        scrollspeed: 60,
        mousescrollstep: 60
  });
    


})(jQuery);
