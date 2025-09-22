<?php

     require_once("navbar.php");
        session_start();
    if(!isset($_SESSION['email'])){
        header("Location: index.php");
        exit();
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="shortcut icon" href="/img/img-07.jpg" type="image/x-icon">

    </head>
    <body>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto shadow-p4 text-dark-bold" >
                    <h2 class="text-center mb-4"><?= $_SESSION["name"] ?>'s Profile</h2>
                    <hr>

                    <div class="row mb-3">
                        <div class="col-sm-4">Name:</div>
                        <div class="col-sm-8"><?= $_SESSION["name"] ?></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">Email:</div>
                        <div class="col-sm-8"><?= $_SESSION["email"] ?></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">Phone:</div>
                        <div class="col-sm-8"><?= $_SESSION["phone"] ?></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">Address:</div>
                        <div class="col-sm-8"><?= $_SESSION["address"] ?></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">Skill:</div>
                        <div class="col-sm-8"><?= $_SESSION["skill"] ?></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">Level:</div>
                        <div class="col-sm-8"><?= $_SESSION["level"] ?></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-4">Registered At:</div>
                        <div class="col-sm-8"><?= $_SESSION["reg day and time"] ?></div>
                    </div>

                </div>
            </div>
        </div>
        
    </body>





    <?php
        require_once("footer.php");
    ?>

        <script src="js/plugins.js"></script>
        <script>
            $(window).on("load", function() {
                $('body').addClass('loaded');
            });
        </script>
    </html>
