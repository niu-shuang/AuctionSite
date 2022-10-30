/*****************************************************************************
  ____                                  _____ _
 / ___|___  ___ _ __ ___   ___  ___    |_   _| |__   ___ _ __ ___   ___  ___
| |   / _ \/ __| '_ ` _ \ / _ \/ __|_____| | | '_ \ / _ \ '_ ` _ \ / _ \/ __|
| |__| (_) \__ \ | | | | | (_) \__ \_____| | | | | |  __/ | | | | |  __/\__ \
 \____\___/|___/_| |_| |_|\___/|___/     |_| |_| |_|\___|_| |_| |_|\___||___/

******************************************************************************/

/************ Site Main Js **************************************

    Template Name: Watson - Resume/Vcard Template
    Author: cosmos-themes
    Envato Profile: https://themeforest.net/user/cosmos-themes
    version: 1.0
    Copyright: 2018

****************************************************************/

(function() {
    if (navigator.userAgent.match(/[Mm]obile/)) {
        let $html = $('html');
        let $body = $('body');
        //$html.addClass('mobile');
        $(window).on('resize orientationchange', function() {
            $html.css('zoom', screen.width / 720);
        }).trigger('resize');
    }
})();


/*======== Window Load Function ========*/
$(window).on('load', function() {

    /*======== Preloader ========*/
    $(".loader").delay(1000).fadeOut();
    $(".preloader").delay(1000).fadeOut();
});
