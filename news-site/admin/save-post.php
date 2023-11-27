<?php
include 'config.php';

if (isset($_FILES['fileToUpload'])){
  $error=array();

  $file_name=$_FILES['fileToUpload']['name'];
  $file_size=$_FILES['fileToUpload']['size'];
  $file_tmp=$_FILES['fileToUpload']['tmp_name'];
  $file_name=$_FILES['fileToUpload']['name'];
  $type=$_FILES['fileToUpload']['type'];
  $file_ext=strtolower(end(explode('.',$file_name)));
  $extentions = array('jpg','png','jpeg');

  if (in_array($file_ext,$extentions)===false){
    $error[]="This extention file is not allowed, Only upload jpg or a png image";
  }

  if($file_size>2000000){
    $error[]="File size must less than 2MB";
  }
$target=time()."-".$file_name;
  if(empty($error)==True){
    move_uploaded_file($file_tmp,"upload/".$target);
  }
  else {
    print_r($error);
    die();
  }
}

$title=mysqli_real_escape_string($conn,$_POST['post_title']);
$post_desc=mysqli_real_escape_string($conn,$_POST['postdesc']);
$category=mysqli_real_escape_string($conn,$_POST['category']);
$date=date("d M, Y");
session_start();
$author=mysqli_real_escape_string($conn,$_SESSION["user_id"]);

$sql="insert into post(title,description,category,post_date,author,post_img)
values ('{$title}','{$post_desc}','{$category}','{$date}','{$author}','{$target}');";

$sql.="UPDATE category SET post=post+1 where category_id={$category}";



if(mysqli_multi_query($conn,$sql)){
  header("Location: {$host_name}/admin/post.php");
}else{
  echo "<div class='alert alert-danger'>Query Failed</class>";
}
