<?php
/*
Plugin Name: Social Subscriptions
Plugin URI: https://www.github.com/chrisbeldam
Description: Checks your subscriber count
Version: 1.0.0
Author: Chris Beldam
Author URI: https://www.github.com/chrisbeldam
*/

if(!defined('ABSPATH')){
    exit;
}

//Loads in scripts
require_once(plugin_dir_path(__FILE__).'/includes/socialsubs-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/socialsubs-class.php');

function register_socialsubs(){
    register_widget('Social_Subs_Widget');
}

add_action('widgets_init','register_socialsubs');