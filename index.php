`<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SRKR Spell Bee - Online Spelling Challenge </title>

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

        h3{
            font-size: 14px;
        }
    </style>

</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->

<body class="menu-always-on-top">
    
        <?php include "header.php"; ?>
    <!-- Promo block BEGIN -->
    <div class="promo-block" id="promo-block">
        <div id="carousel-example-generic" class="carousel slide carousel-slider" style="margin-top: 60px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-one active">
                    <img class="carousel-position-srkrec animate-delay"  data-animation="animated fadeInDown">
                    <img class="animate-delay" style='padding-top:150px;' src="assets/onepage/img/slider/cup.png" alt="SpellBee Challenge" data-animation="animated fadeInDown">
                    <img class="carousel-position-coders hidden-sm hidden-xs animate-delay"   data-animation="animated fadeInUp">

                </div>

                <!-- First slide --
                <div class="item carousel-item-one">
                    <img class="carousel-position-srkrec hidden-sm hidden-xs animate-delay" src="assets/onepage/img/slider/srkrec.png" alt="Code Master 2018" data-animation="animated fadeInDown">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <h2 class="margin-bottom-20 animate-delay carousel-title-v1" data-animation="animated fadeInDown">
                                    <span class="color-red"><b>Spell Champ SRKR</b></span>
									                    <img class="carousel-position-srkrec hidden-sm hidden-xs animate-delay" src="assets/onepage/img/slider/cup.png" alt="SpellBee Challenge" data-animation="animated fadeInDown">
	
                                </h2>

                                <div class="animated flipInX">
                                    <div class="hidden-xs">
                                        <i class="promo-like fa fa-thumbs-up" style='padding-bottom:80px;margin-top:40px;'></i>
                                        <div class="promo-like-text">
                                            <h2>Test Your Spelling Skills in <br><span class='color-red'>Spell Champ SRKR</span></h2>
                                            <p>Participate & Win Exciting Prizes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div align='left'>
                    <img class="carousel-position-coders hidden-sm hidden-xs animate-delay" src="assets/onepage/img/slider/cup.png" alt="Iphone" data-animation="animated fadeInUp">
					</div>	

                </div>-->

                <!-- Second slide --
                <div class="item carousel-item-two">
                    <img class="carousel-position-two hidden-sm hidden-xs animate-delay" src="assets/onepage/img/slider/title.png" alt="Code Master 2018" data-animation="animated fadeInDown">
                    <img class="carousel-position-three hidden-sm hidden-xs animate-delay" src="assets/onepage/img/slider/prizes.png" alt="Iphone" data-animation="animated fadeInUp">
                </div> -->

                <!-- Third slide -->
                <div class="item carousel-item-three">
                    <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                                <span class="carousel-subtitle-v1">IMPORTANT DATES</span>
                                <h3 class="margin-bottom-20 animate-delay promo-like-text" data-animation="animated fadeInDown">
                                    <div STYLE='font-size:28px;'><span class='color-red'>ROUND 1:</span> 04th SEP - 24th SEP 2023</div>
                                    <div STYLE='font-size:28px;'><span class='color-red'>ROUND 2:</span> 24th SEP - 4th OCT 2023</div>
                                    <div STYLE='font-size:28px;'><span class='color-red'>ROUND 3:</span> 10th OCTOBER 2023</div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <img class="carousel-position-three hidden-sm hidden-xs animate-delay" src="assets/onepage/img/slider/cup.png" width='300px' alt="Prizes" data-animation="animated fadeInUp">

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
            <h4>SRKR SpellBee is an unique online spelling check challenge conducted to test the Spelling skills of SRKREC students. Only SRKREC students (all branches & years of B.E/B.Tech programmes) are eligible to take part in this challenge and can win exciting prizes. The winners will be decided based on their skill level in Spelling Words with varying levels of difficulty, Speed and accuracy. As the contest is completely online, we provide audio of the word with a defined meaning of that word, you need to guess/write the spelling to gain points.</h4>

            <a name='rules'></a>
            <div class="container">
                <h2 class="margin-bottom-20" style='font-size:24px;'><strong>Levels</strong> Of SRKR SpellBee Challenge</h2>
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
                                    <li><i class="fa fa-circle"></i> For Replay <i class="fa fa-rupee"><em>10</em>/-</i></li>
                                    <li><i class="fa fa-circle"></i> 15 Words (Easy to Moderate) - MCQs</li>
                                    <li><i class="fa fa-circle"></i> Take Exam at Campus Online Stalls on Campus, Hostel Stall (for Hostel Girls) and at Technology Centre (Till 8 PM Every Day) and respected Places</li>
                                    <li><i class="fa fa-circle"></i> Top 20% will go to Level 2</li>
                                    <li><i class="fa fa-circle"></i>  E-Certificate will be given for every Participant</li>
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
                                    <li><i class="fa fa-circle"></i> 30 Words with Moderate to Tough Level Difficulty</li>
                                    <li><i class="fa fa-circle"></i> This round will be Conducted in Batches @ Tech Centre for 1 Week</li>
                                    <li><i class="fa fa-circle"></i> Participants should WRITE/TYPE the correct spellings</li>
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
                                    <li><i class="fa fa-circle"></i> 30 Common Words for All - 30 Minutes Competition</li>
                                    <li><i class="fa fa-circle"></i> Speed Base Scoring Evaluation - Winners To Be Decided on Speed and Accuracy</li>
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
                    <a href='http://www.purplelane.in' target='plane'><center> <img src="assets/onepage/img/sponsors/purplelane.png" alt="" class="img-responsive"></center>
                    <b>www.purplelane.in</b></a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 item">
                    <h3>Title Sponsor</h3> <br>
                    <a href='https://bhimavaramonline.page.link/dhgB' target='bvrmol'><center> <img src="assets/onepage/img/sponsors/bvrmol.png" alt="" class="img-responsive"></center>
                    <b>Bhimavaram Online</b></a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 item">
                    <h3>Associate Sponsor</h3>
                    <br>
                    <a href='https://bhimavaramonline.page.link/gvFA' target='kshatriya'>
					<center><img src="assets/onepage/img/sponsors/kkitchen.png" alt="" class="img-responsive"></center>
                    <b>Kshatriya's Kitchen</b></a>
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
        </div>
        <div class="row">
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/civil.jpg" alt="CIVIL" class="img-responsive">
                <!--                <a href="civil.php" class="zoom valign-center"> -->
                <a href="leaderboard.php?dept=CIVIL" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Civil Engineering</strong>
                        <em><br><br><br>Registered: To be updated<br><br></em>
                        <b>View CIVIL LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/cse.jpg" alt="CSE" class="img-responsive">
                <a href="leaderboard.php?dept=CSE" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Computer Science & Engineering</strong>
                        <em><br><br>Registered:  To be updated <br><br></em>
                        <b>View CSE LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/ece.jpg" alt="ECE" class="img-responsive">
                <a href="leaderboard.php?dept=ECE" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Electronics & Communication Engineering</strong>
                        <em><br><br><br>Registered: To be updated<br><br></em>
                        <b>View ECE LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/eee.jpg" alt="EEE" class="img-responsive">
                <a href="leaderboard.php?dept=EEE" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Electrical & Electronics Engineering</strong>
                        <em><br>Registered: To be updated<br><br></em>
                        <b>View EEE LeaderBoard</b>
                    </div>
                </a>
            </div>

            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/it.jpg" alt="IT" class="img-responsive">
                <a href="leaderboard.php?dept=IT" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Information Technology</strong>
                        <em><br><br>Registered: To be updated<br><br></em>
                        <b>View IT LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/mech.jpg" alt="MECH" class="img-responsive">
                <a href="leaderboard.php?dept=MECH" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Mechanical Engineering</strong>
                        <em><br><br>Registered: To be updated<br><br></em>
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
                        <em><br><br><br>Registered: To be updated<br><br></em>
                        <b>View CSBS LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/csd.jpg" alt="CSD" class="img-responsive">
                <a href="leaderboard.php?dept=CSD" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Computer Science and Design</strong>
                        <em><br><br>Registered: To be updated<br><br></em>
                        <b>View CSD LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/aiml.jpg" alt="AIML" class="img-responsive">
                <a href="leaderboard.php?dept=AIML" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Artificial Intelligence & Machine Learning </strong>
                        <em><br>Registered: To be updated<br><br></em>
                        <b>View AIML LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/aids.jpg" alt="AIDS" class="img-responsive">
                <a href="leaderboard.php?dept=AIDS" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Artificial Intelligence and Data Science</strong>
                        <em><br>Registered: To be updated<br><br></em>
                        <b>View AI&DS LeaderBoard</b>
                    </div>
                </a>
            </div>

            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/csit.jpg" alt="CSIT" class="img-responsive">
                <a href="leaderboard.php?dept=CSIT" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Computer Science and Information Technology</strong>
                        <em><br><br>Registered: To be updated<br><br></em>
                        <b>View CSIT LeaderBoard</b>
                    </div>
                </a>
            </div>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="assets/onepage/img/portfolio/cic.jpg" alt="CIC" class="img-responsive">
                <a href="leaderboard.php?dept=CIC" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong>Internet of Things and Cyber Security</strong>
                        <em><br><br>Registered: To be updated<br><br></em>
                        <b>View CSE(IOT) LeaderBoard</b>
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
            <h4>The frequently asked questions have been answered for better understanding of the Spell Bee Contest and other details. Please feel free to contact <a href="javascript:void(0);">Technology Centre, Z-Block</a> for any unanswered queries.</h4>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <img src="assets/onepage/img/choose-us.png" alt="Why to choose us" class="img-responsive">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">Who can participate?</a>
                                </h5>
                            </div>
                            <div id="accordion1_1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>The Spell Bee contest is only for the students of SRKR Engineering College. Students of any branch and any year can participate in the contest.</p>
                                    <p>Students can register and pay the fee at Campus Online Stall or Technology Centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Is there an exam fee?</a>
                                </h5>
                            </div>
                            <div id="accordion1_2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>For First Time: Rs. 20/-. For Replay - Rs. 10/-</p>
                                    <p>The registration fee can be paid to our Team at Stalls or at Technology Centre to get your exam user id and password.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">What is the benefit of taking this contest?</a>
                                </h5>
                            </div>
                            <div id="accordion1_3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>The exciting prizes are only meant for encouragement. More than the prizes, you can assess your Spelling skills and know where you stand among the potential Spell Champs of SRKR. Spell Bee Champ 2023 is going to generate a Rank for top 10 students based on their overall performance in the contest. A certificate of merit or participation is given to acknowledge their performance is provided for all.</p>
                                    <p>You can win an Boat Buds / FOSSIL Watches / Smart Bands, Wrist Watches, Sound Boxes, Vouchers and other lot of exciting gadgets and coupons by participating in the contest. To encourage students of all branches, Spell Champ has introduced prizes for Department-wise best performers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Where is the exam conducted?</a>
                                </h5>
                            </div>
                            <div id="accordion1_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Round 1 can be taken 3 Places (at Campus Online / at Girls Hostel Stall / Technology Centre), we will provide our System / laptop / Desktop before the Round 1 Deadline.</p>
                                    <p>Round 2 & 3 will be conducted @ Technology Centre & Digital Learning Centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">What are the words asks ?</a>
                                </h5>
                            </div>
                            <div id="accordion1_5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Basic word mostly used in our Daily world</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">I have other doubts. Whom do I contact?</a>
                                </h5>
                            </div>
                            <div id="accordion1_6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Contact Technology Centre, I-Hub, Z-Block, SRKR Engineering College, Bhimavaram for any queries or clarifications during 9 AM to 8 PM.</p>
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


        <!-- <a href="ranks.php" target="_blank" class="btn blink" style='background-color:#C91E3E;color:#ffff; font-size:18px;box-shadow: 3px 3px 1px white;'><b>REGISTRATIONS CLOSED</b></a> -->
        <br><br><br>
        <h2>Spell Champ 2023 Registration Stats</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>20% </strong>
                        Total Registrations
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>50</strong>
                        Qualified for Round 2
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>30</strong>
                        Qualified for Round 3
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="item">
                        <strong>10</strong>
                        Winners
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
            <h4>The contest - Spell Bee Champ of SRKR is organized in assocation with Engilish Department, IDEALab and Technology Centre</h4>
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
    </div>
    <!-- Team block END -->

<!-- Team block BEGIN -->
<div class="team-block content content-center margin-bottom-40" id="team">
        <div class="container">
            <h2>Meet <strong>The Student Team</strong></h2>
            <div class="row">
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">P. Nikhil</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">B. Lakshman</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">L. V Nikitha</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">V. Manasa</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">D. Varsha</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">K. Yeshwanth</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">P. Krishna Vamsi</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">U. Manoj</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">M. Rohith</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">P. Bharath</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">B. Avinash</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">M. Jahnavi</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Ch. Ravi Kumar</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">K. Sanju</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">V. Sai Siva Mani</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">M. Prudhvi Varma</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">B. Rohit</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">V. Harsha</h3>
                    <em style="font-size: 10px;">2/4 CSD, SRKREC</em>
                </div>
            </div>
            <div class="row">
            <div class="col-md-2 item">
                    <h3 style="font-size:14px;">S. Vinay Prasad</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">Ch. Anusha</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">P. Chaitanya Srujana</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">R. S Pallavi</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">J. R S Sathvik</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
                <div class="col-md-2 item">
                    <h3 style="font-size:14px;">G.Surendra</h3>
                    <em style="font-size: 10px;">3/4 CSD, SRKREC</em>
                </div>
              
            </div>





        </div>
    </div>
    <!-- Team block END -->



    <?php  include('footer.php'); ?>
    <!-- BEGIN STYLE CUSTOMIZER -->
 <!--
      
    
  -->
    <script>
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>
    <!-- Global js END -->
    <script type="text/javascript">
        // Register......
        function register() {

            var rollno = document.getElementById('rollno').value;
            var name = document.getElementById('name').value;
            var batch = document.getElementById('batch').value;
            var email = document.getElementById('email').value;
            var mobile = document.getElementById('mobile').value;
            var language = document.getElementById('language').value;

            document.getElementById('rgerror').innerHTML = "";

            if (rollno == "") {
                document.getElementById('rgerror').innerHTML = "Please Fill Your Roll Number!<br>";
                return false;
            }

            rn = /^[0-9]{12}$/;
            fn = /^[0-9]{2}[0-9A-Za-z]{8}$/;
            mn = /^[0-9]{9}$/;
            if (!rn.test(rollno)) {
                if (!fn.test(rollno)) {
                    if (!mn.test(rollno)) {
                        document.getElementById('rgerror').innerHTML = "Invalid Roll Number!<br>";
                        return false;
                    }
                }
            }

            if (name == "") {
                document.getElementById('rgerror').innerHTML = "Please Fill Your Full Name!<br>";
                return false;
            }

            if (batch == "-") {
                document.getElementById('rgerror').innerHTML = "Please Select Your Batch!<br>";
                return false;
            }

            if (email == "") {
                document.getElementById('rgerror').innerHTML = "Please Fill Your E-mail!<br>";
                return false;
            }
            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
                document.getElementById('rgerror').innerHTML = "Invalid E-mail ID!<br>";
                return false;
            }

            if (mobile == "") {
                document.getElementById('rgerror').innerHTML = "Please Fill Your Mobile Number!<br>";
                return false;
            }
            mb = /^[0-9]{10}$/;
            if (!mb.test(mobile)) {
                document.getElementById('rgerror').innerHTML = "Invalid Mobile Number!<br>(Enter only a 10 digit mobile number)<br>";
                return false;
            }

            if (language == "-") {
                document.getElementById('rgerror').innerHTML = "Please Select The Exam Language!<br>";
                return false;
            }

            return true;
        }
    </script>


</body>

</html>`