<?php
use core\App;
use core\userId;
$con=App::resolve(core\Database::class);
$user_id=userId::check();
$result=$con->go("Select id,left(note, 61) as note from notes where user=$user_id")->fetchAll(); 

view("notes/index.view.php",['heading'=>'My Notes','result'=> $result]);
?>