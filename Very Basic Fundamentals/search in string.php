<?php

$str="Hello world. The nice world";

// these are case sensitive
echo strpos($str,"world",1)."<br>"; //Start searching from the start
echo strrpos($str,"world",-1)."<br>"; //Strart searching from the end

// These are not case sensitive
echo stripos($str,"world",1)."<br>"; //Start searching from the start
echo strripos($str,"world",-1)."<br>"; //Strart searching from the end
 ?>
