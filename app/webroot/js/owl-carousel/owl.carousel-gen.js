$(document).ready(function() {
	resizePanel();
	$('.list_customer').owlCarousel({
		navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		responsiveclass: true,
		margin: 30,
		autoplay: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			468: {
				items: 1,
				nav: true
			},
			768: {
				items: 2,
				nav: true
			},
			1000: {
				items: 3,
				nav: true,
				loop: true
			}
		}
	});
});
$(window).resize(function() {
resizePanel();
});
/**
*
*/
function resizePanel() {
var w = $(window).width();
var h = $(window).height();
var dynamic_h = w*0.366;
$('.slider_panel').css('height', dynamic_h+'px');
}
