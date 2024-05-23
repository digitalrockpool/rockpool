<?php 
/* Functions

@package	Rockpool
@author		Digital Rockpool
@link		https://www.digitalrockpool.com
@copyright	Copyright (c) 2024, Digital Rockpool LTD
@license	GPL-2.0+ */

/* # Table of Contents
  - Enqueue Custom Scripts and Styles
  - Custom Login
    - Style Login Page
  - Builder Elements
    - Register Custom Elements
    - Add Text Strings to Builder
*/


/* # Enqueue Custom Scripts and Styles
---------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', function() {
	if ( ! bricks_is_builder_main() ) {
		wp_enqueue_style( 'bricks-child', get_stylesheet_uri(), ['bricks-frontend'], filemtime( get_stylesheet_directory() . '/style.css' ) );
	}
} );

/* # Custom Login
---------------------------------------------------------------------- */
/* ## Style Login Page ## */
add_action( 'login_head', function() {
  $site_url = get_option( 'siteurl' );
echo '<link rel="stylesheet" type="text/css" href="'.$site_url.'/wp-content/themes/rockpool/lib/css/login.css" />';
} );


/* # Builder Elements
---------------------------------------------------------------------- */
/* *** Register Custom Elements *** */
add_action( 'init', function() {
  $element_files = [
    __DIR__ . '/elements/title.php',
  ];

  foreach ( $element_files as $file ) {
    \Bricks\Elements::register_element( $file );
  }
}, 11 );  

/* ## Add Text Strings to Builder ## */
add_filter( 'bricks/builder/i18n', function( $i18n ) {
  // For element category 'custom'
  $i18n['custom'] = esc_html__( 'Custom', 'bricks' );

  return $i18n;
} );