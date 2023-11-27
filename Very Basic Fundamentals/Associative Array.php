<?php


// $age=array(
//   'bill'=>23,
//   'mark'=>43,
//   'elon'=>36
// );

#WE can also write it as this
$age=[
  'bill'=>23,
  'mark'=>43,
  'elon'=>36
];
$age['mark']=26;
echo "<pre>";
var_dump($age);
echo "</pre>";

echo $age['bill']."<br>";
echo $age['mark']."<br>";
echo $age['elon']."<br>";

 ?>
