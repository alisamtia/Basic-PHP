<?php
namespace core;
class validator{
    public static function str_valid($str,$min=1,$max=1000){

        $value=trim($str);
        return strlen($str)>= $min && strlen($value)<=$max;
    }

    public static function email($email){
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }
}