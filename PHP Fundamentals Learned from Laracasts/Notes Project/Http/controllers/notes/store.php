<?php
use core\App;
use core\validator;
use core\userId;
$error=[];

$note=$_POST['note'];

if(!validator::str_valid($note)){
    $error['body']="Note is required and It can't be more than 1,000 Characters!";
}

if(empty($error)){
require base_url('bootstrap.php');
$con=App::resolve(core\Database::class);
$con->go("INSERT INTO notes(note,user) VALUES (:note,:user)",[
    "note"=> $note,
    "user"=> userId::check()
]);
header("Location: /notes");
exit();
}else{
    base_url(view("notes/create.view.php",['heading'=>"Create Note",'error'=>$error]));
}