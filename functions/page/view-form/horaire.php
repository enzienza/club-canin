<?php

/*
Name:   view-form - horaire
Description: Element formulaire pour les horaire (Submenu - 2e niveau)
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/


/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_horaire --> 2e niveau -- info-general
/* ----------------------------------------------------------------------------- */

// TITRE SECTION ---------------------------------------------------------------
function display_section_horaire_titre(){}

function field_horaire_titre(){
    $horaire_titre = esc_attr(get_option('horaire_titre'));
    ?>
        <input class="widefat" type="text" id="horaire_titre" name="horaire_titre" value="<?php echo(get_option('horaire_titre')); ?>">
    <?php
} // END --> field_horaire_titre


// HORAIRE ---------------------------------------------------------------------
function display_section_horaire(){}


function field_horaire_lundi(){
    $lundi_open = esc_attr(get_option('lundi_open'));
    $lundi_de   = esc_attr(get_option('lundi_de'));
    $lundi_a    = esc_attr(get_option('lundi_a'));
    ?>

    <input type="checkbox" id="lundi_open" name="lundi_open" value="1" <?php checked(1, get_option('lundi_open'), true); ?> />
    <span class="open">Ouvert</span>
    de <input type="time" id="lundi_de" name="lundi_de" value="<?php echo(get_option('lundi_de')); ?>" />
    à <input type="time" id="lundi_a" name="lundi_a" value="<?php echo(get_option('lundi_a')); ?>" />

    <?php
} // END --> field_horaire_lundi


function field_horaire_mardi(){
    $mardi_open = esc_attr(get_option('mardi_open'));
    $mardi_de   = esc_attr(get_option('mardi_de'));
    $mardi_a    = esc_attr(get_option('mardi_a'));
    ?>

    <input type="checkbox" id="mardi_open" name="mardi_open" value="1" <?php checked(1, get_option('mardi_open'), true); ?> />
    <span class="open">Ouvert</span>
    de <input type="time" id="mardi_de" name="mardi_de" value="<?php echo(get_option('mardi_de')); ?>" />
    à <input type="time" id="mardi_a" name="mardi_a" value="<?php echo(get_option('mardi_a')); ?>" />

    <?php
} // END --> field_horaire_mardi


function field_horaire_mercredi(){
    $mercredi_open = esc_attr(get_option('mercredi_open'));
    $mercredi_de   = esc_attr(get_option('mercredi_de'));
    $mercredi_a    = esc_attr(get_option('mercredi_a'));
    ?>

    <input type="checkbox" id="mercredi_open" name="mercredi_open" value="1" <?php checked(1, get_option('mercredi_open'), true); ?> />
    <span class="open">Ouvert</span>
    de <input type="time" id="mercredi_de" name="mercredi_de" value="<?php echo(get_option('mercredi_de')); ?>" />
    à <input type="time" id="mercredi_a" name="mercredi_a" value="<?php echo(get_option('mercredi_a')); ?>" />

    <?php
} // END --> field_horaire_mercredi

function field_horaire_jeudi(){
    $jeudi_open = esc_attr(get_option('jeudi_open'));
    $jeudi_de   = esc_attr(get_option('jeudi_de'));
    $jeudi_a    = esc_attr(get_option('jeudi_a'));
    ?>

    <input type="checkbox" id="jeudi_open" name="jeudi_open" value="1" <?php checked(1, get_option('jeudi_open'), true); ?> />
    <span class="open">Ouvert</span>
    de <input type="time" id="jeudi_de" name="jeudi_de" value="<?php echo(get_option('jeudi_de')); ?>" />
    à <input type="time" id="jeudi_a" name="jeudi_a" value="<?php echo(get_option('jeudi_a')); ?>" />

    <?php
} // END --> field_horaire_jeudi

function field_horaire_vendredi(){
    $vendredi_open = esc_attr(get_option('vendredi_open'));
    $vendredi_de   = esc_attr(get_option('vendredi_de'));
    $vendredi_a    = esc_attr(get_option('vendredi_a'));
    ?>

    <input type="checkbox" id="vendredi_open" name="vendredi_open" value="1" <?php checked(1, get_option('vendredi_open'), true); ?> />
    <span class="open">Ouvert</span>
    de <input type="time" id="vendredi_de" name="vendredi_de" value="<?php echo(get_option('vendredi_de')); ?>" />
    à <input type="time" id="vendredi_a" name="vendredi_a" value="<?php echo(get_option('vendredi_a')); ?>" />

    <?php
} // END --> field_horaire_vendredi


function field_horaire_samedi(){
    $samedi_open = esc_attr(get_option('samedi_open'));
    $samedi_de   = esc_attr(get_option('samedi_de'));
    $samedi_a    = esc_attr(get_option('samedi_a'));
    ?>

    <input type="checkbox" id="samedi_open" name="samedi_open" value="1" <?php checked(1, get_option('samedi_open'), true); ?> />
    <span class="open">Ouvert</span>
    de <input type="time" id="samedi_de" name="samedi_de" value="<?php echo(get_option('samedi_de')); ?>" />
    à <input type="time" id="samedi_a" name="samedi_a" value="<?php echo(get_option('samedi_a')); ?>" />

    <?php
} // END --> field_horaire_samedi

function field_horaire_dimanche(){
    $dimanche_open = esc_attr(get_option('dimanche_open'));
    $dimanche_de   = esc_attr(get_option('dimanche_de'));
    $dimanche_a    = esc_attr(get_option('dimanche_a'));
    ?>

    <input type="checkbox" id="dimanche_open" name="dimanche_open" value="1" <?php checked(1, get_option('dimanche_open'), true); ?> />
    <span class="open">Ouvert</span>
    de <input type="time" id="dimanche_de" name="dimanche_de" value="<?php echo(get_option('dimanche_de')); ?>" />
    à <input type="time" id="dimanche_a" name="dimanche_a" value="<?php echo(get_option('dimanche_a')); ?>" />

    <?php
} // END --> field_horaire_dimanche
