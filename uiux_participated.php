<?php
include 'connect.php';

?>
<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Leaderboard SRKR SPELLBEE</title>

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
            font-size: 13px;
        }

        /* Change the color of visited links */
        a:visited {
            color: #FFFFFF;
            /* Change to your desired color */
        }

        /* Change the color of links when hovered over */
        a:hover {
            color: rgb(201, 30, 62);
            /* Change to your desired color */
        }

        /* Change the color of active links (when clicked) */
        a:active {
            color: #FFFFFF;
            /* Change to your desired color */
        }

        /* Change the default link color */
        a {
            color: #FFFFFF;
            /* Change to your desired color */
        }
    </style>

</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">

    <!-- Header BEGIN -->
    <div class="header header-mobi-ext">
        <div class="container">
            <div class="row">
                <!-- Logo BEGIN -->
                <div class="col-md-2 col-sm-2">
                    <a href="index.php"><img class="site-logo"  src="assets/onepage/img/campusonline_logo.png" alt=""></a>
                </div>
                <!-- Logo END -->
                <!-- Navigation BEGIN -->
                <div class="col-md-10 pull-right">
                    <ul class="header-navigation">
                        <li><a href="index.php"><strong style='color:#C91E3E;'>SRKR CampusOnline</strong></a></li>
                    </ul>
                </div>
                <!-- Navigation END -->
            </div>
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        </div>
    </div>
    <!-- Header END -->
    <br><br>


    <!-- Team block BEGIN -->
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2>SRKR CampusOnline <strong>UI/UX workshop - Purplelane</strong></h2>
            <h4>Participant list of 2 days workshop</strong> .<br></h4>

            <div class="col-md-12">
                <center>
                    <table style='background-color:#FFFFFF;text-align:center;' border='1' cellspacing='1' cellpadding='3'>
                        <tr bgcolor='#DC143C' style='color:#FFFFFF;text-align:center;text-align:center;'>
                            <th>S.NO</th>
                            <th>STUDENT NAME</th>
                        </tr>

                        <?php
                        $sino = 1;
                        $leaderboard = mysqli_query($conn, "SELECT * FROM `participated` ORDER BY `name` ASC");      
                        while ($lbord = mysqli_fetch_assoc($leaderboard)) {
                            
                            print "<tr><td align='left'>" . $sino . "</td><td align='center'><font color='#DC143C'> " . strtoupper($lbord['name']) . "</font></td></tr>";
                           $sino++;
                        }

                        echo "</table></center><br><br>";
                        ?>

            </div>
            <h4></h4>


        </div>
    </div>
    <!-- Team block END -->

    <?php include "footer.php"; ?>

</body>

</html>