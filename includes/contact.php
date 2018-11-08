<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($email) && !empty($password) ){

            $username = mysqli_real_escape_string($connection, $username);
            $email = mysqli_real_escape_string($connection, $email);
            $password = mysqli_real_escape_string($connection, $password);
    
            $query = "SELECT randsalt FROM users";
            $select_randsalt_query = mysqli_query($connection, $query);
    
            if(!$select_randsalt_query){
                die("Query Failed" . mysqli_error($connection));
            }
    
            $row = mysqli_fetch_array($select_randsalt_query);
            $salt = $row['randsalt'];
            $password = crypt($password, $salt);
    
            $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
            $query .= "VALUES('{$username}','{$email}', '{$password}', 'subscriber') ";
            $register_user_query = mysqli_query($connection, $query);
            if(!$register_user_query) {
                die("Query Failed" . mysqli_error($connection) . ' ' . mysqli_errno($connection));
            }
            $message = "You are Registered";
        } 
    } else {

        $message = '';
    }
?>


   
<section id="login">       
    <div class="form-wrap">
        <h1>Contact</h1>
        <form role="form" action="" method="POST" id="about-form" autocomplete="off">
            <H6><?php echo $message; ?></H6>
    
            <div class="form-group">
                <label for="email">YOUR EMAIL</label>
                <input required type="email" name="email" id="email" class="form-control" >
            </div>

            <div class="form-group">
                <label for="subject">SUBJECT</label>
                <input required type="text" name="subject" id="subject" class="form-control">
            </div>

            <div class="form-group">
                <label for="body">MESSAGE</label>
                <textarea required class="form-control" name="body" id="body" cols="50" rows="10"></textarea>
            </div>
    
            <input type="submit" name="submit" id="btn-send" class="btn btn-primary" value="SEND">
        </form>
    </div>        
</section>
<hr>
