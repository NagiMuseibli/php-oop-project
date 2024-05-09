<?php

include_once('controllers/AuthenticationController.php');
global $authenticated;
$data = $authenticated->authDetail();
include('includes/header.php');
include('includes/navbar.php');
?>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include('message.php')?>
                    <h1>My Profile Page</h1>
                    <hr>
                    <h4>Full Name: <?= $data['fname'].' '.$data['lname']  ?></h4>
                    <h4>Email: <?= $data['email'];  ?></h4>
                    <h4>Created_at: <?= date('d-m-Y', strtotime($data['created_at'])) ?></h4>
                </div>
            </div>
        </div>
    </div>

<?php
include('includes/footer.php');
?>