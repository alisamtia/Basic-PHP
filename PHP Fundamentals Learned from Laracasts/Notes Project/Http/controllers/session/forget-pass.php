<?php
use core\App;
use core\Database;
use core\session;
use Http\form\Authenticator;
use core\userId;
$u_e=$_POST['userNameOrEmail'];
$con=App::resolve(Database::class);
if((new Authenticator)->auth_just_email($u_e,$con)){
    $code=sprintf('%6d', rand(1, 1000000));
    $_SESSION['success_f_code']=['code'=>$code];

    $_SESSION['u_email']=userId::check_email($u_e);
    $to = userId::check_email($_POST['userNameOrEmail']);
    $subject = "Verification code from notes!";
    $message = "Hello! This is a your verification code:$code <br><b>Never share it with anyone</b>";

    $headers = [ "MIME-Version:1.0",
            "Content-type: text/plain; charset=utf-8",
            "From: hello@yahoobaba.net",
        ];

$headers = implode("\r\n",$headers);
mail($to ,$subject,$message,$headers);
redirect("/forget");
session_destroy();
}

$error['body']='Incorrect Username or Email';

session::flash("error", $error);
session::put("forget_old", ["EmailOrUser"=>$_POST['userNameOrEmail']]);
redirect("/forget");