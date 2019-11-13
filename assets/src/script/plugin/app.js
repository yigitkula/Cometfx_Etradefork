
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

/* Loading Info */
console.log("Plugin App Javascript Loading Successful");
/* Loading Info */