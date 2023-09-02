<?php

function get_prize($rank)
{
    if ($rank == 1) {
        $prize = "<span style='color:green;text-transform:uppercase;'>Python Final Winner - TITAN Watch</span>";
        return $prize;
    } elseif ($rank == 2) {
        $prize = "<span style='color:green;text-transform:uppercase;'>Python Final Winner - TITAN Watch</span>";
        return $prize;
    } elseif ($rank == 3) {
        $prize = "<span style='color:blue;text-transform:uppercase;'>C Final Winner - APPLE iPhone SE</span>";
        return $prize;
    } elseif ($rank == 4) {
        $prize = "<span style='color:green;text-transform:uppercase;'>JAVA Final Winner - FOSSIL Watch</span>";
        return $prize;
    } elseif ($rank == 5) {
        $prize = "<span style='color:green;text-transform:uppercase;'>Women Coder of SRKREC - TITAN Watch</span>";
        return $prize;
    } elseif ($rank == 6) {
        $prize = "<span style='color:#FF4000;'>CSE Topper - Mi Smart Band</span>";
        return $prize;
    } elseif ($rank == 27) {
        $prize = "<span style='color:#FF4000;'>ECE Topper - Mi Smart Band</span>";
        return $prize;
    } elseif ($rank == 11) {
        $prize = "<span style='color:#FF4000;'>IT Topper - Mi Smart Band</span>";
        return $prize;
    } elseif ($rank == 54) {
        $prize = "<span style='color:#FF4000;'>EEE Topper - Mi Smart Band</span>";
        return $prize;
    } elseif ($rank == 43) {
        $prize = "<span style='color:#FF4000;'>MECHANICAL Topper - Mi Smart Band</span>";
        return $prize;
    } elseif ($rank == 149) {
        $prize = "<span style='color:#FF4000;'>CIVIL Topper - Mi Smart Band</span>";
        return $prize;
    } elseif ($rank >= 7 && $rank <= 10) {
        $prize = 'Top 10 - Mi Smart Band';
        return $prize;
    } elseif ($rank >= 12 && $rank <= 20) {
        $prize = 'Top 20 - Fast Track Watch';
        return $prize;
    } elseif ($rank >= 21 && $rank <= 30) {
        $prize = 'Top 30 - VR Box / FREE Course Voucher';
        return $prize;
    } elseif ($rank >= 31 && $rank <= 50) {
        $prize = 'Top 50 - NareshIT Course Voucher Worth Rs.1,000/- (or)<br> FREE Tech Centre Summer Internship Voucher Worth Rs.2,000/-';
        return $prize;
    } elseif ($rank >= 51 && $rank <= 75) {
        $prize = 'Tech Centre Summer Internship Voucher Worth Rs.1,200/-';
        return $prize;
    } elseif ($rank >= 76 && $rank <= 100) {
        $prize = 'Tech Centre Summer Internship Voucher Worth Rs.1,000/-';
        return $prize;
    } else {
        $prize = '-';
        return $prize;
    }
}

?>
<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title>Prizes - SpellBee SRKR</title>
    <link rel="shortcut icon" href="assets/onepage/img/cup.png">


    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

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

        td,
        th {
            padding: 5px;
            font-size: 12px;
        }
    </style>

</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">

    <?php include "header.php"; ?>
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container"><br>
            <h2><strong><b>SRKR SPELL BEE </b><br>2023</strong></h2>

            <h4>Prizes for winners will be relesed after the Event</h4>
                <br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <!-- Team block END -->


<?php include 'footer.php' ?>
</body>

</html>