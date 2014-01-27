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
	load_template( get_stylesheet_directory() . '/functions/widgets/alx-posts.php' );
}

add_action( 'after_setup_theme', 'alx_load' );	