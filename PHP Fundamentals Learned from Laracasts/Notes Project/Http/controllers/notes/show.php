<?php

use core\response;
use core\App;
use core\userId;
$con=App::resolve(core\Database::class);
$userid=userId::check();

$result=$con->go("Select id,note,user from notes where id=:id",[
    "id"=>$_GET['id'],
    ])->find();

if(!$result){
    abort(response::NOTFOUND);
}

authorize($result['user']===$userid);

require view('notes/show.view.php',['heading'=>"My Notes",'result'=> $result]); 
?>