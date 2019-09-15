<?php

/*
Name:   evenements
Description: Custom Post Type pour gérer les evenements organisé par le club
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/*
    ----- SOMMAIR -----

    1. cpt-evenements


*/


/* ----------------------------------------------------------------------------- */
/* cpt_evenements Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_evenements() {
    $labels = array(
        'name'                  => __('Evenements', 'evenements'),
        'singuar_name'          => __('Evenement', 'evenements'),
        'menu_name'             => __('Evenement', 'evenements'),
        'name_admin_bar'        => __('Evenement', 'evenements'),
        'add_new'               => __('Ajouter', 'evenements'),
        'add_new_item'          => __('Ajouter un evenement', 'evenements'),
        'new_item'              => __('Nouvelle evenement', 'evenements'),
        'edit_item'             => __('Editer un evenement', 'evenements'),
        'view_item'             => __('Voir l\'evenement', 'evenements'),
        'all_items'             => __('Toutes les evenements', 'evenements'),
        'search_items'          => __('Rechercher parmi les evenements', 'evenements'),
        'not_found'             => __('Pas d\'evenement trouvées', 'evenements'),
        'not_fount_in_trash'    => __('Pas d\'evenement dans la corbeille', 'evenements')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'evenement'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-calendar-alt',
        'supports' => array(
            'title',          // avoir un titre
            'editor',         // avoir un éditeur
            'thumbnail'       // une image à la une
        )
    );
    register_post_type('evenements', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_evenements');


/* ----------------------------------------------------------------------------- */
/* Metabox - info_evenement */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_info_evenements');

function add_metabox_info_evenements(){
    add_meta_box(
        'id_metabox_info_evenements',                     // ID_META_BOX
        'Information sur l\'evenement',                   // TITLE_META_BOX
        'MB_info_evenements',                             // CALLBACK
        'evenements',                                     // WP_SCREEN
        'side',                                           // CONTEXT [ normal | advanced | side ]
        'high'                                            // PRIORITY [ high | core | default | low ]
    );
} // END ==> add_metabox_info_evenements

// Construction de la Metabox --------------------------------------------------
function MB_info_evenements($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_info_evenements_nonce');
    $date_event = get_post_meta($POST->ID, 'date_event', true);
    $heure_event = get_post_meta($POST->ID, 'heure_event', true);
    $lieu_event = get_post_meta($POST->ID, 'lieu_event', true);
    ?>
    <p>
        <label for="date_event">Date</label><br />
        <input class="widefat" id="date_event" type="date" name="date_event" value="<?php echo $date_event; ?>"/>
    </p>
    <p>
        <label for="heure_event">Heure</label><br />
        <input class="widefat" id="heure_event" type="time" name="heure_event" value="<?php echo $heure_event; ?>"/>
    </p>
    <p>
        <label for="lieu_event">Lieu</label><br />
        <input class="widefat" id="lieu_event" type="text" name="lieu_event" value="<?php echo $lieu_event; ?>"/>
    </p>
    <?php
} // END ==> MB_info_evenements

// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_metabox_info_evenements');

function save_metabox_info_evenements($POST_ID){

    if(isset($_POST['date_event'])){
        update_post_meta($POST_ID, 'date_event', esc_html($_POST['date_event']));
    }
    if(isset($_POST['heure_event'])){
        update_post_meta($POST_ID, 'heure_event', esc_html($_POST['heure_event']));
    }
    if(isset($_POST['lieu_event'])){
        update_post_meta($POST_ID, 'lieu_event', esc_html($_POST['lieu_event']));
    }
} // END => save_metabox_info_evenements
