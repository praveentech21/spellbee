<?php include "access_check.php"; ?>
<?php 
   include "connect.php";
?>
<?php
if(isset($_GET['qid']) && isset($_GET['st']))
{
	include "connect.php";
    $qid=$_GET['qid'];	
    $st=$_GET['st'];	

	if($st==0)
	{		
      mysqli_query($conn, "update words set status=0");
  	  mysqli_query($conn, "update words set status=1 where qid=$qid;");
	}
    else
	{
       mysqli_query($conn, "update words set status=0");
	}
}	
?>

<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
	<head>
     <?php include "head.php"; ?>
	 <style>
	  td{
 		  color:#000000;
	    }
		
			.code {
          width: 500px;
          overflow: auto;
          -ms-overflow-style: none;  /* IE and Edge */
           scrollbar-width: none;  /* Firefox */
		  text-align:left; 
      }
	   
	 .code::-webkit-scrollbar {
          display: none;
          }

	 </style>
	 <link rel="stylesheet" href="vendor/pnotify/pnotify.custom.css" />
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
						<h2>BO EDX</h2>
					</header>

					<!-- start: page -->
					<div class='row'>
					<div class="col-xl-2">

					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">ADD WORD</h5>
        			<?php

//					$points_res=mysqli_query($conn, "SELECT * from users where pid='$pid';"); 		
//          			$points=mysqli_fetch_array($points_res);
					
					?>
								<div class="row">
									<div class="col-12">
										<section class="card mb-4">
											<div class="card-body bg-secondary">
												<div class="widget-summary">
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">ADD NEW WORD</h4>
															<div class="info" id='game_err'>
		<a href='add_question.php'><button type="button" class="mb-1 mt-1 mr-1 btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> ADD NEW WORD</button></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
	<!--						<div class="row">
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
					<div class="col-xl-10">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">Spell Bee Word Management</h5>
							<section class="card mt-4">
								<div class="card-body">
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th>Q.No</th>
												<th>Word</th>
												<th>Meaning</th>
											</tr>
										</thead>
										<tbody>
    <?php
 										  
    $ques_res=mysqli_query($conn, "SELECT * from words order by qid desc;"); 		
    while($row=mysqli_fetch_array($ques_res))
	  {
   	    $qid=$row['qid'];
        $opt_res=mysqli_query($conn, "SELECT * from answers where qid=$qid order by op;"); 		
    	$code=$row[3];

	    if($code == 'E') { $level="Easy";}	  
        else if($code == 'M') { $level="Moderate";}	  
        else if($code == 'C') { $level="Difficult";}	  

		echo "<tr>";
		echo "<td><b>$qid</b></td>";
		echo "<td width='50%'><b>".$row['word']."</b> (Level: $level)<br>";
		if($row['meaning'] != "")
		{
		  echo "<div style='width: 700px;white-space: normal;'>".$row['meaning']."</div>";	
		}

		echo "</td>";
		
		echo "<td>";	 
		if($row['status'] == 0) 
		 {
  		   echo "<span id='s$qid'><a href='dashboard.php?qid=$qid&st=0#s$qid'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-primary'>MAKE IT LIVE</button></a></span>";
		 }
		else
		 {
  		   echo "<span id='s$qid'><a href='dashboard.php?qid=$qid&st=1'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-danger'>STOP LIVE</button></a></span>";
		 }

		 $resp_res=mysqli_query($conn, "SELECT count(*) from responses where qid=$qid;"); 		
         $resp=mysqli_fetch_array($resp_res);
         echo "<b>Answers:</b> ".$resp[0];
  		 echo "<span id='d$qid'><button onclick='rdelete($qid);' type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-danger'>Delete Responses</button></a></span>";
	 	 echo "</td>";
		
		echo "</tr>";
       }											
                                        ?>  
										</tbody>
									</table>
<!--                                 <div align='right'><a href=''>More...</a></div> -->
								</div>
<!--							<button id="sticky-error" class="mt-3 mb-3 btn btn-danger">Error</button> -->
							</section>
								

					</div>
                    </div>

					<div class='row'>
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
				</section>
			</div>


		</section>

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
		
		<!-- Theme Custom -->
		<!-- <script src="js/custom.js"></script> -->
		<!--<script src="js/housie.js"></script> -->
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	<script>
		
	//MANAGE_GAME......
	//MANAGE GAME......
  function manage_game(opt)
   {
 	 var option;
	 
     if(opt == 4)
	 {
	   option="CREATE";	   
	   if (!confirm("Are you sure you want to " + option + " the games?"))
         {  
           exit; 
         }  
	 }
	 
	document.getElementById('game_err').innerHTML="";

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
				document.getElementById('game_err').innerHTML="Changing Game Status.....";
			}
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('game_err').innerHTML=xmlhttp.responseText;
			}
    }
  xmlhttp.open("GET","manage_game.php?gid=0&opt=" + opt,true);
  xmlhttp.send();
}

 function rdelete(qid)
   {
	   
 	   if (!confirm("Are you sure you want to delete Quesion No " + qid + "?"))
         {  
           exit; 
         }  
	 
	var err = "d" + qid; 

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
				document.getElementById(err).innerHTML="Deleting Responses...";
			}
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById(err).innerHTML=xmlhttp.responseText;
			}
    }
  xmlhttp.open("GET","delete_responses.php?qid=" + qid,true);
  xmlhttp.send();
}

/*
    $('#sticky-error').click(function() {
		var notice = new PNotify({
			title: 'Click to Close',
			text: 'Check me out! I\'m a sticky notice. You\'ll have to click me to close.',
			addclass: 'click-2-close',
			hide: false,
			buttons: {
				closer: false,
				sticker: false
			}
		});

		notice.get().click(function() {
			notice.remove();
		});
	});
	
	*/
	</script>
	<script src="vendor/pnotify/pnotify.custom.js"></script>
	<br><br>
    <?php include "footer.php"; ?>
	</body>
</html>