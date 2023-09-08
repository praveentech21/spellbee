<!doctype html>
<html class="fixed">
	<head>
   <?php include "head.php"; ?>
	</head>
	<body>
		<!-- start: page -->

	<div class="row" style='padding-top:50px;'>
	
             <div class="col-lg-2"></div>
             <div class="col-lg-8">
								<section class="card form-wizard" id="w3">
									<header class="card-header" style='text-align:center;'>
										<img src="img/full_logo.jpg" alt="BO HOUSIE" class="rounded-circle user-image" />
										<h2 class="card-title"><br>NEW PLAYER SIGNUP</h2>
										*Only Mobile No, Name, and Place Required
									</header>
									<div class="card-body">
										<div class="wizard-progress">
											<div class="steps-progress">
												<div class="progress-indicator"></div>
											</div>
											<ul class="nav">
												<li class="nav-item active">
													<a class="nav-link" href="#w3-account" data-toggle="tab"><span>1</span>Account Info</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#w3-profile" data-toggle="tab"><span>2</span>OTP Verification</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#w3-billing" data-toggle="tab"><span>3</span>Profile Info</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#w3-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
												</li>
											</ul>
										</div>
										<form class="form-horizontal p-3" novalidate="novalidate">
											<div class="tab-content">
												<div id="w3-account" class="tab-pane active">
													<div class="form-group row">
														<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-username">Mobile Number</label>
														<div class="col-sm-8">
															<input type="number" class="form-control" name="pid" id="w3-username" required>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-password">4 Digit PIN <div style='font-size:12px;'>(For Login Purpose)</div></label>
														<div class="col-sm-8">
															<input type="number" class="form-control" name="pin" id="w3-password" minlength="4" maxlength="4" digits required>
														</div>
													</div>
												</div>
												<div id="w3-profile" class="tab-pane">
													<div class="form-group row">
														<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-first-name">First Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="first-name" id="w3-first-name">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-last-name">Last Name</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="last-name" id="w3-last-name">
														</div>
													</div>
												</div>
												<div id="w3-billing" class="tab-pane">
													<div class="form-group row">
														<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-cc">Card Number</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="cc-number" id="w3-cc" required>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-4 control-label text-sm-right pt-1" for="inputSuccess">Expiration</label>
														<div class="col-sm-4">
															<select class="form-control" name="exp-month" required>
																<option>January</option>
																<option>February</option>
																<option>March</option>
																<option>April</option>
																<option>May</option>
																<option>June</option>
																<option>July</option>
																<option>August</option>
																<option>September</option>
																<option>October</option>
																<option>November</option>
																<option>December</option>
															</select>
														</div>
														<div class="col-sm-4">
															<select class="form-control" name="exp-year" required>
																<option>2014</option>
																<option>2015</option>
																<option>2017</option>
																<option>2017</option>
																<option>2018</option>
																<option>2019</option>
																<option>2020</option>
																<option>2021</option>
																<option>2022</option>
															</select>
														</div>
													</div>
												</div>
												<div id="w3-confirm" class="tab-pane">
													<div class="form-group row">
														<label class="col-sm-4 control-label text-sm-right pt-1" for="w3-email">Email</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="email" id="w3-email" required>
														</div>
													</div>
													<div class="form-group row">
														<div class="col-sm-3"></div>
														<div class="col-sm-9">
															<div class="checkbox-custom">
																<input type="checkbox" name="terms" id="w3-terms" required>
																<label for="w3-terms">I agree to the terms of service</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="card-footer">
										<ul class="pager">
											<li class="previous disabled">
												<a><i class="fas fa-angle-left"></i> Previous</a>
											</li>
											<li class="finish hidden float-right">
												<a>Finish</a>
											</li>
											<li class="next">
												<a>Next <i class="fas fa-angle-right"></i></a>
											</li>
										</ul>
									</div>
								</section>
							</div>
             <div class="col-lg-2"></div>

	</div>
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
        <script src="vendor/jquery-validation/jquery.validate.js"></script>
		<script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
		<script src="js/examples/examples.wizard.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	</body>
</html>