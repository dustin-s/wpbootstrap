<?php

    include ( dirname(__FILE__) . "/bootstrap_functions.php" );

    function theme_wp_hook() {
        wp_enqueue_style('theme-bootstrap', get_template_directory_uri().'/libs/bootstrap/css/bootstrap.css', array(), false, 'screen,projection');
        wp_enqueue_style('theme-bootstrap-responsive', get_template_directory_uri().'/libs/bootstrap/css/bootstrap-responsive.css', array(), false, 'screen,projection');
        wp_enqueue_style('theme', get_template_directory_uri().'/style.less', array(), false, 'screen,projection');
    }

    function wpbootstrap_scripts_with_jquery(){
        wp_register_script(
            'custom-script', 
            get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.js',
            array ( 'jquery' ) );

        wp_enqueue_script( 'custom-script' );
    }
    add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
    add_action( 'wp_enqueue_scripts', 'theme_wp_hook');

?>
