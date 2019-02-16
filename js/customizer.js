(function ($) {
	/* Site title and description */
	wp.customize('blogname', function (value) {
		value.bind(function (newval) {
			$('.site-title').text(newval);
		});
	});

	wp.customize('blogdescription', function (value) {
		value.bind(function (newval) {
			$('.site-description').text(newval);
		});
	});

	/* Color */
	wp.customize('background_primary_color', function (value) {
		value.bind(function (newval) {
			$('.bg-primary').attr( 'style', 'background-color: ' + newval + ' !important');
			$('head').append(`
				<style type="text/css">
					.navbar-nav > li.nav-item > a.nav-link.active { 
						background: ${newval} !important; 
						&:active, &:focus, &:hover { 
							background: ${newval} !important; 
						} 
					}
				</style>
			`);
		});
	});
	wp.customize('background_secondary_color', function (value) {
		value.bind(function (newval) {
			$('.bg-secondary').attr( 'style', 'background-color: ' + newval + ' !important');
		});
	});

	/* About */
	wp.customize('left_column', function (value) {
		value.bind(function (newval) {
			$('#left-column > p').html(nl2br(newval));
		});
	});

	wp.customize('right_column', function (value) {
		value.bind(function (newval) {
			$('#right-column > p').html(nl2br(newval));
		});
	});

	/* Contact */
	wp.customize('address', function (value) {
		value.bind(function (newval) {
			$('#address > p').html(nl2br(newval));
		});
	});

	function nl2br(str) {
		return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1<br>$2');
	}
})(jQuery);