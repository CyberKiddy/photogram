<?php
include_once "database.class.php";
class user
{
    public static function add_information($name, $email, $phonenumber, $password)
    {
        $password = md5(strrev(md5($password)));
        $connection=db_connecten::db_connection_check();
        $sql = "INSERT INTO signupauth (fullname, email, phone, password,active)
                VALUES ('$name', '$email','$phonenumber','$password', '1' )";
        $error=false;
        if ($connection->query($sql) === true) {
            //  echo "New record created successfully";
            $error=false;
        } else {
            $error= $connection->error;
        }
        return $error;
    }
    public static function login($email, $password)
    {
        $password = md5(strrev(md5($password)));
        $query = "SELECT * FROM `signupauth` WHERE `email` = '$email'";
        $conn = db_connecten::db_connection_check();
        $result = $conn->query($query);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($row['password'] == $password) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public static function check_already_signup($name, $email, $phonenumber, $password)
    {
        $query ="SELECT * FROM `signupauth` WHERE `email` = '$email'";
        $conn = db_connecten::db_connection_check();
        $result = $conn->query($query);
        if ($result->num_rows ==1) {
            echo  $_SESSION['already']= "Already a user";
        }
        if ($result->num_rows==0) {
        }
    }
}
