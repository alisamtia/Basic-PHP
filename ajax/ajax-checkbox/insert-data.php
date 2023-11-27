<?php

$conn=mysqli_connect("localhost","root","","ajax");

$name=$_POST['name'];
$languages=$_POST['languages'];

$sql="INSERT INTO checkbox_st(languages,name) VALUES ('{$name}','{$languages}')";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}

?>
