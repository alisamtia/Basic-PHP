<?php


header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

require "config.php";
$json2=json_decode(file_get_contents("php://input"),true);
$id=$json2['sid'];
$name=$json2['sname'];
$age=$json2['sage'];
$city=$json2['scity'];

$sql="UPDATE students SET student_name='{$name}',age='{$age}',city='{$city}' WHERE id='{$id}'";


if(mysqli_query($conn,$sql)){
  echo json_encode(["message"=> "Data Updated successfully!!!", "status"=> true]);
}
else{
  echo json_encode(["message"=> "Can't Updated data!!!", "status"=> false]);
}


?>
