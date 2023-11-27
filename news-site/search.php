<?php include 'header.php'; ?>
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                  <?php
  include 'config.php';
  if(isset($_GET['search'])){
$search=mysqli_real_escape_string($conn,trim($_GET['search']));

echo "<h2 class='page-heading'>Search : {$search}</h2>";


  $limit=3;
  if (isset($_GET["page"])){
  $page=$_GET["page"];
  }
  else{
  $page=1;
  }

  $offset=($page-1)*$limit;


  $sql="SELECT post.post_id,post.title,post.category,post.author,post.post_date,post.description,LEFT(post.description, 200) AS limited_description,post.post_img,
  user.user_id,user.first_name,user.last_name,category.category_id,category.category_name FROM post
  left join user on post.author=user.user_id
  left join category on post.category=category.category_id
  where post.title like '%{$search}%' or post.description like '%{$search}%'
  order by post_id desc
  LIMIT {$offset},{$limit};";

  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
                   ?>

 <div class="post-content">
     <div class="row">
         <div class="col-md-4">
             <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>"><img src="admin/upload/<?php echo $row['post_img']; ?>" alt=""/></a>
         </div>
         <div class="col-md-8">
             <div class="inner-content clearfix">
                 <h3><a href='single.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a></h3>
                 <div class="post-information">
                     <span>
                         <i class="fa fa-tags" aria-hidden="true"></i>
                         <a href='category.php'><?php echo $row['category_name']; ?></a>
                     </span>
                     <span>
                         <i class="fa fa-user" aria-hidden="true"></i>
                         <a href='author.php'><?php echo $row['first_name']." ".$row['last_name']; ?></a>
                     </span>
                     <span>
                         <i class="fa fa-calendar" aria-hidden="true"></i>
                         <?php echo $row['post_date']; ?>
                     </span>
                 </div>
                 <p class="description">
                     <?php echo rtrim($row['limited_description']); ?>...
                 </p>
                 <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']; ?>'>read more</a>
             </div>
         </div>
     </div>
 </div>
<?php } ?>



<?php

$sql1="SELECT * FROM post where post.title like '%{$search}%'  or post.description like '%{$search}%'";

$result1=mysqli_query($conn,$sql1) or die("Query Failed.");

if(mysqli_num_rows($result1)>0){
$total_records=mysqli_num_rows($result1);
$limit=3;
$total_records=ceil($total_records/$limit);

echo "<ul class='pagination admin-pagination'>";
if($page<$total_records){
echo '<li><a href="author.php?page='.($page+1).'&search='.$search.'">Next</a></li>';
}

for($i=1;$i<=$total_records;$i++){
if($page==$i){
$active="active";
}
else {
$active="";
}
echo '<li class='.$active.'><a href="author.php?page='.$i.'&search='.$search.'">'.$i.'</a></li>';
}
if($page>1){
echo '<li><a href="author.php?page='.($page-1).'&search='.$search.'">Prev</a></li>';
}
echo "</ul>";
}
 ?>
</ul>

<?php }else{echo '<h2>No record Found!!</h2>';} ?>



                    <?php }else{header("Location: {$host_name}/index.php");} ?>
                </div><!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
