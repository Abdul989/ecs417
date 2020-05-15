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
                echo '<p>You are logged in!</p>';
            }
            else{
                echo '';
            }
        ?>
        
        <?php

            $query = "SELECT * FROM posts";
            $select_all_posts_query = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($select_all_posts_query)){
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_content = $row['post_content'];
                $post_title;
              ?>
              
              
                <!-- First Blog Post -->
    <section id="studyblog" class = "sectionDiv">
        <h1 class = "sectionHeads">
            <!--USE PHP FOR THE POST TITLE HERE-->
            <?php echo $post_title?>
        </h1>
        <p>
            <!--USE PHP FOR THE POST AUTOR AND DATE -->
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
        
    </section>    
                          
        <?php                              
            }
        ?>
 
        