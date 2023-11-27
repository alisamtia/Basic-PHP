<?php
use core\validator;
use core\App;
use core\container;
use core\Database;
use Http\form\registerForm;

$container=new container();
$container->bind("core\Database", function() {
    $config21=require base_url('config.php');
    return new Database($config21);
});

App::setContainer($container);

$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['username'];

// if(!validator::email($email)){
//     $error['email']="Please enter a valid Email!";
// }
// if(!validator::str_valid($password,8,255)){
//     $error['password']="Please enter a Password between 8 to 255!";
// }
// if(!validator::str_valid($username,5,255)){
//     $error['username']="Please enter a Username between 5 to 255!";
// }


$con=App::resolve(core\Database::class);
$result1=$con->go("Select * from users where username=:username",[
    "username"=>$username,
    ])->find();

if($result1){
    $error['a_user']="Username Already exist!";
    view('registration/register.view.php',[
        'error'=> $error,
    ]);
}


$result2=$con->go("Select * from users where email=:email",[
    "email"=>$email,
    ])->find();

if($result2){
    $error['a_email']="Email Already exist!";
    view('registration/register.view.php',[
        'error'=> $error,
    ]);
}
$validate=new registerForm();
if(!$validate->validate($email,$username,$password)){
    view('registration/register.view.php',[
        'error'=> $validate->error(),
    ]);
    die();
}else{

    $result1=$con->go("INSERT INTO users (username,email,password) VALUES (:username,:email,:password)",[
        "username"=>$username,
        "email"=>$email,
        "password"=>password_hash($password, PASSWORD_BCRYPT)
        ])->find();
    
$_SESSION['user']=[
    'username'=>$username,
    'email'=>$email
];
}

header("Location: /");
exit();