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

	wp.customize('studiokraft_header_background_color', function (value) {
		value.bind(function (newval) {
			$('header').css('background-color', newval);
		});
	});
	wp.customize('studiokraft_header_color', function (value) {
		value.bind(function (newval) {
			$('.header_top p,.header_top span,.header_top a,.info .studiokraft-address,.info .phone .studiokraft-phone,.info .mail .studiokraft-mail').css('color', newval);
		});
	});
	wp.customize('studiokraft_main_background_color', function (value) {
		value.bind(function (newval) {
			$('html,body,section.contacts,section.rules,figure,.halls-title,.btn-light').css('background-color', newval);
			$('.halls-block .inner-halls').css('background-color' + 'bb', newval);
		});
	});
	wp.customize('studiokraft_main_color', function (value) {
		value.bind(function (newval) {
			$('section p,section span,.attention-title,.features-item,.rules-panel,.rules-panel p,.rules-panel span,.info-item_title,.info-section div.wpforms-container-full .wpforms-form .wpforms-field-label').css('color', newval);
		});
	});
	wp.customize('studiokraft_title_color', function (value) {
		value.bind(function (newval) {
			$('h1,h2,h3,h4,h5,h6').css('color', newval);
		});
	});
	wp.customize('studiokraft_accent_color', function (value) {
		value.bind(function (newval) {
			$('.wpsisac-slick-slider .slick-dots li button,.custom-btn-white').css('border-color', newval);
			$('.wpsisac-slick-slider .slick-dots li.slick-active button::after,#toTop').css('background-color', newval);
			$('.tittle,.halls-title,.custom-btn,.custom-btn:visited,.btn-light:hover,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"],.btn-warning,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:hover,.btn-warning:hover,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:not(:disabled),.btn-warning:not(:disabled):not(.disabled):active,.btn-warning:not(:disabled):not(.disabled).active,.show>.btn-warning.dropdown-toggle').css('color', newval);
		});
	});
	wp.customize('studiokraft_accent2_color', function (value) {
		value.bind(function (newval) {
			$('div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"],.btn-warning,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:hover,.btn-warning:hover,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:not(:disabled),.btn-warning:not(:disabled):not(.disabled):active,.btn-warning:not(:disabled):not(.disabled).active,.show > .btn-warning.dropdown-toggle').css('background-color', newval).css('border-color', newval);
			$('.navbar-light .navbar-nav .show>a,.navbar-light .navbar-nav .current-menu-item>a,.navbar-light .navbar-nav .menu-item>a:hover,.navbar-light .navbar-nav .menu-item>a:focus,.header_top a:hover span,.header_top a:focus span,.info .phone a:hover .studiokraft-phone,.info .phone a:focus .studiokraft-phone,.info .mail a:hover .studiokraft-mail,.info .mail a:focus .studiokraft-mail,.navbar-light .navbar-nav .current-menu-item>a:hover,.navbar-light .navbar-nav .current-menu-item>a:focus,.container_top ul.social-icons a:hover span,.container_top ul.social-icons a:focus span,ul.social-icons li a:focus,.sub-menu .menu-item>a:hover,.sub-menu .menu-item>a:focus,footer a:hover,footer a:focus,a.navbar-brand:hover .blogname,a.navbar-brand:focus .blogname,footer a:hover span:not(.fab),footer a:focus span:not(.fab)').css('color', newval);
			$('.navbar-light .navbar-nav .menu-item>a:hover::before,.navbar-light .navbar-nav .menu-item>a:focus::before,.navbar-light .navbar-nav .current-menu-item>a::before').css('background-color', newval);
			$('div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:focus,.btn-warning:focus, .btn-warning.focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.btn-warning:not(:disabled):not(.disabled).active:focus,.show>.btn-warning.dropdown-toggle:focus').css('box-shadow-color', newval);
		});
	});
	wp.customize('studiokraft_footer_background_color', function (value) {
		value.bind(function (newval) {
			$('footer.inner-page-footer').css('background-color', newval);
		});
	});
	wp.customize('studiokraft_footer_color', function (value) {
		value.bind(function (newval) {
			$('footer span, footer p, footer a').css('color', newval);
			$('p.copy-right-w3ls').css('color', newval);
			$('.social-icons').css('border-left-color', newval).css('border-right-color', newval);
			$('ul.social-icons li a').css('border-color', newval);
		});
	});
	wp.customize('studiokraft_reservation_background_color', function (value) {
		value.bind(function (newval) {
			$('.call-us').css('background-color', newval);
		});
	});
	wp.customize('studiokraft_reservation_color', function (value) {
		value.bind(function (newval) {
			$('.call-text').css('color', newval);
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

	wp.customize('studiokraft_show_navigation', function (value) {
		value.bind(function (newval) {
			true === newval ? $('.container_top .navigation').addClass('show') : $('.navigation').removeClass('show');
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

	//Section colorfor classes: .features, .gallery, .hall-section, .contacts-social, .callback-form
	wp.customize('section_block_background_color', function (value) {
		value.bind(function (newval) {
			$('.features').css('background-color', newval);
			$('.gallery').css('background-color', newval);
			$('.hall-section').css('background-color', newval);
			$('.contacts-social').css('background-color', newval);
			$('.callback-form').css('background-color', newval);
		});
	});
})(jQuery);
