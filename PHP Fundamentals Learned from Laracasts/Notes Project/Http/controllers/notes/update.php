<?php

use core\response;
use core\App;
use core\validator;
use core\userId;
$con=App::resolve(core\Database::class);
$userid=userId::check();
$note=$_POST['note'];

$result=$con->go("SELECT * FROM notes where id=:id",[
    "id"=>$_POST['id'],
    ])->find();

if(!$result){
    abort(response::NOTFOUND);
}

if(!validator::str_valid($note)){
    $error['body']="Note is required and It can't be more than 1,000 Characters!";
}

authorize($result['user']===$userid);
if(empty($error)){
    $result=$con->go("UPDATE notes set note='$note' where id=:id",[
    "id"=>$_POST['id'],
    ])->find();
    header("Location: /notes");
    die();
}
else{
    base_url(view("notes/edit.view.php",['heading'=>"Update Note",'error'=>$error,'result'=>$result]));
}