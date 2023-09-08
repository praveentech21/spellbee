<?php include "access_check.php"; ?>
<?php 
   include "connect.php";
   $player_cnt=mysqli_query($conn, "SELECT count(*) FROM users;"); 		
        
   $row=mysqli_fetch_row($player_cnt);
   $cnt=$row[0];

?>
<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
	<head>
     <?php include "head.php"; ?>
	 <style>
	  td{
 		  color:#000000;
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
						<h2>BO HOUSIE</h2>
					</header>

					<!-- start: page -->
					<div class='row'>
					<div class="col-xl-12">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">REGISTERED PLAYERS: <?php echo $cnt; ?></h5>
					
					<a href='#' onclick='activate(1);'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-primary'>ACTIVATE ALL</button></a>
					<a href='#' onclick='activate(0);'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-danger'>DE-ACTIVATE ALL</button></a>
					
					<section class="card mt-4">
					 <div class="card-body">
					 <table class="table table-responsive-md table-striped mb-0">
					   <thead>
											<tr>
												<th>Player Name</th>
												<th>Place</th>
												<th>Login ID</th>
												<th>PIN</th>
												<th>Status</th>
												<th>WhatsApp Link</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
 										  
        								  $player_res=mysqli_query($conn, "SELECT player_name, place, pid, pin, status, points,  DATE_FORMAT(lastseen, '%W %e %M %h:%i %p') as dt FROM users order by lastseen desc;"); 		
        
while($row=mysqli_fetch_array($player_res))
   {
      $pid=$row['pid'];
	  echo "<tr>";
	  echo "<td><b>".$row['player_name']."</b></td>";
      echo "<td>".$row['place']."</td>";
      echo "<td>".$row['pid']."</td>";
      echo "<td>".$row['pin']."</td>";

  	  //$msg1=urlencode("Dear *".$row['player_name']." of ".$row['place']."*,\n\nThank you for registering to Test Game of Bhimavaram Online Housie to be played on *8th June 2021 (Today) at 7 PM*.\n\nGAME LOGIN DETAILS:\n*Game Link:* http://www.srkrec.edu.in/srkrhousie\n*Login ID:* $pid\n*Pin:* ".$row['pin']."\n\nPlease feel free to reply back / call @ *9293940004* for any help.");
	  
	  //$msg1=urlencode("*Dear ".$row['player_name']." garu of ".$row['place']."*,\n\nThank you for registering to the *Bhimavaram Online Mega Housie 6* to be played on *24th OCTOBER 2021 (SUNDAY) at 3 PM (Game 1) & 3:30 PM Sharp (Game 2)*.\n\nGAME LOGIN DETAILS:\n*Game Link:* http://www.mcr.org.in/srkrhousie\n*Login ID:* $pid\n*Pin:* ".$row['pin']."\n\nSPONSOR: Bhimavaram Online\n\nPlease feel free to reply back to this message for any help (Or) Call Helpline - 9505356717,9293940004,9392449346,7989371134");
	  
	  $msg1=urlencode("Dear *".$row['player_name']."* garu (".$row['place']."),\n\nThank you for registering to the *Bhimavaram Online Mega Housie - New Year Special* to be played on *31st DECEMBER 2021 (TODAY) from 7:30 PM Onwards (Game Every Hour) - 5 Games Till 11:30 PM*.\n\nGAME LOGIN DETAILS:\n*Game Link:* http://www.mcr.org.in/srkrhousie\n*Login ID:* $pid\n*Pin:* ".$row['pin']."\n\nPlease feel free to reply back to this message for any help (Or) Call Helpline - *9182052673*,9010872333");
	  
	  if($row['status'] == 1)
	  {
        echo "<td><b style='color:green;'>Active</b></td>";
	  }
	  else
	  {
        echo "<td id='s$pid'><a href='' onclick='change_status($pid);'><b style='color:blue;'>Activate</b></a></td>";  
	  }

	  echo "<td><a href='https://wa.me/+91".$pid."?text=$msg1'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-primary'>SEND PIN</button></a></td>";
	  
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
		
		//Change Player Status......
		function change_status(pid)
          {
			var er = "s" + pid;	 
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
						 document.getElementById(er).innerHTML="Updating..";
						}
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 document.getElementById(er).innerHTML=xmlhttp.responseText;
						}
				}
			xmlhttp.open("GET","change_status.php" + "?pid=" + pid, true);
			
			xmlhttp.send();
			
		}
	
		//activating & deactivating users......
		function activate(mode)
          {
						
			if (!confirm("Are you sure you want to do this?\nAll user accounts will be activated / deactivated.")) 
             {  
               exit; 
             }  

			
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
						 //document.getElementById(er).innerHTML="Updating..";
						}
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 alert(xmlhttp.responseText);
						 location.reload();
						}
				}
			xmlhttp.open("GET","activate.php" + "?mode=" + mode, true);
			
			xmlhttp.send();
			
		}
    </script>
	
	<script src="vendor/pnotify/pnotify.custom.js"></script>
	<br><br>
    <?php include "footer.php"; ?>
	</body>
</html>