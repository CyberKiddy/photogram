<?php
 session_start();
include_once "database.class.php";
 include_once "user.class.php";
 include_once "require.class.php";
//set a all datas
 $pass=$_POST["password"];
 $name=$_POST["name"];
 $phone=$_POST["phone"];
 $email=$_POST["email"];
 
 //create a objects
 $signup_validation= new checkInputs();
 $login_validation=new checkInputs();

$check_signup=false;

//check all field are have a valuble data
$signup_validation->check_name($_POST['name']);
$signup_validation->check_email($_POST['email']);
$signup_validation->check_phone($_POST['phone']);
$signup_validation->check_password_len($_POST['password'], $_POST['retype']);



//send a data to database to signup
 
     if (empty($_SESSION['nameErr'])and empty($_SESSION['emailErr'])and empty($_SESSION['phoneErr'])
    and empty($_SESSION['passErr'])and empty($_SESSION['lengthErr'])) {
         //check if already a user
         //$check=false;

         
         //user::check_already_signup($name, $email, $phone, $pass);
         //  if (strlen(($_SESSION['already']))>1) {
         //      echo  $_SESSION['already'];
        
         // $check=true;
         // }
           // if (strlen(($_SESSION['already']))==0) {
               
             user::add_information($name, $email, $phone, $pass)?>
<h3>Signup succcess . Now you can <a href="/photogram1/login.php">Login here</a></h3>

<?php
        // }
     } else {
         header("location: /photogram1/");
     }
