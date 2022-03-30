<?php
//  session_start();
class checkInputs
{
    // check the form input field are not empty
   
    public function check_name($name)
    {
        if (empty($name)) {
            $_SESSION['nameErr'] ="Name must be Required";
            // header("location: /photogram1/index.php?");
            //return $NameErr;
        }
    }
    public function check_email($email)
    {
        if (empty($email)) {
            $_SESSION['emailErr'] = "Email must be Required";
            
            //return $result;
        }
    }
    public function check_phone($phone)
    {
        if (empty($phone)) {
            $_SESSION['phoneErr']="Phone must be Required";
           
            //return $result;
        }
    }
    public function check_password_len($password, $retype)
    {
        if (empty($password)) {
            $_SESSION['passErr']="Password must be Required";
        }
        if ($password != $retype) {
            $_SESSION['passcheckErr']="please Enter a same  password ";
        }
        if (strlen($password)<8) {
            session_destroy($_SESSION['passcheckErr']);
            $_SESSION['lengthErr']="Enter atleast 8 length for security purpose";
        }
       
        
        
        
       
        //}
    }
}
