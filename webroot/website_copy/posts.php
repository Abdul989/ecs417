<?php
    require "header.php";
?>

<?php

if(isset($_GET['source'])){
    $source = $_GET['source'];
}
else{
    $source = '';
}

switch($source){
       
        case 'add_post';
        include "includes/add_post.php";
        break;
        
        case 'edit_post';
        include "edit_post.php";
        break;
  
        default;
        
        include "includes/view_all_posts.php";
}

?>