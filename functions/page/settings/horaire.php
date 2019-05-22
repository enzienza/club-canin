<?php

/*
Name:   custom-settings - horaire
Description: custom_settings_clubcanin pour les horaire (Submenu - 2e niveau)
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_horaire --> 2e niveau -- info-general
/* ----------------------------------------------------------------------------- */

// TITRE SECTION ---------------------------------------------------------------
add_settings_section(
    'section_horaire_titre',                                   // ID
    __('', 'section_horaire_titre'),                           // TITLE
    'display_section_horaire_titre',                           // CALLBACK
    'horaire'                                                  // MENU PAGE SLUG
);

/* --- field --- */
add_settings_field(
    'horaire_titre',                                           // ID
    __('Titre de la section', 'section_horaire_titre'),        // LABEL
    'field_horaire_titre',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire_titre'                                    // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'horaire_titre');

// HORAIRE ---------------------------------------------------------------------
add_settings_section(
    'section_horaire',                                         // ID
    __('Nos horaires', 'section_horaire'),                     // TITLE
    'display_section_horaire',                                 // CALLBACK
    'horaire'                                                  // MENU PAGE SLUG
);

/* --- field --- */
add_settings_field(
    'horaire_lundi',                                           // ID
    __('Lundi', 'section_horaire'),                            // LABEL
    'field_horaire_lundi',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire'                                          // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'lundi_open');
register_setting('group-horaire', 'lundi_de');
register_setting('group-horaire', 'lundi_a');


/* --- field --- */
add_settings_field(
    'horaire_mardi',                                           // ID
    __('Mardi', 'section_horaire'),                            // LABEL
    'field_horaire_mardi',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire'                                          // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'mardi_open');
register_setting('group-horaire', 'mardi_de');
register_setting('group-horaire', 'mardi_a');

/* --- field --- */
add_settings_field(
    'horaire_mercredi',                                           // ID
    __('mercredi', 'section_horaire'),                            // LABEL
    'field_horaire_mercredi',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire'                                          // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'mercredi_open');
register_setting('group-horaire', 'mercredi_de');
register_setting('group-horaire', 'mercredi_a');


/* --- field --- */
add_settings_field(
    'horaire_jeudi',                                           // ID
    __('jeudi', 'section_horaire'),                            // LABEL
    'field_horaire_jeudi',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire'                                          // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'jeudi_open');
register_setting('group-horaire', 'jeudi_de');
register_setting('group-horaire', 'jeudi_a');

/* --- field --- */
add_settings_field(
    'horaire_vendredi',                                           // ID
    __('vendredi', 'section_horaire'),                            // LABEL
    'field_horaire_vendredi',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire'                                          // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'vendredi_open');
register_setting('group-horaire', 'vendredi_de');
register_setting('group-horaire', 'vendredi_a');

/* --- field --- */
add_settings_field(
    'horaire_samedi',                                           // ID
    __('samedi', 'section_horaire'),                            // LABEL
    'field_horaire_samedi',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire'                                          // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'samedi_open');
register_setting('group-horaire', 'samedi_de');
register_setting('group-horaire', 'samedi_a');

/* --- field --- */
add_settings_field(
    'horaire_dimanche',                                           // ID
    __('dimanche', 'section_horaire'),                            // LABEL
    'field_horaire_dimanche',                                     // CALLBACK FUNCTION
    'horaire',                                                 // MENU PAGE SLUG
    'section_horaire'                                          // SECTION ID
); // end --> titre

/* --- register --- */
register_setting('group-horaire', 'dimanche_open');
register_setting('group-horaire', 'dimanche_de');
register_setting('group-horaire', 'dimanche_a');
