<?php
$servername = "localhost";
$dBUsername = "root";
$dBPass = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPass, $dBName);

    require "header.php";

    
?>
<?php
            if (isset($_SESSION['userId'])){
                echo '';
            }
            else{
                echo '<p>You are logged out!</p>';
            }
        ?>
        
        <?php

            $query = "SELECT * FROM posts";
            $select_all_posts_query = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($select_all_posts_query)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_content = $row['post_content'];
                
              ?>
              <ul>
                
                      <a href="posts.php?source=add_post">Write Post</a>
                 
              </ul>
              
              
                <!-- First Blog Post -->
    <section id="studyblog" class = "sectionDiv">
        <h1 class = "sectionHeads">
            <!--USE PHP FOR THE POST TITLE HERE-->
            <?php echo $post_title?>
        </h1>
        
        <p>
            <!--USE PHP FOR THE POST ID, POST AUTOR AND DATE -->
            Post ID:
            <?php echo $post_id ?>
            <br>
            <em>By
            <?php echo $post_author?>
            <br>
            Date Published:
            <?php echo $post_date?>
            </em>
        </p>
        <hr>
        <p>
            <!--USE PHP FOR THE CONTENT -->
            <?php echo $post_content?>
        </p>
        <hr>
        <?php
            echo "<a href='edit_post.php?source=edit_post&p_id={$post_id}'>Edit</a>";
            echo "<a href='admin-blog.php?delete={$post_id}'>Delete</a>";
            ?>
            <div></div>
            <?php
                
                //STOPPED HERE, THE THE DELETE QUERY IS NOT DELETING
                //EVEYTHING ELSE IS COMPLETE ONLY DELETE AND EDIT THEN DONE
            if(isset($_GET['delete'])){
                
                $the_post_id = $_GET['delete'];
                echo $the_post_id;
                $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
                $delete_query = mysqli_query($conn, $query);
            }
                
        ?>
    </section>    
                          
        <?php                              
            }
        ?>
 
        