<?php
/*
 * Plugin Name: Simple Contact Form
 * Description: Simple contact form tutorial
 * Author: Thanhnv
 * Author URI: https://thanhnv.com
 * Version: 1.0.0
 * Text Domain: simple-contact-form
 *
 * */
if (!defined('ABSPATH')){
    echo "What are you trying to do ?";
    exit();
}

class SimpleContactForm {
    public function __construct()
    {
        // Create custom post type
        add_action('init', array($this, 'create_custom_post_type'));

        // Add assets (js, css, etc)
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

        // Add shortcode
        add_shortcode('contact-form', array($this, 'load_shortcode'));
    }

    public function  create_custom_post_type(){
        $args = array(
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'capability' => 'manage_options',
            'labels' => array(
                'name' => 'Contact Form',
                'singular_name' => 'Contact Form Entry'
            ),
            'menu_icon' => 'dashicons-admin-generic',
        );
        register_post_type('simple_contact_form', $args);
    }

    public function load_assets() {
        wp_enqueue_style(
            'simple-contact-form',
            plugin_dir_url(__FILE__) . 'css/simple-contact-form.css',
            1,
            'all'
        );

        wp_enqueue_script(
            'simple-contact-form',
            plugin_dir_url(__FILE__) . 'js/simple-contact-form.js',
            array('jquery'),
            1,
            'all'
        );
    }

    public function load_shortcode(){
        ?>
           <div class="simple-contact-form">
               <h1>Send us an email</h1>
               <p>Please fill the below form</p>
               <form id="simple-contact-form__form">
                   <div class="form-group mb-2">
                       <input name="name" type="text" placeholder="Name" class="form-control">
                   </div>
                   <div class="form-group mb-2">
                       <input name="email" type="email" placeholder="Email" class="form-control">
                   </div>
                   <div class="form-group mb-2">
                       <input name="phone" type="text" placeholder="Phone" class="form-control">
                   </div>
                   <div class="form-group mb-2">
                       <textarea name="message" placeholder="Type your message" class="form-control"></textarea>
                   </div>
                   <div class="form-group mb-2">
                       <button class="btn btn-success btn-block w-100">Send Message</button>
                   </div>
               </form>
           </div>

        <?php
    }
}

new SimpleContactForm;