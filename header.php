<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
 <!-- Start cookieyes banner -->
 <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/00a90abf42bc054f9a054c7d/script.js"></script>
 <!-- End cookieyes banner -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php do_action( 'bricks_meta_tags' ); ?>
<?php wp_head(); ?>
</head>

<?php
do_action( 'bricks_body' );

do_action( 'bricks_before_site_wrapper' );

do_action( 'bricks_before_header' );

do_action( 'render_header' );

do_action( 'bricks_after_header' );
