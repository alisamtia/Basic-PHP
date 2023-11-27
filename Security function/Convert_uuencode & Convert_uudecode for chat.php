<?php
// For chat encryption and security
$str="Hello World";

$encodeString=convert_uuencode($str)."<br>";
echo $encodeString;

$decodeString=Convert_uudecode($encodeString)."<br>";
echo $decodeString;
 ?>
