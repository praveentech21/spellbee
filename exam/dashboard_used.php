<?php include "access_check.php"; ?>
<?php
if(isset($_GET['qid']) && isset($_GET['op']))
{
	include "connect.php";
	$sid=$_SESSION['pid'];	
    $qid=$_GET['qid'];	
    $op=$_GET['op'];	

  	mysqli_query($conn, "insert into responses (sid,qid,answer) values ('$sid', $qid, '$op');");
}	
?>
<?php 
   include "connect.php";
   $pid=$_SESSION['pid'];
?>
<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
	<head>
     <?php include "head.php"; ?>
	 <style>
		  td{
 		  color:#000000;
	    }
		
	.ui-pnotify.red .ui-pnotify-container {
		background-color: #DC143C !important;
		color:#ffffff;
		border:0px;
		}

	.ui-pnotify.blue .ui-pnotify-container {
		background-color: #0088cc !important;
		color:#ffffff;
		border:0px;
		}
	 </style>
    </head>
	<body>
		<section class="body">
            <?php include "header.php"; ?>
			<div class="inner-wrapper">
			<!-- start: sidebar -->
            <?php include "sidebar.php"; ?>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>LIVE QUIZ</h2>
					</header>

					<!-- start: page -->
					<div class='row'>
					<div class="col-xl-2">

					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">My Stats</h5>
        			<?php

					$points_res=mysqli_query($conn, "SELECT * from users where pid='$pid';"); 		
          			$points=mysqli_fetch_array($points_res);
					
					?>

            					<div class="row">
									<div class="col-12">
										<section class="card mb-4">
											<div class="card-body bg-primary">
												<div class="widget-summary">
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">MY SCORE</h4>
															<div class="info">
																<strong class="amount" id='points'><?php echo $points['points']; ?> Marks</strong>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
									<div class="row">
									<div class="col-12">
										<section class="card mb-4">
								
								<div style='padding-left:20px;padding-bottom:100px; text-align:center;'>
		<div class="cubespinner home">
		<div class="face1" id='f1' style="font-size:20px;padding-top:10px;">LIVE QUIZ<span style='font-size:18px;color:#000000;'><br>Answer From<br>Anywhere</span></div>
		<div class="face2" id='f2'><img src="img/sponsor.png"></div>
		<div class="face3" id='f3' style='font-size:20px;padding-top:10px;'>REAL TIME QUIZ<span style='font-size:16px;color:#000000;'><br>200 MCQs / <br>Course</span></div>
		<div class="face4" id='f4'><img src="img/sponsor.png"></div>
		<div class="face5" id='f5' style='font-size:20px;padding-top:10px;'>FASTEST & RIGHT<span style='font-size:16px;color:#000000;'><br>Answer<br>Analysis</span></div>
		<div class="face6"><img src="img/sponsor.png"></div>
		</div>
										</div>

								</section>
								  </div>
                                  </div>
 								  
<!--								<div class="row">
									<div class="col-12">
										<section class="card mb-4">
											<div class="card-body bg-secondary">
												<div class="widget-summary">
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">MY GAMES</h4>
															<div class="info">
																<strong class="amount">
													<?php			
	//						$games_res=mysqli_query($conn, "SELECT count(*) FROM player_games where pid='$pid';"); 		
	//                        echo mysqli_num_rows($games_res);
													?>			
																</strong>																																
																 <div><a href='all_games.php' style='font-size:10px;color:#ffffff;'>View List</a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<section class="card mb-4">
											<div class="card-body bg-tertiary">
												<div class="widget-summary">
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">POINTS EARNED</h4>
															  <div class="info">
																<strong class="amount"> 147</strong>
																<div><a href='#' style='font-size:10px;color:#ffffff;'>View Details</a></div>
															  </div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
-->
					</div>
					<div class="col-xl-7">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">My Questions</h5>
							<section class="card mt-4">
								<div class="card-body">
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th>Question</th>
												<th>Date/Time</th>
												<th>Marks</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
 										  
        								  $game_res=mysqli_query($conn, "SELECT gid, DATE_FORMAT(schedule, '%W %e %M') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost FROM games where schedule >= CURDATE() order by schedule limit 5;"); 		

										  
          								  while($row=mysqli_fetch_array($game_res))
										    {
   	        								  $gid=$row['gid'];
   	        								  $status=$row['status'];
											  echo "<tr>";
											  //echo "<td><a href='game.php?gid=$gid'><b>Question #$gid</b></a></td>";
											  echo "<td><b>Question #$gid</b></td>";
											  echo "<td>$row[1]";
											  echo " | $row[2]</td>";
											  echo "<td>$row[4]</td>";
											  
  											 if($status == 0)
											 {
												echo "<td id='gerr$gid'><a href='game.php?gid=$gid'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-danger' DISABLED>ANSWERED</button></a></td>";
											 }
											 else
											 {
											  
											  $sub_res=mysqli_query($conn, "SELECT * FROM player_games where gid=$gid and pid='$pid';"); 		
                                              if(mysqli_num_rows($sub_res) > 0)
											   {    
        										//echo "<td id='gerr$gid'><a href='game.php?gid=$gid'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-success'>ANSWER</button></a></td>";
												echo "<td id='gerr$gid'>ANSWERED</td>";
											   }
											   else 
											   {    
										        $cost = $row[4]>0? $row[4]." points" : "<span style='color:yellow;'>FREE QUESTION</span>";
        										//echo "<td id='gerr$gid'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-primary' onclick='buy_ticket($pid,$gid);'>SCHEDULED</button></td>";
											   }
                                              }   											  
											  echo "</tr>";
										    }											
                                        ?>  
										</tbody>
									</table>
<!--                                 <div align='right'><a href=''>More...</a></div> -->
								</div>
							</section>
								

					</div>
					<div class="col-xl-3">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">My Courses</h5>
					<section class="card mt-4" style='height:350px;'>
									<div class="card-body"><br>
							<ul class="simple-bullet-list mb-3" id='my_games'>
							  <li>C PROGRAMMING</li>
 							</ul>
									</div>
								</section>
					</div>
                    </div>

<!--					<div class='row'>
					 <div class="col-xl-12">
					 <h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">Our Partners & Sponsors</h5>
					  <div class="owl-carousel owl-theme" data-plugin-carousel data-plugin-options='{ "dots": false, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": true, "responsive": {"0":{"items":2 }, "600":{"items":3 }, "1000":{"items":6 } }  }'>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/bvrmol.jpg" alt=""></div>
					<div class="item"><img class="img-thumbnail" src="img/sponsors/westberry.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/varma.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/food_republic.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/srkrec.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/mcr_web.jpg" alt=""></div>
					  </div>
					 </div>
                    </div>						
					-->
				</section>
			</div>


		</section>

		<div id="game_alert" class="modal-block modal-header-color modal-block-primary mfp-hide">
		<section class="card">
				<header class="card-header">
				<h2 class="card-title">LIVE QUESTION!</h2>
				</header>
		<div class="card-body">
			<div class="modal-wrapper">
				<div class="modal-text">
				 <p style='text-align:center;'>
      		      <table border='0' class='responsive' id='game' width='100%'>

                  </table>
		        </p>
				</div>
			</div>
		</div>
<!--		<footer class="card-footer">
			<div class="row">
			<div class="col-md-12 text-right">
			<button class="btn btn-success modal-dismiss">OK</button>
			</div>
			</div>
		</footer>
-->		
		</section>
        </div>
		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="vendor/jquery-ui/jquery-ui.js"></script>
		<script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="vendor/jquery-appear/jquery-appear.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
        <script src="js/examples/examples.modals.js"></script>
        <script src="vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Theme Custom -->
		<!--<script src="js/custom.js"></script>-->
		<!--<script src="js/housie.js"></script> -->
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>


<script>

	var source = new EventSource("show_game.php?pid=<?php echo $pid; ?>");
	source.onmessage = function(event) {

		if(event.data != "PR")
		   {
             document.getElementById('game').innerHTML = event.data;
			 $.magnificPopup.open({
					items: {
					src: '#game_alert',
					type: 'inline',
					modal: false
				}
			 });

 	         var magnificPopup = $.magnificPopup.instance; // save instance in magnificPopup variable
			 
		 	 setTimeOut(function() {
                 magnificPopup.close(); // Close popup that is currently opened
			 }, 1000);			 
		   }
        };
</script>


	
	<script>
	 var source = new EventSource("login_alert.php");
     source.onmessage = function(event) {
	  if(event.data != "0")
	  {
		new PNotify({
			title: 'New Login!',
			text: event.data,
            addclass: 'red notification-primary',
			icon: 'fab fa-twitter',
			delay:1000
		   });
	  }
   }	  
</script>

	<script>
/*     function post_answer(qid,ans)
	 {
		 alert("hi");
		 alert(qid);
		 alert(ans);		 
	 }
*/	 
    </script>

	<br><br>	
    <?php include "footer.php"; ?>
	</body>
</html>