<?php

/*
Name:   Function
Description: Les functions créer pour le fonctionnement du theme wp
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ----------------------------------------------------- */
/* -----------------    Theme setup    ----------------- */
/* ----------------------------------------------------- */

// fonction qui vérifie si le 'theme test' exixte déjà avant de l'initialiser
if ( ! function_exists( 'clubcanin_setup' ) ) {

	function clubcanin_setup() {

		// active le titre => important pour le réferencement
		add_theme_support( "title-tag" );

		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );								// abilité le feed rss

		// Enable featured image
		add_theme_support( 'post-thumbnails' );										// déclare le support pour les images de couverture

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'clubcanin' ),
		) );

	} // END -> function clubcanin_setup()
} // END -> if ( ! function_exists( 'clubcanin_setup' ) )
add_action( 'after_setup_theme', 'clubcanin_setup' );

/* ----------------------------------------------------- */
/* ----------    Include Styles and script    ---------- */
/* ----------------------------------------------------- */

// fonction qui vérifie si 'clubcanin_styles_scripts' exixte déjà avant de l'initialiser
if ( ! function_exists( 'clubcanin_styles_scripts' ) ) {

	function clubcanin_style_scripts() {

		/* --- SCRIPT --- */
		// wp_enqueue_script('jquery');
		//wp_enqueue_script( 'test-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );

		wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, true );
		wp_enqueue_script('jQuery');

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ),'', true );

		// plugin
		//wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/plugins/menu.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'resize-menu-on-scroll', get_template_directory_uri() . '/js/plugins/resize-menu-on-scroll.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'cardActivity', get_template_directory_uri() . '/js/plugins/cardActivity.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/plugins/main.js', array( 'jquery' ),'', true );
		wp_enqueue_script( 'scrollTop', get_template_directory_uri() . '/js/plugins/scrollTop.js', array( 'jquery' ),'', true );

		/* --- STYLE --- */

		// inclus
		wp_enqueue_style( 'style', get_template_directory_uri().'/style.min.css');
	} // END -> clubcanin_styles_scripts()
} // END -> if ( ! function_exists( 'clubcanin_styles_scripts' ))
add_action( 'wp_enqueue_scripts', 'clubcanin_style_scripts' );

/* ---------------------------------------------------- */
/* --------------    Hiden Version WP    -------------- */
/* ---------------------------------------------------- */

//	Securité : Cacher la verion du WordPress utilisé
//  @return {string} $src
//  @filter script_loader_src
//  @filter style_loader_src

function fb_remove_wp_version_strings( $src ) {
	global $wp_version;
	parse_str(parse_url($src, PHP_URL_QUERY), $query);
	if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
} // END -> fb_remove_wp_version_strings

add_filter( 'script_loader_src', 'fb_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'fb_remove_wp_version_strings' );

/* Hide WP version strings from generator meta tag */
function fb_remove_version() {
	return '';
} // END -> fb_remove_version

add_filter('the_generator', 'fb_remove_version');

/* ---------------------------------------------------- */
/* ----------------    Customize WP    ---------------- */
/* ---------------------------------------------------- */
require get_template_directory() .'/functions/custom-admin.php';
//require get_template_directory() .'/functions/custom-dashboard.php';


/* ---------------------------------------------------- */
/* ----------------    Settings API    ---------------- */
/* ---------------------------------------------------- */
require get_template_directory().'/functions/page/info-general.php';

/* ---------------------------------------------------- */
/* --------------    Custom Post Type    -------------- */
/* ---------------------------------------------------- */

require get_template_directory(). '/functions/cpt/galeries.php';
require get_template_directory(). '/functions/cpt/evenements.php';
