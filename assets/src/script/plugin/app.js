/* Head Blur Tab Page Title */
$(function(){
    var $pageHeadTagTitle       = $('title');
    var $pageHeadTagTitleText   = $pageHeadTagTitle.text();

    $(window).focus(function(){
        $pageHeadTagTitle.text($pageHeadTagTitleText)
    });

    $(window).blur(function(){
        $pageHeadTagTitle.text('E-TRADE')
    });
});
/* Head Blur Tab Page Title */

/* Header Nav Fixed */
jQuery(function($) {
    if($(window).width() > 991){

        $(window).on("load resize scroll",function(e){

            //var bodyWidth = window.innerWidth;
            //var bodyHeight = window.innerHeight;
            var scroll = $(window).scrollTop();
            var headerHeight = $("header.header");

            if (scroll > headerHeight.height()) {
                //headerHeight.css("top", 0);
                headerHeight.addClass("navscroll");
            } else {
                //headerHeight.css("top", "-" + headerHeight.height() + "px");
                headerHeight.removeClass("navscroll");
            }

        }).on("load resize",function(e){

            var headerHeight = $("header.header");
            $(".headtitle-background").css("padding-top", headerHeight.height() + "px");
            $(".headtitle").css("min-height", headerHeight.height() + "px");

        });
    }
});
/* Header Nav Fixed */

/* Navbar Menu */
$(function() {

    // Mobile Menu
    $('#dfn-navtggle').click(function () {
        $('.dfn-megamenu').toggleClass('dfn-canvaskapat');
    });
    $('.dfn-mobilemenu-mask').click(function () {
        $('.dfn-megamenu').removeClass('dfn-canvaskapat');
    });
    // Mobile Menu

});
/* Navbar Menu */

/* Navbar Menu Active Class */
jQuery(function($) {
    if($(window).width() > 991){

        // Menu Active Class Added
        $('.dfn-menu-list > li.dfn-menu-list-item > a').click(
            function(){
                $('.dfn-menu-list > li.dfn-menu-list-item').removeClass('active');
                $(this).parent().addClass('active');
            }
        );
        // Menu Active Class Added

        // Homepage Menu UL Passive Class Added and Removed
        jQuery(function($) {
            if($('body').hasClass('homepage')){
                $(document).ready(function(e) {
                    $(".dfn-menu-list > li.dfn-menu-list-item > a").click(function(event) {
                        $(this).parent().parent().addClass('passivemenu');
                        //event.stopPropagation();
                    });
                    $(document).click(function(event) {
                        if (!$(event.target).hasClass('active')) {
                            $(".dfn-menu-list").removeClass("passivemenu");
                            $(".dfn-menu-list > li.dfn-menu-list-item").removeClass("active");
                        }
                    });
                });
            }
        });
        // Homepage Menu UL Passive Class Added and Removed

    }
});
/* Navbar Menu Active Class */

/* Site Table Horizantal TH Span */
jQuery(function($) {
    if($(window).width() > 991){
        $(window).on("load resize scroll",function(e){
            var tableHeight = $("table.sitetable.horizantal");
            $("table.sitetable.horizantal > thead > tr > th > span.thbox").css("width", tableHeight.height() + "px").css("top", (tableHeight.height() - 20) + "px");
        });
    }
});
/* Site Table Horizantal TH Span */

/* Loading Info */
console.log("Plugin App Javascript Loading Successful");
/* Loading Info */