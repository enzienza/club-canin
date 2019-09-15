<?php

/*
Name:   Custom Admin
Description: fonction qui permet de Personnaliser l'administration du Dashboard (CSS)
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/


/* ------------------------------------------- */
/* --------------   custom css   ------------- */
/* ------------------------------------------- */

function custom_admin(){
    echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/admin-style.css" />';
    //echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/css/custom-form.css" />';
}

add_action('login_head','custom_admin');
add_action('admin_head','custom_admin');



/* ------------------------------------------- */
/* -----------    lien du logo    ------------ */
/* ------------------------------------------- */
function custom_login_logo_link(){
    return get_bloginfo('siteurl');
}
add_filter( 'login_headerurl', 'custom_login_logo_link');


/* ------------------------------------------- */
/* ------   description (alt de img)   ------- */
/* ------------------------------------------- */

function custom_login_logo_title(){
    return get_bloginfo('description');
}
add_filter('login_headertitle', 'custom_login_logo_title');
