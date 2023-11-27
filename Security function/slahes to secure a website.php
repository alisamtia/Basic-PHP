<?php

$str="Hello I am muhammad Ali";
echo $str."<br>";

$newStr=addcslashes($str,"a..z");
// stripslashes() to remove while using data
echo ($newStr);



 ?>
