<?php

$path=$_POST["path"];

if(unlink($path)) {
    echo 1;
} else {
    echo 0;
}


?>