<?php include "access_check.php"; ?>
<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
	<head>
     <?php include "head.php"; ?>
	</head>
	<body>
		<section class="body">
            <?php include "header.php"; ?>
			<div class="inner-wrapper">
            <?php include "sidebar.php"; ?>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>BO HOUSIE</h2>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-lg-8 mb-4">
							<section class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
			  <h4 class="box-title" id="tkt" align='center'>HOUSIE TICKET (#<?php echo $tid; ?>) <a href='' style='font-size:12px;color:green;' onclick='refresh_ticket(<?php echo $tid; ?>);'>Refresh Ticket</a></h4>
				 <table border='1' class='responsive' id='ticket' style='margin:auto;'>
                  <?php include "ticket.php"; ?>
   			     </table>
			<div id='check_err' style='text-align:center;font-size:14px;'>Click on a number in ticket to check.</div>

										</div>
										<div class="col-xl-4 text-center">
											<h2 class="card-title mt-3">Current Number</h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-3">
												<div class="liquid-meter">
		<div class="cubespinner">
		<div class="face1" id='f1'><img src="img/sponsor.png"></div>
		<div class="face2" id='f2'><img src="img/sponsor.png"></div>
		<div class="face3" id='f3'><img src="img/sponsor.png"></div>
		<div class="face4" id='f4'><img src="img/sponsor.png"></div>
		<div class="face5" id='f5'><img src="img/sponsor.png"></div>
		<div class="face6"><img src="img/sponsor.png"></div>
		</div>

												</div>
												<div class="liquid-meter-selector mt-4 pt-1" id="meterSalesSel">
<div id="myProgress">
  <div id="myBar"></div>
</div>
						<div id='recent'>

						</div>							
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-4 col-xl-4">
							<section class="card card-transparent">
								<div class="card-body">
									<section class="card">
										<div class="card-body">
													  <h4 class="box-title" align='center'>CLAIM PRIZE</h4>
			  <div style='text-align:center;' id='claims'>
  			   <button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-gift"></i> JALDI 5</button>
               <button class="btn bg-green margin" id='J5' onclick="claim_prize(<?php echo $tid; ?>, <?php echo $pid; ?>, 'J5');"><i class='fa fa-trophy'></i> JALDI 5</button>
               <button class="btn bg-green margin" id='L1' onclick="claim_prize(<?php echo $tid; ?>, <?php echo $pid; ?>, 'L1');"><i class='fa fa-trophy'></i> LINE 1</button>
               <button class="btn bg-green margin" id='L2' onclick="claim_prize(<?php echo $tid; ?>, <?php echo $pid; ?>, 'L2');"><i class='fa fa-trophy'></i> LINE 2</button>
               <button class="btn bg-green margin" id='L3' onclick="claim_prize(<?php echo $tid; ?>, <?php echo $pid; ?>, 'L3');"><i class='fa fa-trophy'></i> LINE 3</button>
               <button class="btn bg-green margin" id='FH' onclick="claim_prize(<?php echo $tid; ?>, <?php echo $pid; ?>, 'FH');"><i class='fa fa-trophy'></i> FULL HOUSIE</button>
              </div>
	  		  <div id='claim_err' style='text-align:center;font-size:14px;'>Click on the buttons to claim your prize</div>

										
										</div>
									</section>
								</div>
							</section>
						</div>
				
				</div>
					
					<div class="row pt-4">
						<div class="col-lg-6 mb-4 mb-lg-0">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Housie Board Status</h2>
									<p class="card-subtitle">Check the board progress here.</p>
								</header>
								<div class="card-body">
                   			    <table border='0' class='responsive' id='board'>
			 					<?php
								
								$no=1;
								for($i=1;$i<10;$i++)
								{
								  echo "<tr>";	
								  for($j=1;$j<=10;$j++)
								  {
									  
								   echo "<td id='c$no'>";
								   if(in_array($no,$completed))
								   {
									 echo "<div id='ticked'><i class='fa fa-check'></i>$no</div>";
								   }else
								   {									   
									 echo $no;
								   }
								   echo "</td>";
                                   $no++;								  
								  }
								  echo "</tr>";	
								} 
                                    								
					            ?>

								
			 
			</table>

								</div>
							</section>
						</div>
						<div class="col-lg-6">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
									<h2 class="card-title">Server Usage</h2>
									<p class="card-subtitle">It's easy to create custom graphs on Porto Admin Template, there are several graph types that you can use.</p>
								</header>
								<div class="card-body">
					
									<!-- Flot: Curves -->
									<div class="chart chart-md" id="flotDashRealTime"></div>
					
								</div>
							</section>
						</div>
					</div>
					
					<div class="row pt-4 mt-2">
						<div class="col-lg-6 col-xl-3">
							<section class="card card-transparent">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">My Profile</h2>
								</header>
								<div class="card-body">
									<section class="card card-group">
										<header class="card-header bg-primary">
					
											<div class="widget-profile-info">
												<div class="profile-picture">
													<img src="img/!logged-user.jpg">
												</div>
												<div class="profile-info">
													<h4 class="name font-weight-semibold">John Doe</h4>
													<h5 class="role">Administrator</h5>
													<div class="profile-footer">
														<a href="#">(edit profile)</a>
													</div>
												</div>
											</div>
					
										</header>
										<div id="accordion" class="w-100">
											<div class="card card-accordion card-accordion-first">
												<div class="card-header border-bottom-0">
													<h4 class="card-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
															<i class="fas fa-check mr-1"></i> Tasks
														</a>
													</h4>
												</div>
												<div id="collapse1One" class="accordion-body collapse show">
													<div class="card-body">
														<ul class="widget-todo-list">
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="todoListItem1" class="todo-check">
																	<label class="todo-label" for="todoListItem1"><span>Curabitur ac sem at nibh egestas urabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem2" class="todo-check">
																	<label class="todo-label" for="todoListItem2"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem3" class="todo-check">
																	<label class="todo-label" for="todoListItem3"><span>Curabitur ac sem at nibh egestas</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem4" class="todo-check">
																	<label class="todo-label" for="todoListItem4"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem5" class="todo-check">
																	<label class="todo-label" for="todoListItem5"><span>Curabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem6" class="todo-check">
																	<label class="todo-label" for="todoListItem6"><span>Lorem ipsum dolor sit amet</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem7" class="todo-check">
																	<label class="todo-label" for="todoListItem7"><span>Curabitur ac sem at nibh egestas.</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fas fa-times"></i>
																	</a>
																</div>
															</li>
														</ul>
														<hr class="solid mt-3 mb-3">
														<form method="get" class="form-horizontal form-bordered">
															<div class="form-group row">
																<div class="col-sm-12">
																	<div class="input-group mb-3">
																		<input type="text" class="form-control">
																		<div class="input-group-append">
																			<button type="button" class="btn btn-primary" tabindex="-1">Add</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div class="card card-accordion">
												<div class="card-header border-bottom-0">
													<h4 class="card-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
															 <i class="fas fa-comment mr-1"></i> Messages
														</a>
													</h4>
												</div>
												<div id="collapse1Two" class="accordion-body collapse">
													<div class="card-body">
														<ul class="simple-user-list mb-3">
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
															<li>
																<figure class="image rounded">
																	<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
																</figure>
																<span class="title">Joseph Doe Junior</span>
																<span class="message">Lorem ipsum dolor sit.</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</section>
					
								</div>
							</section>
						</div>
						<div class="col-lg-6 col-xl-3">
							<section class="card card-transparent">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">My Stats</h2>
								</header>
								<div class="card-body">
									<section class="card">
										<div class="card-body">
											<div class="small-chart float-right" id="sparklineBarDash"></div>
											<script type="text/javascript">
												var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
											</script>
											<div class="h4 font-weight-bold mb-0">488</div>
											<p class="text-3 text-muted mb-0">Average Profile Visits</p>
										</div>
									</section>
									<section class="card">
										<div class="card-body">
											<div class="circular-bar circular-bar-xs m-0 mt-1 mr-4 mb-0 float-right">
												<div class="circular-bar-chart" data-percent="45" data-plugin-options='{ "barColor": "#2baab1", "delay": 300, "size": 50, "lineWidth": 4 }'>
													<strong>Average</strong>
													<label><span class="percent">45</span>%</label>
												</div>
											</div>
											<div class="h4 font-weight-bold mb-0">12</div>
											<p class="text-3 text-muted mb-0">Working Projects</p>
										</div>
									</section>
									<section class="card">
										<div class="card-body">
											<div class="small-chart float-right" id="sparklineLineDash"></div>
											<script type="text/javascript">
												var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
											</script>
											<div class="h4 font-weight-bold mb-0">89</div>
											<p class="text-3 text-muted mb-0">Pending Tasks</p>
										</div>
									</section>
								</div>
							</section>
							<section class="card mb-3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">
										<span class="badge badge-primary font-weight-normal va-middle p-2 mr-2">198</span>
										<span class="va-middle">Friends</span>
									</h2>
								</header>
								<div class="card-body">
									<div class="content">
										<ul class="simple-user-list">
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Doe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle">
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
											<li>
												<figure class="image rounded">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle">
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message truncate">Lorem ipsum dolor sit.</span>
											</li>
										</ul>
										<hr class="dotted short">
										<div class="text-right">
											<a class="text-uppercase text-muted" href="#">(View All)</a>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="input-group">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
										<span class="input-group-append">
											<button class="btn btn-default" type="submit"><i class="fas fa-search"></i>
											</button>
										</span>
									</div>
								</div>
							</section>
						</div>
						<div class="col-lg-12 col-xl-6">
							<section class="card">
								<header class="card-header card-header-transparent">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Company Activity</h2>
								</header>
								<div class="card-body">
									<div class="timeline timeline-simple mt-3 mb-3">
										<div class="tm-body">
											<div class="tm-title">
												<h5 class="m-0 pt-2 pb-2 text-uppercase">November 2017</h5>
											</div>
											<ol class="tm-items">
												<li>
													<div class="tm-box">
														<p class="text-muted mb-0">7 months ago.</p>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas hendrerit augue at leo viverra, aliquam egestas lectus laoreet. Donec vehicula vestibulum ipsum, tincidunt ultrices elit suscipit ac. Sed eget risus laoreet, varius nibh id, luctus ligula. Nulla facilisi. <span class="text-primary">#awesome</span>
														</p>
													</div>
												</li>
												<li>
													<div class="tm-box">
														<p class="text-muted mb-0">7 months ago.</p>
														<p>
															Checkout! How cool is that! Etiam efficitur, sapien eget vehicula gravida, magna neque volutpat risus, vitae tempus odio arcu ac elit. Aenean porta orci eu mi fermentum varius. Curabitur ac sem at nibh egestas. Curabitur ac sem at nibh egestas.
														</p>
														<div class="thumbnail-gallery">
															<a class="img-thumbnail lightbox" href="img/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
																<img class="img-fluid" width="215" src="img/projects/project-4.jpg">
																<span class="zoom">
																	<i class="fas fa-search"></i>
																</span>
															</a>
														</div>
													</div>
												</li>
											</ol>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
					<div class="row pt-4 mt-1">
						<div class="col-xl-6">
							<section class="card card-transparent mb-3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Global Stats</h2>
								</header>
								<div class="card-body">
									<div id="vectorMapWorld" style="height: 350px; width: 100%;"></div>
								</div>
							</section>
						</div>
						<div class="col-xl-6">
							<section class="card">
								<header class="card-header card-header-transparent">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Projects Stats</h2>
								</header>
								<div class="card-body">
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Project</th>
												<th>Status</th>
												<th>Progress</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Porto - Responsive HTML5 Template</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
															100%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Porto - Responsive Drupal 7 Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
															100%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Tucson - Responsive HTML5 Template</td>
												<td><span class="badge badge-warning">Warning</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
															60%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Tucson - Responsive Business WordPress Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
															90%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Porto - Responsive Admin HTML5 Template</td>
												<td><span class="badge badge-warning">Warning</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
															45%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Porto - Responsive HTML5 Template</td>
												<td><span class="badge badge-danger">Danger</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded m-0 mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
															40%
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Porto - Responsive Drupal 7 Theme</td>
												<td><span class="badge badge-success">Success</span></td>
												<td>
													<div class="progress progress-sm progress-half-rounded mt-1 light">
														<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
															95%
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>


		</section>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>		<script src="vendor/popper/umd/popper.min.js"></script>		<script src="vendor/bootstrap/js/bootstrap.js"></script>		<script src="vendor/common/common.js"></script>		<script src="vendor/nanoscroller/nanoscroller.js"></script>		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>		<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->		<script src="vendor/jquery-ui/jquery-ui.js"></script>		<script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>		<script src="vendor/jquery-appear/jquery-appear.js"></script>		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		<script src="js/housie.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

     <?php include "footer.php"; ?>
	</body>
</html>