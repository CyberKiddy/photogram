<?php
session_start();?>
<!DOCTYPE html>

<html>

<head>
    <?php include "_load.php";?>
    <?php include "validation.php";
  //  include "/libs/classes/database.class.php";?>


    <?load_template("_head");?>
</head>

<body>


    <main>
        <?load_template("_signup")?>

    </main>
</body>

</html>
<?php session_destroy();
