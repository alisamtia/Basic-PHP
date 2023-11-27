<?php

$food=$arrayName = array('orange','banana','apple','grapes');
$len=count($food);
for($i=0;$i<$len;$i++){
  echo $food[$i].'<br>';
}

$food = array(
  'fruits' => array('orange','banana','apple'),
  'veggie' => array('carrot','collard','pea'));

echo count($food,1).'<br>';
echo count($food['fruits'],1).'<br>';


 ?>
