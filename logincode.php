
<?php
session_start();
include('includes/config.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo $email . "<br>" . $password;

    $log = "SELECT * FROM role WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn , $log);
    

    
    if (mysqli_num_rows($result)>0){
        foreach ($result as $rows){
            $user_id = $rows['id'];
            $user_name = $rows['name'];
            $user_email = $rows['email'];
            $user_password = $rows['password'];
            $user_role = $rows['role'];
        }
        $_SESSION['auth'] = $user_role;
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_email' => $user_email,
        ];

        $_SESSION['status'] = "Login Successfully";
        if ($user_role == "admin") {
            header("Location: dashboards/admin.php");
        } elseif ($user_role == "teacher"){
            header("Location: dashboards/teachers.php");
        }elseif ($user_role == "parents") {
            header("Location: dashboards/parents.php");
        } else {
            $_SESSION['status'] = "درج کی گئیں معلومات غلط ہیں";
            header("Location: login.php");
        }
    } else {
        $_SESSION['status'] = "ای میل ایڈریس یا پاس ورڈ غلط ہے";
        header("Location: login.php");
    }
    
} else {
    $_SESSION['status'] = "رسائی مسترد کردی گئی ہے";
    header("Location: login.php");
}
?>