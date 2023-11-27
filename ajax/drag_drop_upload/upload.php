<?php

$conn= mysqli_connect("localhost","root","","ajax") or die("Connection failed");

if($_FILES['file']['name']!=""){
    $file_names="";

    $file_number=count($_FILES['file']['name']);
    for ($i= 0;$i<$file_number;$i++){
        $file_name=$_FILES['file']['name'][ $i ];
        $file_ext=pathinfo( $file_name, PATHINFO_EXTENSION );
        $new_name=rand().".".$file_ext;
        $file_names.= $new_name.",";
        $path="./images/". $new_name;
        move_uploaded_file($_FILES["file"]["tmp_name"][$i], $path);
    }
}
$sql="INSERT INTO upload(file_name) VALUES ('{$file_names}')";
if(mysqli_query($conn, $sql)){
    echo 1;
}
else{
    echo 0;
}
?>
