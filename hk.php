<?php

/*
Plugin Name:Hk
Plugin URI: http://wordpress.org/
Description: test plugin
Author: Ada
Version: 1.0.0
Author URI: http://ma.tt/
*/


defined( 'ABSPATH' ) || die ( 'No Access' );

if(file_exists(dirname(__FILE__).'/vendor/autoload.php'))
{
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN_PATH',plugin_dir_path(__FILE__));

if(class_exists('Inc\\Init')){
    \Inc\Init::register_services();
}

/*use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Base\Enqueue;
use Inc\Pages\Admin;

if ( !class_exists( 'Hk' ) ) {
	class Hk {
		public $plugin;

		public function __construct() {
			add_action( 'init', [ $this, 'add_custom_post_type' ] );
			$this->plugin = plugin_basename( __FILE__ );
		}

		function activate() {
			Activate::activate_plugin();
		}

		function add_custom_post_type() {
			register_post_type( 'hk_slider',
				[
					'public' => true
					,
					'label'  => 'اسلایدر'
				]
			);
		}



		function register() {
		    Inc\Init::register_services();
			add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );

		}

		public function settings_link( $links ) {
			$settings_link = '<a href="admin.php?page=hk_plugin">تنظیمات</a>';
			array_push( $links, $settings_link );

			return $links;
		}
	}


	$hk = new Hk();
	$hk->register();


//active
	register_activation_hook( __FILE__, [ $hk, 'activate' ] );

//deactive
	register_deactivation_hook( __FILE__,array('Deactivate', 'deactivate_plugin' ) );

}*/
