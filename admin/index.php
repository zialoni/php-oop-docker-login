<?php


include('../config/app.php');
include_once('../controllers/AuthenticationController.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include('includes/header.php');
include('includes/navbar.php');
?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                    <h1>Welcome to dashboard</h1>
           


<?php

include('includes/footer.php');

?>