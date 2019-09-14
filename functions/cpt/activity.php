<?php

/*
Name:   cpt-activite
Description: Custom Post Type pour gérer les activites organisé par le club
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/

/*
    ----- SOMMAIR -----

    1. cpt-activites
    2. MB_sticky_activitys
    3. MB_info_activity

*/


/* ----------------------------------------------------------------------------- */
/* cpt_activites Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_activites() {
    $labels = array(
        'name'                  => __('Activites', 'activites'),
        'singuar_name'          => __('Activite', 'activites'),
        'menu_name'             => __('Activite', 'activites'),
        'name_admin_bar'        => __('Activite', 'activites'),
        'add_new'               => __('Ajouter', 'activites'),
        'add_new_item'          => __('Ajouter une activite', 'activites'),
        'new_item'              => __('Nouvelle activite', 'activites'),
        'edit_item'             => __('Editer une activite', 'activites'),
        'view_item'             => __('Voir l\'activite', 'activites'),
        'all_items'             => __('Toutes les activites', 'activites'),
        'search_items'          => __('Rechercher parmi les activites', 'activites'),
        'not_found'             => __('Pas d\'activite trouvées', 'activites'),
        'not_fount_in_trash'    => __('Pas d\'activite dans la corbeille', 'activites')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'activite'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-universal-access',
        'supports' => array(
            'title',          // avoir un titre
            'editor',         // avoir un éditeur
            'thumbnail'       // une image à la une
        )
    );
    register_post_type('activites', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_activites');


/* ----------------------------------------------------------------------------- */
/* Metabox - STICKY -> pour mettre l'activité sur l'accueil (mise en avant)  */
/* ----------------------------------------------------------------------------- */

// 1 - Création la Metabox -----------------------------------------------------

add_action('add_meta_boxes', 'add_metabox_sticky_activitys');

function add_metabox_sticky_activitys(){
    add_meta_box(
        'id_metabox_sticky_activitys',              // ID_META_BOX
        'Mise en avant' ,                           // TITLE_META_BOX
        'MB_sticky_activitys',                      // CALLBACK
        'activites',                                // WP_SCREEN
        'side',                                     // CONTEXT [ normal | advanced | side ]
        'high'                                      // PRIORITY [ high | core | default | low ]
    );
}

// 2 - Construction de la Metabox ----------------------------------------------

function MB_sticky_activitys($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_sticky_activitys');
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

add_action('save_post', 'save_metabox_sticky_activitys');

function save_metabox_sticky_activitys($POST_ID){
    if(isset($_POST['sticky'])){
        update_post_meta($POST_ID, 'sticky', $_POST['sticky']);
    }
}


/* ----------------------------------------------------------------------------- */
/* Metabox - info_activity */
/* ----------------------------------------------------------------------------- */

// Création la Metabox ---------------------------------------------------------
add_action('add_meta_boxes', 'add_metabox_info_activitys');

function add_metabox_info_activitys(){
    add_meta_box(
        'id_metabox_info_activitys',                     // ID_META_BOX
        'Information sur l\'activite',                   // TITLE_META_BOX
        'MB_info_activitys',                             // CALLBACK
        'activites',                                     // WP_SCREEN
        'side',                                           // CONTEXT [ normal | advanced | side ]
        'core'                                            // PRIORITY [ high | core | default | low ]
    );
} // END ==> add_metabox_info_activitys

// Construction de la Metabox --------------------------------------------------
function MB_info_activitys($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_info_activitys_nonce');
    $quand = get_post_meta($POST->ID, 'quand', true);
    $heure_debut = get_post_meta($POST->ID, 'heure_debut', true);
    $heure_fin = get_post_meta($POST->ID, 'heure_fin', true);
    ?>
    <p>
        <label for="quand">Quand</label><br />
        <input class="widefat" id="quand" type="text" name="quand" value="<?php echo $quand; ?>"/>
    </p>
    <p>
        <label for="heure_debut">Commence à</label>
        <input  id="heure_debut" type="time" name="heure_debut" value="<?php echo $heure_debut; ?>"/>
    </p>
    <p>
        <label for="heure_fin">Se termine à</label>
        <input  id="heure_fin" type="time" name="heure_fin" value="<?php echo $heure_fin; ?>"/>
    </p>
    <?php
} // END ==> MB_info_activitys

// Sauvegarde des données de la métabox ----------------------------------------
add_action('save_post', 'save_metabox_info_activitys');

function save_metabox_info_activitys($POST_ID){

    if(isset($_POST['quand'])){
        update_post_meta($POST_ID, 'quand', esc_html($_POST['quand']));
    }
    if(isset($_POST['heure_debut'])){
        update_post_meta($POST_ID, 'heure_debut', esc_html($_POST['heure_debut']));
    }
    if(isset($_POST['heure_fin'])){
        update_post_meta($POST_ID, 'heure_fin', esc_html($_POST['heure_fin']));
    }
} // END => save_metabox_info_activitys
