<?php

/*
Name:   view-form - info-general
Description: Element formulaire pour les info-general (Menu - 1er niveau)
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/


/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_location --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */

function display_section_location(){}

function field_info_adresse(){
    $info_adresse = esc_attr(get_option('info_adresse'));
?>

    <input class="widefat" type="text" id="info_adresse" name="info_adresse" value="<?php echo(get_option('info_adresse')); ?>">

<?php
} // END --> field_info_adresse


function field_info_phone(){
    $info_phone = esc_attr(get_option('info_phone'));
?>

    <input class="widefat" type="text" id="info_phone" name="info_phone" value="<?php echo(get_option('info_phone')); ?>">

<?php
} // END --> field_info_phone

function field_info_mail(){
    $info_mail = esc_attr(get_option('info_mail'));
?>

    <input class="widefat" type="text" id="info_mail" name="info_mail" value="<?php echo(get_option('info_mail')); ?>">

<?php
} // END --> field_info_mail

function field_info_googlemap(){
    $info_googlemap = esc_attr(get_option('info_googlemap'));
?>

    <textarea  class="widefat" id="info_googlemap" name="info_googlemap" rows="4" cols="40"><?php echo(get_option('info_googlemap')); ?></textarea>

<?php
} // END --> field_info_googlemap
