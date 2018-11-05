<table class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>AUTHOR</th>
                                    <th>COMMENT</th>
                                    <th>EMAIL</th>
                                    <th>STATUS</th>
                                    <th>IN RESPONSE TO</th>
                                    <th>DATE</th>
                                    <th>APPROVE</th>
                                    <th>UNAPPROVE</th>
                                    <th>DELETE</th>
                                    <th> </th>
                                </tr>
                            </thead>




                            <tbody>
                                <?php                                 
                                    $query = "SELECT * FROM comments ";
                                    $posts_query = mysqli_query($connection, $query);                                                            
                                    while($row = mysqli_fetch_assoc($posts_query)){
                                        $comment_id = $row["comment_id"];
                                        $comment_post_id = $row["comment_post_id"];
                                        $comment_author = $row["comment_author"];
                                        $comment_email = $row["comment_email"];
                                        $comment_content = $row["comment_content"];
                                        $comment_status = $row["comment_status"];
                                        $comment_date = $row["comment_date"];
                                        


                                        // $query = "SELECT * FROM categories WHERE cat_id = $post_category_id ";
                                        // $cat_query = mysqli_query($connection, $query);
                                    
                                        // while($row = mysqli_fetch_assoc($cat_query)){
                                        //     $cat_title = $row["cat_title"];
                                        // }

                                        echo"
                                            <tr>
                                                <td>$comment_id</td>
                                                <td>$comment_author</td>
                                                <td>$comment_content</td>
                                                <td>$comment_email</td>
                                                <td>$comment_status</td>
                                                <td>$comment_post_id</td>
                                                <td>$comment_date</td>
                                                <td>Approve</td>
                                                <td>Unapprove</td>
                                                <td><a href='posts.php?delete={$comment_id}'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></a><a href='posts.php?source=edit_post&p_id={$comment_id}'><i class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></td>
                                            </tr>";
                                    }        
                                            
                                ?>


                            </tbody>
                        </table>

<?php

    // if(isset($_GET['delete'])){
    //     $the_post_id = $_GET['delete'];

    // $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
    // $delete_query = mysqli_query($connection, $query);
    // }


?>