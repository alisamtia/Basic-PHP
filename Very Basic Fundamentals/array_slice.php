<?php

 $fruit1=['a'=>'orange','b'=>'banana','c'=>'apple','d'=>'grapes'];
 $fruit2=['orange','banana','apple','grapes'];

// Write true to get the same index
$newarray=array_slice($fruit1,2,true);
echo "<pre>";
print_r($newarray);
echo "</pre>";


 ?>
