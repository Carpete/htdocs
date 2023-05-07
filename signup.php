<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="mt-2">
<div class="container  bg-white">
        <div class="row">
        <div class="col-md-6 c-custom-login-signup-leftside p-4">
        <a href="index.php"><img class="w-25 mb-4" src="images/Frame1.png"></a> 
                <h2 class="mt-4 display-5 fw-bold">Let us deal with your finances.</h2>
                <p class="pt-3">
                Our registration process is quick and easy.
                </p>
            </div>
            <div class="col-md-6 p-4">
                <h2 class="mt-4 display-5 fw-bold">Get started</h2>
                <p class="mt-4">Create your account now.</p>
                <form method="post" action="php_includes/signup_script.php">
                    <div class="mb-4 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="*******" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Check password</label>
                        <input type="password" name="passcheck" class="form-control" id="exampleInputPassword1" placeholder="*******" required>
                    </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4" name="submit">Sign Up</button>
                </form>
                <p class="mt-3 text-center">Already have an account? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>