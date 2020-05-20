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


if(class_exists('Inc\\Init')){
    \Inc\Init::register_services();
}
function activation(){
    Inc\Base\Activate::activate_plugin();
}

register_activation_hook( __FILE__,'activation'  );

function deactivation(){
    Inc\Base\Deactivate::deactivate_plugin();
}

register_deactivation_hook( __FILE__, 'deactivation' );


/*
if ( !class_exists( 'Hk' ) ) {
	class Hk {


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






	}


	$hk = new Hk();
	$hk->register();



}*/
