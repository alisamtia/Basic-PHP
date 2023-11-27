<?php


header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

require "config.php";
$json2=json_decode(file_get_contents("php://input"),true);
$student_id=$json2['sid'];
$sql="DELETE from students where id='{$student_id}'";

if(mysqli_query($conn,$sql)){
  echo json_encode(["message"=>"Data deleted successfully!!","status"=>true]);
}
else{
  echo json_encode(["message"=> "No Such record found !!!", "status"=> false]);
}


?>
