<table class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>USERNAME</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>EMAIL</th>
                                    <th>IMAGE</th>
                                    <th>ROLE</th>
                                    <th></th>
                                   
                                </tr>
                            </thead>




                            <tbody>
                                <?php                                 
                                    $query = "SELECT * FROM users ";
                                    $comments_query = mysqli_query($connection, $query);                                                            
                                    while($row = mysqli_fetch_assoc($comments_query)){
                                        $user_id = $row["user_id"];
                                        $username = $row["username"];
                                        $user_firstname = $row["user_firstname"];
                                        $user_lastname = $row["user_lastname"];
                                        $user_email = $row["user_email"];
                                        $user_image = $row["user_image"];
                                        $user_role = $row["user_role"];
                                    

                                        echo"
                                            <tr>
                                                <td>$user_id</td>
                                                <td>$username</td>
                                                <td>$user_firstname</td>
                                                <td>$user_lastname</td>
                                                <td>$user_email</td>
                                                <td><img src='../images/$user_image' height= '50'></td>
                                                <td>$user_role</td>
                                                <td><a href='users.php?delete={$user_id}'><i class='fa fa-trash-o fa-2x' aria-hidden='true'></i></a></td>
                                            </tr>";
                                    }      
                                    
                                    if(isset($_GET['delete'])){
                                        $the_user_id = $_GET['delete'];
                                
                                    $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
                                    $delete_query = mysqli_query($connection, $query);
                                    header("Location: users.php");
                                    }   
                                ?>
                            </tbody>
                        </table>

<?php

?>