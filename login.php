<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لاگ ان</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="data/images/Falah Logo png.png">
</head>
<body>
    

    <?php

session_start();
include('includes/config.php');
if(isset($_SESSION['auth']))
{
  $_SESSION['status'] = "آپ پہلے سے لاگ ان ہیں";
  $log = "SELECT * FROM role";
    $result = mysqli_query($conn , $log);
    

    
    if (mysqli_num_rows($result)>0){
        foreach ($result as $rows){
            $user_id = $rows['id'];
            $user_name = $rows['name'];
            $user_email = $rows['email'];
            $user_password = $rows['password'];
            $user_role = $rows['role'];
        }
  if ($user_role == "admin") {
    header("Location: dashboards/admin.php");
} elseif ($user_role == "teacher"){
    header("Location: dashboards/teachers.php");
}elseif ($user_role == "parents") {
    header("Location: dashboards/parents.php");
}

}
exit(0);
}

?>

    <div class="section">
      <div class="container">
        <div class="row justify-content-center">
              <div class="col-md-5 my-5">
            <?php
          // session_start();
          if(isset($_SESSION['auth_status'])) {
          ?>
            <div class="container">
            <div class="col-md-9">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <?php echo $_SESSION['auth_status'];?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            </div>
            </div>
            
          <?php
                  unset($_SESSION['auth_status']);
              }
    ?>

              
              <?php

                  include('message.php');

                  ?>
                  <div class="card my-5" style="font-family: Jameel Noori Nastaleeq; font-size: 20px">
                      <div class="card-header bg-light text-center">
                              <h2>لاگ ان فارم</h2>
                      </div>
                      <div class="card-body">
                    <form action="logincode.php" method="POST">
                        <div class="form-group mt-2">
                            <label for="email">ای میل ایڈریس</label>
                            <input type="email" name="email" class="form-control" placeholder="اپنے ای میل ایڈریس کا اندراج کریں" required>
                        </div> <!--form-group-->
                        <div class="form-group mt-2">
                            <label for="password">پاس ورڈ</label>
                            <input type="password" name="password" class="form-control" placeholder="اپنے پاس ورڈ کا اندراج کریں" required>
                        </div> <!--form-group-->
                        <div class="form-group mt-3 mb-2">
                            <button type="submit" class="btn btn-md btn-success" name="login">Login</button>
                        </div> <!--form-group-->
                    </form>
                </div>
                  </div>
              </div>
        </div>
      </div>
    </div>

<?php




?>

    </body>
    </html>