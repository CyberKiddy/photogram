<?php
class db_connecten
{
    private $connections;
    // public $email;
    // public $phone;
    // public $password;

    public static $conn=null;
    public static function db_connection_check()
    {
        if (db_connecten::$conn==null) {
            $servername = "mysql.selfmade.ninja";
            $username = "photogram_";
            $password1 = "bluethrottler";
            $dbname= "photogram__signup";

            // Create connection
            $connection = new mysqli($servername, $username, $password1, $dbname);
           
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            } else {
                db_connecten::$conn=$connection;
                //print("connection start");
                return db_connecten::$conn;
            }
        } else {
            //printf("Returning existing establishing...");
            return Database::$conn;
        }
    }
}
