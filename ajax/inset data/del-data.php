<?php

$id=$_POST["id"];

$conn=mysqli_connect("localhost","root","","alitest");
$query="DELETE FROM student where id={$id}";

if(mysqli_query($conn,$query)){
  echo 1;
}
else{
  echo 0;
}
// echo mysqli_query($conn,$query);
 ?>
