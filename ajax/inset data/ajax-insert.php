<?php
$conn=mysqli_connect("localhost","root","","alitest") or die("Can't connect to database");

$fname=$_POST['first_name'];
$lname=$_POST["last_name"];

$query="insert into student(first_name,last_name) VALUES ('{$fname}','{$lname}')";
if(mysqli_query($conn,$query)){
  echo 1;
}
else {
  echo 0;
}


 ?>
