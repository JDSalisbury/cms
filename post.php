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

                            displaySetupForPost($row);
                        }
                ?>

                <?php include 'includes/comments.php'; ?>
            </div>
           <?php include 'includes/sidebar.php'; ?>
        </div>
        <hr>
<?php include 'includes/footer.php'; ?>
