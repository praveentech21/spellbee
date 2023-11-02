<!DOCTYPE html>
<html lang="en">
<?php include 'connect.php'; ?>

<head>
    <meta charset="utf-8">
    <title>SRKR Spell Bee - Online Spelling Challenge </title>
    <link rel="shortcut icon" href="/assets/onepage/img/cup.png">


    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv=Content-Type content=text/html; charset=utf-8 />

    <link rel="shortcut icon" href="favicon.ico">
    <!-- Fonts START -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
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

    h3 {
        font-size: 14px;
    }
    </style>

</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">

    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel">
        <div class="color-mode-icons icon-color"><a href='thirdround.php' style='color:#FFF'>Selected List</a></div>
        <!-- <div class="color-mode-icons icon-color-close"></div> -->
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER -->

    <!-- Header BEGIN -->
    <div class="header header-mobi-ext">
        <div class="container">
            <div class="row">
                <!-- Logo BEGIN -->
                <div class="col-md-2 col-sm-2">
                    <a href="index.php"><img class="site-logo" src="assets/onepage/img/logo/red.png" alt=""></a>
                </div>
                <!-- Logo END -->
                <!-- Navigation BEGIN -->
                <div class="col-md-10 pull-right">
                    <ul class="header-navigation">
                        <li class="current"><a href="#promo-block">Home</a></li>
                        <li><a href="index.php#about">About</a></li>
                        <li><a href="index.php#services">Prizes</a></li>
                        <li><a href="index.php#portfolio">Leader Board</a></li>
                        <li><a href="index.php#benefits">FAQ</a></li>
                        <li><a href="index.php#prices"><strong style='color:#C91E3E;'>REGISTER</strong></a></li>
                        <li><a href="index.php#team">Team</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Navigation END -->
            </div>
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        </div>
    </div>
    <!-- Header END -->
    <!-- Promo block BEGIN -->
    <div class="promo-block" id="promo-block">
        <div id="carousel-example-generic" class="carousel slide carousel-slider" style="margin-top: 60px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item carousel-item-one active">
                    <img class="carousel-position-srkrec animate-delay" data-animation="animated fadeInDown">
                    <img class="animate-delay" style='padding-top:150px;' src="assets/onepage/img/slider/cup.png"
                        alt="SpellBee Challenge" data-animation="animated fadeInDown">
                    <img class="carousel-position-coders hidden-sm hidden-xs animate-delay"
                        data-animation="animated fadeInUp">
                </div>

                <div class="item carousel-item-three">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <span class="carousel-subtitle-v1">IMPORTANT DATES</span>
                                <h3 class="margin-bottom-20 animate-delay promo-like-text"
                                    data-animation="animated fadeInDown">
                                    <div STYLE='font-size:28px;'><span class='color-red'>ROUND 1:</span> 04th SEP - 10th
                                        OCT 2023</div>
                                    <div STYLE='font-size:28px;'><span class='color-red'>ROUND 2:</span> 12th OCT - 28th
                                        OCT 2023</div>
                                    <div STYLE='font-size:28px;'><span class='color-red'>ROUND 3:</span> November 2nd </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <img class="carousel-position-three hidden-sm hidden-xs animate-delay"
                        src="assets/onepage/img/slider/cup.png" width='300px' alt="Prizes"
                        data-animation="animated fadeInUp">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- Promo block END -->

    <!-- About block BEGIN -->
    <div class="about-block content content-center" id="about">
        <div class="container">
            <h2><strong><b>SpellBee Champ of SRKREC</b></strong></h2>
            <h2>The Ultimate Online SpellBee Challenge of The Campus</h2>
            <h4>SRKR SpellBee is an unique online spelling check challenge conducted to test the Spelling skills of
                SRKREC students. Only SRKREC students (all branches & years of B.E/B.Tech programmes) are eligible to
                take part in this challenge and can win exciting prizes. The winners will be decided based on their
                skill level in Spelling Words with varying levels of difficulty, Speed and accuracy. As the contest is
                completely online, we provide audio of the word with a defined meaning of that word, you need to
                guess/write the spelling to gain points.</h4>

            <a name='rules'></a>
            <div class="container">
                <h2 class="margin-bottom-20" style='font-size:24px;'><strong>Levels</strong> Of SRKR SpellBee Challenge
                </h2>
                <div class="row">
                    <!-- Pricing item BEGIN -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pricing-item">
                            <div class="pricing-head">
                                <h3>LEVEL 1</h3>
                                <p>Live MCQs Test</p>
                            </div>
                            <div class="pricing-content">
                                <div class="pi-price">
                                    <strong><i class="fa fa-rupee"></i><em>20</em>/-</strong>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-circle"></i> For Replay <i class="fa fa-rupee"><em>10</em>/-</i>
                                    </li>
                                    <li><i class="fa fa-circle"></i> 15 Words (Easy to Moderate) - MCQs</li>
                                    <li><i class="fa fa-circle"></i> Take Exam at Campus Online Stalls on Campus, Hostel
                                        Stall (for Hostel Girls) and at Technology Centre (Till 8 PM Every Day) and
                                        respected Places</li>
                                    <li><i class="fa fa-circle"></i> Top 20% will go to Level 2</li>
                                    <li><i class="fa fa-circle"></i> E-Certificate will be given for every Participant
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="rules.php#l1" class="zoom valign-center btn btn-default">More Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing item END -->
                    <!-- Pricing item BEGIN -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pricing-item">
                            <div class="pricing-head">
                                <h3>LEVEL 2</h3>
                                <p>Live Typing Test</p>
                            </div>
                            <div class="pricing-content">
                                <div class="pi-price">
                                    <strong><i class="fa fa-rupee"></i> <em>0</em>/-</strong>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-circle"></i> 30 Words with Moderate to Tough Level Difficulty
                                    </li>
                                    <li><i class="fa fa-circle"></i> This round will be Conducted in Batches @ Tech
                                        Centre for 1 Week</li>
                                    <li><i class="fa fa-circle"></i> Participants should WRITE/TYPE the correct
                                        spellings</li>
                                    <li><i class="fa fa-circle"></i> Top 50 will go to Final Level</li>
                                    <li><i class="fa fa-circle"></i> Gets Merit E-Certificates</li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="rules.php#l2" class="zoom valign-center btn btn-default">More Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing item END -->
                    <!-- Pricing item BEGIN -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pricing-item">
                            <div class="pricing-head">
                                <h3>LEVEL 3</h3>
                                <p>Final Round</p>
                            </div>
                            <div class="pricing-content">
                                <div class="pi-price">
                                    <strong><i class="fa fa-rupee"></i> <em>0</em>/-</strong>
                                </div>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-circle"></i> 30 Common Words for All - 30 Minutes Competition
                                    </li>
                                    <li><i class="fa fa-circle"></i> Speed Base Scoring Evaluation - Winners To Be
                                        Decided on Speed and Accuracy</li>
                                    <li><i class="fa fa-circle"></i> Top 10 will be rewarded</li>
                                    <li><i class="fa fa-circle"></i> Department/Section Wise Leader Boards </li>
                                    <li><i class="fa fa-circle"></i> Exciting Prizes & Certificates for Winners</li>
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="rules.php#l3" class="zoom valign-center btn btn-default">More Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing item END -->
                </div>
            </div>

        </div>
    </div>
    <!-- About block END -->

    <!-- Services block BEGIN -->
    <div class="services-block content content-center" id="services">
        <div class="container">
            <h2>Exciting <strong>Prizes</strong></h2>
            <div class="ab-trio">
                <img src="assets/onepage/img/trio.png" alt="" class="img-responsive">
            </div>
            <br>
            <h2 style='font-size:24px;'>Contest <strong>Sponsors</strong></h2>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 item">
                    <h3>Prime Sponsor</h3>
                    <!--		        <a href="assets/onepage/img/sponsors/bhubl.jpg" class="zoom valign-center"> -->
                    <a href='http://www.purplelane.in' target='plane'>
                        <center> <img src="assets/onepage/img/sponsors/purplelane.png" alt="" class="img-responsive">
                        </center>
                        <b>www.purplelane.in</b>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 item">
                    <h3>Title Sponsor</h3> <br>
                    <a href='https://bhimavaramonline.page.link/dhgB' target='bvrmol'>
                        <center> <img src="assets/onepage/img/sponsors/bvrmol.png" alt="" class="img-responsive">
                        </center>
                        <b>Bhimavaram Online</b>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 item">
                    <h3>Associate Sponsor</h3>
                    <br>
                    <a href='https://bhimavaramonline.page.link/gvFA' target='kshatriya'>
                        <center><img src="assets/onepage/img/sponsors/kkitchen.png" alt="" class="img-responsive">
                        </center>
                        <b>Kshatriya's Kitchen</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services block END -->


    <!-- Message block BEGIN -->
    <div class="message-block content content-center valign-center" id="message-block">
        <div class="valign-center-elem">
            <h2>Prizes Worth 25,000/- for the Top 10 Winners</h2>
            <h2 style='font-size:20px;'><i>Merit and Participant Certificates for All</i></strong></h2>
            <h2 style='font-size:16px;'>Department/Section-wise Leaderboard</h2>
        </div>
    </div>
    <!-- Message block END -->


    <!-- Portfolio block BEGIN -->
    <div class="portfolio-block content content-center" id="portfolio">
        <div class="container">
            <h2 class="margin-bottom-50">Department Wise <strong>Leader Board</strong></h2>
            <a href="ranks.php" target="_blank" class="btn blink"
                style='background-color:#C91E3E;color:#ffff; font-size:18px;box-shadow: 3px 3px 1px white;'><b> VIEW
                    SRKR SPELLBEE LEADERBOARD</b></a><br><br><br>

        </div>
        <div class="row">
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/civil.jpg" alt="CIVIL" class="img-responsive">
                <!--                <a href="civil.php" class="zoom valign-center"> -->
                <a href="leaderboard.php?dept=CIVIL" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Civil Engineering</strong>
                        <em><br><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'CIVIL' ")) ?>
                            <br><br></em>
                        <b>View CIVIL LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/cse.jpg" alt="CSE" class="img-responsive">
                <a href="leaderboard.php?dept=CSE" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Computer Science & Engineering</strong>
                        <em><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'CSE' ")) ?>
                            <br><br></em>
                        <b>View CSE LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/ece.jpg" alt="ECE" class="img-responsive">
                <a href="leaderboard.php?dept=ECE" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Electronics & Communication Engineering</strong>
                        <em><br><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'ECE' ")) ?><br><br></em>
                        <b>View ECE LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/eee.jpg" alt="EEE" class="img-responsive">
                <a href="leaderboard.php?dept=EEE" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Electrical & Electronics Engineering</strong>
                        <em><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'EEE' ")) ?><br><br></em>
                        <b>View EEE LeaderBoard</b>
                    </div>
                </a>
            </div>

            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/it.jpg" alt="IT" class="img-responsive">
                <a href="leaderboard.php?dept=IT" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Information Technology</strong>
                        <em><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'IT' ")) ?><br><br></em>
                        <b>View IT LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/mech.jpg" alt="MECH" class="img-responsive">
                <a href="leaderboard.php?dept=MECH" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Mechanical Engineering</strong>
                        <em><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'MECH' ")) ?><br><br></em>
                        <b>View MECH LeaderBoard</b>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Portfolio block END -->

    <!-- Portfolio block BEGIN -->
    <div class="portfolio-block content content-center" id="portfolio">
        <div class="row">
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/csbs.jpg" alt="CSBS" class="img-responsive">
                <!--                <a href="civil.php" class="zoom valign-center"> -->
                <a href="leaderboard.php?dept=CSBS" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>COMPUTER SCIENCE & BUSINESS SYSTEMS</strong>
                        <em><br><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'CSBS' ")) ?><br><br></em>
                        <b>View CSBS LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/csd.jpg" alt="CSD" class="img-responsive">
                <a href="leaderboard.php?dept=CSD" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Computer Science and Design</strong>
                        <em><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'CSD' ")) ?><br><br></em>
                        <b>View CSD LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/aiml.jpg" alt="AIML" class="img-responsive">
                <a href="leaderboard.php?dept=AIML" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Artificial Intelligence & Machine Learning </strong>
                        <em><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'AIML' ")) ?><br><br></em>
                        <b>View AIML LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/aids.jpg" alt="AIDS" class="img-responsive">
                <a href="leaderboard.php?dept=AIDS" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Artificial Intelligence and Data Science</strong>
                        <em><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'AIDS' ")) ?><br><br></em>
                        <b>View AI&DS LeaderBoard</b>
                    </div>
                </a>
            </div>

            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/csit.jpg" alt="CSIT" class="img-responsive">
                <a href="leaderboard.php?dept=CSIT" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Computer Science and Information Technology</strong>
                        <em><br><br>Registered:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'CIC' ")) ?><br><br></em>
                        <b>View CSIT LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/cic.jpg" alt="CIC" class="img-responsive">
                <a href="leaderboard.php?dept=CIC" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Internet of Things and Cyber Security</strong>
                        <em><br><br>Register:
                            <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT `pid` FROM `users` WHERE `department`= 'CSIT' ")) ?><br><br></em>
                        <b>View CIC LeaderBoard</b>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Portfolio block END -->

    <!-- Choose us block BEGIN -->
    <div class="choose-us-block content text-center margin-bottom-40" id="benefits">
        <div class="container">
            <h2>Frequently Asked <strong>Questions</strong></h2>
            <h4>The frequently asked questions have been answered for better understanding of the Spell Bee Contest and
                other details. Please feel free to contact <a href="javascript:void(0);">Technology Centre, Z-Block or
                    call to the helpline numbers at the bottom of this page.</a>
                for any unanswered queries.</h4>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <img src="assets/onepage/img/choose-us.png" alt="Why to choose us" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                        href="#accordion1_1">Who can participate?</a>
                                </h5>
                            </div>
                            <div id="accordion1_1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>The Spell Bee contest is only for the students of SRKR Engineering College.
                                        Students of any branch and any year can participate in the contest.</p>
                                    <p>Students can register and pay the fee at Campus Online Stalls or at Technology
                                        Centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_2">Is there an exam fee?</a>
                                </h5>
                            </div>
                            <div id="accordion1_2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>For First Time: Rs. 20/-. For Replay - Rs. 10/-</p>
                                    <p>The registration fee can be paid to our Team at Stalls or at Technology Centre to
                                        get your exam user id and password.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_3">What is the benefit of taking
                                        this contest?</a>
                                </h5>
                            </div>
                            <div id="accordion1_3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>SpellBee Challenge is a popular contest all across the globe and
                                        participating/winning in such contests can be helpful in your career and in your
                                        placements. The exciting prizes are only meant for encouragement. More than the
                                        prizes, you
                                        can assess your Spelling skills and know where you stand among the potential
                                        peers
                                        of SRKR. SRKR SpellBee Challenge 2023 is going to generate Ranks for the top
                                        10 students based on their overall performance in the contest. A certificate of
                                        merit or participation is given to acknowledge their performance.</p>
                                    <p>You can win an Boat EarPods / Smart Watches / Sound
                                        Boxes, Vouchers and other lot of exciting gadgets and coupons by participating
                                        in the contest. To encourage students of all branches, Spell Champ has
                                        introduced prizes for Department-wise best performers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_4">Where is the exam conducted?</a>
                                </h5>
                            </div>
                            <div id="accordion1_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Round 1 can be taken 5 Places (at Campus Online Stalls / at Girls Hostel Stall /
                                        Technology Centre), we will provide our System / laptop / Desktop before the
                                        Round 1 Deadline.</p>
                                    <p>Round 2 & 3 will be conducted @ Technology Centre & Digital Learning Centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_5">Is the contest tough to
                                        participate?</a>
                                </h5>
                            </div>
                            <div id="accordion1_5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>For round 1, we use the basic words that are used regularly in our daily life.
                                        For further rounds, the complexity may increase. Overall, contest has been
                                        designed for an average student to participate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1_6">I have other doubts. Whom do I
                                        contact?</a>
                                </h5>
                            </div>
                            <div id="accordion1_6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Contact Technology Centre, I-Hub, Z-Block, SRKR Engineering College, Bhimavaram
                                        for any queries or clarifications during 9 AM to 8 PM.</p>
                                    <p>Feel free to contact Mr.Sanju</a>, CSD @ +91 9848823311.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose us block END -->

    <!-- Checkout block BEGIN -->
    <div class="checkout-block content" id="prices">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>PARTICIPATE IN THE CHALLENGE! <em>See where you stand & win exciting prizes</em></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout block END -->

    <!-- Facts block BEGIN -->
    <div class="facts-block content content-center" id="facts-block">
        <a href="ranks.php" target="_blank" class="btn blink"
            style='background-color:#C91E3E;color:#ffff; font-size:18px;box-shadow: 3px 3px 1px white;'><b> View SRKR
                SPELLBEE LEADERBOARD</b></a>
        <br><br><br>
        <h2>Spell Champ 2023 Registration Stats</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users`")) ?> </strong>
                        REGISTER SO FAR
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE `points` IS NOT NULL")) ?></strong>
                        PLAYED SO FAR
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo mysqli_fetch_assoc(mysqli_query($conn, "SELECT MAX(points) as top FROM `users` "))['top'] ?></strong>
                        HIGHEST SCORE
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong><?php echo mysqli_fetch_assoc(mysqli_query($conn, "SELECT `department` as top FROM `users`WHERE `points` = ( SELECT MAX(points) FROM `users`) ORDER BY `lastseen` DESC LIMIT 1 "))['top'] ?></strong>
                        HIGH SCORE DEPARTMENT
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts block END -->


    <!-- Team block BEGIN -->
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2> Meet <strong> the Faculty advisors</strong></h2>
            <h4>The contest - Spell Bee Champ of SRKR is organized in assocation with Engilish Department, IDEALab and
                Technology Centre</h4>
            <div class="row">
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Dr.N.G.K.Murthy</h3>
                    <em style="font-size: 10px;">Head, Technology center, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Bh.V.N.Lakshmi</h3>
                    <em style="font-size: 10px;">Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Dr. Suresh Mudunuri</h3>
                    <em style="font-size: 10px;">Programme Co-ordinator, CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">M Sankar</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Dr.P.Bhuvaneshwari</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">B.Pavan Kumar</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">P.Vijaya Kumar</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Dr.CH Rupa Jhansi Rani</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Riyaz Mohammad</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Dr. N Satish Kumar</h3>
                    <em style="font-size: 10px;">Associate Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">K Ramesh Vijaya Babu</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">N.Pavan Kumar</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>

            </div>
            <div class="row">
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">K Aruna Kumari</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Hari Subash Nair</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Kasarapu Esther Rani</h3>
                    <em style="font-size: 10px;">Asst.Professor, Dept. of English, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">M Suseela</h3>
                    <em style="font-size: 10px;">Asst.Professor, CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">N Praveen</h3>
                    <em style="font-size: 10px;">Asst.Professor, CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">A Aswini Priyanka</h3>
                    <em style="font-size: 10px;">Asst.Professor, CSD, SRKREC</em>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">E Rama Lakshmi</h3>
                    <em style="font-size: 10px;">Asst.Professor, CSD, SRKREC</em>
                </div>
            </div>
        </div>
    </div>

    <!-- Team block END -->

    <!-- Team block BEGIN -->
    <div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2>Meet <strong>The Student Team</strong></h2>
            <div class="row">
                <style>
                /* Style for the news scrolling section */
                .news-scrolling {
                    background-color: #C91E3E;
                    /* Background color for the scrolling section */
                    padding: 10px 0;
                    /* 10px padding at the top and bottom */
                    text-align: center;
                    white-space: nowrap;
                    /* Prevent text from wrapping to multiple lines */
                    overflow: hidden;
                    /* Hide overflow content */
                    color: #FFFFFF;
                    /* Text color */
                    font-size: 16px;
                    /* Font size */
                    font-weight: bold;
                    /* Bold text */
                }

                /* Style for the scrolling marquee */
                .marquee {
                    animation: marquee 45s linear infinite;
                    /* Start the marquee animation immediately */
                    display: inline-block;
                    /* Ensure the marquee stays inline */
                    white-space: nowrap;
                    /* Prevent text from wrapping */
                }


                /* Pause the marquee animation on hover */
                .marquee:hover {
                    animation-play-state: paused;
                }

                /* Keyframes for the marquee animation */
                @keyframes marquee {
                    0% {
                        transform: translateX(50%);
                    }

                    100% {
                        transform: translateX(-100%);
                    }
                }

                /* Style for individual news items */
                .news-item {
                    display: inline-block;
                    white-space: nowrap;
                    /* Prevent text from wrapping to multiple lines */
                    margin-right: 20px;
                    /* Add a margin to create a gap between names */
                }

                /* Style for news text (non-link part) */
                .news-text {
                    color: #FFFFFF;
                    /* Text color */
                    display: inline;
                    /* Display the text inline */
                }

                /* Style for news links */
                .news-link {
                    color: #C91E3E;
                    /* Change link text color to #C91E3E */
                    text-decoration: none;
                    /* Remove underline from links */
                    background-color: white;
                    /* Change background color to white */
                    padding: 5px 5px;
                    /* Add padding to the button for better appearance */
                    border-radius: 5px;
                    /* Add rounded corners to the button */
                    display: inline;
                    /* Display the button inline */
                    margin-left: 10px;
                    /* Add spacing to separate the button from the text */
                    cursor: pointer;
                    /* Change cursor to pointer on hover */
                }

                /* Style for the white text */
                .white-text {
                    color: #FFFFFF;
                    /* Text color */
                }
                </style>


                <!-- News Scrolling Section -->
                <div id="scrolling-marquee" class="news-scrolling">
                    <div class="marquee">
                        <div class="news-item">
                            <p><span class="news-text">P. Nikhil (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">B. Lakshman (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">L. V Nikitha (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">V. Manasa (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Veera Raghava (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Varsha (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Yeshwanth (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Sanjani (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Priya (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Mounika (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Vishnu (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Jahnavi (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Divya (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Manoj (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Sandeep (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Abhiram (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Bharath (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Vamsi (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">tejeswini (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">karimunisa (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Durga (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Shyam (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Ganesh (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Sindhu (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Navya (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text">Snighda (2/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> P.Chaitanya Srujana (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> R.Pallavi (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> Ch.Anusha (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> G.Y Anannya (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> Ch.Karthik (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> V.Sai Siva Mani (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> K.Sanju (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> B.Rohit (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> V.Harsha (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> N.Siva sai (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> M.Prudhvi Varma (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> S.Vinay Prasad (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> G.Surendra (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> Y.Ganesh (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> V.Rohith (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> J.R.S.Sathwik (3/4 CSD)</span></p>
                        </div>
                        <div class="news-item">
                            <p><span class="news-text"> Ch.Ravi Kumar (3/4 CSD)</span></p>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    <!-- Team block END -->


    <?php include   'footer.php'; ?>

    <script>
    jQuery(document).ready(function() {
        Layout.init();
    });

    // Get the marquee element by ID
    const marquee = document.getElementById('scrolling-marquee');

    // Resume the marquee animation when the cursor leaves the marquee
    marquee.addEventListener('mouseout', function() {
        marquee.style.animationPlayState = 'running';
    });
    </script>

    <!-- Global js END -->
</body>

</html>