<?php
/* ------------------------------------------------------------------------- *
 *  Custom functions
/* ------------------------------------------------------------------------- */
	
	// Add your custom functions here, or overwrite existing ones. Read more how to use:
	// http://codex.wordpress.org/Child_Themes


/* ------------------------------------------------------------------------- *
 *  Load theme files
/* ------------------------------------------------------------------------- */

function alx_load() {
// Load theme options and meta boxes
	load_template( get_stylesheet_directory() . '/functions/theme-options.php' );
	load_template( get_stylesheet_directory() . '/functions/meta-boxes.php' );
	
	// Load custom widgets
	load_template( get_stylesheet_directory() . '/functions/widgets/alx-tabs.php' );
	load_template( get_stylesheet_directory() . '/functions/widgets/alx-video.php' );
	load_template( get_stylesheet_directory() . '/functions/widgets/alx-posts.php' );
	
	// Load custom shortcodes
	load_template( get_stylesheet_directory() . '/functions/shortcodes.php' );

	// Load dynamic styles
	load_template( get_stylesheet_directory() . '/functions/dynamic-styles.php' );


}

add_action( 'after_setup_theme', 'alx_load' );	