<?php


$marks=[
  [
    "id"=>1,
    "Name"=>"Ali",
    "Math"=>47,
    "Science"=>100,
    "Urdu"=>89
  ],

  [
    "id"=>2,
    "Name"=>"Noman",
    "Math"=>79,
    "Science"=>68,
    "Urdu"=>86
  ],

  [
    "id"=>3,
    "Name"=>"Ahmed",
    "Math"=>64,
    "Science"=>67,
    "Urdu"=>47
  ],

];



$new_array=array_column($marks,'Name','id');

echo "<pre>";
var_dump($new_array);
echo "</pre>";



$a=["Red","Green","Blue","Orange","Brown"];
$new_array=array_chunk($a,3);

echo '<pre>';
var_dump($new_array);
echo '</pre>';

 ?>
