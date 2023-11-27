<?php
$id=$_GET['id'];
include 'config.php';
$sql="DELETE from student where sid={$id}";
$result=mysqli_query($conn,$sql);
header("Location: http://localhost/php_projects/mysql%20with%20php/crud_html/index.php");
 ?>
