
<?php include 'includes/admin_header.php'; ?>
    <div id="wrapper">



        <!-- Navigation -->
        <?php include 'includes/admin_nav.php'; ?>


        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            CATEGORIES
                            <small>for categorization.</small>
                        </h1>



                        <div class="col-xs-6">
                            <form action="">
                                <div class="form-group">
                                    <label for='cat_title'>CATEGORY TITLE</label>
                                    <input class='form-control' type="text" name='cat_title'>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name='submit' value="ADD CATEGORY">
                                </div>
                            </form>
                        </div>

                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>CATEGORY TITLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query = "SELECT * FROM categories";
                                        $select_all_categories_for_admin_query = mysqli_query($connection, $query);  
                                        while($row = mysqli_fetch_assoc($select_all_categories_for_admin_query)){
                                            $cat_title = $row["cat_title"];
                                            $cat_ID = $row["cat_id"];
                                                echo "<tr>";
                                                echo "<td>{$cat_ID}</td>";
                                                echo "<td>{$cat_title}</td>";
                                                echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>


                        </div>
                        


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