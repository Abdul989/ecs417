<?php



if(isset($_GET['source'])){
    $source = $_GET['source'];
}
else{
    $source = '';
}

switch($source){
       
        case 'login';
        include "login-page.php";
        break;
        
        case 'logout';
        if (!isset($_SESSION['userId'])){
                
                echo '<p>You are logged out!</p>';
                $login = "<a href='login-page.php?source=login'>Login</a>";
            }
        break;
        
        case 'signup';
        include "edit_post.php";
        break;
  
        default;
        
        include "includes/view_all_posts.php";
}



if(isset($_POST['login-submit'])){

    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){ 
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if($pwdCheck == false){
                    header("Location: ../index.php?error=wrongpwd");
                    exit(); 
                }
                else if($pwdCheck ==true){
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUId'] = $row['uidUsers'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../index.php?error=wrongpwd");
                    exit();
                }
            }

            else{
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }

}


else{
header("Location: ../index.php");
exit();
}

?>
