<?php 
	 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	 function my_theme_enqueue_styles() { 
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 

 		function tt_hidetitle_class($classes) {
			if ( is_single() || is_page () ):
			$classes[] = 'hidetitle';
			return $classes;
			endif;
			return $classes;
		}
		add_filter('post_class', 'tt_hidetitle_class');


 ?>


