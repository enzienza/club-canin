<?php

/*
Name:   Info-general
Description: Page setting API -> information général sur le club canin
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ----------------------------------------------------------------------------- */
/* I - ADD MENU PAGE */
/* ----------------------------------------------------------------------------- */

// initialisation de la page ---------------------------------------------------
add_action('admin_menu', 'add_page_clubcanin');


// construire la page ----------------------------------------------------------
function add_page_clubcanin(){

    // Menu 1er niveau
    add_menu_page(
        'Info Général',                            // page_title
        'Info Général',                            // menu_title
        'manage_options',                          // capability
        'info-general',                            // slug_menu
        'theme_page_clubcanin',                    // function qui rendra la sortie
        '',                                        // icon
        3                                          // position
    );

    // Menu 2e niveau
    add_submenu_page(
        'info-general',                            // slug parent
        'Horaire',                                 // page_title
        'Horaire',                                 // menu_title
        'manage_options',                          // capability
        'horaire',                                 // slug_menu
        'theme_page_horaire'                       // function qui rendra la sortie
    );

} // END ==> add_page_clubcanin



/* ----------------------------------------------------------------------------- */
/* II - THEME PAGE */
/* ----------------------------------------------------------------------------- */

// PAGE 1er NIVEAU -------------------------------------------------------------
function theme_page_clubcanin(){
    ?>
    <h1 class="wp-heading-inline">Le chien de Robermont</h1>
    <div class="wrap">
        <p class="description">Les informations de notre club</p>

        <div class="">
            <form class="form-info-general" action="options.php" method="post" enctype="multipart/form-data">

                <?php settings_fields( 'group-info-general' );?>
                <?php do_settings_sections( 'info-general' ); ?>

                <?php submit_button(); ?>
            </form>
        </div>
    </div><!-- /.wrap -->
    <?php
} // END ==> theme_page_clubcanin

// PAGE 2e NIVEAU --------------------------------------------------------------
function theme_page_horaire(){
    ?>
    <h1 class="wp-heading-inline">Le chien de Robermont</h1>
    <div class="wrap">
        <p class="description">Les informations de notre club</p>

        <div class="">
            <form class="form-horaire" action="options.php" method="post" enctype="multipart/form-data">

                <?php settings_fields( 'group-horaire' );?>
                <?php do_settings_sections( 'horaire' ); ?>

                <?php submit_button(); ?>
            </form>
        </div>
    </div><!-- /.wrap -->
    <?php
} // END ==> theme_page_horaire


/* ----------------------------------------------------------------------------- */
/* III - SETTING SECTION AND FIED */
/* ----------------------------------------------------------------------------- */

// initialisation des paramattre -----------------------------------------------
add_action('admin_init', 'custom_settings_clubcanin');

// contruire des paramettres ---------------------------------------------------
function custom_settings_clubcanin(){

    // 1er NIVEAU -- INFO-GENERAL ----------------------------------------------
    require get_template_directory().'/functions/page/settings/info-general.php';

    // 2e NIVEAU -- HORAIRE ----------------------------------------------------
    require get_template_directory().'/functions/page/settings/horaire.php';


} // END ==> custom_settings_clubcanin

/* ----------------------------------------------------------------------------- */
/* IV - FIELD CALLBACK
/* ----------------------------------------------------------------------------- */

// 1er NIVEAU -- INFO-GENERAL --------------------------------------------------
require get_template_directory().'/functions/page/view-form/info-general.php';

// 2e NIVEAU -- HORAIRE --------------------------------------------------------
require get_template_directory().'/functions/page/view-form/horaire.php';
