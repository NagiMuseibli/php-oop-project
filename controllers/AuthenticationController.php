<?php
include('config/app.php');
class AuthenticationController
{
    public function __construct()
    {
        global $db;
        $this->conn = $db->conn;
        $this->checkIsLoggedIn();
    }

    private function checkIsLoggedIn()
    {
        if(!isset($_SESSION['authenticated'])){
            redirect("Login to Access to the page", "login.php");
            return false;
        }else{
            return true;
        }
    }

    public function authDetail(){
        $checkAuth = $this->checkIsLoggedIn();
        if($checkAuth){
            $user_id = $_SESSION['auth_user']['user_id'];
            $getUserData = "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
            $result = $this->conn->query($getUserData);
            if($result->num_rows > 0){
                $data = $result->fetch_assoc();
                return $data;
            }else{
                redirect("Something Went Wrong", "login.php");
            }
        }else{
            return false;
        }
    }

}


$authenticated = new AuthenticationController;