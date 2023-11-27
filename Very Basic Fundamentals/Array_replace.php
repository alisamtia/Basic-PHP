<?php

$fruit=['orange','banana','a'=>'apple','grapes'];

$veggie=['a'=>'carrot',1=>'pea'];

$new_array=array_replace($fruit,$veggie);

echo '<pre>';
var_dump($new_array);
echo '</pre>';



 ?>
