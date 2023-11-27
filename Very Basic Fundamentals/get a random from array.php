<?php

$color= array("red","green","blue","purple","white","black","silver","gold","zinc");

$random_values=array_rand($color,1);

print_r($random_values);
echo "<br>Color: ".$color[$random_values];



shuffle($color);
echo "<br><br><br><pre>";
print_r($color);
echo "</pre>";
 ?>
