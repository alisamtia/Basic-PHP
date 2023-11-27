<?php

$a=$arrayName = array('a','b','c','d','e','f','g');

$new_array=array_fill_keys($a,"Testing");

echo "<pre>";
print_r($new_array);
echo "</pre>";


$creation_array=array_fill(-2,6,"Testing");
echo "<pre>";
print_r($creation_array);
echo "</pre>";


 ?>
