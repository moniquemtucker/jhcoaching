
 jQuery(document).ready(function($) {

    //slow scroll from main photo on home to start of carousel
    function scrollToCarousel(id){
        id = id.replace("link", "");
        $("html, body").animate({
            scrollTop: $("#" + id).offset().top
        }, 'slow')
    }

    $("#chevron").click(function(e) {
        e.preventDefault();
        scrollToCarousel("pp-carousel")
    });

    //fee structure is highlighted as cursor moves over it
    $(".fees-plans").hover(function(){
        $(this).toggleClass("active-fees-plans-head");
    });

    // to control footer to appear at bottom of the screen
   var docHeight = $(window).height();
   var footerHeight = $('.all-footer').height();
   var footerTop = $('.all-footer').position().top + footerHeight;

   if (footerTop < docHeight) {
    $('.all-footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
   }

});

