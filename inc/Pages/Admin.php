<?php

namespace Inc\Pages;
use Inc\Api\SettingsApi;

class Admin{

    public $pages=[];
    public $settings;
    public function __construct()
    {
        $this->settings=new SettingsApi();
        $this->pages=[
            [
                'page_title'=>'HK plugin',
                'menu_title'=>'تنطیمات پلاگین من',
                'capability'=>'manage_options',
                'menu_slug'=>'hk_plugin',
                'callable '=>function(){echo '<h1>Admin Page</h1>';},
                'icon_url '=>'dashicons-sos',
                'position '=>'110',

            ]

        ];
    }

    function register() {
        $this->settings->add_pages($this->pages)->register();

    }



}