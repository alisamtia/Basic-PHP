<!-- Footer -->
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php
              // if(isset($_POST['save'])){
              $sql="select * from settings";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
              while ($row=mysqli_fetch_assoc($result)) {

               ?>
                <span><?php echo $row['footerdesc']; ?></span>
<?php }} ?>
            </div>
        </div>
    </div>
</div>
<!-- /Footer -->
</body>
</html>
