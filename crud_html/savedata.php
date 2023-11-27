<?php

$st_name=$_POST['sname'];
$st_address=$_POST['saddress'];
$st_class=$_POST['class'];
$st_phone=$_POST['sphone'];

// Use alter command to re arange id
include 'config.php';
$sql="insert into student(sname,saddress,sclass,sphone) values ('{$st_name}','{$st_address}','{$st_class}','{$st_phone}')";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessfull");

header("Location: http://localhost/php_projects/mysql%20with%20php/crud_html/index.php");

$mysqli_close($conn);


 ?>
