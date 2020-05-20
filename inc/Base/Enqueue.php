<?php

namespace Inc\Base;

class Enqueue extends BaseController {

    function register() {
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue' ] );
    }

    function enqueue() {
        wp_enqueue_style( 'my-style',$this->plugin_url .'/assets/hk-mystyle.css');

        wp_enqueue_script( 'my-script',$this->plugin_url .'/assets/hk-myscript.js');
    }
}