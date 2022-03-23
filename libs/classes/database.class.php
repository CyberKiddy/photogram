<?php
class db_connecten
{
    private $connections;
    // public $email;
    // public $phone;
    // public $password;

    public static $conn=null;
    public function db_connection_check()
    {
        if (db_connecten::$conn==null) {
            $servername = "mysql.selfmade.ninja";
            $username = "photogram_pro";
            $password1 = "fbw@igmet@";
            $dbname= "photogram_pro_auth";

            // Create connection
            $this->connections = new mysqli($servername, $username, $password1, $dbname);
           
            // Check connection
            if ($this->connections->connect_error) {
                die("Connection failed: " . $this->connections->connect_error);
            } else {
                db_connecten::$conn=$this->connections;
                print("connection start");
                return db_connecten::$conn;
            }
        } else {
            //printf("Returning existing establishing...");
            return Database::$conn;
        }
    }
  
    public function add_information($name, $email, $phonenumber, $password)
    {
        $this->db_connection_check();
        $sql = "INSERT INTO signupauth (fullname, email,  password,active,number)
                VALUES ('$name', '$email','$password', '1', '$phonenumber')";
        $error=false;
        if ($this->connections->query($sql) === true) {
            //  echo "New record created successfully";
            $error=false;
        } else {
            echo "Error: " . $sql . "<br>" . $this->connections->error;
        }
    }
}
