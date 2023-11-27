<?php
namespace Http\form;
use core\validator;

class registerForm{
    public $error=[];

    public function validate($email,$username,$password){
        if(!validator::email($email)){
            $this->error['email']="Please enter a valid Email!";
        }
        if(!validator::str_valid($password,8,255)){
            $this->error['password']="Please enter a Password between 8 to 255!";
        }
        if(!validator::str_valid($username,5,255)){
            $this->error['username']="Please enter a Username between 5 to 255!";
        }
        return empty($this->error);
    }

    public function error(){
        return $this->error;
    }
}