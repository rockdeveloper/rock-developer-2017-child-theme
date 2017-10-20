<?php
require_once('vendor/autoload.php');

function rockdeveloper_theme_setup(){
    new \RockDeveloper2017\Setup();
}

add_action('init', 'rockdeveloper_theme_setup');

// Add custom code here