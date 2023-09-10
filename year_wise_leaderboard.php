<?php
include 'connect.php';
$year = $_GET['year'];

if ($year == '2027') $years = 1;
elseif ($year == '2026') $years = 2;
elseif ($year == '2025') $years = 3;
elseif ($year == '2024') $years = 4;




$total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '$year'"));
$secleader = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '$year' ORDER BY `points` DESC , `lastseen` DESC");

?>
<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title><?php echo  $years . " / 4 " ?> - SRKR SPELLBEE Leaderboard</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-">
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

    <!-- About block BEGIN -->
    <div class="about-block content content-center" id="about">
        <div class="container">
            <br>
            <h2><strong><b><?php echo $years . " / 4 "  ?> SRKR SPELLBEE LEADERBOARD</b></strong>
                <br>SRKR ENGINEERING COLLEGE
            </h2>
        </div>
    </div>
    <!-- About block END -->

        <!-- Services block BEGIN -->
        <div class="services-block content content-center" id="services">
        <div class="container">
            <div class="ab-trio">
                <img src="assets/onepage/img/trio.png" alt="" class="img-responsive">
            </div>
            <br>
            <h2 style='font-size:24px;'>Contest <strong>TOP TEN PRIZES</strong></h2>
        </div>
    </div>
    <!-- Services block END -->


    <!-- Facts block BEGIN -->
    <div class="facts-block content content-center" style="min-height: auto;" id="a">
        <h2>TOTAL REGISTRATIONS FROM <?php echo $years . " / 4 - " ?> : <?php echo $total; ?></h2>
    </div>
    <!-- Facts block END -->

    <!-- Team block BEGIN -->
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2>SRKR SPELLBEE <strong>Leaderboard</strong></h2>
            <h4>The Leader Board has been generated for all participants of <?php echo $years." / 4"; ?> , who participate SpellBee Game with in College<br>
                The Maximum score <strong>3000</strong>
            </h4>
            <!--			<strong>NOTE:</strong> This Leader Board is not the list of students selected for Level 2 or 3. It is meant only for preparing the Top 100 Coders List of SRKREC.</h4> -->

            <div class="col-md-12">
                <center>
                    <table style='background-color:#FFFFFF;text-align:center;' border='1' cellspacing='1' cellpadding='3'>
                        <tr bgcolor='#DC143C' style='color:#FFFFFF;text-align:center;text-align:center;'>
                            <th>S.NO</th>
                            <th>ROLL NUMBER</th>
                            <th>STUDENT NAME</th>
                            <th>YEAR</th>
                            <th>SCORE</th>
                            <th>SECTION RANK</th>
                            <th>DEPT. RANK</th>
                            <th>YEAR. RANK</th>
                            <th>OVERALL RANK</th>
                        </tr>

                        <?php
                        $sino = 1;

                        while ($lbord = mysqli_fetch_assoc($secleader)) {
                            $deptrank = 1;
                            $sectionrank = 1;
                            $ovrrank = 1;
                            $sectionranks = mysqli_query($conn, "SELECT `pid` FROM `users` where `department` = '{$lbord['department']}' and `place` = '{$lbord['place']}' and `section` = '{$lbord['section']}' ORDER BY `points` DESC , `lastseen` DESC");
                            $deptranks = mysqli_query($conn, "SELECT `pid` FROM `users` where `department` = '{$lbord['department']}' ORDER BY `points` DESC , `lastseen` DESC");
                            $ovrranks = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `points` DESC , `lastseen` DESC");
                            while ($orank = mysqli_fetch_assoc($deptranks)) {
                                if ($orank['pid'] == "{$lbord['pid']}") break;
                                else $deptrank++;
                            }
                            while ($orank = mysqli_fetch_assoc($ovrranks)) {
                                if ($orank['pid'] == "{$lbord['pid']}") break;
                                else $ovrrank++;
                            }
                            while ($orank = mysqli_fetch_assoc($sectionranks)) {
                                if ($orank['pid'] == "{$lbord['pid']}") break;
                                else $sectionrank++;
                            }

                            if ($lbord['place'] == '2027') {
                                $year = "FIRST YEAR";
                            } elseif ($lbord['place'] == '2026') {
                                $year = "SECOND YEAR";
                            } elseif ($lbord['place'] == '2025') {
                                $year = "THIRD YEAR";
                            } elseif ($lbord['place'] == '2024') {
                                $year = "FOURTH YEAR";
                            }

                            $yearrank = $sino;

                            if($lbord['points'] == NULL){
                                $lbord['points'] = "YET TO PLAY";
                                $sectionrank = "YET TO PLAY";
                                $deptrank = "YET TO PLAY";
                                $yearrank = "YET TO PLAY";
                                $ovrrank = "YET TO PLAY";
                            }

                            print "<tr><td style='text-align: center;'>" . $sino . "</td><td style='text-align: center;'><font color='#DC143C'> " . strtoupper($lbord['regno']) . "</font></td><td style='text-align: left;'><b>" . strtoupper($lbord['player_name']) . "</b></td><td style='text-align: center;'>" . $year .  "</td><td style='text-align: center;'>" . $lbord['points'] . "</td><td style='text-align: center;'>" . $sectionrank . "</td><td style='text-align: center;'>" . $deptrank . "</td><td style='text-align: center;'>" . $yearrank . "</td><td style='text-align: center;'><b>" . $ovrrank . "</b></td></tr>";
                            $sino++;
                        }

                        echo "</table></center><br><br>";
                        ?>

            </div>
            <h4>The Remaing registred Students haven't take played <br> You are requested to take your game at any stall in our Campus</h4>


        </div>
    </div>
    <!-- Team block END -->

    <?php include "footer.php"; ?>

</body>

</html>