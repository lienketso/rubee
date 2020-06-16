( function( $ ) {
$( document ).ready(function() {
// Cache the elements we'll need
var menu = $('#cssmenu');
var menuList = menu.find('ul:first');
var listItems = menu.find('li').not('#responsive-tab');

// Create responsive trigger
menuList.prepend('<li id="responsive-tab"><div class="logo_mobile"><a href="http://rubee.com.vn/"><img alt="Rubee Việt Nam" src="http://rubee.com.vn/images/logo.png" height="40px" ></a></div><div class="right_header"><a href="#" class="btn_menu_mobile"><i class="fa fa-bars" aria-hidden="true"></i></a><div class="phone_mobile"><p><a href="tel:0902228998">090 222 8998</a></p><p><a href="tel:0936214586">0936 214 586</a></p></div></div></li>');

// Toggle menu visibility
menu.on('click', '#responsive-tab .btn_menu_mobile', function(){
	listItems.slideToggle('fast');
	listItems.addClass('collapsed');
});
});
} )( jQuery );
