<?php
//  session_start();
class checkInputs
{
    // check the form input field are not empty
    
    // public function submit()
    // {
    //     if ($_SERVER["REQUEST_METHOD"]=="POST") {
    //         if (empty($_POST["name"])) {
    //             $_SESSION['nameErr']="Name is required";
    //         }// else {
    //         $this-> name=$post["name"];
    //     }
    //     if (empty($post["email"])) {
    //         $_SESSION['emailErr']="email is required";
    //         return $_SESSION['emailErr'];
    //     } else {
    //         $this-> email=$_POST["email"];
    //     }
    //     if (empty($post["phone"])) {
    //         $_SESSION['phoneErr']=" Phone is required";
    //     } else {
    //         $this->phone=$_POST["phone"];
    //     }
    //     if (empty($post["password"])) {
    //         $_SESSION['passErr']="password is required";
    //     } else {
    //         $this->pass=$_POST["password"];
    //     }
    // }
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
    public function check_password_len($password)
    {
        if (empty($password)) {
            $_SESSION['passErr']="Password must be Required";
        }
        if (strlen($password)<8) {
            $_SESSION['lengthErr']="Enter atleast 8 length for security purpose";
            // session_destroy($_SESSION['passcheckErr']);
        }
        // if ($password != $retype) {
        //     $_SESSION['passcheckErr']="please Enter a same  password ";
        // }
        
        
        
       
        //}
    }
    // public function check_password_length($password)
    // {
    //     if (!empty($password)) {
    //         if (strlen($password)<8) {
    //             $_SESSION['lengthErr']="Enter atleast 8 length for security purpose";
    //         }
    //     }
    // }
}
