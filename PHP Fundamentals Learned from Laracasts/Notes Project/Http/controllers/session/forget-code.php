<?php
use core\session;

$code=$_SESSION['success_f_code']['code'];
if($code==$_POST['code']){
    $_SESSION['code_match']=true;
    unset($_SESSION['success_f_code']);
    redirect("/forget");
}
$_SESSION['f_body_c']="Incorrect Code";
redirect("/forget");