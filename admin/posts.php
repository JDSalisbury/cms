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
                            POSTS
                            <small>all of them.</small>
                        </h1>
                        
                        <table class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>AUTHOR</th>
                                    <th>TITLE</th>
                                    <th>CATEGORY</th>
                                    <th>STATUS</th>
                                    <th>IMAGE</th>
                                    <th>TAGS</th>
                                    <th>COMMENTS</th>
                                    <th>DATE</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>ME</td>
                                    <td>Awesome stuff</td>
                                    <td>Lego</td>
                                    <td>Approved</td>
                                    <td>link.png</td>
                                    <td>cool, lego, stuff</td>
                                    <td>3</td>
                                    <td>today</td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="col-xs-6">
                        
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