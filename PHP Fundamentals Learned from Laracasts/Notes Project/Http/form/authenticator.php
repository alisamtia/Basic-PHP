<?php
namespace Http\form;
use core\App;
use core\Database;

class Authenticator{
    public function auth($u_e, $password=null,$con){
        $error=[];
        $result1=$con->go("Select * from users where username=:ue or email=:ue",[
        "ue"=>$u_e
        ])->find();
        
        if($result1 && $password===null){
            return true;
        }
        else if($result1 && password_verify($password, $result1['password'])){
            return true;
        }
        return false;
    }

    public function auth_just_email($u_e,$con){
        $result1=$con->go("Select * from users where username=:ue or email=:ue",[
        "ue"=>$u_e
        ])->find();
        
        if($result1){
            return true;
        }
        return false;
    }
}