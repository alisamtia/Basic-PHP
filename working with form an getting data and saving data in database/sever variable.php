<html>
<head>
<title>This is Page 1</title>
</head>
<body>
<!-- Post is more secure than get get is only used for search -->
<!-- <form action="process.php" method="get"> -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  Name: <input type="text" name="fname"><br><br>
  Age : <input type="text" name="age"><br><br>
  <input type="submit" name="save">
</form>
<?php
if(isset($_POST['save'])){
  echo $_POST['fname']."<br>";
  echo $_POST['age']."<br>";
  echo "<pre>";
  print_r($_SERVER);
  echo "</pre>";
}
 ?>
</body>
</html>
