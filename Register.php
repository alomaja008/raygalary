<?php

    session_start();

    $errors = [
        'Register.php' => $_SESSION['Register_error'] ?? '',
        'login.php' => $_SESSION['login_error'] ?? ''
    ];
    $activeForm = $_SESSION['active_form'] ?? 'Register.php';

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
    <title>Ray Gallery Register page</title>
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
                    <a class="nav-link nav-link-1 active" aria-current="page" href="login.php">Login</a>
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
                
            <div class="col-lg-4 col-12 mb-8" style="box-sizing: border-box; border:2px">
                
                <form id="contact-form" action="login_register.php" method="post" <?= isActiveForm('Register.php', $activeForm); ?> id="Register.php" class="tm-contact-form mx-auto">
                    <h1 class="tm-text-primary mb-5">Register Page</h1>
                         <?= showError($errors['Register.php']);  ?>;
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Don Joe" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="donjoe@gmail.com" required />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= showError($errors['Register.php']);  ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="password" required />
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" maxlength="15" id="phone" class="form-control rounded-0" placeholder="+234-080-000" required autocomplete="true" />
                    </div>
                    <div class="form-group">
                        <input type="Address" name="address" id="address" class="form-control rounded-0" placeholder="Enter your Home Address" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="select" name="skill">
                            <option value="-">choose your Tech skill</option>
                            <hr>
                            <option value="sales">Sales &amp; Marketing</option>
                            <option value="Creative Design">Creative Design</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Robotics Engineer">Robotics Engineer</option>
                            <option value="Cyber Crime / Cyber Security">Cyber Crime / Cyber Security</option>
                            <option value="Freelancing">Freelancing</option>
                            <option value="Product Design">Product Design</option>
                            <option value="Product Management">Product Management</option>
                            <option value="UI / UX">UI / UX</option>
                            <option value="Website Design">Web Design</option>
                            <option value="Network Management">Network Management</option>
                            <option value="Website Development">Web Development</option>
                            <option value="Video Editor">Video Editor</option>
                            <option value="Graphics Design">Graphics Design</option>
                            <option value="Network Security Management">Network Security Design</option>
                            <option value="IT Tech">IT Tech</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Others"> Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="select1" name="level">
                            <option value="-">Level of Experience</option>
                            <hr>
                            <option value="Professional">Advanced Pro</option>
                            <option value="Advanced">  Professional</option>
                            <option value="Advanced"> Advanced Level</option>
                            <option value="Intermediate"> Intermediate </option>
                            <option value="Beginner"> Beginner </option>
                            <option value="others"> Others </option>
                        </select>
                    </div>
                    
                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary" id="register" name="register">Register Now</button>
                    </div>

        
                    <p class="mb-4">
                        Already have account?<a href="login.php" target="_parent" rel="sponsored"> Continue Login</a>
                    </p>
                </form>                
            </div>

            <div class="col-lg-3 col-8" style="margin-left: 5%;">
                <h2 class="tm-text-primary mb-5"><small>Our Location</small></h2>
                <!-- Map -->
                <div class="mapouter mb-4">
                    <div class="gmap-canvas">
                        <iframe width="150%" height="230" id="gmap-canvas"
                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="true" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>               
            </div>
        </div>
      
        <?php require_once ('footer.php')?>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>
