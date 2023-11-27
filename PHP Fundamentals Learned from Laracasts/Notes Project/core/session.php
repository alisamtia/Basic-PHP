<?php

namespace core;

class session{

    public static function put($key,$value){
        $_SESSION[$key]= $value;
    }

    public static function pat($key){
        return $_SESSION[$key];
    }

    public static function get($key){
        return $_SESSION['__flash'][$key] ?? $_SESSION[$key] ?? null;
    }

    public static function flush($key){
        unset($_SESSION[$key]);
    }

    public static function flash($key,$value){
        $_SESSION["__flash"][$key]= $value;
    }
    
    public static function unflash($key){
        unset($_SESSION["__flash"][$key]);
    }

}