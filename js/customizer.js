/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {

	// Site title and description.
	wp.customize('blogname', function (value) {
		value.bind(function (to) {
			$('.blogname').text(to);
		});
	});
	wp.customize('blogdescription', function (value) {
		value.bind(function (to) {
			$('.blogdescription').text(to);
		});
	});

	// Header text color.
	wp.customize('header_textcolor', function (value) {
		value.bind(function (to) {
			if ('blank' === to) {
				$('.site-title, .site-description').css({
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				});
			} else {
				$('.site-title, .site-description').css({
					'clip': 'auto',
					'position': 'relative'
				});
				$('.site-title a, .site-description').css({
					'color': to
				});
			}
		});
	});

	wp.customize('studiokraft_background_color', function (value) {
		value.bind(function (newval) {
			$('.content-main-w3').css('background', newval);
		});
	});

	// Address

	wp.customize('studiokraft_address', function (value) {
		value.bind(function (newval) {
			$('.studiokraft-address').text(newval);
		});
	});

	wp.customize('studiokraft_show_address', function (value) {
		value.bind(function (newval) {
			true === newval ? $('.container_top .address').addClass('show') : $('.address').removeClass('show');
		});
	});

	wp.customize('studiokraft_phone', function (value) {
		value.bind(function (newval) {
			$('.studiokraft-phone').text(newval);
		});
	});

	wp.customize('studiokraft_show_phone', function (value) {
		value.bind(function (newval) {
			true === newval ? $('.container_top .phone').addClass('show') : $('.phone').removeClass('show');
		});
	});

	wp.customize('studiokraft_mail', function (value) {
		value.bind(function (newval) {
			$('.studiokraft-mail').text(newval);
		});
	});

	wp.customize('studiokraft_show_mail', function (value) {
		value.bind(function (newval) {
			true === newval ? $('.container_top .mail').addClass('show') : $('.mail').removeClass('show');
		});
	});
})(jQuery);
