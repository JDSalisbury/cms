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
    global $search_query;

    if(isset($_POST['search'])){

        $search = $_POST['search'];
    
        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
    
        $search_query = mysqli_query($connection, $query);
    
        if(!$search_query) {
            die("query failed" . mysqli_error($connection));
        }
    
    }
    if(!$search_query == null){
        $count = mysqli_num_rows($search_query);
    }else {
        $count = -1;
    }
    global $numOfItemsFound;
    if($count == 1){
        $numOfItemsFound = $count . " item found";
    } elseif($count == -1) {
        $numOfItemsFound = "";
    } else{ 

        $numOfItemsFound = $count . " items found";
    }
}


function displaySetupForPost($row){
    $post_title = $row["post_title"];
    $post_author = $row["post_author"];
    $post_date = $row["post_date"];
    $post_image = $row["post_image"];
    $post_content = $row["post_content"];
    
    echo "<h2><a href='#'>{$post_title}</a></h2>

        <p class='lead'>by <a href='#'>{$post_author}</a></p>
        <p><span class='glyphicon glyphicon-time'></span>{$post_date}</p>
        <hr>
        <img class='img-responsive' src='images/{$post_image}' alt=''>
        <hr>
        <p>{$post_content}</p>
        <a class='btn btn-primary' href='#'>Read More <span class='glyphicon glyphicon-chevron-right'></span></a>
        <hr>";

}

?>