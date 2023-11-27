<?php

if(isset($_GET['id'])){
include 'config.php';
$id=$_GET['id'];
$sql="delete from category where category_id={$id};";
if(mysqli_query($conn,$sql))
{header("Location: {$host_name}/admin/category.php");}
}

else{
  header("Location: {$host_name}/admin/category.php");
}



 ?>
