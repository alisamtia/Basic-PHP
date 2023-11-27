<!DOCTYPE html>
<?php
include 'config.php';
$page=basename($_SERVER['PHP_SELF']);
switch ($page) {
  case 'single.php':
    if(isset($_GET['id'])){
      $sql_title="select * from post where post_id={$_GET['id']}";
      $result_title=mysqli_query($conn,$sql_title);
      $row_title=mysqli_fetch_assoc($result_title);
      $page_title=$row_title['title'];
    }else{
      $page_title="No post Found";
    }
    break;
case 'category.php':
if(isset($_GET['id'])){
  $sql_title="select * from category where category_id={$_GET['id']}";
  $result_title=mysqli_query($conn,$sql_title);
  $row_title=mysqli_fetch_assoc($result_title);
  $page_title=$row_title['category_name']." News";
}else{
  $page_title="No post Found";
}
  break;
  case 'author.php':
  if(isset($_GET['id'])){
    $sql_title="select * from user where user_id={$_GET['id']}";
    $result_title=mysqli_query($conn,$sql_title);
    $row_title=mysqli_fetch_assoc($result_title);
    $page_title="News by: ".$row_title['first_name']." ".$row_title['last_name'];
  }else{
    $page_title="No post Found";
  }
    break;
  case 'search.php':
  if(isset($_GET['search'])){
$page_title="Search: ".$_GET['search'];
}else{
$page_title="No post Found";
}
    break;

  default:
  // if(isset($_POST['save'])){
  $sql="select * from settings";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
  while ($row=mysqli_fetch_assoc($result)) {
    $page_title=$row['websitename'];
  }}
    break;
}


 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title; ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class=" col-md-offset-4 col-md-4">
              <?php
              // if(isset($_POST['save'])){
              $sql="select * from settings";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
              while ($row=mysqli_fetch_assoc($result)) {

               ?>
                <a href="index.php" id="logo"><img src="admin/images/<?php echo $row['logo']; ?>"></a>
      <?php }} ?>      </div>
            <!-- /LOGO -->
        </div>
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class='menu'>
<?php
include 'config.php';

$sql="select * from category where post>0;";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while ($row=mysqli_fetch_assoc($result)) {
$r=$row['category_name'];
$id=$row['category_id'];
echo "<li><a href='category.php?id={$id}'>{$r}</a></li>";
}
}
 ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
