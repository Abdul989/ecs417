
<?php


$servername = "localhost";
$dBUsername = "root";
$dBPass = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPass, $dBName);
    if(isset($_POST['create_post'])){
        
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
        
        $query = "INSERT INTO posts(post_title, post_author, post_date, post_content)";
        
        $query .= "VALUES('{$post_title}', '{$post_author}', now(), '{$post_content}' )";
        
        $create_post_query = mysqli_query($conn, $query);
        
        if(!$create_post_query){
            die("QUERY FAILED" . mysqli_error($conn));
        }
    }
?>
          
<style>
    .form-style{
    max-width: 500px;
    margin: 2rem auto;
    border:2px solid white;
    padding:3rem;   
    font-family: Calibre, 
     "San Francisco", "SF Pro Text", -apple-system, system-ui, BlinkMacSystemFont, 
     Roboto, "Helvetica Neue", "Segoe UI", Arial, sans-serif;
    font-size: 16px;
    color: rgb(231, 231, 231); 

        
    
}
label{
            display: block;
            width: 100%;
        }
    input, textarea{
        background-color: aliceblue;
        width: 100%;
    }

</style>
  
   <form class="form-style" action="" method="post">
    
    <div>
        <label for="title">Title</label>
        <input type="text" name="title">
    </div>
    
    <div>
        <label for="title">Author</label>
        <input type="text" name="author">
    </div>
    
    
    
    <div>
        <label for="post_content">Content</label>
        <textarea name="post_content" id="" cols="30" rows="10"> </textarea>
    </div>
    
    <div>
        <input type="submit" name="create_post" value="Publish Post">
    </div>
</form>