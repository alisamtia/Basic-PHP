<?php
echo "Rand".rand(1,10)."<br>";
// 4 Times faster than rand but the work is same and also it is more accurate
echo "Mt Rand".mt_rand(1,10)."<br>";
// Just provide the value of 0 to 1
echo "LCG Value".lcg_value()."<br>";
 ?>
