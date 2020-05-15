<?php
    require "header.php";
?>

    <main>
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
        <div>
            <section>
                <form class=login-page action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <button class=admin type="submit" name="signup-submit">Signup</button>

                </form>
            </section>
        </div>

    </main>


<?php
    require "footer.php";
?>