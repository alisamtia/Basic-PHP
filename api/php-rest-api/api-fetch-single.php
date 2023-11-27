<?php


header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require "config.php";
$json2=json_decode(file_get_contents("php://input"),true);
$student_id=$json2['sid'];
$sql="select * from students where id='{$student_id}'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  $order=mysqli_fetch_all($result,MYSQLI_ASSOC);
  echo json_encode($order);
}
else{
  echo json_encode(["result"=> "No result found !!!", "status"=> false]);
}


?>
