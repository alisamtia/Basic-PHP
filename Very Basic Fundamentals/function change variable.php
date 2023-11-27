<?php

function first($num){
  $num+=5;
}

function last(&$num){
  $num+=7;
}


$num=10;
first($num);
echo "This is orignal value $num<br>";
last($num);
echo "This is orignal value $num";

 ?>
