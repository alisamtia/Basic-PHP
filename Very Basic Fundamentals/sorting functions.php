<?php

$fruit= array(
"Apple",
"Banana",
"Pineapple",
"Stawberry",
"Mango",
 "Watemelon","Guava", );

 $new= array(
 'a' => "Apple",
 'b' => "Banana",
 'c' => "Pineapple",
 'd' => "Stawberry",
 'e' => "Mango",
 'f' => "Watemelon",
 'g' => "Guava", );

sort($fruit); // sort in normal way
rsort($fruit); // sort reverse sort
asort($new); // for associative array
arsort($new); // reverse sort associative array
ksort($new); // sort key of array
krsort($new); // reverse sort key of array

echo "<pre>";
print_r($fruit);
echo "</pre>";

echo "<pre>";
print_r($new);
echo "</pre>";



















// Natural sort
echo "<br><br><br><br><br>";
$array1 = array('Img12.png','Img1.png','Img2.png','Img10.png');
natsort($array1);
echo "<pre>";
print_r($array1);
echo "</pre>";






echo "<br><br><br><br><br>";
// reverse array
array_reverse($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";
 ?>
