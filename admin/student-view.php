<?php


include('../config/app.php');
include_once('../controllers/AuthenticationController.php');


$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('../controllers/StudentController.php');

include('includes/header.php');
include('includes/navbar.php');

?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                     <div class="col-md-12">
                         <?php include("../message.php") ?>
                         <div class="card">
                             <div class="card-header">
                                <h2>Student View</h2>
                             </div>
                             <div class="card-body">
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead>
                                         <tr>
                                             <th>ID</th>
                                             <th>Full Name</th>
                                             <th>Email</th>
                                             <th>Phone</th>
                                             <th>Course</th>
                                             <th>Edit</th>
                                             <th>Delete</th>
                                         </tr>
                                         </thead>
                                     <tbody>
                                         <?php
                                            $student = new StudentController;
                                            $result = $student->index();
                                            if($result)
                                            {
                                                foreach($result as $row)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td> <?= $row['id']?> </td>
                                                            <td> <?= $row['fullname']?> </td>
                                                            <td> <?= $row['email']?> </td>
                                                            <td> <?= $row['phone']?> </td>
                                                            <td> <?= $row['course']?>  </td>
                                                            <td>
                                                                <a href="student-edit.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a href="" class="btn btn-danger">Delete</a>
                                                            </td>
                                                        
                                                        </tr>
                                                    <?php
                                                }

                                            }
                                            else{
                                                echo "No Record Found";
                                            }

                                         ?>
                                       
                                     </tbody>
                                     </table>

                                 </div>

                             </div>

                         </div>
                     </div>
           


<?php

include('includes/footer.php');

?>