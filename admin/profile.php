<?php include 'includes/admin_header.php'; ?>

<?php

    if(isset($_SESSION['username'])){
        echo $_SESSION['username'];
    }

?>


    <div id="wrapper">



        <!-- Navigation -->
        <?php include 'includes/admin_nav.php'; ?>


        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Profile
                            <small>with style.</small>
                        </h1>
                        
                        <?php  
                        
                        
                        
                        


                        ?>
                        
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="user_firstname">First Name</label>
                                <input value="<?php echo $user_firstname; ?>" type="text" class="form-control" name="user_firstname">
                            </div>

                            <div class="form-group">
                                <label for="user_lastname">Last Name</label>
                                <input value="<?php echo $user_lastname; ?>" type="text" class="form-control" name="user_lastname">
                            </div>

                            <div class="form-group">
                                <label for="user_email">Email</label>
                                <input value="<?php echo $user_email; ?>" type="email" class="form-control" name="user_email">
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input value="<?php echo $username; ?>" type="text" class="form-control" name="username">
                            </div>

                            <div class="form-group">
                                <label for="user_password">Password</label>
                                <input value="<?php echo $user_password; ?>" type="password" class="form-control" name="user_password">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image">
                                <img width="100" src="../images/<?php echo $user_image; ?>" alt="">
                            </div>

                            <div class="form-group">
                                <label for="user_role">Role</label>
                                <br>
                                <select name="user_role" id="">
                                    <option value="subscriber">Subscriber</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="update_user" value="UPDATE">
                            </div>

                        </form>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->
<?php include 'includes/admin_footer.php'; ?>