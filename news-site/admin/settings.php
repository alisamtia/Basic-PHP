<?php include "header.php"; if($_SESSION["user_role"]==0){
 header("Location: {$host_name}/admin/post.php");
}
?>

<?php
include 'config.php';
// if(isset($_POST['save'])){
$sql="select * from settings";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while ($row=mysqli_fetch_assoc($result)) {

 ?>

<div id="admin-content">
  <div class="container">
    <div id="row">
      <div class="col-md-12">
        <h1 class="admin-heading">Website Settings</h1>
      </div>
      <div class="col-md-offset-3 col-md-6">
        <form action="save-settings.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="website_name">Website Name</label>
            <input type="text" name="website_name" value="<?php echo $row['websitename']; ?>" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="logo">Website Logo</label>
            <input type="file" name="logo">
            <img src='images/<?php echo $row['logo']; ?>'>
            <input type="hidden" name="old_logo" value="<?php echo $row['logo']; ?>">
          </div>


          <div class="form-group">
            <label for="footer_desc">Footer Description</label>
            <textarea name="footer_desc" class="form-control" rows="5" required>
<?php echo $row['footerdesc']; ?>
            </textarea>
          </div>
          <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
        </form>
      </div>
    </div>
  <?php }}else{
    header("Location: {$host_name}/admin/post.php");
  } ?>
  </div>
</div>

<?php include 'footer.php'; ?>