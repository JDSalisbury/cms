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
                                    <th> </th>
                                </tr>
                            </thead>




                            <tbody>
                                <?php                                 
                                    $query = "SELECT * FROM posts ";
                                    $posts_query = mysqli_query($connection, $query);                                                            
                                    while($row = mysqli_fetch_assoc($posts_query)){
                                        $post_id = $row["post_id"];
                                        $post_title = $row["post_title"];
                                        $post_author = $row["post_author"];
                                        $post_date = $row["post_date"];
                                        $post_image = $row["post_image"];
                                        $post_tags = $row["post_tags"];
                                        $post_comment_count = $row["post_comment_count"];
                                        $post_status = $row["post_status"];
                                        $post_category_id = $row["post_category_id"];
                                        echo"
                                            <tr>
                                                <td>$post_id</td>
                                                <td>$post_author</td>
                                                <td>$post_title</td>
                                                <td>$post_category_id</td>
                                                <td>$post_status</td>
                                                <td><img src='../images/$post_image' class='img-responsive'></td>
                                                <td>$post_tags</td>
                                                <td>$post_comment_count</td>
                                                <td>$post_date</td>
                                                <td><a href='posts.php?delete={$post_id}'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></a></td>
                                            </tr>";
                                    }        
                                            
                                ?>


                            </tbody>
                        </table>

<?php

    if(isset($_GET['delete'])){
        $the_post_id = $_GET['delete'];

    $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
    $delete_query = mysqli_query($connection, $query);
    }


?>