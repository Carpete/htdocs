<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="welcome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/40cabe5444.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Welcome</title>
</head>
<body>

    <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-2 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 c-custom-logo2index">
                <a href="index.php" class="d-flex align-items-center pb-4 mb-md-0 me-md-auto text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline"><img src="images/logo5.png"></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="welcome.php" class="nav-link align-middle px-0">
                        Welcome
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link align-middle px-0">
                        Dashboard
                        </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        </ul>
                    </li>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        </ul>
                </ul>
            </div>
        </div>
        <div class="col py-3 c-custom-main-page center d-flex justify-content-center">
            <?php
                if(isset($_SESSION["useremail"]))
                {
            ?>
            <h2 class="display-5">Welcome, <span><?php echo $_SESSION["useremail"]; ?></span></h2>
            <?php
                  }
            ?>

    </div>
    </div>
    </div>
</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>