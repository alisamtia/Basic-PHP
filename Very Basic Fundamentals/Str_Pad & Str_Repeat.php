<?php
/*-------String Pad Function------- */
$str = "Hello World";

$newstr = str_pad($str,20,".");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = str_pad($str,20,"+");

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = str_pad($str,20,"+=");

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------STR_PAD_LEFT & STR_PAD_BOTH Function------- */
$newstr = str_pad($str, 20, ".", STR_PAD_LEFT);

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = str_pad($str, 20, ".", STR_PAD_BOTH);

echo '<pre>';
print_r($newstr);
echo '</pre>';

/*-------String Repeat Function------- */
$newstr = str_repeat("Wow",5);

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = str_repeat("+Wow+",5);

echo '<pre>';
print_r($newstr);
echo '</pre>';

$newstr = str_repeat("-=",5);

echo '<pre>';
print_r($newstr);
echo '</pre>';

?>
