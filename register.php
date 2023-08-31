<!DOCTYPE html>
<html lang="en">

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title>CodeMaster - Online Coding Challenge</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <link rel="shortcut icon" href="favicon.ico">
    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->
    <!-- Global styles BEGIN -->
    <link href="assets/plugins/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome.min.css" rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="assets/pages/css/animate.css" rel="stylesheet">
    <link href="assets/plugins/jquery.fancybox.css" rel="stylesheet">
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
            <h3><strong><b>CODEMASTER</b></strong> 2018</h3>


            <div class="col-md-4"></div>

            <div class="col-md-4">

                <h3><strong>ONLINE CERTIFICATE GENERATION</strong><br></h3>

                <form class="contact-form" id='reg1' method='post' action='certificate/certificate.php' onSubmit="return register();">
                    <input type="text" name='rollno' id="rollno" placeholder="Your Roll Number..." class="form-control" autocomplete="on" autofocus>
                    <br> <select name='language' id='language' class="form-control" style='color:#C91E3E;'>
                        <option value='-'>SELECT EXAM LANGUAGE</option>
                        <option value='C'>C PROGRAMMING</option>
                        <option value='JAVA'>JAVA</option>
                        <option value='PYTHON'>PYTHON</option>
                    </select>
                    <br> <select name='level' id='level' class="form-control" style='color:#C91E3E;'>
                        <option value='L1'>Level 1</option>
                        <option value='L2'>Level 2</option>
                        <option value='L3'>Level 3</option>
                    </select>
                    <br> <input type="password" name='password' id="password" placeholder="YOUR EXAM PASSWORD" class="form-control">
                    <div id='rgerror' style='color:red;font-weight:bold;font-size:14px;'></div>
                    <br>
                    <center><input type="submit" class="button" style='background-color:#C91E3E;color:#ffff;font-weight:bold;padding:5px;' value="GET CERTIFICATE" id='regbutton'></center>
                    </fieldset>
                </form><br><br>
                <h3><strong>NOTE:</strong> Use the password sent to your email / mobile for Level 1 exam.</h3>
                <br><br><br><br><br><br><br><br><br><br><br>

            </div>
            <div class="col-md-4"><input type="hidden" id="cmdDoSomething"></div>




            <!--            <h3><strong><b>Code Master</b></strong><br>The Annual Coding Challenge of SRKREC</h3> -->



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