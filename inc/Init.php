<?php

namespace Inc;

final class Init{

    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class
        ];
    }
    private static function instantiate($class){
        return new $class;
    }

    public static function register_services(){

        foreach (self::get_services() as $class){
            $service=self::instantiate($class);
            $service->register();
        }
    }
}