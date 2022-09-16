<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container-fluid main overflow-hidden bg-index">
        <div class="row my-2 d-flex justify-content-lg-between ">
            <div class="col-lg-8 col-12 ">
                <p class="h2 text-primary" style="padding-top: 6px;">Hospital Management System</p>
            </div>
            <div class="col-lg-4 col-12 d-flex btn-group">
                <a href="index.php" class="btn btn-primary p-3 px-4">HOME</a>
                <a href="contact.php" class="btn btn-primary p-3 px-4">CONTACT</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/slider-image1.jpg" alt="Los Angeles" class="d-block w-100" style="height: 60vh;object-fit:cover">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/slider-image2.jpg" alt="Chicago" class="d-block w-100" style="height: 60vh;object-fit:cover">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/slider-image2.jpg" alt="New York" class="d-block w-100" style="height: 60vh;object-fit:cover">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row p-3 d-flex justify-content-evenly align-items-center bg-primary">
            <div class="col-lg-3 rounded-12 my-2 d-flex bg-light py-2 px-1  login-box">
                <i class="fa fa-3x fa-hospital my-auto mx-3 text-primary"></i>
                <div class="d-flex flex-column w-100 justify-content-center">
                    <h4 class="text-primary ">Petients</h2>
                        <span class="text-primary fs10">Register and book appointment</span>
                        <a href="./hms/user-login.php" class="fs16 text-decoration-none text-secondary">Click Here</a>
                </div>
            </div>
            <div class="col-lg-3 rounded-12 my-2 d-flex bg-light py-2 px-1 login-box">
                <i class="fas fa-3x fa-user-md my-auto mx-3 text-primary"></i>
                <div class="d-flex flex-column w-100 justify-content-center">
                    <h4 class="text-primary ">Doctors Login</h4>
                    <a href="./hms/doctor/index.php" class="fs16 text-decoration-none text-secondary">Click Here</a>
                </div>
            </div>
            <div class="col-lg-3 rounded-12 my-2 d-flex bg-light py-2 px-1 login-box">
                <i class="fa fa-3x fa-hospital my-auto mx-3 text-primary"></i>
                <div class="d-flex flex-column w-100 justify-content-center">
                    <h4 class="text-primary ">Admin Login</h4>
                    <a href="./hms/admin/index.php" class="fs16 text-decoration-none text-secondary">Click Here</a>
                </div>
            </div>
        </div>
    </div>

    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>