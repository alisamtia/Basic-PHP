<?php
$conn=mysqli_connect("localhost","root","","alitest") or die("Can't connect to database");

$id=$_POST['id'];
$fname=$_POST['first_name'];
$lname=$_POST["last_name"];

$query="UPDATE student set first_name='{$fname}',last_name='{$lname}' WHERE id={$id}";
if(mysqli_query($conn,$query)){
  echo 1;
}
else {
  echo mysqli_query($conn,$query);
  echo 0;
}


 ?>
