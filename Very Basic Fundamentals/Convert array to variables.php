<?php
$a="Orange";
$colors=$arrayName = array('a' => "Green", 'b' => "Red",'c' => "Blue");

// extract($colors)
extract($colors,EXTR_PREFIX_ALL,"test");

echo "Value of a: $test_a <br>";
echo "Value of b: $test_b <br>";
echo "Value of c: $test_c <br>";

 ?>
