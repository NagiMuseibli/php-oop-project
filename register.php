<?php
include('config/app.php');
global $auth;
$auth->isLoggedIn();
include('includes/header.php');
include('includes/navbar.php');
?>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php include('message.php'); ?>
                    <div class="card>">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group mb-3">
                                    <label>First Name:</label>
                                    <input type="text" name="fname" placeholder="Enter Your First Name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Last Name:</label>
                                    <input type="text" name="lname" placeholder="Enter Your Last Name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email Id:</label>
                                    <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Password:</label>
                                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Confirm Password:</label>
                                    <input type="password" name="confirm_password" placeholder="Confirm Paswword" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
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