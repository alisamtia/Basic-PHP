<?php

include 'config.php';

$userid=$_GET['id'];
$sql="DELETE FROM USER where user_id={$userid}";
if(mysqli_query($conn,$sql)){
  header("Location: {$host_name}/admin/users.php");
}

 ?>
