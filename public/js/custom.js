/* Script on ready
---------------------------------*/
$=jQuery;
$(document).ready(function () {

    /*mobile menu jquery*/
    $('.mobile-menu-box a.mobile-menu').click(function () {
        $(this).toggleClass("close-menu");
        $('body').toggleClass("addoverlay-mobilebg");
        $(this).parents(".right-header").find(".menu-box").slideToggle();        
    }); 

    $(".select2-lang").select2();
    //  StickyFooter()
   
    
    $('.slider-slic').slick({
        slidesToShow: 1,
        arrows:true,
        dots:false,
        slidesToScroll: 1,
        arrows: false
    });

    AOS.init();

    
   
});

/* Script on load
----------------------------------*/
$(window).load(function () {

    /* sticky footer function */
    /*StickyFooter()*/      
  
    
});

/* Script on resize
---------------------------------*/
$(window).resize(function () {

    /* sticky footer function */
     /*setTimeout(function () {
         StickyFooter()
     }, 50);*/

});

