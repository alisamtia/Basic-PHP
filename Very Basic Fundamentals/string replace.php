<?php

$str="Hello world. the world is nice!<br>";
// Case sensitive
echo str_replace("world","earth",$str);

$str="Hello world. the world is nice!<br>";
$find=["Hello","world"];
$replace=["Hi","earth"];
echo str_replace($find,$replace,$str);


$str="Hello world. the world is nice!<br>";
echo substr_replace($str,"Planet",6,10);
 ?>
