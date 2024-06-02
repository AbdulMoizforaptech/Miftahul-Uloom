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
if(isset($_SESSION['auth']))
{
  $_SESSION['status'] = "You are Already Logged In";
  
  exit(0);
}
?>

    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 my-5">
                    <?php
                    if(isset($_SESSION['auth_status'])) {
                    ?>
                    <div class="container">
                        <div class="col-md-9">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey! </strong><?php echo $_SESSION['auth_status'];?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div> <!-- alert -->
                        </div> <!-- col-md-9 -->
                    </div> <!-- container -->
            
                    <?php
                        unset($_SESSION['auth_status']);
                    }
                    ?>

              
              <?php

                  include('message.php');

                  ?>


        <!-- <div class="d-flex justify-content-center mt-5 mb-5">
            <div class="card mb-5" style="width: 40%;"> -->

                <div class="card-body" style="font-family: Jameel Noori Nastaleeq; font-size: 20px">
                    <h2 class="card-title text-center">لاگ ان فارم</h2>
                    <form action="logincode.php" method="POST">
                        <div class="form-group mt-5">
                            <label for="email">ای میل ایڈریس</label>
                            <input type="email" name="email" class="form-control" placeholder="اپنے ای میل ایڈریس کا اندراج کریں" required>
                        </div> <!--form-group-->
                        <div class="form-group mt-2">
                            <label for="password">پاس ورڈ</label>
                            <input type="password" name="password" class="form-control" placeholder="اپنے پاس ورڈ کا اندراج کریں" required>
                        </div> <!--form-group-->
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-md btn-success" name="login">Login</button>
                        </div> <!--form-group-->
                    </form>
                </div>
            <!--/div--> <!-- card -->
        <!--/div--> <!-- d-flex justify-content-center -->
                </div> <!-- col-md-5 my-5 -->
            </div> <!-- row justify-content-center -->
        </div> <!-- container -->
    </div> <!-- section -->

    

    </body>
    </html>