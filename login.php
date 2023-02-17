<?php
include('config/app.php');
include('codes/authentication_code.php');
include('includes/header.php');
include('includes/navbar.php');


$auth->isLoggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOPS - Insert Data into database in php mysql using oops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
   <div class="py-5"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                 <?php include('message.php');  ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Login Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                           
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" required class="form-control" />
                            </div>
                          
                            <div class="mb-3">
                                <button type="submit" name="login_btn" class="btn btn-primary block">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php

include('includes/footer.php');
?>
