<?php
include('config/app.php');
include('codes/authentication_code.php');
include('includes/header.php');
include('includes/navbar.php');

$auth->isLoggedIn();
?>

   <div class="py-5"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                 <?php include('message.php');  ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="text" name="confirm_password" required class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary block">Submit</button>
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
