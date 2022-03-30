<?php

use LDAP\Result;

session_start();
include "require.class.php";
include "user.class.php";


$email=$_POST['email'];
$pass=$_POST['password'];

if (isset($email) and isset($pass)) {
    $result=user::login($email, $pass);
}
