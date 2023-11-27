<?php
$fruit= array(
'a' => "Apple",
'b' => "Banana",
'c' => "Pineapple",
'd' => "Stawberry",
'e' => "Mango",
'f' => "Watemelon",
'g' => "Guava", );

array_walk($fruit,"yourfunction");

function yourfunction($value,$key){
  echo "$key: $value<br>";
}
 ?>
