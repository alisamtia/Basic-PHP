<?php


$conn=mysqli_connect("localhost","root","","ajax");

$query="select * from students";
$result=mysqli_query($conn,$query);
$output=mysqli_fetch_all($result,MYSQLI_ASSOC);


echo json_encode($output);

 ?>
