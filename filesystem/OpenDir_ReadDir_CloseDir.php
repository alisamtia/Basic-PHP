<?php

if(is_dir('.')){
  if ($d=opendir('.')) {
    while($file=readdir($d)){
      echo "filename: ".$file."<br>";
    }
    closedir($d);
  }

}




 ?>
