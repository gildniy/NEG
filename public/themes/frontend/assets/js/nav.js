/*
* Navigation specific javascript scripts
*/

var $window = $(window),
    $nav = $('#main-nav'),
    $logo= $('.navbar-brand.logo'),
    $header_menu = $('.header-menu'),
    $search = $('#search'),
    $num = 50,//number of pixels before modifying styles
    $search_box = $('.search_box');

if ($header_menu.hasClass('active')) {
    $('.header-menu.active').css('padding-top', '50px');
}
$search.click(function (e) {
    e.preventDefault();
    $search_box.toggleClass('active');
});

$window.bind('scroll', function () {
    if ($window.scrollTop() > $num) {
        $nav.addClass('smallnav');
        $nav.addClass('navbar-fixed-top');
        $logo.removeClass('hidden');
    } else {
        $nav.removeClass('smallnav');
        $nav.removeClass('navbar-fixed-top');
        $logo.addClass('hidden');
    }
});