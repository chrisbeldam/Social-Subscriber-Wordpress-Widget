<?php 

function ss_add_scripts(){
    //Add CSS
    wp_enqueue_style('ss_main-style',plugins_url(). '/socialsubs/css/style.css');
    // Add JS
    wp_enqueue_script('ss_main-script',plugins_url(). '/socialsubs/js/main.js');

    wp_register_script('google','https://apis.google.com/js/platform.js');

    wp_enqueue_script('google');

}

// Hook to add scripts
add_action('wp_enqueue_scripts','ss_add_scripts');