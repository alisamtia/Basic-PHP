<?php

function square($n){
  return $n*$n;
}


$a=[1,2,3,4,5];
$n=['lemon','orange','banana','apple','guava'];


$new_array=array_map("square",$a,$n);

echo "<pre>";
print_r($new_array);
echo "</pre>";

 ?>
