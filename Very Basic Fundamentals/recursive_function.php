<?php

// function display($a){
//   if ($a<=5){
//     echo "$a <br>";
//     display($a+1);
//   }
//
// }
//
// display(1);



function factorial($n){
  if ($n==0){
    return 1;
  }else{
    return ($n*factorial($n-1));
  }

}

echo factorial(10);


 ?>
