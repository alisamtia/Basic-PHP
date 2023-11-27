<?php

$str="Yahoo Baba";
$new_str=chunk_split($str,1,"...");
$array=str_split($str);
echo "<pre>";
print_r($array);
echo "</pre>";
echo $new_str;
?>
