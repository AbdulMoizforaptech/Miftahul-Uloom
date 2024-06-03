<h1>Parents dashboard</h1><br>

<form action="" method="post">
<button name="logout">Logout</button>
</form>

<?php
session_start();
include("../includes/config.php");
if(isset($_POST['logout']))
{
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);


    $_SESSION['status'] = "آپ کامیابی سے لاگ آؤٹ ہوگئے ہیں";
    header('Location: ../login.php');
    exit(0);
}
?>