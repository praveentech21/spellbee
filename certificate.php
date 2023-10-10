<!DOCTYPE html>
<html lang="en">

<?php

include "connect.php";
if (isset($_POST['newregistration'])) {
    $mobile = $_POST['mobile'];
    $recaptchaResponse = $_POST['h-captcha-response'];


    $secretKey = "ES_6aec8d63fca04791b4648bc8c74b15bd"; // Replace with your Secret key
    $url = "https://hcaptcha.com/siteverify";
    $data = [
        "secret" => $secretKey,
        "response" => $recaptchaResponse,
    ];  

    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, $url);
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    $responseData = json_decode($response);

    if ($responseData->success) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE  `pid` = '$mobile' and `points` is NOT NULL")) != 1) {
            echo "<script>alert('You have not Completed the game go and play game in Campus Online Stalls');</script>";
        } else {
          header("Location: certificate/certificate.php?rollno=$mobile");
        }
    }
    else {
        echo "<script>alert('Please verify captcha');</script>";
    }
}
?>


<head>
    <meta charset="utf-8">
    <title>Certificate - Spell Bee</title>
    <link rel="shortcut icon" href="assets/onepage/img/cup.png">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Global styles BEGIN -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="assets/pages/css/animate.css" rel="stylesheet">
    <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="scratch/test.css">



    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="assets/pages/css/components.css" rel="stylesheet">
    <link href="assets/pages/css/slider.css" rel="stylesheet">
    <link href="assets/onepage/css/style.css" rel="stylesheet">
    <link href="assets/onepage/css/style-responsive.css" rel="stylesheet">
    <link href="assets/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="assets/onepage/css/custom.css" rel="stylesheet">
    <script src='https://www.hCaptcha.com/1/api.js' async defer></script>

    <!-- Theme styles END -->


    <style type='text/css'>
        .blink {
            animation: blink-animation 3s steps(5, start) infinite;
            -webkit-animation: blink-animation 3s steps(5, start) infinite;
        }

        @keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }
    </style>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">


    <?php include "header.php"; ?>

    <!-- About block BEGIN -->
    <div class="about-block content content-center" id="about">
        <div class="container">

            <br>
            <h3><strong><b>SRKR SPELL BEE</b></strong> 2K23</h3>


            <div class="col-md-4"></div>

            <div class="col-md-4">

                <h3><strong>Online Certificate</strong><br></h3>
                <h3 id="error_register"><strong></strong><br></h3>

                <form class="contact-form" id='reg1' method='post' action='#'>
          <input type="text" name='mobile' id="name" placeholder="Your Mobile Number" class="form-control" autocomplete="off" autofocus>
          <div id="name-error" class="error"></div>
          <br><br>

          <div class="h-captcha" data-sitekey="f6892b7e-56c6-4010-a3c0-2878d8437349"></div>
          <br><br>

          <center><input type="submit" name="newregistration" class="button" style='background-color:#C91E3E;color:#ffff;font-weight:bold;padding:5px;' value="Download Now" id="regbutton"></center>

        </form>

                <br><br>
                <h3><strong>NOTE: </strong> You can Pay money in our stalls and confirm you Registration, If you want to
                    pay money online you can <strong><a href="https://pages.razorpay.com/pl_MUwbEmBPOkmZtK/view" target="_blank">Register Here</a></strong>.</h3>
                    <br><br>
                <!-- <br><br><br><br><br><br><br><br><br><br><br> -->

            </div>
        </div>
    </div>
    <!-- About block END -->


    <?php include "footer.php"; ?>

    <script>
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>
    <!-- Global js END -->
    <script src="assets/onepage/scripts/bootbox.min.js" type="text/javascript"></script><!-- pop up -->



</body>

</html>