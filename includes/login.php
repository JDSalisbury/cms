<?php include "db.php"; 
    session_start();
?>

<?php

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password =  $_POST['password'];

   $username = mysqli_real_escape_string($connection, $username);
   $password = mysqli_real_escape_string($connection, $password);

   $query = "SELECT * FROM users WHERE username = '{$username}'";
   $select_user_query = mysqli_query($connection, $query);

   if(!$select_user_query){
       die("Query Failed" . mysqli_error($connection));
   }

   while($row = mysqli_fetch_array($select_user_query)){
        $db_id = $row['user_id'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
        $db_username = $row['username'];
        $db_password = $row['user_password'];
        $db_user_image = $row['user_image'];
    }

    $password = crypt($password, $db_password);
    
    if($username === $db_username && $password === $db_password){
        $_SESSION['user_id'] = $db_id;
        $_SESSION['username'] = $db_username;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        $_SESSION['user_role'] = $db_user_role;
        $_SESSION['user_image'] = $db_user_image;
        header("Location: ../admin");
    } else{
        header("Location: ../index.php ");
    }


}


?>