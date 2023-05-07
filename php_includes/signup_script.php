<?php

if(isset($_POST["submit"]))
{
    // Grab user information
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passCheck = $_POST["passcheck"];

    // Instantiate SignupContr class
    include "../php_classes/dbh_classes.php";
    include "../php_classes/signup_classes.php";
    include "../php_classes/signup_control_classes.php";
    $signup = new SignupContr($email, $pass, $passCheck);


    // Running error handlers and users signup
    $signup->signupUser();
    // Redirect to dashboard.php
    header("location: ../login.php");
} 