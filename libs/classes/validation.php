<?php
session_start();

include_once "database.class.php";
include_once "formValidation.class.php";
// class validate
// {
//     // check the form input field are not empty
//     public function __construct()
//     {
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            if (empty($_POST["name"])) {
                $_SESSION['nameErr']="Name is required";
            } else {
                $name=$_POST["name"];
            }
            if (empty($_POST["email"])) {
                $_SESSION['emailErr']="email is required";
            } else {
                $email=$_POST["email"];
            }
            if (empty($_POST["phone"])) {
                $_SESSION['phoneErr']=" Phone is required";
            } else {
                $phone=$_POST["phone"];
            }
            if (empty($_POST["password"])) {
                $_SESSION['passErr']="password is required";
            } else {
                $pass=$_POST["password"];
            }
        }
        if ($pass!=$_POST['retype']) {
            $_SESSION["passwordErr"]="enter the same password";
            header("location: /photogram1/index.php?");
        } else {
            $password_check= new checkInputs();
            $password_check->check_password_len($pass);
        }
        if (!isset($_SESSION['nameErr'])and!isset($_SESSION['emailErr'])and !isset($_SESSION['phoneErr'])and!isset($_SESSION['passErr'])and !isset($_SESSION['passwordErr']) and !isset($_SESSION['lenofpassword'])) {
            $db=new db_connecten();
            $db->add_information($name, $email, $phone, $pass); ?>
<h3>Signup succcess . Now you can <a href="/photogram1/login.php">Login here</a></h3>
<?php
        } else {
            header("location: /photogram1/index.php?");
        }
