<?php include "header.php"; if($_SESSION["user_role"]==0){
 header("Location: {$host_name}/admin/post.php");
}
?>
<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>

<?php
include 'config.php';
$id=$_GET['id'];

$sql="SELECT * FROM user where user_id='{$id}'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){



  if (isset($_POST["submit"])){
  // for more security we have to convert html tags to special chracters
  // use md5 to encrypt password
  $user_id=mysqli_real_escape_string($conn,$_POST['user_id']);
    $fname=mysqli_real_escape_string($conn,$_POST['f_name']);
    $lname=mysqli_real_escape_string($conn,$_POST['l_name']);
    $user=mysqli_real_escape_string($conn,$_POST['username']);
    $role=mysqli_real_escape_string($conn,$_POST['role']);




    $sql1="UPDATE user set first_name='{$fname}',last_name='{$lname}',username='{$user}',role='{$role}' where user_id={$id}";
    if(mysqli_query($conn,$sql1)){
      header("Location: {$host_name}/admin/users.php");
    }
    }
 ?>

              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $id;?>" placeholder="">
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php if($row['role']==1){
                          $s1="selected";
                          } ?>">
                              <option value="0">normal User</option>
                              <option value="1" <?php if(isset($s1)){echo $s1;}?>>Admin</option>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
<?php }
}?>

                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
