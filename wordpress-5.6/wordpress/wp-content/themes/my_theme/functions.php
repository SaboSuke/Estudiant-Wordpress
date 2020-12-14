<?php

    function load_stylesheets(){

        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 1, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('bootstrap_all', get_template_directory_uri() . '/assets/css/all.css', array(), 1, 'all');
        wp_enqueue_style('bootstrap_all');
        
        wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), 1, 'all');
        wp_enqueue_style('fontawesome');
        
        wp_register_style('main_style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
        wp_enqueue_style('main_style');
        
        wp_register_style('swiper', get_template_directory_uri() . '/assets/swiper/swiper.css', array(), 1, 'all');
        wp_enqueue_style('swiper');

        wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
        wp_enqueue_style('custom');

    }

    add_action('wp_enqueue_scripts', 'load_stylesheets');

    function addJs(){
        
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), 1, 1, 1);
        wp_enqueue_script('jquery');

        wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
        wp_enqueue_script('custom');
    }
