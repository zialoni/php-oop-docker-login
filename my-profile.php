<?php

include('config/app.php');
include_once('controllers/AuthenticationController.php');



include('includes/header.php');
include('includes/navbar.php');
$authenticated = new AuthenticationController;
$data = $authenticated->authDetail();

?>

<div class="py-5">
    <div class="container">
        <?php include('message.php')  ?>
     
        <h1>Profile Page</h1>
         <?php  echo "<pre>";
         print_r($data);
            ?>
    </div>

</div>

<?php

include('includes/footer.php');
?>