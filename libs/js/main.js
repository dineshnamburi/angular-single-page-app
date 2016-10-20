/*
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	skel.breakpoints({
		wide: '(max-width: 1680px)',
		normal: '(max-width: 1280px)',
		narrow: '(max-width: 980px)',
		narrower: '(max-width: 840px)',
		mobile: '(max-width: 736px)',
		mobilep: '(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body'),
			$header = $('#header'),
			$banner = $('#banner');

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on narrower.
			skel.on('+narrower -narrower', function() {
				$.prioritize(
					'.important\\28 narrower\\29',
					skel.breakpoint('narrower').active
				);
			});

		// Dropdowns.
			$('#nav > ul').dropotron({
				alignment: 'right',
				expandMode: 'click'
			});

		// Off-Canvas Navigation.

			// Navigation Button.
				$(
					'<div id="navButton">' +
						'<a href="#navPanel" class="toggle"></a>' +
					'</div>'
				)
					.appendTo($body);

			// Navigation Panel.
				$(
					'<div id="navPanel">' +
						'<nav><ul classs="nav navbar-nav"><li><a ui-sref="about" >About us</a><ul><li><a ui-sref="personal">Mission</a></li><li><a ui-sref="administrative">Team</a></li><li><a ui-sref="event">Social Initiatives</a></li></ul></li><li><a ui-sref="training">Training</a><ul><li><a ui-sref="personal">Oracle</a></li><li><a ui-sref="administrative">SAP</a></li><li><a ui-sref="event">Data Science</a></li></ul></li><li><a href="::javascript(void);">Services</a><ul><li><a ui-sref="personal">Personal Assistant Support</a></li><li><a ui-sref="administrative">IT strategy Consulting</a></li><li><a ui-sref="event">Event Planning (Professional & Personal)</a></li><li><a ui-sref="research">Research</a></li><li><a ui-sref="mailing">Mailings</a></li><li><a ui-sref="database">Database Management</a></li><li><a ui-sref="project">Project Management</a></li><li><a ui-sref="calendar">Outsourcing Services</a></li><li><a ui-sref="booking">IT Staffing</a></li><li><a ui-sref="website">Bill Management Service</a></li><li><a ui-sref="dataentry">Data Analytics</a></li></ul></li><li><a ui-sref="client">Client</a></li><li><a ui-sref="career">Careers</a></li></ul><ul class="nav navbar-nav navbar-right"><li ><a ui-sref="contact" class="button pull-right">Contact us</a></li></ul>' +$('#nav').navList() +
						'</nav>' +
					'</div>'
				)
					.appendTo($body)
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'navPanel-visible'
					});

			// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
				if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
					$('#navButton, #navPanel, #page-wrapper')
						.css('transition', 'none');

		// Header.
		// If the header is using "alt" styling and #banner is present, use scrollwatch
		// to revert it back to normal styling once the user scrolls past the banner.
		// Note: This is disabled on mobile devices.
			if (!skel.vars.mobile
			&&	$header.hasClass('alt')
			&&	$banner.length > 0) {

				$window.on('load', function() {

					$banner.scrollwatch({
						delay:		0,
						range:		0.5,
						anchor:		'top',
						on:			function() { $header.addClass('alt reveal'); },
						off:		function() { $header.removeClass('alt'); }
					});

				});

			}

	});
   
    
   

})(jQuery);

