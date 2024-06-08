<?php
session_start(); 
include('includes/config.php'); 

if (!isset($_SESSION['auth'])) {
    $_SESSION['auth_status'] = "ڈیش بورڈ میں داخل ہونے کیلئے لوگ ان کریں";
    header('Location: login.php');
    exit(0);
}
else
{
    if ($_SESSION['auth'] == "1") 
    
    {
        

    }
    else
    {
        $_SESSION['status'] = "You are Not Authorized as Admin";
        header("Location: ../website.php");
        exit(0);
    }
}





?>
