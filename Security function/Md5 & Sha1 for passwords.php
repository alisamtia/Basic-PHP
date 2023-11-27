<?php
// Just for passwords
$password="A324dAAli@sad";
echo "The password: ".$password."<br><br><br>";

echo "md5 Hex: ".md5($password)."<br>";
echo "md5 Binary: ".md5($password,TRUE)."<br><br><br>";


echo "sha1 Hex: ".sha1($password)."<br>";
echo "sha1 Binary: ".sha1($password,TRUE)."<br><br><br>";


// How to use it
if(sha1($password)=="492f60f6c13c35a252b8bc1aa74cfa25e8d4f838"){
  echo "Password Match";
}





 ?>
