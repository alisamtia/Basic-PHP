<?php
// Simple file read
// echo readfile('readme.txt');


// file_exists('file_path')
$file='readme.txt';
if(file_exists($file)){
echo readfile($file);

// Copy a file
// copy($file,'newfile.txt');
// echo "<br><br>File copied";


// Rename a file
// rename("newfile.txt","oldfile.txt");

// Delete a file
// unlink("oldfile.txt");
// or you can also use delete function both are same
// delete("oldfile.txt");

// make a folder
// mkdir("Ali");
// delete a filder
// rmdir("Ali");

// check file size
echo "<br><br>".filesize($file)." Bytes";

// check file type
echo "<br><br> File type:".filetype($file);

// check path of a file
echo "<br><br>".realpath($file);
$path=realpath($file);

// get file information
echo "<pre>";
print_r(pathinfo($file));
echo "</pre>";
// Check file name
echo basename($file);
// get file parent directory and you can also choose the number and adust level
echo dirname($path,2);
}
else {
  echo "File does not exist!!";
}



 ?>
