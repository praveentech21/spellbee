<!DOCTYPE html>
<?php

$dept = $_GET['dept'];

if ($dept == 'CSE') {
    $fdept = "COMPUTER SCIENCE & ENGINEERING";
} elseif ($dept == 'ECE') {
    $fdept = "ELECTRONICS & COMMUNICATION ENGINEERING";
} elseif ($dept == 'EEE') {
    $fdept = "ELECTRICAL & ELECTRONICS ENGINEERING";
} elseif ($dept == 'MECH') {
    $fdept = "MECHANICAL ENGINEERING";
} elseif ($dept == 'CIVIL') {
    $fdept = "CIVIL ENGINEERING";
} elseif ($dept == 'IT') {
    $fdept = "INFORMATION TECHNOLOGY";
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Leaderboard - SpellBee SRKR</title>
    <link rel="icon" type="image/x-icon" href="assets/onepage/img/slider/cup.png" />


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
        .container .ul .li {
            size: 50px;
        }
    </style>

</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">

    <?php include "header.php"; ?>
   <!-- About block BEGIN -->
   <div class="about-block content content-center" id="about">
        <div class="container">
            <br>
            <br>
            <h2><strong><b><?php echo $dept; ?> LEADERBOARD</b></strong><br><?php echo $dept; ?></h2>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h3 style="text-align:center">LEADERBOARD TO BE UPDATED SOON!!</h3>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- About block END -->


    <?php  include('footer.php'); ?>

    <!-- END FOOTER -->
    <a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>

    <!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<![endif]-->
    <!-- Load JavaScripts at the bottom, because it will reduce page load time -->
    <!-- Core plugins BEGIN (For ALL pages) -->
    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Core plugins END (For ALL pages) -->
    <!-- Core plugins BEGIN (required only for current page) -->
    <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="assets/plugins/jquery.easing.js"></script>
    <script src="assets/plugins/jquery.parallax.js"></script>
    <script src="assets/plugins/jquery.scrollTo.min.js"></script>
    <script src="assets/onepage/scripts/jquery.nav.js"></script>
    <!-- Core plugins END (required only for current page) -->
    <!-- Global js BEGIN -->
    <script src="assets/onepage/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>
    <!-- Global js END -->
</body>

</html>