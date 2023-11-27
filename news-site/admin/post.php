<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php include 'config.php';
                        $limit=3;
                        if (isset($_GET["page"])){
                        $page=$_GET["page"];
                        }
                        else{
                          $page=1;
                        }

                        $offset=($page-1)*$limit;
                        if($_SESSION["user_role"]=='1'){
                          $sql="SELECT * FROM post
                          order by post_id desc
                          LIMIT {$offset},{$limit};";
                        }
                        else {

                          $sql="SELECT * FROM post
                          where author={$_SESSION['user_id']}
                          order by post_id desc
                          LIMIT {$offset},{$limit};";
                        }
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                        $serial=$offset+1;
                        while($row=mysqli_fetch_assoc($result)){
                         ?>
                          <tr>
                              <td class='id'><?php echo $serial; ?></td>
                              <td><?php echo $row['title']; ?></td>
                              <td><?php $category=$row['category']; $sql1="select category_name from category where category_id='{$category}';";
                              $result1=mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_assoc($result1)){
                                echo $row1['category_name'];
                              }?></td>
                              <td><?php echo $row['post_date']; ?></td>
                              <td><?php $author=$row['author']; $sql2="select username from user where user_id='{$author}'";
                              $result2=mysqli_query($conn,$sql2);

                              while($row2=mysqli_fetch_assoc($result2)){
                                echo $row2['username'];
                              }?></td>
                              <td class='edit'><a href='update-post.php?id=<?php echo $row['post_id']; ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-post.php?id=<?php echo $row['post_id']; ?>&cat_id=<?php echo $category; ?>'><i class='fa fa-trash-o'></i></a></td>
                              <?php $serial++; ?>
                          </tr>
                          <tr>
                          <?php }} ?>
                      </tbody>
                  </table>
                  <?php
if($_SESSION["user_role"]=='1'){
$sql1="SELECT * FROM post";}
else {
  $sql1="SELECT * FROM post where author={$_SESSION['user_id']}";
}
$result1=mysqli_query($conn,$sql1) or die("Query Failed.");

if(mysqli_num_rows($result1)>0){
  $total_records=mysqli_num_rows($result1);
  $limit=3;
  $total_records=ceil($total_records/$limit);

  echo "<ul class='pagination admin-pagination'>";
  if($page<$total_records){
  echo '<li><a href="post.php?page='.($page+1).'">Next</a></li>';
}

  for($i=1;$i<=$total_records;$i++){
    if($page==$i){
      $active="active";
    }
    else {
      $active="";
    }
    echo '<li class='.$active.'><a href="post.php?page='.$i.'">'.$i.'</a></li>';
  }
  if($page>1){
  echo '<li><a href="post.php?page='.($page-1).'">Prev</a></li>';
  }
  echo "</ul>";
}
                   ?>

              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
