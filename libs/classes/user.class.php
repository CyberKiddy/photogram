<?php
include_once "database.class.php";
class user
{
    public static function add_information($name, $email, $phonenumber, $password)
    {
        $connection=db_connecten::db_connection_check();
        $sql = "INSERT INTO signup (fullname, email, phone, password,active)
                VALUES ('$name', '$email','$phonenumber','$password', '1' )";
        $error=false;
        if ($connection->query($sql) === true) {
            //  echo "New record created successfully";
            $error=false;
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}
