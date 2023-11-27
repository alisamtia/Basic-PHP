<?php
include 'config.php';

if(empty($_FILES["logo"]['name'])){
$file_name=$_POST['old_logo'];
}
else {
  $error=array();

  $file_name=$_FILES['logo']['name'];
  $file_size=$_FILES['logo']['size'];
  $file_tmp=$_FILES['logo']['tmp_name'];
  $type=$_FILES['logo']['type'];
  $file_ext=strtolower(end(explode('.',$file_name)));
  $extentions = array('jpg','png','jpeg');

  if (in_array($file_ext,$extentions)===false){
    $error[]="This extention file is not allowed, Only upload jpg or a png image";
  }

  if($file_size>2000000){
    $error[]="File size must less than 2MB";
  }

  if(empty($error)==True){
    move_uploaded_file($file_tmp,"images/".$file_name);
  }
  else {
    print_r($error);
    die();
  }
}
echo $file_name;
$website_name=$_POST['website_name'];
$footer_desc=$_POST['footer_desc'];

$sql="UPDATE settings set websitename='{$website_name}',
logo='{$file_name}',
footerdesc='{$footer_desc}';";
// $sql = "UPDATE post SET title='$post_title', description='$postdesc', category=$category, post_img='$file_name' WHERE post_id=$post_id;";
$result=mysqli_query($conn,$sql);

if($result){
  header("Location: {$hostname}/news-site/admin/settings.php");
}
else {
  echo "query faild";
}
 ?>
