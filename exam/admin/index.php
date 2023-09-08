<!doctype html>
<html class="fixed">
	<head>
   <?php include "head.php"; ?>
   <script>
   $(".pin").css({
  'text-shadow': '2px 2px 5px green'
   });
   </script>
   
	</head>
	<body>
		<!-- start: page -->
	<section class="body-sign body-locked">
			<div class="center-sign">
				<div class="panel card-sign">
					<div class="card-body">
						<form action="dashboard.php" method='post'>
							<div class="current-user text-center">
								<img src="img/full_logo.jpg" alt="BO HOUSIE" class="rounded-circle user-image" />
								<h2 class="user-name text-dark m-0">ADMIN LOGIN</h2>
							 <!--	<p class="user-email m-0">bvrmol@mcr.org.in</p> -->
							</div>
							<div class="form-group mb-3">
								<div class="input-group">
									<input id="pin" name="pin" type="password" class="form-control form-control-lg pin" placeholder="SECRET PIN" MAXLENGTH='6' autocomplete="off"REQUIRED/>
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-th-large"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-6">
									<button type="submit" class="btn btn-primary pull-right">LOGIN TO PLAY</button>
								</div>
							</div>
						</form>
	  <div class="help-block text-center">
	  <?php
	  
	    if(isset($_REQUEST['logout']))
		 {
		   session_start(); 
  		   $_SESSION = array();
           session_destroy();
           if(!isset($_SESSION['pid']))
             {
               echo "<center><span style='color:red;'>You are now logged out!</span></center>";
			 }			   
		 }
		else if(isset($_REQUEST['pwderror']))
		 {
		   session_start(); 
  		   $_SESSION = array();
           session_destroy();
           echo "<center><span style='color:red;'>Invalid Account!</span></center>";
		 }
        else  
 		 {		
          echo "Enter your mobile number to login & play";
		 }			
      ?>
	  </div>
					</div>
				</div>
			</div>
		</section>
		
	  <div align='center' style='font-size:18px;background-color:cyan;'>Next Game @ 7:30 PM (Today)</div>
  	  <!-- end: page -->

 	  <!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>