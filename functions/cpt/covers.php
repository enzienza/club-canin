<?php

/*
Name:   covers
Description: Custom Post Type pour gérer le cover de l'accueil
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/*  ----- SOMMAIR -----

    1. cpt-covers
    2. MB_sticky_covers
    3. MB_msg_covers

*/


/* ----------------------------------------------------------------------------- */
/* cpt_covers Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_covers() {
    $labels = array(
        'name'                  => __('Covers', 'covers'),
        'singuar_name'          => __('Cover', 'covers'),
        'menu_name'             => __('Cover', 'covers'),
        'name_admin_bar'        => __('Cover', 'covers'),
        'add_new'               => __('Ajouter', 'covers'),
        'add_new_item'          => __('Ajouter une cover', 'covers'),
        'new_item'              => __('Nouvelle cover', 'covers'),
        'edit_item'             => __('Editer une cover', 'covers'),
        'view_item'             => __('Voir le cover', 'covers'),
        'all_items'             => __('Toutes les covers', 'covers'),
        'search_items'          => __('Rechercher parmi les covers', 'covers'),
        'not_found'             => __('Pas de cover trouvées', 'covers'),
        'not_fount_in_trash'    => __('Pas de cover dans la corbeille', 'covers')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'cover'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-megaphone',
        'supports' => array(
            'title',          // avoir un titre
            'editor',         // avoir un éditeur
            'thumbnail'       // une image à la une
        )
    );
    register_post_type('covers', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_covers');


/* ----------------------------------------------------------------------------- */
/* Metabox - STICKY -> pour mettre le cover sur l'accueil (mise en avant)  */
/* ----------------------------------------------------------------------------- */

// 1 - Création la Metabox -----------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_sticky_covers');

function add_metabox_sticky_covers(){
    add_meta_box(
        'id_metabox_sticky_covers',              // ID_META_BOX
        'Mise en avant' ,                        // TITLE_META_BOX
        'MB_sticky_covers',                      // CALLBACK
        'covers',                                // WP_SCREEN
        'side',                                  // CONTEXT [ normal | advanced | side ]
        'high'                                   // PRIORITY [ high | core | default | low ]
    );
}

// 2 - Construction de la Metabox ----------------------------------------------
function MB_sticky_covers($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_sticky_covers');
    $sticky = get_post_meta($POST->ID, 'sticky', true);
    ?>
    <p>
        <p>
            <label for="sticky">Mettre en avant </label><br />
            <input type="radio" <?php checked($sticky, 'oui'); ?> name="sticky" value="oui"/>Oui<br />
            <input type="radio" <?php checked($sticky, 'non'); ?> name="sticky" value=""/>Non<br />
        </p>
    </p>
    <?php

}

// 3 - Sauvegarde des données de la métabox ------------------------------------
add_action('save_post', 'save_metabox_sticky_covers');

function save_metabox_sticky_covers($POST_ID){
    if(isset($_POST['sticky'])){
        update_post_meta($POST_ID, 'sticky', $_POST['sticky']);
    }
}

/* ----------------------------------------------------------------------------- */
/* Metabox - Pour message d'accroche  */
/* ----------------------------------------------------------------------------- */
// 1 - Création la Metabox -----------------------------------------------------

add_action('add_meta_boxes', 'add_metabox_msg_covers');

function add_metabox_msg_covers(){
    add_meta_box(
        'id_metabox_msg_covers',            // ID_META_BOX
        'message d\'accroche',              // TITLE_META_BOX
        'MB_msg_covers',                    // CALLBACK
        'covers',                           // WP_SCREEN
        'normal',                           // CONTEXT [ normal | advanced | side ]
        'default'                           // PRIORITY [ high | core | default | low ]
    );
}

// 2 - Construction de la Metabox ----------------------------------------------
function MB_msg_covers($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_msg_covers');
    $accroche = get_post_meta($POST->ID, 'accroche', true);

    wp_editor(htmlspecialchars_decode($accroche), 'accroche', array(
        'media_buttons' => false,               // un vouton pou ajouter une images
        'textarea_name' => 'accroche',          // le nom du textarea
        'textarea_rows' => 20,                  // nombre de ligne
        'teeny'         => true                 // la version simplifier
        )
    );
}

// 3 - Sauvegarde des données de la métabox ------------------------------------
add_action('save_post', 'save_metabox_msg_covers');

function save_metabox_msg_covers($POST_ID){
    if(isset($_POST['accroche'])){
        update_post_meta($POST_ID, 'accroche', htmlspecialchars_decode($_POST['accroche']));
    }
}
