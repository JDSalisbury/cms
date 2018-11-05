<?php include 'includes/header.php'; ?>
    
    <?php include 'includes/nav.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    POSTS
                    <small>stuff and things</small>
                </h1>

                <!-- First Blog Post -->
                <?php 

                    if(isset($_GET['p_id'])){
                        $post_to_display_id = $_GET['p_id'];
                    }

                    $query = "SELECT * FROM posts WHERE post_id = $post_to_display_id";
                    $select_all_posts_query = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_assoc($select_all_posts_query)){

                            $post_id = $row['post_id'];
                            $post_title = $row["post_title"];
                            $post_author = $row["post_author"];
                            $post_date = $row["post_date"];
                            $post_image = $row["post_image"];
                            $post_content = $row["post_content"];
                            
                            echo "<h2><a href='post.php?p_id=$post_id'>{$post_title}</a></h2>

                                <p class='lead'>by <a href='#'>{$post_author}</a></p>
                                <p><span class='glyphicon glyphicon-time'></span>{$post_date}</p>
                                <hr>
                                <img class='img-responsive' src='images/{$post_image}' alt=''>
                                <hr>
                                <p>{$post_content}</p>
                                
                                <hr>";
                        }
                ?>

                <?php include 'includes/comments.php'; ?>
            </div>
           <?php include 'includes/sidebar.php'; ?>
        </div>
        <hr>
<?php include 'includes/footer.php'; ?>
