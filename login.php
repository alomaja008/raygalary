<?php

    session_start();

    $errors = [
        'login.php' => $_SESSION['login_error'] ?? '',
        'Register.php' => $_SESSION['Register_error'] ?? ''
    ];
    $activeForm = $_SESSION['active_form'] ?? 'login.php';

    session_unset();

    function showError($error) {
        return !empty($error) ? "<p class 'error-message'>$error</p>" : '';
    }

    function isActiveForm($formName, $activeForm) {
        return  $formName === $activeForm ? 'active' : '';
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ray Gallery Login page</title> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">


</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
        

    </div>

       </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                RAY-G
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="Register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.php">Explore</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

        
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
           
            <div class="col-lg-4 col-12 mb-8">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5"><small>Our Address</small></h2>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: alomajaemmanuel4@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Tel: +234-906-8938-069
                                <br>
                               &nbsp;&nbsp;&nbsp; <i class="fas fa-phone"></i>
                                Tel: +234-810-8161-547
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-globe"></i>
                                URL: www.raygallery.com
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
                <br>
                <br>
                <br>
                
            <div class="col-lg-4 col-12 mb-8" style="box-sizing: border-box; border:2px"<?= isActiveForm('login.php', $activeForm); ?> id="login.php">

                <form id="contact-form" action="login_register.php" method="post" class="tm-contact-form mx-auto">

                    <h1 class="tm-text-primary mb-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Login Page</b></h1>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= showError($errors['login.php']);  ?>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="password" required />
                    </div>
                               
                      <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary" id="Login" name="Login">Login</button>
                    </div>
                    
                  
                     
                     <p class="mb-4">
                        Don't have account?<a href="Register.php" target="_parent" rel="sponsored">Creat Account</a>
                    </p>
                </form>                
            </div>

            <div class="col-lg-3 col-8" ">
                <h2 class="tm-text-primary mb-5"><small>Our Location</small></h2>
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap-canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.955447015798!2d5.731672070375991!3d7.4701722949806655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104634b6c837981f%3A0x9c1bbcbbf5ed8ce2!2sAkungba%20Town%20Hall!5e0!3m2!1sen!2sng!4v1756198545382!5m2!1sen!2sng" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>  
                    </div>
                </div>               
            </div>
        </div>
        
    <?php 
    require_once ('footer.php');
    ?>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>