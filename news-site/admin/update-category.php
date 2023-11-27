<?php include "header.php"; if($_SESSION["user_role"]==0){
 header("Location: {$host_name}/admin/post.php");
}
?>
<?php
include 'config.php';
 include "header.php"; ?>


 <?php
 if($_GET['id']){
$id=$_GET['id'];
 include 'config.php';
 if(isset($_POST["cat_name"])){
   $cat=$_POST["cat_name"];
 $sql="update category set category_name='{$cat}' where category_id={$id}";
 $result=mysqli_query($conn,$sql);
 if($result){header("Location: {$host_name}/admin/category.php");}
}}
else{
  header("Location: {$host_name}/admin/post.php");
}
  ?>

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>New name of category</label>
                          <?php
$sql="Select * from category where category_id={$id};";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){


                           ?>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                          <?php }} ?>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
