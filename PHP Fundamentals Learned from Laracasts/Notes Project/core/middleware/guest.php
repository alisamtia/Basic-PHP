<?php

namespace core\middleware;

class guest{
    public static function handle(){
        if($_SESSION['user']??false){
            header("Location: /");
            exit();
        }
    }
}