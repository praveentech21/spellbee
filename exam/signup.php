<!doctype html>
<html class="fixed">
	<head>
   <?php include "head.php"; ?>
   <style>
    .err
	{
	  color:red;
      font-size:10px;
      font-weight:bold;	  
	}
   </style>
	</head>
	<body>
		<!-- start: page -->
	<section class="body-sign body-locked">
			<div class="center-sign">
				<div class="panel card-sign">
					<div class="card-body">
						<form action="index.php" method='post' autocomplete="off" onsubmit='return register();'>
							<div class="current-user text-center">
								<img src="img/full_logo.jpg" alt="BO HOUSIE" class="rounded-circle user-image" />
								<h2 class="user-name text-dark m-0" style='font-size:24px;'>NEW STUDENT SIGNIN</h2>
							    <p class="user-email m-0">Naresh I Tech</p>
							</div>
							<div class="form-group mb-3">
								<div class="input-group">
									<input id="player_name" name="player_name" type="text" class="form-control form-control-lg" placeholder="Full Name" autocomplete="off" REQUIRED />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
									</span>
								</div>
                                <div id='name_err' class='err'></div> 
								</div>
							<div class="form-group mb-3">
								<div class="input-group">
									<input id="mobile" name="mobile" type="number" class="form-control form-control-lg" placeholder="Mobile Number" autocomplete="off" REQUIRED />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-phone"></i>
										</span>
									</span>
								</div>
                                <div id='mobile_err' class='err'></div> 
							</div>
							<div class="form-group mb-3">
								<div class="input-group">
									<input id="place" name="place" type="text" class="form-control form-control-lg" placeholder="Area / Locality"  autocomplete="off" REQUIRED />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-map-signs"></i>
										</span>
									</span>
								</div>
                                <div id='place_err' class='err'></div> 
							</div>
							<div class="form-group mb-3">
								<div class="input-group">
									<input id="city" name="city" type="text" class="form-control form-control-lg" placeholder="City / Town"  autocomplete="off" REQUIRED />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-map-marker-alt"></i>
										</span>
									</span>
								</div>
                                <div id='city_err' class='err'></div> 
							</div>

<!--
							<div class="form-group mb-3">
								<div class="input-group">
									<input id="pin" name="pin" type="number" class="form-control form-control-lg" placeholder="4 Digit PIN (for Login)" MAXLENGTH='4' value='' autocomplete="off" REQUIRED/>
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-th-large"></i>
										</span>
									</span>
								</div>
                                <div id='pin_err' class='err'></div> 
							</div>
							
                            <div class="form-group row">
								<div class="col-sm-2"></div>
								<div class="col-sm-10">
									<div class="checkbox-custom">
										<input type="checkbox" name="bvrm" id="bvrm">
										<label for="w1-bvrm">I live in / belong to Bhimavaram.</label>
									</div>
								</div>
							</div>
-->
                            <div class="form-group row">
								<div class="col-sm-2"></div>
								<div class="col-sm-10">
									<div class="checkbox-custom">
										<input type="checkbox" name="cterms" id="cterms" CHECKED required>
										<label for="w1-terms">I agree to the terms & conditions. <a class="mb-1 mt-1 mr-1 modal-basic" href="#terms">Read</a></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
								 <p class="mt-1 mb-3">
									<a href="index.php">LOGIN HERE</a>
								 </p>
								</div>
								<div class="col-6">
									<button type="submit" class="btn btn-primary pull-right">REGISTER ACCOUNT</button>
								</div>
							</div>
																							<input name="signup" type="hidden" value='1'>

						</form>
					</div>
				</div>
			</div>
		</section>
  	  <!-- end: page -->
      <div id="terms" class="modal-block modal-block-info mfp-hide">
										<section class="card">
											<header class="card-header">
												<h2 class="card-title">Terms & Conditions</h2>
											</header>
											<div class="card-body">
												<div class="modal-wrapper">
													<div class="modal-text">
				<p align='justify'>The Live Quiz Software is a product of <a href='http://www.mcr.org.in' target='_new'>MCR Web Solutions, Bhimavaram</a> primarily created for the students undertaking online technology training of MCR Web Solutions. 
				</p>									
				<h4>Privacy / Terms & Conditions</h4>
				<ul>
				<li>The details collected (Name, Place & Mobile Number) are kept confidential. <b>We will not disclose or share your details to any third-party.</b></li>
				<li>By accepting these terms & conditions, <b>you have agreed to get alerts / updates / notification messages (of MCR Web Solutions) via SMS or WhatsApp.</b>
				If you don’t want to receive notifications from us, you can anytime ask us to stop notifications by sending us a message via WhatsApp to +91 92 93 94 0004.</li>
				<li>No objectionable or offensive information should be posted. Nothing should be related to abusive, threatening, racial, sexual, or obscene.</li>
				<li>The admin reserves the right to delete or modify the comments or information of the users if found to be involved in fraud or wrong practices while playing.</li>
                <li>MCR Web Solutions reserves the final right of decision to ensure a clean and smooth usage of the software.</li>				
				</ul>
 

													</div>
												</div>
											</div>
											<footer class="card-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-info modal-dismiss">OK</button>
													</div>
												</div>
											</footer>
										</section>
									</div>
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		<script src="js/examples/examples.modals.js"></script>
		<!-- Theme Custom -->		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<script type="text/javascript">

	function register()
	{
 	  var player_name=document.getElementById('player_name').value;	  
	  var pid=document.getElementById('mobile').value;
	  var place=document.getElementById('place').value;
	  var city=document.getElementById('city').value;
	  //var pin=document.getElementById('pin').value;

 	  document.getElementById('name_err').innerHTML="";
 	  document.getElementById('mobile_err').innerHTML="";
 	  document.getElementById('place_err').innerHTML="";
 	  document.getElementById('city_err').innerHTML="";
 	  //document.getElementById('pin_err').innerHTML="";
	  
	  if(!(/^[A-z .]{3,20}$/.test(player_name))) 
	   { 
		 document.getElementById('name_err').innerHTML="Please enter a valid name!";
		 return false;
	   }

       if(pid == "")
	   {
		 document.getElementById('mobile_err').innerHTML="Please fill your 10 digit mobile number!";
		 return false;
	   }
	   else if(!(/^[0-9]{10}$/.test(pid))) 
	   { 
		 document.getElementById('mobile_err').innerHTML="Please enter a valid 10 digit mobile number!";
		 return false;
	   }

	  if(!(/^[A-z ., ]{3,20}$/.test(place))) 
	   { 
		 document.getElementById('place_err').innerHTML="Please enter a valid place name!";
		 return false;
	   }

	  if(!(/^[A-z ]{3,20}$/.test(city))) 
	   { 
		 document.getElementById('city_err').innerHTML="Please enter a valid city name!";
		 return false;
	   }
	   
	 /* if(!(/^[0-9]{4}$/.test(pin))) 
	   { 
		 document.getElementById('pin_err').innerHTML="Please enter a valid 4 digit PIN!";
		 return false;
	   }
	  
	  
   
	  if(document.getElementById('terms').checked == false)
        {
			document.getElementById('merr').innerHTML="Please Select Terms & Conditions Checkbox!";
			document.getElementById('merr').scrollIntoView();
		}
  
     if(mobile == "") 
       { 
         document.getElementById('mobile_err').innerHTML="Please enter a mobile number!";
       } 
	 else if(!(/^[0-9]{10}$/.test(mobile))) 
	   { 
		 document.getElementById('mobile_err').innerHTML="Please enter a valid mobile number [Only 10 Digits]!";
	   }

  if(area == "-")
	{
		document.getElementById('area_err').innerHTML="Please select your residence area!";
        document.getElementById('area').scrollIntoView();
        window.scrollBy(1100, -100);
   	    flag++;
	}

  if(name == "")
	{
		document.getElementById('name_err').innerHTML="Please enter your name!";
        document.getElementById('name').scrollIntoView();
        window.scrollBy(1000, -100);
	    flag++;
    }


  if(gross == "")
	{
		document.getElementById('gross_err').innerHTML="Please enter your prediction of Saaho Day 1 Gross Collection in Bhimavaram!";
        document.getElementById('gross').scrollIntoView();
        window.scrollBy(900, -100);
   	    flag++;
	}
	
	
  if(flag == 0)
    {	 
	 if(confirm("Note: Your submission can not be changed later.\nOnly one submission is allowed for one mobile number.")) 
	   {
		
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
     xmlhttp.onreadystatechange=function()
      { 
       if (xmlhttp.readyState==1)
        {
          document.getElementById("otp_box").innerHTML="<span style='color:green;'>Submitting your answers...</span>";
        }
       if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          document.getElementById("otp_box").innerHTML=xmlhttp.responseText;
          //document.getElementById('poll_result').scrollIntoView();
          //setTimeout(function () {document.getElementById('ferr').style.display='none'}, 5000);   
        }
       }  
       //alert("code/saaho/submit_quiz.php?names=" + names + "&language=" + language + "&mno=" + mno + "&sujeeth=" + sujeeth + "&actor=" + actor + "&languages=" + languages + "&sorder=" + sorder + "&budget=" + budget + "&dual=" + dual + "&gross=" + gross + "&name=" + name + "&area=" + area + "&mobile=" + mobile);
       xmlhttp.open("GET","code/saaho/submit_quiz.php?names=" + names + "&language=" + language + "&mno=" + mno + "&sujeeth=" + sujeeth + "&actor=" + actor + "&languages=" + languages + "&sorder=" + sorder + "&budget=" + budget + "&dual=" + dual + "&gross=" + gross + "&name=" + name + "&area=" + area + "&mobile=" + mobile, true);
       //xmlhttp.send();
	   alert("Prediction Poll Closed");
	   }
     }	 
	 */
	 
	 return true;
  }	 

 function verify_otp()
 {
    var flag=0;
    var otp=document.getElementById('otp').value;
	var mbl=document.getElementById('mbl').value;
			 
	if(otp.trim() == "" || otp.length != 4)
	{
		document.getElementById('otp_err').innerHTML="Please enter a valid OTP!";
        //document.getElementById('otp').scrollIntoView();
        flag++;
	}	

   if(flag == 0)
    {	
     if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
     else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
     xmlhttp.onreadystatechange=function()
      { 
       if (xmlhttp.readyState==1)
        {
          document.getElementById("otp_box2").innerHTML="<span style='color:green;'>Verifying your OTP...</span>";
        }
       if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
		  if(xmlhttp.responseText == '1')			  
		  { 
       	     document.getElementById('mbox').innerHTML="<div style='color:green; font-size:18px; text-align:center; margin-top:50px;'><b>Your Quiz Answers have been submitted successfully!</b><br>Thank you for your participation in Bhimavaram Online SAAHO Contest 2019.<br><span style='color:blue;'></span></div><div style='color:blue; text-align:center;' id='refresh'><a href='#' onclick='reload(); return false;'>Refresh</a></div>";	
             document.getElementById('hd').scrollIntoView();
          }
		  else	
            document.getElementById("otp_err").innerHTML=xmlhttp.responseText;
          //document.getElementById('poll_result').scrollIntoView();
          //setTimeout(function () {document.getElementById('ferr').style.display='none'}, 5000);   
        }
       }  
       xmlhttp.open("GET","code/saaho/complete_prediction.php?otp=" + otp + "&mobile=" + mbl, true);
       xmlhttp.send();

    }	 
 }
 
 function resend_otp(mbl2)
 {
     if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
     else
      {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
     xmlhttp.onreadystatechange=function()
      { 
       if (xmlhttp.readyState==1)
        {
          document.getElementById("rsend").innerHTML="<span style='color:green;'>Resendng OTP...</span>";
        }
       if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("rsend").innerHTML=xmlhttp.responseText;
        }
       }  
       xmlhttp.open("GET","code/saaho/resend_otp.php?mobile=" + mbl2, true);
       xmlhttp.send();
 } 
</script>
		
	</body>
</html>