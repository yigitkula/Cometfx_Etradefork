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

/* Loading Info */
console.log("Custom App Javascript Loading Successful");
/* Loading Info */