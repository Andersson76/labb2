<?php
/* 
Plugin Name: Form plugin
Description: ett testplugin för att hantera ajax request
*/


add_action('wp_enqueue_scripts', 'min_script_laddare');


function min_script_laddare() {

    wp_enqueue_script('jquery');

}


/*    add_action('woocommerce_after_checkout_form', 'extra_text');

    function extra_text() {

    echo 'Plats för text genom en funktion';

}
*/
?>