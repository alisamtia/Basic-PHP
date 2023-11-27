<?php
$a = array('Ali' => 12, 'Ahmed'=>29,"Noman"=>34);

// Change Case
// $new_array=array_change_key_case($a,CASE_LOWER);
$new_array=array_flip($a);
echo "<pre>";
var_dump($new_array);
echo "</pre>";

 ?>
