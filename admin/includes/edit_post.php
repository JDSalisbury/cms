<?php

    if(isset($_GET['p_id'])){

       $post_to_edit_id = $_GET['p_id'];
    }

    $query = "SELECT * FROM posts ";
    $select_post_by_id = mysqli_query($connection, $query);                                                            
    while($row = mysqli_fetch_assoc($select_post_by_id)){
        $post_id = $row["post_id"];
        $post_title = $row["post_title"];
        $post_author = $row["post_author"];
        $post_date = $row["post_date"];
        $post_image = $row["post_image"];
        $post_tags = $row["post_tags"];
        $post_comment_count = $row["post_comment_count"];
        $post_status = $row["post_status"];
        $post_category_id = $row["post_category_id"];
        $post_content = $row["post_content"];
    }
?>



<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
        
        <select name="post_category" id="post_category">
            <?php

                $query = "SELECT * FROM categories";
                $select_categories = mysqli_query($connection, $query);
                            
                while($row = mysqli_fetch_assoc($select_categories)){
                    $cat_title = $row["cat_title"];
                    $cat_ID = $row["cat_id"];

                    echo "<option value='{$cat_ID}'>{$cat_title}</option>";
                }

            ?>
        </select>
        
    </div>

    <div class="form-group">
        <label for="author">Post Author</label>
        <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="author">
    </div>

    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input value="<?php echo $post_status; ?>" type="text" class="form-control" name="post_status">
    </div>

    <div class="form-group">
        <label for="image">Post Image</label>
        <input type="file" name="image">
        <img width="100" src="../images/<?php echo $post_image; ?>" alt="">
    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" cols="30" rows="10"><?php echo $post_content; ?></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="PUBLISH">
    </div>

</form>