<?php
    use core\App;
    use core\userId;
    $con=App::resolve(core\Database::class);

    $userid=userId::check();
    $note_id=$_POST['id'];
    $result=$con->go("Select user from notes where id=:id",[
        "id"=>$note_id,
        ])->find();
    authorize($result['user']===$userid);
    $con->go("DELETE from notes where id=:id",[
        "id"=>$note_id,
        ])->find();
    header("location: /notes");
    exit();