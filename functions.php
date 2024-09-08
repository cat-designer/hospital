<?php

	add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Roboto:300,regular,500,700,900&display=swap"
 rel="stylesheet' );
	wp_enqueue_style( 'style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), 'null', true );
	wp_enqueue_script( 'slider', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), 'null', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), 'null', true );
});

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('custom-logo');

	add_action( 'after_setup_theme', 'theme_register_nav_menu' );

	function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<label class="screen-reader-text" for="s">Поиск по сайту:</label>
		<input type="text" value="' . get_search_query() . '" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="Найти" />
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

?>