<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method ="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <div class="recent-post-container">
            <h4>Recent Posts</h4>
    <?php


    $limit=4;

    $sql="SELECT post.post_id,post.title,post.category,post.author,post.post_date,post.description,LEFT(post.description, 200) AS limited_description,post.post_img,
    user.user_id,user.first_name,user.last_name,category.category_id,category.category_name FROM post
    left join user on post.author=user.user_id
    left join category on post.category=category.category_id
    order by post_id desc
    LIMIT {$limit};";

    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result)){


     ?>

    <!-- /search box -->
    <!-- recent posts box -->


        <div class="recent-post">
            <a class="post-img" href="">
                <img src="admin/upload/<?php echo $row['post_img']; ?>" alt=""/>
            </a>
            <div class="post-content">
                <h5><a href="single.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></h5>
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <a href='category.php?id=<?php echo $row['category_id']; ?>'><?php echo $row['category_name']; ?></a>
                </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?php echo $row['post_date']; ?>
                </span>
                <a class="read-more" href="single.php?id=<?php echo $row['post_id']; ?>">read more</a>
            </div>

        </div>
        <?php } ?>
    </div>

    <!-- /recent posts box -->
</div>
