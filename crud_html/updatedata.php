<?php

$st_id=$_POST['sid'];
$st_name=$_POST['sname'];
$st_address=$_POST['saddress'];
$st_class=$_POST['sclass'];
$st_phone=$_POST['sphone'];

// Use alter command to re arange id
include 'config.php';
$sql="update student set sname='{$st_name}', saddress='{$st_address}', sclass='{$st_class}', sphone='{$st_phone}' where sid={$st_id}";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessfull");

header("Location: http://localhost/php_projects/mysql%20with%20php/crud_html/index.php");

$mysqli_close($conn);





 ?>
