<?php
use core\App;
use core\Database;
function urll($value){
    return $_SERVER['REQUEST_URI']==$value;
};
use core\response;
function authorize($value,$status=response::FORBIDDEN){
    if(!$value){
        return abort($status);
    }
}

function base_url($path){
    return BASE_PATH.$path;
}
function view($path,$attr){
    extract($attr);
    require base_url("views/$path");
}
function abort($value=404){
    $error_value=$value;
    require base_url("views/partials/error.php");
    die();
}

function login($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['user']=[
            'email'=>$email,
        ];
    }else{
        $con=App::resolve(Database::class);
        $result=$con->go("Select * from users where username=:username",["username"=>$email])->find();
        $_SESSION['user']=[
            'email'=>$result['email'],
        ];
    }
}

function logout(){
    $_SESSION['user']=[];
    session_destroy();
    $_COOKIE["PHPSESSID"]=time()-3600;
}

function redirect($location){
    header("Location: {$location}");
    exit();
}

function old($value,$default=""){
    $data=$_SESSION["old"][$value]??$default;
    unset($_SESSION['old']);
    return $data;
}
