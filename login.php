<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="transition.css" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="mt-2">

<div class="container  bg-white">
        <div class="row">
        <div class="col-md-6 c-custom-login-signup-leftside p-4">
                <a href="index.php"><img class="w-25 mb-4" src="images/Frame1.png"></a> 
                <h2 class="mt-4 display-5 fw-bold">Welcome back.</h2>
                <p class="pt-3">
                We can wait to show the new stuff we are working in.
                </p>
            </div>
            <div class="col-md-6 p-4">
                <h2 class="mt-4 display-5 fw-bold">Login</h2>
                <p class="mt-4">Acess your account down here.</p>
                <form method="post" action="php_includes/login_script.php">
                    <div class="mb-4 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com" required>
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="*******" required>
                    </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4" name="submit" >Login</button>
                </form>
                <p class="mt-3 text-center">Not registered yet? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/login.js"></script>  
</body>
</html>
</body>
</html>