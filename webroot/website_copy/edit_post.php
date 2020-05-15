<?php
    require "header.php";
?>

<?php
$servername = "localhost";
$dBUsername = "root";
$dBPass = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPass, $dBName);


            if(isset($_GET['p_id'])){
              $the_post_id = $_GET['p_id'];
            }
            $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
            $select_posts_by_id = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($select_posts_by_id)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_content = $row['post_content'];
            }

            if(isset($_POST['update_post'])){
                $post_title = $_POST['title'];
                $post_author = $_POST['author'];
                $post_content = $_POST['post_content'];
        
                $query = "UPDATE posts SET ";
                $query .="post_title = '{$post_title}', ";
                $query .="post_author = '{$post_author}', ";
                $query .="post_date = now(), ";
                $query .="post_content = '{$post_content}' ";
                $query .="WHERE post_id = {$post_id} ";
                
                $update_post = mysqli_query($conn, $query);
                
                if(!$update_post){
                    die("Query Fialed". mysqli_error($conn));
                }
            }
              ?>
              <style>
    .form-style{
    max-width: 500px;
    margin: 2rem auto;
    border:2px solid white;
    padding:2rem;   
    font-family: Calibre, 
     "San Francisco", "SF Pro Text", -apple-system, system-ui, BlinkMacSystemFont, 
     Roboto, "Helvetica Neue", "Segoe UI", Arial, sans-serif;
    font-size: 16px;
    color: rgb(231, 231, 231); 

        
    
}
label{
            display: block;
        }
    input, textarea{
        background-color: aliceblue;
    }

</style>
             <form class="form-style" action="" method="post">
    
    <div>
        <label for="title">Title</label>
        <input value="<?php echo $post_title; ?>" type="text" name="title">
    </div>
    
    <div>
        <label class=workTitle for="title">Author</label>
        <input value="<?php echo $post_author; ?>" type="text" name="author">
    </div>
    
    
    
    <div>
        <label for="post_content">Content</label>
        <textarea name="post_content" id="" cols="30" rows="10">
            <?php echo $post_content; ?>
          </textarea>
    </div>
    
    <div>
        <input type="submit" name="update_post" value="Update Post">
    </div>
</form>