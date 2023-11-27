<?php

$str="Hello! World. It's a beautifull Day";

$array=explode(" ",$str,7);

echo "<pre>";
print_r($array);
echo "</pre>";

$n_2=Array
(
    0 => "Hello!",
    1 => "World.",
    2 => "It's",
    3 => "a",
    4 => "beautifull",
    5 => "Day",
);

$sa=implode(" ",$n_2);
echo "<br>$sa";

 ?>
