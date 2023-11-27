<?php

$colors=$arrayName = array('a' => "red",'b' => "blue",'c' => "red");

$new_array=array_unique($colors); // just get all unique values without duplication 
$new_array=array_values($colors); // get all the array values

echo "<pre>";
var_dump($new_array);
echo "</pre>";

 ?>
