<?php


header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require "config.php";
// $json2=json_decode(file_get_contents("php://input"),true);
$student_name=isset($_GET['search']) ? $_GET['search']: die();
$sql="select * from students where student_name LIKE '%{$student_name}%'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
  $order=mysqli_fetch_all($result,MYSQLI_ASSOC);
  echo json_encode($order);
}
else{
  echo json_encode(["result"=> "No result found !!!", "status"=> false]);
}


?>
