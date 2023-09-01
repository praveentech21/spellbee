<!DOCTYPE html>
<html lang="en">

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title>Registrations - Spell Bee</title>

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
    </style>

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

                <h3><strong>Online Registrations</strong><br></h3>

                <form class="contact-form" id='reg1' method='post' action='certificate/certificate.php' onSubmit="return register();">
                <input type="text" name='name' id="name" placeholder="Your Name..." class="form-control" autocomplete="off" autofocus>
                <br><input type="text" name='regno' id="regno" placeholder="Your Register Number..." class="form-control" autocomplete="off">
                <br><input type="email" name='email' id="email" placeholder="Your Email" class="form-control" autocomplete="off">
                <br><input type="tel" name='mobile' id="mobile" placeholder="Your Mobile Number" class="form-control" autocomplete="off">
                    <br> <select name='branch' id='branch' class="form-control" style='color:#C91E3E;'>
                    <option selected value="">Select Your Branch</option>
                          <option value="csd">CSD</option>
                          <option value="cse">CSE</option>
                          <option value="csbs">CSBS</option>
                          <option value="CIC">CIC</option>
                          <option value="CSE(Iot)">CSE(Iot)</option>
                          <option value="IT">IT</option>
                          <option value="AIDS">AIDS</option>
                          <option value="AIML">AIML</option>
                          <option value="MECH">MECH</option>
                          <option value="CIVIL">CIVIL</option>
                          <option value="ECE">ECE</option>
                          <option value="EEE">EEE</option>
                    </select>
                    <br> <select name='section' id='section' class="form-control" style='color:#C91E3E;'>
                    <option selected value="">Select Your Section</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                    </select>
                    <br> <select name='batch' id='batch' class="form-control" style='color:#C91E3E;'>
                    <option selected value="">Select Student Year</option>
                              <option value="2027">First Year</option>
                              <option value="2026">Second</option>
                              <option value="2025">Third Year</option>
                              <option value="2024">Fourth Year</option>
                    </select>
                    <br>
                    <center><input type="submit" class="button" style='background-color:#C91E3E;color:#ffff;font-weight:bold;padding:5px;' value="REGISTER NOW" id='regbutton'></center>
                    </fieldset>
                </form><br><br>
                <h3><strong>NOTE:</strong>You can Pay money in our stalls and confirm you Registration, If you want to pay money online you can use link on page side bar.</h3>
                <br><br><br><br><br><br><br><br><br><br><br>

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

    <!-- bootbox code -->
    <script type="text/javascript">
        // Register......
        function register() {

            var rollno = document.getElementById('rollno').value;
            var language = document.getElementById('language').value;
            var password = document.getElementById('password').value;

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

            if (language == "-") {
                document.getElementById('rgerror').innerHTML = "Please Select The Exam Language!<br>";
                return false;
            }

            if (password == "") {
                document.getElementById('rgerror').innerHTML = "Please Enter Your Code Master Exam Password!<br>";
                return false;
            }

            return true;
        }
    </script>
</body>

</html>