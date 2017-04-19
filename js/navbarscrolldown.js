
function navbar_fix() {
    var window_top = $(window).scrollTop();
    var div_top = $('#navbar-anchor').offset().top;
    if (window_top > div_top) {
        $('#navbar').addClass('fix');
		 $('#main').addClass('main-fix');

    } else {
        $('#navbar').removeClass('fix');
		$('#main').removeClass('main-fix');
    }
}

$(function() {
    $(window).scroll(navbar_fix);
    navbar_fix();
});