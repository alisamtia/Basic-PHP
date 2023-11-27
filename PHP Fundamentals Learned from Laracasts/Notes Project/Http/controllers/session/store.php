<?php
use core\App;
use core\Database;
use core\session;
use Http\form\Authenticator;

$con=App::resolve(Database::class);
if((new Authenticator)->auth($_POST['userNameOrEmail'], $_POST['password'],$con)){
    login($_POST['userNameOrEmail']);
    redirect("/");
}

$error['body']='Incorrect Username or Password';

session::flash("error", $error);
session::put("old", ["EmailOrUser"=>$_POST['userNameOrEmail']]);
redirect("/login");