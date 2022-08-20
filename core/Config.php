<?php 
    
    namespace Core;

    class Config{
        private static $config =
        [
            'version'             => '0.0.1',
            'root_dir'            => '/Phpshop',
            'default_layout'      => 'default',
            'db_host'             => '127.0.0.1',
            'db_name'             => 'PhpshopDatabase',
            'db_user'             => 'root',
            'db_password'         => '',
            'login_Cookie_nme'    => 'gJpi42oagyhq2m91041myyt1726b81m6dg90dmwfw9axh48m5bn126bnod8',
        ];

        public static function get($key){
            return array_key_exists($key, self::$config)? self::$config[$key] : NULL;
        }
    }