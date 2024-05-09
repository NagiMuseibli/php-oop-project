<?php
global $db;
include_once('controllers/RegisterController.php');
include_once('controllers/LoginController.php');


$auth = new LoginController;

/**
 * Logout
 */
if(isset($_POST['logout_btn'])){
    $checkLogout = $auth->logout();
    if($checkLogout){
        redirect("Logged Out Successfully", "login.php");
    }
}
/**
 * Login
 */

if(isset($_POST['login_btn'])){
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);


    $checkLogin = $auth->userLogin($email,$password);
    if($checkLogin){
        redirect("Login Successfully", "index.php");
    }else{
        redirect("Invalid email or password", "login.php");
    }
}

/**
 * Registration
 */
if(isset($_POST['register_btn'])){
    $fname = validateInput($db->conn, $_POST['fname']);
    $lname = validateInput($db->conn, $_POST['lname']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);
    $register = new RegisterController;

    $result_password = $register->confirmPassword($password,$confirm_password);
    if($result_password){
        $resultUser = $register->isUserExists($email);
        if($resultUser){
            redirect("User already exist","register.php");
        }else{
            $register_query = $register->registration($fname,$lname,$email,$password);
            if($register_query){
                redirect("Registered Successfully","login.php");
            }else{
                redirect("Something went wrong","register.php");
            }
        }
    }else{
        redirect("Password and Confirm Password does not match","register.php");
    }
}


