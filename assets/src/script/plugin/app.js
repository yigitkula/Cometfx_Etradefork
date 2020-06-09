/* Head Blur Tab Page Title */
$(function(){
    var $pageHeadTitleTag       = $('title');
    var $pageHeadTitleTagText   = $pageHeadTitleTag.text();
    var $headerSloganTitle      = $(".headtitle h1").text();
    var $headerDefaultTitle     = "COMETFX";
    var $headerBlurTitle        = "COMETFX";

    if($('body').hasClass('homepage')){
        $(window).on("load", function(){
            $pageHeadTitleTag.text($headerDefaultTitle)
        });
    }else {
        $(window).on("load", function(){
            $pageHeadTitleTag.text($headerSloganTitle.toLocaleUpperCase() + " | " + $headerDefaultTitle)
        });
    }

    $(window).focus(function(){
        if($('body').hasClass('homepage')){
            $pageHeadTitleTag.text($headerDefaultTitle)
        }else {
            $pageHeadTitleTag.text($headerSloganTitle.toLocaleUpperCase() + " | " + $headerDefaultTitle)
        }
    });

    $(window).blur(function(){
        $pageHeadTitleTag.text($headerBlurTitle)
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

/* Input Mask */
$(document).ready(function(){
    $('.inputgsmphonemask').inputmask({
        mask: '0599 999 99 99',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputphonemask').inputmask({
        mask: '+99{1,99}',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputphonemasktr').inputmask({
        mask: '0999 999 99 99',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputibanmask').inputmask({
        mask: 'TR99 9999 9999 9999 9999 9999 99',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputidentitymask').inputmask({
        mask: '99999999999',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputdatemask').inputmask({
        mask: '99/99/9999',
        placeholder: 'MM/DD/YYYY',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputdatedottedmask').inputmask({
        mask: '99.99.9999',
        placeholder: 'MM.DD.YYYY',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
    $('.inputonlytextmask').inputmask({
        mask: 'AAA',
        placeholder: '',
        showMaskOnFocus: true,
        showMaskOnHover: false
    });
});
/* Input Mask */

/* Loading Info */
// console.log("Plugin App Javascript Loading Successful");
/* Loading Info */