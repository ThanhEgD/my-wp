<?php
/*
 * Enqueue theme assets
 *
 * @package Aquila
 * */

namespace Aquila_Theme\Inc;

use Aquila_Theme\Inc\Traits\Singleton;

class Assets{
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*
         * Actions.
         * */

        //actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_script']);
    }

    public function register_styles(){
        // Register style
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(AQUILA_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        // Enqueue Style
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_script(){
        // Register script
        wp_register_script('main-js', AQUILA_DIR_URI . '/assets/main.js', [], filemtime(AQUILA_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap-js',AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true  );

        // Enqueue script
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}