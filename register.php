<!DOCTYPE html>
<html lang="en">

<?php

include "connect.php";
if (isset($_POST['newregistration'])) {
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $branch = $_POST['branch'];
    $section = $_POST['section'];
    $recaptchaResponse = $_POST['h-captcha-response'];
    $batch = $_POST['batch'];


    $secretKey = "ES_6aec8d63fca04791b4648bc8c74b15bd"; // Replace with your Secret key
    $url = "https://hcaptcha.com/siteverify";
    $data = [
        "secret" => $secretKey,
        "response" => $recaptchaResponse,
    ];

    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, $url);
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    $responseData = json_decode($response);

    if ($responseData->success) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `users` WHERE `regno`='$regno' or `pid` = '$mobile'")) > 0) {
            echo "<script>alert('You are already registered! you can go and play game campus online stall');</script>";
        } else {
            $newregistration = $conn->prepare("INSERT INTO `users`(`pid`, `player_name`, `place`, `regno`, `email`, `department`, `section`) VALUES (?,?,?,?,?,?,?)");
            $newregistration->bind_param("ssissss", $mobile, $name, $batch, $regno, $email, $branch, $section);
            if ($newregistration->execute()) {
                echo "<script>alert('You Register Sucessfully you can go and play game in our stalls');</script>";
            } else {
                echo "<script>alert('Registration Failed');</script>";
            }
        }
    }
    else {
        echo "<script>alert('Please verify captcha');</script>";
    }
}
?>


<head>
    <meta charset="utf-8">
    <title>Registrations - Spell Bee</title>
    <link rel="shortcut icon" href="assets/onepage/img/cup.png">

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
    <script src='https://www.hCaptcha.com/1/api.js' async defer></script>

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
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
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
                <h3 id="error_register"><strong></strong><br></h3>

                <form class="contact-form" id='reg1' method='post' action='#' onsubmit="return validateForm();">
                    <input type="text" name='name' id="name" placeholder="Your Name..." class="form-control" autocomplete="off" autofocus>
                    <div id="name-error" class="error"></div>

                    <br><input type="text" name='regno' id="regno" placeholder="Your Register Number..." class="form-control" autocomplete="off">
                    <div id="regno-error" class="error"></div>

                    <br><input type="email" name='email' id="email" placeholder="Your Email" class="form-control" autocomplete="off">
                    <div id="email-error" class="error"></div>

                    <br><input type="tel" name='mobile' id="mobile" placeholder="Your Mobile Number" class="form-control" autocomplete="off">
                    <div id="mobile-error" class="error"></div>

                    <br> <select name='branch' id='branch' class="form-control" style='color:#C91E3E;'>
                        <option selected value="">Select Your Branch</option>
                        <option value="CSD">CSD</option>
                        <option value="CSE">CSE</option>
                        <option value="CSBS">CSBS</option>
                        <option value="CIC">CIC</option>
                        <option value="CSIT">CSIT</option>
                        <option value="IT">IT</option>
                        <option value="AIDS">AIDS</option>
                        <option value="AIML">AIML</option>
                        <option value="MECH">MECH</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                    </select>
                    <div id="branch-error" class="error"></div>

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
                    </select><br>
                    <div class="h-captcha" data-sitekey="f6892b7e-56c6-4010-a3c0-2878d8437349"></div>
                    <center><input type="submit" name="newregistration" class="button" style='background-color:#C91E3E;color:#ffff;font-weight:bold;padding:5px;' value="REGISTER NOW" id="regbutton"></center>
                    <!-- Error placeholders -->
                    <div id="section-error" class="error"></div>
                    <div id="batch-error" class="error"></div>
                </form>

                <br><br>
                <h3><strong>NOTE: </strong> You can Pay money in our stalls and confirm you Registration, If you want to
                    pay money online you can <strong><a href="https://pages.razorpay.com/pl_MUwbEmBPOkmZtK/view" target="_blank">Register Here</a></strong>.</h3><br><br>
                <!-- <br><br><br><br><br><br><br><br><br><br><br> -->

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
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var regno = document.getElementById("regno").value;
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("mobile").value;
            var branch = document.getElementById("branch").value;
            var section = document.getElementById("section").value;
            var batch = document.getElementById("batch").value;

            // Clear previous error messages
            document.getElementById("name-error").innerHTML = "";
            document.getElementById("regno-error").innerHTML = "";
            document.getElementById("email-error").innerHTML = "";
            document.getElementById("mobile-error").innerHTML = "";
            document.getElementById("branch-error").innerHTML = "";
            document.getElementById("section-error").innerHTML = "";
            document.getElementById("batch-error").innerHTML = "";

            var isValid = true;

            // Validate Name
            if (name === "") {
                document.getElementById("name-error").innerHTML = "Name must be filled out";
                isValid = false;
            }

            // Validate Register Number
            if (regno === "") {
                document.getElementById("regno-error").innerHTML = "Register Number must be filled out";
                isValid = false;
            } else {
                // var regnoPattern = /^(20|21|22|23)B\d{2}A\d{4}$/;
                // var regnoPattern1 = /^(AIDS|AIML|CSBS|CSD|CSE|CIC|CSI|CIVIL|MECH|EEE|ECE|IT)\d{4}$/;
                // if (!regnoPattern.test(regno) ) {
                //     if (!regnoPattern1.test(regno)) {
                //     document.getElementById("regno-error").innerHTML = "Invalid Register Number format";
                //     isValid = false;}
                // }
                // var regnoPattern = /^(20|21|22|23)B\d{2}A\d{4}$/;
                var regnoPattern = /^\w{10}$/;
                if (!regnoPattern.test(regno)) {
                    document.getElementById("regno-error").innerHTML = "Invalid Register Number format";
                    isValid = false;
                }
            }

            // Validate Email
            if (email === "") {
                document.getElementById("email-error").innerHTML = "Email must be filled out";
                isValid = false;
            } else {
                var emailPattern = /.+@.+/;
                if (!emailPattern.test(email)) {
                    document.getElementById("email-error").innerHTML = "Invalid Email format";
                    isValid = false;
                }
            }

            // Validate Mobile Number
            if (mobile === "") {
                document.getElementById("mobile-error").innerHTML = "Mobile Number must be filled out";
                isValid = false;
            } else {
                var mobilePattern = /^[6-9]\d{9}$/;
                if (!mobilePattern.test(mobile)) {
                    document.getElementById("mobile-error").innerHTML = "Invalid Mobile Number format (must be 10 digits)";
                    isValid = false;
                }
            }

            // Validate Branch
            if (branch === "") {
                document.getElementById("branch-error").innerHTML = "Please select your Branch";
                isValid = false;
            }

            // Validate Section
            if (section === "") {
                document.getElementById("section-error").innerHTML = "Please select your Section";
                isValid = false;
            }

            // Validate Batch
            if (batch === "") {
                document.getElementById("batch-error").innerHTML = "Please select your Student Year";
                isValid = false;
            }

            return isValid;
        }
    </script>

</body>

</html>