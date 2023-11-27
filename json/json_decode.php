<?php

$json1=file_get_contents("https://jsonplaceholder.typicode.com/posts");
$arr=json_decode($json1,true);

echo "<pre>";
print_r($arr);
echo "</pre>";

 ?>
