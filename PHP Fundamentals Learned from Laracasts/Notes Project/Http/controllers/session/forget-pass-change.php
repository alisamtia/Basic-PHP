<?php
use core\validator;
use core\App;

$error=[];
$password=$_POST['password'];

if(!validator::str_valid($password,8,255)){
    $error['password']="Please enter a Password between 8 to 255!";
}

if(empty($error)){
    $con=App::resolve(core\Database::class);;
    $result1=$con->go("UPDATE users set password=:password where email=:email",[
        "password"=>password_hash($password, PASSWORD_BCRYPT),
        "email"=>$_SESSION['u_email']
        ])->find();
    print_r($result1);
    unset($_SESSION['code_match']);
    unset($_SESSION['u_email']);
    redirect("/login");
}
else{
    $_SESSION['p_body_c']="Password Must between 8 to 225 Characters";
    redirect("/forget");
}