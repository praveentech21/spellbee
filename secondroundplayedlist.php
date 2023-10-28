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
    <?php include "header.php"; ?>
    <!-- Header END -->
    <br><br>


    <!-- Services block BEGIN -->
    <div class="services-block content content-center" id="services">
        <h2><strong><b>SRKR SPELLBEE PRIZES</b></strong></h2>
        <div class="container">
            <div class="ab-trio">
                <img src="assets/onepage/img/trio.png" alt="" class="img-responsive">
            </div>
            <br>
            <h2 style='font-size:24px;'><strong>TOP TEN </strong>PRIZES</h2>
        </div>
    </div>
    <!-- Services block END -->

    <!-- Facts block BEGIN -->
    <div class="facts-block content content-center" id="a">
        <?php

        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2027'");
        $one = mysqli_num_rows($depr);
        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2026' ");
        $two = mysqli_num_rows($depr);
        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2025'");
        $three = mysqli_num_rows($depr);
        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2024' ");
        $four = mysqli_num_rows($depr);

        $total = $one + $two + $three + $four;
        $leaderboard = mysqli_query($conn, "SELECT *, sum(marks) as points FROM `responses1` group by `sid` ORDER BY sum(marks) DESC;");
        ?>
        <h2>TOTAL REGISTRATIONS : <?php echo $total; ?></h2>
        <div class="container">
            <div class="row">
                <a href="year_wise_leaderboard.php?year=2027">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="item">
                            <strong><?php echo $one; ?></strong>
                           FIRST YEAR <br> REGISTRATIONS
                        </div>
                    </div>
                </a>
                <a href="year_wise_leaderboard.php?year=2026">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="item">
                            <strong><?php echo $two; ?></strong>
                            SECOND YEAR <br> REGISTRATIONS
                        </div>
                    </div>
                </a>
                <a href="year_wise_leaderboard.php?year=2025">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="item">
                            <strong><?php echo $three; ?></strong>
                            THIRD YEAR <br> REGISTRATIONS
                        </div>
                    </div>
                </a>
                <a href="year_wise_leaderboard.php?year=2024">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="item">
                            <strong><?php echo $four; ?></strong>
                            FOURTH YEAR <br> REGISTRATIONS
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Facts block END -->

    <!-- Team block BEGIN -->
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2>SRKR SPELLBEE <strong>SECOND ROUND Played</strong></h2>
            <h4>These are the students Played Second Round of <strong>SRKR SPELLBEE</strong> .<br></h4>

            <div class="col-md-12">
                <center>
                    <table style='background-color:#FFFFFF;text-align:center;' border='1' cellspacing='1' cellpadding='3'>
                        <tr bgcolor='#DC143C' style='color:#FFFFFF;text-align:center;text-align:center;'>
                            <th>S.NO</th>
                            <th>ROLL NUMBER</th>
                            <th>STUDENT NAME</th>
                            <th>YEAR</th>
                            <th>SCORE</th>
                        </tr>

                        <?php
                  $sino = 1;
                  while ($row = mysqli_fetch_assoc($leaderboard)) {
                    $lbord = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE `pid` = '{$row['sid']}'"));
                    if ($lbord['place'] == '2027') {
                        $year = "FIRST YEAR";
                    } elseif ($lbord['place'] == '2026') {
                        $year = "SECOND YEAR";
                    } elseif ($lbord['place'] == '2025') {
                        $year = "THIRD YEAR";
                    } elseif ($lbord['place'] == '2024') {
                        $year = "FOURTH YEAR";
                    }

                    print "<tr><td align='center'>" . $sino . "</td><td align='center'><font color='#DC143C'> " . strtoupper($lbord['regno']) . "</font></td><td style='text-align: left;'><b>" . strtoupper($lbord['player_name']) . "</b></td><td style='text-align: left;'>" . $year .  "</td><td align='center'>" . $row['points'] . "</td></tr>";
                    $sino++;
                  }
                  ?>
                    </table>
                </center>   


            </div>
            <br><br>
            <h4>The Remaing registred Students haven't take you exam <br>
                You are requested to take your exam at any stall in our Campus</h4>


        </div>
    </div>
    <!-- Team block END -->

    <?php include "footer.php"; ?>

</body>

</html>