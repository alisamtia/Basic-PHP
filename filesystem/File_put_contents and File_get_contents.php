<?php

// Remove old content just run new content
// echo file_put_contents("readme.txt","Here is a new line");
// Keep old content and append paragraph in it
// Use lock_ex if you want to lock it so no hacker can attack
// echo file_put_contents("readme.txt","Here is a new line",FILE_APPEND|LOCK_EX);

/* -------File Gets Content Function----Reads a file into a string -------*/
echo file_get_contents("readme.txt"). "<br><br>";

echo file_get_contents("readme.txt",FALSE, NULL, 0, 36). "<br><br>"; 

 ?>
