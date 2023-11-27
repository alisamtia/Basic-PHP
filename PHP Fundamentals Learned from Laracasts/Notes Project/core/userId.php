<?php
namespace core;
use core\session;
use core\App;

class userId{

    public $id;

    public static function check(){
        $useremail=$_SESSION['user']['email'];
        $con=App::resolve(Database::class);
        $result=$con->go("Select * from users where email=:email",["email"=>$useremail])->find();
        return $result['id']??false;
    }

    public static function check_email($username){
        if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
        $con=App::resolve(Database::class);
        $result=$con->go("Select * from users where user=:user",["user"=>$username])->find();
        return $result['email']??false;
        }
            return $username;
    }
}