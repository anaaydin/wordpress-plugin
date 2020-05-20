<?php

namespace Inc\Api;

class SettingsApi{
    public $admin_pages=[];

    function register() {
        add_action( 'admin_menu', [ $this, 'add_admin_menu' ] );
    }

    public function add_pages(array $pages){
        $this->admin_pages=$pages;
        return $this;
    }

    public function add_admin_menu(){

        foreach ($this->admin_pages as $page){
            add_menu_page($page['page_title'],$page['menu_title'],$page['capability'],$page['menu_slug'],$page['callable '],$page['icon_url '],$page['position ']);
        }

    }




}

