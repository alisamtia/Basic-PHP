<?php  ?>
<html>
<head><title>This is file uploader</title></head>
<body>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="image"><br><br>

    <input type="submit" name="save">
  </form>
</body>
</html>
<?php

if(isset($_FILES['image'])){
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
$name=$_FILES['image']['name'];
$type=$_FILES['image']['type'];
$tmp_name=$_FILES['image']['tmp_name'];
$file_size=$_FILES['image']['size'];
if(move_uploaded_file($tmp_name,"upload_img/".$name)){
  echo "File uploaded successfully!";
}
else {
  echo "Can't upload the file!";
}
}


 ?>
