<!DOCTYPE html>
<html lang="en">

<?php include 'connect.php';
if (isset($_POST['addfeedback'])) {

    $rating = $_POST['rating'];
    $rollno = $_POST['rollno'];
    $feedback = $_POST['feedback'];
    $addfeedback = $conn->prepare("INSERT INTO `feedback`(`regno`, `feedback`, `rating`) VALUES (?,?,?)");
    $addfeedback->bind_param("sss", $rollno, $feedback, $rating);
    if ($addfeedback->execute()) {
        echo "<script>alert('Thank You For Your Feedback!'); window.location.href = 'index.php';</script>"; 
    } else {
        echo "<script>alert('Something Went Wrong!');</script>";
    }
}

?>

<head>
    <meta charset="utf-8">
    <title>Feedback - SpellBee SRKR</title>
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
    <link rel="stylesheet" type="text/css" href="scratch/test.css">


    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="assets/pages/css/components.css" rel="stylesheet">
    <link href="assets/pages/css/slider.css" rel="stylesheet">
    <link href="assets/onepage/css/style.css" rel="stylesheet">
    <link href="assets/onepage/css/style-responsive.css" rel="stylesheet">
    <link href="assets/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="assets/onepage/css/custom.css" rel="stylesheet">
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->


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
            <h3><strong><b>SRKR SPELL BEE </b></strong> 2023</h3>


            <div class="col-md-4"></div>

            <div class="col-md-4">

                <h3><strong>EVENT FEEDBACK</strong><br></h3>

                <!-- Your HTML form with error placeholders and "required" attributes -->
                <form class="contact-form" id="reg1" method="post" action="#" onsubmit="return validateForms();">
                    <input type="text" name="rollno" id="rollno" required placeholder="Your Roll Number..." class="form-control" autocomplete="on" autofocus>
                    <div id="rollno-error" class="error"></div>

                    <br><input type="text" name="feedback" required id="feedback" placeholder="Your Valuable Feedback..." class="form-control" autocomplete="on" autofocus>
                    <div id="feedback-error" class="error"></div>

                    <br><select name="rating" id="rating" required class="form-control" style="color:#C91E3E;">
                        <option value="">Rate our EVENT</option>
                        <option value="5"><strong>Five</strong> star</option>
                        <option value="4"><strong>Four</strong> star</option>
                        <option value="3"><strong>Three</strong> star</option>
                        <option value="2"><strong>Two</strong> star</option>
                        <option value="1"><strong>Single</strong> star</option>
                    </select>

                    <br>

                    <br>
                    <center><input type="submit" name="addfeedback" class="button" style="background-color:#C91E3E;color:#ffff;font-weight:bold;padding:5px;" value="Submit Feedback" id="regbutton"></center>
                </form>
                <br><br>

                <br><br><br><br><br><br><br><br>

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
    function validateForms() {
        var rollno = document.forms["reg1"]["rollno"].value;
        var feedback = document.forms["reg1"]["feedback"].value;

        // Clear previous error messages
        document.getElementById("rollno-error").innerHTML = "";
        document.getElementById("feedback-error").innerHTML = "";

        // Basic field validation
        var isValid = true;

        // Validate Roll Number format
        var regnoPattern = /^\w{10}$/;
                if (!regnoPattern.test(rollno) ) {
                    document.getElementById("rollno-error").innerHTML = "Invalid Register Number format";
                    isValid = false;
                }   

        if (feedback === "") {
            document.getElementById("feedback-error").innerHTML = "Feedback must be filled out";
            isValid = false;
        }


        return isValid; // Form is valid if all validations pass
    }
</script>

</body>

</html>