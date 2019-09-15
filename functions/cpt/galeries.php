<?php

/*
Name:   galeries
Description: Custom Post Type pour la galerie de photo du club canin
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/*
    ----- SOMMAIR -----

    1. cpt-galeries


*/


/* ----------------------------------------------------------------------------- */
/* cpt_galeries Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_galeries() {
    $labels = array(
        'name'                  => __('Galeries', 'galeries'),
        'singuar_name'          => __('Galerie', 'galeries'),
        'menu_name'             => __('Galerie', 'galeries'),
        'name_admin_bar'        => __('Galerie', 'galeries'),
        'add_new'               => __('Ajouter', 'galeries'),
        'add_new_item'          => __('Ajouter un galerie', 'galeries'),
        'new_item'              => __('Nouvelle galerie', 'galeries'),
        'edit_item'             => __('Editer un galerie', 'galeries'),
        'view_item'             => __('Voir la galerie', 'galeries'),
        'all_items'             => __('Toutes les galeries', 'galeries'),
        'search_items'          => __('Rechercher parmi les galeries', 'galeries'),
        'not_found'             => __('Pas de galerie trouvées', 'galeries'),
        'not_fount_in_trash'    => __('Pas de galerie dans la corbeille', 'galeries')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'galerie'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 9,
        'menu_icon'             => 'dashicons-format-gallery',
        'supports' => array(
            'title',          // avoir un titre
            'editor',         // avoir un éditeur
            'thumbnail'       // une image à la une
        )
    );
    register_post_type('galeries', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_galeries');

/* ----------------------------------------------------------------------------- */
/* Metabox - slug */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_info_galeries');

function add_metabox_info_galeries(){
    add_meta_box(
        'id_metabox_info_galeries',                     // ID_META_BOX
        'Information sur la galerie',                                         // TITLE_META_BOX
        'MB_info_galeries',                   // CALLBACK
        'galeries',                                     // WP_SCREEN
        'side',                                         // CONTEXT [ normal | advanced | side ]
        'high'                                          // PRIORITY [ high | core | default | low ]
    );
} // END ==> add_metabox_info_galeries

// Construction de la Metabox --------------------------------------------------
function MB_info_galeries($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_info_galeries_nonce');
    $date_galerie = get_post_meta($POST->ID, 'date_galerie', true);
    $occasion = get_post_meta($POST->ID, 'occasion', true);
    $lieu = get_post_meta($POST->ID, 'lieu', true);
    ?>
    <p>
        <label for="date_galerie">Date</label><br />
        <input class="widefat" id="date_galerie" type="date" name="date_galerie" value="<?php echo $date_galerie; ?>"/>
    </p>
    <p>
        <label for="occasion">Occasion</label><br />
        <input class="widefat" id="occasion" type="text" name="occasion" value="<?php echo $occasion; ?>"/>
    </p>
    <p>
        <label for="lieu">Lieu</label><br />
        <input class="widefat" id="lieu" type="text" name="lieu" value="<?php echo $lieu; ?>"/>
    </p>
    <?php
} // END ==> MB_info_galeries

// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_metabox_info_galeries');

function save_metabox_info_galeries($POST_ID){

    if(isset($_POST['date_galerie'])){
        update_post_meta($POST_ID, 'date_galerie', esc_html($_POST['date_galerie']));
    }
    if(isset($_POST['occasion'])){
        update_post_meta($POST_ID, 'occasion', esc_html($_POST['occasion']));
    }
    if(isset($_POST['lieu'])){
        update_post_meta($POST_ID, 'lieu', esc_html($_POST['lieu']));
    }
} // END => save_metabox_info_galeries
