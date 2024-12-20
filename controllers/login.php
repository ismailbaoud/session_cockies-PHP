<?php 
session_start();
    if(isset($_POST["login"])){
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        
        $_SESSION["username"] = $userName;
        $_SESSION["password"] = $password;
        $remember_me = isset($_POST["remember_me"]);

        if(!empty($_SESSION["username"]) || !empty($_SESSION["password"])){
            if ($remember_me) {

                setcookie("remember_me", $username, time() + 3600 * 24 * 30);
      
            }
            header('location:../views/home_page.php');
        }else{
            
            header('location:../index.php');
        }
        echo $_SESSION["username"];
        echo $_SESSION["password"];
        
        
    }
?>