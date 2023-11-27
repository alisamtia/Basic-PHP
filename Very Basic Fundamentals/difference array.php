<?php

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$a2=array("a"=>"red","f"=>"green","d"=>"purple");


$a3=array("a"=>"red","b"=>"green","d"=>"purple");

// For find to find something same in it
$new_array=array_diff($a1,$a2); #for value
$new_array=array_diff_key($a1,$a2); #for key
$new_array=array_diff_assoc($a1,$a2); #Check for key and value both

echo '<pre>';
var_dump($new_array);
echo "</pre>";





function compare($a,$b){
  if($a==$b){
    return 0;
  }
  return ($a>$b)?1:-1;
}
// User defined function
$new_array=array_diff_uassoc($a1,$a2,"compare");
$new_array=array_diff_ukey($a1,$a2,"compare");
$new_array=array_udiff($a1,$a2,"compare");

echo '<pre>';
var_dump($new_array);
echo "</pre>";



 ?>
