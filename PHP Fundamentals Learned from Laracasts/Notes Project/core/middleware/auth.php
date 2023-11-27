<?php


namespace core\middleware;

class auth{
    public static function handle(){
        if(!$_SESSION['user']??false){
            header("Location: /");
            exit();
        }
    }
}