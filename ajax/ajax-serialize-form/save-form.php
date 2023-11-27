<?php


$conn=mysqli_connect("localhost","root","","ajax");
$name=$_POST['fullname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$query="insert into students(name,age,gender,country) VALUES ('{$name}','{$age}','{$gender}','{$country}')";

if(mysqli_query($conn,$query)){
  echo "Hello! ".$name." Your data is saved.";
}
else{
  echo 0;
}
 ?>
