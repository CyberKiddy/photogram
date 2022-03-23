<?php
session_start();
class checkInputs
{
    public function check_password_len($password)
    {
        if (strlen($password)<8) {
            $_SESSION['lenofpassword']="Enter atleast 8 length for security purpose";
            header("location: /photogram1/index.php?");
        } else {
        }
       
    }
}
