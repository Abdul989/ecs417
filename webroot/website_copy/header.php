<?php
session_start();
?>
<!DOCTYPE html>
<?php
            
            if (isset($_SESSION['userId'])){
                
                $blog = '<a href="/website_copy/admin-blog.php">Blog</a>';
                
            }
            else{
                $blog = '<a href="/website_copy/blog.php">Blog</a>';
                
            }
        ?>
<html>

    <head>
        <meta charset = 'UTF-8' >
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
        <title>Abdul Shariff</title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="stylesheet" href="reset.css" type="text/css">


    </head>

    <body>

        <header>        
            
                <nav>
                    <ul class = nav_links>                  
                        <li>
                            <?php 
                                echo'<a href="/website_copy/index.php">Home</a>';
                            ?>                           
                        </li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li>
                            <?php 
                                echo "$blog";
                            ?>                           
                        </li>
                        <li>
                           <?php
                            if(isset($_SESSION['userId'])){
                                echo '
                            <form action="includes/logout.inc.php" method="post">
                            <button class="admin" type="submit" name="logout-submit">Logout</button>
                            </form>';
                            }
                            else{
                                echo '<a href="/website_copy/login-page.php">Login</a>';   
                                
                            }
                            ?>
                        </li>
                    </ul>                                 
                </nav> 
            

                
                
        </header>