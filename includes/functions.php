<?php include 'db.php';?>
<?php

function navBarCategoriesDisplay(){
    global $connection;
    $query = "SELECT * FROM categories";
    $select_all_categories_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_all_categories_query)){
       $cat_title = $row["cat_title"];

       echo "<li><a href='#'>{$cat_title}</a></li>";
    }

}


function tagSearchBar(){
    global $connection;

    if(isset($_POST['search'])){

        $search = $_POST['search'];
    
        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
    
        $search_query = mysqli_query($connection, $query);
    
        if(!$search_query) {
            die("query failed" . mysqli_error($connection));
        }
    
        $count = mysqli_num_rows($search_query);
        global $numOfItemsFound;
        if($count == 1){
            $numOfItemsFound = $count . " item found";
        } else {
            $numOfItemsFound = $count . " items found";
        }
    }
}

?>