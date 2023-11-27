<?php


$conn=mysqli_connect("localhost","root","","ajax");

$query="select * from students";
$result=mysqli_query($conn,$query);
$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
$content=json_encode($output);
$file_name="my-".date("d-m-Y").".json";

file_put_contents($file_name,$content);

 ?>
