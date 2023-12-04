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


    <!-- Team block BEGIN -->
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2>SRKR SPELLBEE <strong>GRAND FINALE Played</strong></h2>
            <h4>These are the students Played Final Round of <strong>SRKR SPELLBEE</strong> .<br></h4>

            <div class="col-md-12">
            <center>
                    <table style='background-color:#FFFFFF;text-align:center;' border='1' cellspacing='1' cellpadding='3'>
                        <tr bgcolor='#DC143C' style='color:#FFFFFF;text-align:center;text-align:center;'>
                            <th>S.NO</th>
                            <th>STUDENT NAME</th>
                            <th>STARTING TIME</th>
                            <th>ENDING TIME</th>
                            <th>SCORE</th>
                            <th>TIME TAKEN</th>
                        </tr>

                        <?php
                  $sino = 1;
                  $leaderboard = mysqli_query($conn, "SELECT sum(marks) as marks,`sid` from responses3 GROUP BY `sid` ORDER BY marks DESC;");
                  while ($row = mysqli_fetch_assoc($leaderboard)) {

                    $lbord = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users3` WHERE `pid` = '{$row['sid']}'"));
                    $stime = strtotime($lbord['start_time']);
                    $etime = strtotime($lbord['end_time']);
                    $time = $etime - $stime;
                    print "<tr><td align='center'>" . $sino . "</td><td align='center'><font color='#DC143C'> " . strtoupper($lbord['player_name']) . "</font></td><td style='text-align: left;'><b>" . $lbord['start_time'] . "</b></td><td style='text-align: left;'><b>" . $lbord['end_time'] . "</b><td align='center'>" . $row['marks'] . "</td><td align='center'>" . $time .  " Seconds </td></tr>";
                    $sino++;
                  }
                  ?>
                    </table>
                </center>
            </div>
            <br><br>
            <!-- <h4>The Remaing registred Students haven't take you exam <br>
                You are requested to take your exam at any stall in our Campus</h4> -->


        </div>
    </div>
    <!-- Team block END -->

    <?php include "footer.php"; ?>

    <script>
		var source = new EventSource("leaderboard1.php");

		source.onmessage = function(event) {

			document.getElementById('lboard').innerHTML = event.data;

		};
	</script>

</body>

</html>