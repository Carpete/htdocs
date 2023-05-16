<?php

if(isset($_POST["submit"]))
{
    // Grab user information
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    // Instantiate SignupContr class
    include "../php_classes/dbh_classes.php";
    include "../php_classes/login_classes.php";
    include "../php_classes/login_control_classes.php";
    $login = new LoginContr($email, $pass);


    // Running error handlers and users signup
    $login->loginUser();
    // Redirect to dashboard.php
    header("location: ../welcome.php");
} 