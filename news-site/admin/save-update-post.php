<?php
include 'config.php';

if(empty($_FILES["new-image"]['name'])){
$file_name=$_POST['old_image'];
}
else {
  $error=array();

  $file_name=$_FILES['new-image']['name'];
  $file_size=$_FILES['new-image']['size'];
  $file_tmp=$_FILES['new-image']['tmp_name'];
  $file_name=$_FILES['new-image']['name'];
  $type=$_FILES['new-image']['type'];
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




$sql="UPDATE post set title='{$_POST['post_title']}',
description='{$_POST['postdesc']}',
category='{$_POST['category']}',
post_img='{$target}'
where post_id={$_POST['post_id']};";

if($_POST['old_category']!=$_POST['category']){
$sql.="UPDATE category set post=post-1 where category_id={$_POST['old_category']};";
$sql.="UPDATE category set post=post+1 where category_id={$_POST['category']};";
$result=mysqli_multi_query($conn,$sql);
}
// $sql = "UPDATE post SET title='$post_title', description='$postdesc', category=$category, post_img='$file_name' WHERE post_id=$post_id;";
else{
  $result=mysqli_query($conn,$sql);
}

if($result){
  header("Location: {$hostname}/news-site/admin/post.php");
}
else {
  echo "query faild";
}

 ?>
