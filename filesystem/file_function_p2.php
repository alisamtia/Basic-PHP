<?php
// You can use r to read mode and w to write mode
$file=fopen('readme.txt','a+');

// echo fread($file,20);
// get the full file all data
// echo fread($file,filesize("readme.txt"));

// display only one line that will be first you have to re and re type to to type next lines
// echo fgets($file);
// // to get cursor postion
// echo ftell($file);
// echo fgets($file);
// // to get cursor postion
// echo ftell($file);
// // change cursor position
// fseek($file,10);
// echo "<br>".fgets($file);
// // to get cursor postion
// echo ftell($file);

// echo fgets($file);
// echo ftell($file);
// echo "<br><br>".fpassthru($file);

// Get one by one character
// echo fgetc($file);
// echo fgetc($file);

// get all the lines an array
// echo "<pre>";
// print_r(file('readme.txt'));
// echo "</pre>";


// you can use fwrite or put both
fwrite($file,"\nHere is a new line");
fclose($file);
 ?>
