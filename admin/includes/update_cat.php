<?php
//edit a cat                               
    if(isset($_GET['edit'])){
        $the_cat_id = $_GET['edit'];
                                 
        $query = "SELECT * FROM categories WHERE cat_id = $the_cat_id ";
        $edit_query = mysqli_query($connection, $query);
                                    
        while($row = mysqli_fetch_assoc($edit_query)){
            $cat_title = $row["cat_title"];
            $cat_ID = $row["cat_id"];
?>
            <form action='' method='POST'>
                <div class='form-group'>
                    <label for='cat_title'>EDIT TITLE</label>
                    <input class='form-control' type='text' name='cat_title' value='<?php if(isset($cat_title)) {echo $cat_title;} ?>'>
                </div>
                <div class='form-group'>
                    <input class='btn btn-primary' type='submit' name='update' value='UPDATE CATEGORY' >
                </div>
            </form>
<?php
        }           
    }
    if(isset($_POST['update'])){
        $the_cat_title = $_POST['cat_title'];
        $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$the_cat_id} ";
        $update_query = mysqli_query($connection, $query);
        if(!$update_query){
            die("Query Failed" . mysqli_error($connection));
        }
    }
?>

                            