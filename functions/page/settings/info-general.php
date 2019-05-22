<?php

/*
Name:   custom-settings - info-general
Description: custom_settings_clubcanin pour les info-general (Menu - 1er niveau)
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_location --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */

// TITRE SECTION ---------------------------------------------------------------
add_settings_section(
    'section_location_titre',                                   // ID
    __('', 'section_location_titre'),                           // TITLE
    'display_section_location_titre',                           // CALLBACK
    'info-general'                                                  // MENU PAGE SLUG
);

/* --- field --- */
add_settings_field(
    'location_titre',                                                   // ID
    __('Titre de la section', 'section_location_titre'),        // LABEL
    'field_location_titre',                                             // CALLBACK FUNCTION
    'info-general',                                                 // MENU PAGE SLUG
    'section_location_titre'                                    // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-info-general', 'location_titre');

// LOCATION --------------------------------------------------------------------
add_settings_section(
    'section_location',                                     // ID
    __('Nos coordonnées', 'section_location'),              // TITLE
    'display_section_location',                             // CALLBACK
    'info-general'                                          // MENU PAGE SLUG
);

/* --- field --- */
add_settings_field(
    'info_adresse',                                     // ID
    __('Adresse', 'section_location'),                  // LABEL
    'field_info_adresse',                               // CALLBACK FUNCTION
    'info-general',                                     // MENU PAGE SLUG
    'section_location'                                  // SECTION ID
); // end --> adresse

add_settings_field(
    'info_phone',                                       // ID
    __('Téléphone', 'section_location'),                // LABEL
    'field_info_phone',                                 // CALLBACK FUNCTION
    'info-general',                                     // MENU PAGE SLUG
    'section_location'                                  // SECTION ID
); // end --> adresse

add_settings_field(
    'info_mail',                                       // ID
    __('Email', 'section_location'),                // LABEL
    'field_info_mail',                                 // CALLBACK FUNCTION
    'info-general',                                     // MENU PAGE SLUG
    'section_location'                                  // SECTION ID
); // end --> adresse

add_settings_field(
    'info_googlemap',                                       // ID
    __('URL Google Map', 'section_location'),                // LABEL
    'field_info_googlemap',                                 // CALLBACK FUNCTION
    'info-general',                                     // MENU PAGE SLUG
    'section_location'                                  // SECTION ID
); // end --> adresse

/* --- register --- */
register_setting('group-info-general', 'info_adresse');
register_setting('group-info-general', 'info_phone');
register_setting('group-info-general', 'info_mail');
register_setting('group-info-general', 'info_googlemap');
