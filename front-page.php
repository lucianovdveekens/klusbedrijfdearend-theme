<?php

get_header();

// Do we need to show a static page or the latest posts?
if (get_option('show_on_front') == 'page') {
    // Display the homepage
    the_content();
} else {
    ?>
	<p>show latest posts (ignored for now).</p>
	<?php
}

get_footer();