<?php

$conn=mysqli_connect("localhost","root","","ajax");

$query="SELECT DISTINCT(city) from students";

$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
if(mysqli_num_rows($result)> 0){
  $hea=mysqli_fetch_all($result,MYSQLI_ASSOC);
  echo json_encode($hea);
}
else{
  echo json_encode(array("msg"=> "No Result found!!"));
}
?>
