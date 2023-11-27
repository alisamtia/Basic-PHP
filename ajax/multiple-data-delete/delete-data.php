<?php

$student_ids=$_POST['id'];
$str=implode(",", $student_ids);
$conn=mysqli_connect("localhost","root","","ajax") or die("Connection failed!");
$query="DELETE FROM students where id IN ({$str})";

if(mysqli_query($conn,$query)){
  echo 1;
}
else{
  echo 0;
}
?>
