<?php


namespace RockDeveloper2017;


class Setup {

    public function __construct() {
        $this->enqueue_styles();
    }


    private function enqueue_styles() {
        // Parent Style
        wp_enqueue_style('twentyseventeen-style', get_template_directory_uri() . '/style.css' );
        // Child style
        wp_enqueue_style('twentyseventeen-style', get_stylesheet_directory_uri() );
    }
}