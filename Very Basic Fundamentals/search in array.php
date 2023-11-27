<?php

$array=array("banana","apple",55,"grapes","orange","mango");

// if you will set true here you can check it 100% match case
if(in_array(55,$array,true)){
  echo "Find Successfully";
  echo array_search('55',$array);
}
else{
  echo "Can't Find it";
}





 ?>
