<?php
$servername = "localhost";
$dBUsername = "root";
$dBPass = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPass, $dBName);

    require "header.php";

    
?>
<link rel="stylesheet" href="styles.css" type="text/css">
<div>
<style>
    .login-page{
    max-width: 500px;
    margin: 2rem auto;
    border:2px solid #333333;
    padding:3rem;   
    font-family: Calibre, 
     "San Francisco", "SF Pro Text", -apple-system, system-ui, BlinkMacSystemFont, 
     Roboto, "Helvetica Neue", "Segoe UI", Arial, sans-serif;
    font-size: 16px;
    color: rgb(231, 231, 231);  
    background-color:  #333333;
    }
    label{
            display: block;
            width: 100%;
        }
    input, textarea{
        background-color: white;
        width: 100%;
    }
    
</style>
                    <?php
                        if (isset($_SESSION['userId'])){
                            echo '
                            <form class="login-page" action="includes/logout.inc.php" method="post">
                            <button class="admin" type="submit" name="logout-submit">Logout</button>
                            </form>';
                        }
                        else{
                            echo '<form class="login-page" action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Email/Username">
                            <input type="password" name="pwd" placeholder="Password">
                            <button class="admin" type="submit" name="login-submit">Login</button>
                            <i><a href="signup.php">Sign up</a></i>
                        </form>';
                        }
    
    
                    ?> 
                    
</div>