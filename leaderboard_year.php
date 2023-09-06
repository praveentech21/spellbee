<?php
include 'connect.php';
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
} elseif ($dept == 'CSD') {
    $fdept = "COMPUTER SCIENCE & DATA SCIENCE";
} elseif ($dept == 'CSBS') {
    $fdept = "COMPUTER SCIENCE & BUSINESS SYSTEMS";
} elseif ($dept == 'CSD') {
    $fdept = "COMPUTER SCIENCE & DESIGN";
} elseif ($dept == 'AIML') {
    $fdept = "ARTIFICIAL INTELLIGENCE & MACHINE LEARNING";
} elseif ($dept == 'AIDS') {
    $fdept = "ARTIFICIAL INTELLIGENCE & DATA SCIENCE";
} elseif ($dept == 'CSIT') {
    $fdept = "COMPUTER SCIENCE & INFORMATION TECHNOLOGY";
} elseif ($dept == 'CIC') {
    $fdept = "IOT & CYBER SECURITY INCLUDING BLOCK CHAIN TECHNOLOGY";
}

?>
<!DOCTYPE html>
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title><?php echo $dept ?> - Leaderboard SRKR SPELLBEE</title>

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
  color: #FFFFFF; /* Change to your desired color */
}

/* Change the color of links when hovered over */
a:hover {
  color: rgb(201, 30, 62); /* Change to your desired color */
}

/* Change the color of active links (when clicked) */
a:active {
  color: #FFFFFF; /* Change to your desired color */
}

/* Change the default link color */
a {
  color: #FFFFFF; /* Change to your desired color */
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
            <h2><strong><b><?php echo $dept; ?> LEADERBOARD</b></strong>
                <br><?php echo $fdept; ?>
            </h2>
        </div>
    </div>
    <!-- About block END -->
    <div class="valign-center-elem">
        <h2 align='center'>
            <img src="assets/onepage/img/portfolio/dept/<?php echo strtolower($dept); ?>.jpg" alt="<?php echo $fdept ?>" class="img-responsive">
        </h2>
    </div>

    <!-- Facts block BEGIN -->
    <div class="facts-block content content-center" id="a">
        <?php

        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2027' and `department` = '$dept '");
        $one = mysqli_num_rows($depr);
        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2026' and `department` = '$dept'");
        $two = mysqli_num_rows($depr);
        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2025' and `department` = '$dept'");
        $three = mysqli_num_rows($depr);
        $depr = mysqli_query($conn, "SELECT * FROM `users` WHERE `place` = '2024' and `department` = '$dept'");
        $four = mysqli_num_rows($depr);

        $total = $one + $two + $three + $four;
        $deptleader = mysqli_query($conn, "SELECT * FROM `users` WHERE `department` = '$dept' and `points` is not null ORDER BY `points` DESC , `lastseen` DESC");
        ?>
        <h2>TOTAL REGISTRATIONS FROM <?php echo $dept; ?> : <?php echo $total; ?></h2>
        <div class="container">
            <div class="row">
                <a href="year_wise_leaderboard.php?year=2027&dept=<?php echo $dept ?>">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo $one; ?></strong>
                        <?php echo "<span style='font-size:28px;'>1/4 " . $dept; ?></span><br>Registrations
                    </div>
                </div>
                </a>
                <a href="year_wise_leaderboard.php?year=2026&dept=<?php echo $dept ?>">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo $two; ?></strong>
                        <?php echo "<span style='font-size:28px;'>2/4 " . $dept; ?></span><br>Registrations
                    </div>
                </div>
                </a>
                <a href="year_wise_leaderboard.php?year=2025&dept=<?php echo $dept ?>">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo $three; ?></strong>
                        <?php echo "<span style='font-size:28px;'>3/4 " . $dept; ?></span><br>Registrations
                    </div>
                </div>
                </a>
                <a href="year_wise_leaderboard.php?year=2024&dept=<?php echo $dept ?>">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo $four; ?></strong>
                        <?php echo "<span style='font-size:28px;'>4/4 " . $dept; ?></span><br>Registrations
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
            <h2><?php echo $dept; ?> <strong>Leaderboard</strong></h2>
            <h4>The Leader Board has been generated for all participants who played from <strong><?php echo $dept; ?></strong> .<br>
            The Maximum score <strong>3000</strong>
            </h4>

                <div class="col-md-12">
                <center><table style='background-color:#FFFFFF;text-align:center;' border='1' cellspacing='1' cellpadding='3'><tr bgcolor='#DC143C' style='color:#FFFFFF;text-align:center;text-align:center;'><th>S.NO</th><th>ROLL NUMBER</th><th>STUDENT NAME</th><th>YEAR</th><th>SCORE</th><th>DEPT. RANK</th><th>OVERALL RANK</th></tr>

                    <?php
                    $sino = 1;

                    while ($lbord = mysqli_fetch_assoc($deptleader)) {
                        $camrank = 1;
                        $overallrank = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `points` DESC , `lastseen` DESC");    
                        while ($orank = mysqli_fetch_assoc($overallrank)) {
                            if($orank['pid'] == "{$lbord['pid']}") break;
                            else $camrank++;
                        }
    
                        if($lbord['place'] == '2027'){ $year = "FIRST YEAR"; }
                        elseif($lbord['place'] == '2026'){ $year = "SECOND YEAR"; }
                        elseif($lbord['place'] == '2025'){ $year = "THIRD YEAR"; }
                        elseif($lbord['place'] == '2024'){ $year = "FOURTH YEAR"; }
                            print "<tr><td align='center'>" . $sino . "</td><td align='center'><font color='#DC143C'> " . $lbord['regno'] . "</font></td><td><b>" . strtoupper($lbord['player_name']) . "</b></td><td align='center'>" .$year .  "</td><td align='center'>" . $lbord['points'] . "</td><td align='center'>" . $sino .  "</td><td align='center'>" . $camrank . "</td></tr>";
                        $sino++;
                    }

                    echo "</table></center><br><br>";
                    ?>

                </div>
                <h4>The Remaing registred Students haven't take you exam <br>
            You are requested to  take your exam at any stall in our Campus</h4>


        </div>
    </div>
    <!-- Team block END -->

    <?php include "footer.php"; ?>

</body>

</html>