<?php

    defined('ABSPATH' || exit());
    class cache {
        public static function set_cache($transient , $value , $expiration){
            set_transient( $transient, $value, $expiration );
        }
        
        public static function get_cache($transient){
            return get_transient($transient);
        }
        public static function delete_cache($transient){
            return delete_transient($transient);
        }
    }


