<?php
include 'config.php';

$post_id=$_GET['id'];
$category_id=$_GET['cat_id'];

$sql="select * from post where post_id={$post_id}";
$result1=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result1);

unlink("upload/".$row['post_img']);

$sql="delete from post where post_id={$post_id};";
$sql.="update category set post=post-1 where category_id={$category_id}";

if(mysqli_multi_query($conn,$sql)){
  header("Location: {$hostname}/news-site/admin/post.php");
}

 ?>
