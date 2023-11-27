<?php


header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

require "config.php";
$json2=json_decode(file_get_contents("php://input"),true);
$name=$json2['sname'];
$age=$json2['sage'];
$city=$json2['scity'];

$sql="INSERT INTO students(student_name,age,city) VALUES ('{$name}','{$age}','{$city}')";


if(mysqli_query($conn,$sql)){
  echo json_encode(["message"=> "Data inserted successfully!!!", "status"=> true]);
}
else{
  echo json_encode(["message"=> "Can't insert data!!!", "status"=> false]);
}


?>
