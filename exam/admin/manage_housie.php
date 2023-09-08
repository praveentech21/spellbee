<?php include "access_check.php"; ?>
<?php

//header('Cache-Control: no-cache');

if(isset($_GET['gid']))
{
	$gid=$_GET['gid'];
}
else
{
 $gid=0;	
}

?>
	<?php

    include "connect.php";	
    include "completed.php";	

	?>
<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
	<head>
     <?php include "head.php"; ?>
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />	
     <style>
	  td{
 		  color:#000000;
	    }
	 </style>
    </head>
	<body>

	<script>
 	 var sound="off";
	</script>

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
   <?php

//    $game_res=mysqli_query($conn, "SELECT gid, DATE_FORMAT(schedule, '%W %e %M') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost, DATE_FORMAT(schedule, '%M %e, %Y %T') as gt FROM games where gid=$gid;"); 		
//    $row=mysqli_fetch_array($game_res);
  	  $game_res=mysqli_query($conn, "SELECT gid, DATE_FORMAT(schedule, '%W %e %M') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost, DATE_FORMAT(schedule, '%M %e, %Y %T') as gt FROM games where gid=$gid;"); 		
	  $row=mysqli_fetch_array($game_res);
	  $game_time=$row['gt'];
						
   ?>


					<!-- start: page -->
					<div class="row">
						<div class="col-lg-8 mb-4">
							<section class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
							<div style='text-align:center;color:red;font-size:28px;'>GAME # <?php echo $gid; ?></div>
							<?php				
							 if($row['status'] != 1)
							 {
							  //echo "<div id='demohd' style='text-align:center;color:#000000;font-size:14px;'><b>GAME STARTS IN</b></div>";
							  echo "<div id='demo' style='text-align:center;color:red;font-size:20px;font-weight:bold;'></div>";
                             }
							?>							
	
							<h4 align='center' style='color:#000000;text-transform:uppercase;'><?php echo $row[1]." - ".$row[2]; ?></b></h4>
                            <div align='center'>
    <button type="button" class="mb-1 mt-1 mr-1 btn btn-success" onclick='manage_game(<?php echo $gid; ?>, 1);'><i class="fa fa-play"></i> START GAME</button>
    <button type="button" class="mb-1 mt-1 mr-1 btn btn-warning" onclick='manage_game(<?php echo $gid; ?>, 2);'><i class="fa fa-pause"></i> PAUSE GAME</button>
    <button type="button" class="mb-1 mt-1 mr-1 btn btn-danger" onclick='manage_game(<?php echo $gid; ?>, 0);'><i class="fa fa-stop"></i> STOP GAME</button>
    <button type="button" class="mb-1 mt-1 mr-1 btn btn-primary" onclick='manage_game(<?php echo $gid; ?>, 3);'><i class="fas fa-sync-alt fa-spin"></i> REFRESH GAME</button>
	                                    </div><br>     
	  		  <div id='game_err' style='text-align:center;font-size:14px;color:green;'>
			  <?php
  			    echo "<b>CURRENT GAME STATUS:</b> ";
			    if($row['status'] == 1) { echo "GAME IN PROGRESS"; }
			    else if($row['status'] == 0) { echo "GAME STOPPED / OVER"; }
			    else if($row['status'] == 2) { echo "GAME PAUSED"; }
			    else if($row['status'] == 3) { echo "GAME SCHEDULED"; }
			  ?>			  
			  </div>
										</div>
										<div class="col-xl-4 text-center">
											<h2 class="card-title mt-3">GAME NO: <?php echo $gid; ?></h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-3">
												<div class="liquid-meter" style='padding-left:15px;'>
		<div class="cubespinner">
		<div class="face1" id='f1'><?php echo $gid; ?></div>
		<div class="face2" id='f2'><img src="img/sponsor.png"></div>
		<div class="face3" id='f3'><?php echo $gid; ?></div>
		<div class="face4" id='f4'><img src="img/sponsor.png"></div>
		<div class="face5" id='f5'><?php echo $gid; ?></div>
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
									
										<div class="row">
										<div class="col-xl-12">		
<hr>										
											<div class="input-group mb-3" style='padding-top:10px;'>
														<input type="text" id='msg1' class="form-control" placeholder='Write Comment!' data-plugin-maxlength maxlength="100" REQUIRED>
														<span class="input-group-append">
														<button class="btn btn-success" type="button" onclick="send_message(1);">Send</button>
														</span>
											</div>
											<div id='msg1_err' style='text-align:center;font-size:14px;'></div>
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
										<h4 class="box-title" align='center'>ADD PRIZES</h4>
													  
										<div class="row form-group">
											<div class="col-lg-8">
											<select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="win_type">
														<option value="J5A" selected>JALDI 5 - A</option>
														<option value="L1A">LINE 1 - A</option>
														<option value="L2A">LINE 2 - A</option>
														<option value="L3A">LINE 3 - A</option>
														<option value="CNA">4 CORNERS - A</option>
														<option value="C6A">6 CORNERS - A</option>
														<option value="CSA">CENTRE STAR - A</option>
														<option value="FHA">FULL HOUSIE - A</option>
														<option value="J5B">JALDI 5 - B</option>
														<option value="J5C">JALDI 5 - C</option>
														<option value="J5D">JALDI 5 - D</option>
														<option value="J5E">JALDI 5 - E</option>
														<option value="L1B">LINE 1 - B</option>
														<option value="L1C">LINE 1 - C</option>
														<option value="L2B">LINE 2 - B</option>
														<option value="L2C">LINE 2 - C</option>
														<option value="L3B">LINE 3 - B</option>
														<option value="L3C">LINE 3 - C</option>
														<option value="CNB">4 CORNERS - B</option>
														<option value="CNC">4 CORNERS - C</option>
														<option value="C6B">6 CORNERS - B</option>
														<option value="CSB">CENTRE STAR - B</option>
														<option value="FHB">FULL HOUSIE - B</option>
														<option value="FHC">FULL HOUSIE - C</option>
														<option value="FHD">FULL HOUSIE - D</option>
														<option value="FHE">FULL HOUSIE - E</option>
											</select>
												</div>

											<div class="col-lg-4">
												<input type="number" name="points" id="points" placeholder="Points" class="form-control">
											</div>

										</div>
										<div class="row">
											<div class="col-lg-12">
												<input type="text" name="prize"  id="prize" placeholder="Prize Details" class="form-control">
											</div>
										</div>
									<footer class="card-footer text-right">
										<button class="btn btn-primary" onclick='add_prize();'>Add Prize for Game <?php echo $gid; ?></button>
									</footer>			  
													  
                           	  		<div id='add_err' style='text-align:center;font-size:14px;color:green;font-weight:bold;'></div>

										<h4 class="box-title" align='center'>CHANGE TIME</h4>
													  
										<div class="row form-group">
											<div class="col-lg-6">
											<select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="tgid">
<?php
	$tgame_res=mysqli_query($conn, "SELECT gid, schedule FROM games order by gid desc limit 10;"); 
	while($tgames=mysqli_fetch_row($tgame_res))
 	{
	  $tgid=$tgames[0];
	  $tschedule=$tgames[1];
	  
 	  echo "<option value='$tgid'>GAME $tgid</option>";
    } 		
?>											
											</select>
												</div>

											<div class="col-lg-6">
												<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-calendar-alt"></i>
															</span>
														</span>
														<input type="text" data-plugin-datepicker data-plugin-options='{"format": "yyyy:mm:dd"}' class="form-control" id='tdate' value='<?php echo date('Y:m:d'); ?>'>
												</div>	
											</div>

										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="input-group">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="far fa-clock"></i>
															</span>
														</span>
														<input type="text" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 2, "showMeridian": false }' id='ttime'>
												</div>
											</div>
											<div class="col-lg-6">
											<button class="btn btn-primary" onclick='change_time();'>Change Time</button>
									        </div>
													  
                           	  		<div id='time_err' style='text-align:center;font-size:12px;color:green;'></div>
									
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
								<div class="card-body" style='text-align:center;'>
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
						<div class="col-lg-3 mb-4 mb-lg-0">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Player Comments</h2>
								</header>
                            <?php $msg_id=0; ?>	
							<div class="card-body" style='text-align:center;'>
								<div class="scrollable colored-slider" data-plugin-scrollable style="height: 600px;">
									<div class="scrollable-content" id='messages' style='text-align:left;'>
									</div>
								</div>
                       	  		<div id='msg_err' style='text-align:center;font-size:14px;color:green;font-weight:bold;'></div>
							</div>
							</section>
						</div>
						<div class="col-lg-3 mb-4 mb-lg-0">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">Logged In Users</h2>
								</header>
                            <?php $msg_id=0; ?>	
							<div class="card-body" style='text-align:center;'>
								<div class="scrollable colored-slider" data-plugin-scrollable style="height: 1000px;">
									<div class="scrollable-content" id='loggedin' style='text-align:left;'>
									</div>
								</div>
                       	  		<div id='msg_err' style='text-align:center;font-size:14px;color:green;font-weight:bold;'></div>
							</div>
							</section>
						</div>

						</div>
					
						</div>
					</div>
					<!-- end: page -->
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
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<!-- <script src="js/custom.js"></script> -->
		<!--<script src="js/housie.js"></script> -->
		
		
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/common/common.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="vendor/jquery-ui/jquery-ui.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>


  <script>
	//MANAGE GAME......
  function manage_game(gid, opt)
   {
 	 var option;
	 
     if(opt == 1)
	 {
	   option="START";	   
	 }
     else if(opt == 2)
	 {
	   option="PAUSE";	   
	 }
     else if(opt == 0)
	 {
	   option="QUIT";	   
	 }
     else if(opt == 3)
	 {
	   option="READY";	   
	   if (!confirm("Are you sure you want to " + option + " the game?\nThis will remove all the numbers taken so far and also the winners from table!"))
         {  
           exit; 
         }  
	 }
	 
	 if (!confirm("Are you sure you want to " + option + " this Game No." + gid + "?")) 
     {  
       exit; 
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
				document.getElementById('game_err').innerHTML=xmlhttp.responseText + option;
			}
    }
  xmlhttp.open("GET","manage_game.php?gid=" + gid + "&opt=" + opt,true);
  xmlhttp.send();
}
</script>

<script>
  var source = new EventSource("load_comments.php?gid=<?php echo $gid; ?>");
  source.onmessage = function(event) {
	  if(event.data != "PR")
	  {
	   var existing = document.getElementById('messages').innerHTML;  
       document.getElementById('messages').innerHTML = event.data;
	  } 
  };
</script>

  <script>
	//ADD Prize......
  function add_prize()
   {
 	var gid=<?php echo $gid; ?>;
	var win_type=document.getElementById('win_type').value;
	var points=document.getElementById('points').value;
	var prize=document.getElementById('prize').value;

    document.getElementById('add_err').innerHTML="";

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
				document.getElementById('add_err').innerHTML="Adding Prize Details.....";
			}
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('add_err').innerHTML=xmlhttp.responseText;
			}
    }
  xmlhttp.open("GET","add_prize.php?gid=" + gid + "&win_type=" + win_type + "&points=" + points + "&prize=" + prize,true);
  xmlhttp.send();
}
</script>

  <script>
	//Delete Comment......
  function delete_comment(msg_id)
   {

    document.getElementById('msg_err').innerHTML="";

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
				document.getElementById('msg_err').innerHTML="Deleting Message" + msg_id;
			}
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('msg_err').innerHTML=xmlhttp.responseText;
			}
    }
  xmlhttp.open("GET","delete_comment.php?msg_id=" + msg_id,true);
  xmlhttp.send();
}
</script>

<script>
//SEND MESSAGE......
function send_message(mno)
  {
 	var gid=<?php echo $gid; ?>;   						 
 	var pid='0000000000';
	var err= "msg"+ mno + "_err";
	var msgno = "msg" + mno;
	
	var msg=document.getElementById(msgno).value;
	document.getElementById(err).innerHTML="";
	document.getElementById(msgno).value="";
	
    if(msg.length > 1)
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
 			 document.getElementById(err).innerHTML="Sending Message.....";
			}
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			 document.getElementById(err).innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","send_message.php" + "?gid=" + gid  + "&msg=" + msg, true);
		xmlhttp.send();
	}	
	else
 	 {
		document.getElementById(err).innerHTML="<span style='color:red;'>Please write something in the box...</span>";
	 }
}
</script>

  <script>
	//Change Time......
  function change_time()
   {
	var tgid=document.getElementById('tgid').value;
	var tdate=document.getElementById('tdate').value;
	var ttime=document.getElementById('ttime').value;
    var schedule = tdate + " " + ttime + ":00";
	
    document.getElementById('time_err').innerHTML="";

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
				document.getElementById('time_err').innerHTML="Changing Time for Game" + tgid;
			}
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('time_err').innerHTML=xmlhttp.responseText;
			}
    }
  xmlhttp.open("GET","change_time.php?tgid=" + tgid + "&schedule=" + schedule,true);
  xmlhttp.send();
}
</script>


<script>
		
var i = 0;
function timer() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 120	);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

</script>
		
<script>
		   var source = new EventSource("take_number.php?gid=<?php echo $gid; ?>");
           source.onmessage = function(event) {
		   if(event.data == "GP")
		    {
				display_cube("<span style='font-size:12px;margin:0px;'>GAME PAUSED</span>");
			}
		   else if(event.data == "GO")
		    {
				display_cube("<span style='font-size:12px;margin:0px;'>GAME OVER</span>");
		    }
		   else if(event.data == "GR" || event.data == "GR2")
		    {
				display_cube("<span style='font-size:12px;margin:0px;'>GAME READY</span>");
			 /*if(event.data == "GR2")
			   {
				 $('#overlay2').modal('show');
			   }	 
			 */  
		    }
		   else
		   {
				display_cube(event.data);
				timer();
				var er="c" + event.data;			 
				document.getElementById(er).innerHTML = "<div id='ticked'><i class='fa fa-check'></i>" + event.data + "</div>";
				if(sound == "on")
					{
						var audio = new Audio("sounds/" + event.data + ".mp3");
						audio.play();
					}
		   }
			
		};

		
		
/*        var source = new EventSource("take_number.php?gid=<?php echo $gid; ?>");
        source.onmessage = function(event) {
   		   timer();     
           document.getElementById('f1').innerHTML = event.data;		   
           document.getElementById('f2').innerHTML = event.data;		   
           document.getElementById('f3').innerHTML = event.data;		   
           document.getElementById('f4').innerHTML = event.data;		   
           document.getElementById('f5').innerHTML = event.data;		   		
		   };
*/
		</script>

		 <script>
		 function display_cube(dmsg)
		 {
           document.getElementById('f1').innerHTML = dmsg;		   
           document.getElementById('f2').innerHTML = dmsg;		   
           document.getElementById('f3').innerHTML = "<img src='img/sponsor.png'>";		   
           document.getElementById('f4').innerHTML = dmsg;		   
           document.getElementById('f5').innerHTML = dmsg;		   					 
		 }
		 </script>
	   <script>

	   var source = new EventSource("load_recent.php?gid=<?php echo $gid; ?>");
        source.onmessage = function(event) {
           document.getElementById('recent').innerHTML = event.data;
        };

		</script>

		<script>

        var source = new EventSource("loggedin.php?gid=<?php echo $gid; ?>");
        source.onmessage = function(event) {
             document.getElementById('loggedin').innerHTML = event.data;			   
        };
        </script>
	
<script>
  // Set the date we're counting down to
  var countDownDate = new Date("<?php echo $game_time; ?>").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  hours = hours + (days*24);
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  //document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours " + minutes + " Mins " + seconds + " Secs ";
  document.getElementById("demo").innerHTML = hours + " Hours " + minutes + " Mins " + seconds + " Secs ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "";
//	document.getElementById("demohd").innerHTML = "";
  }
}, 1000);
</script>
     <?php include "footer.php"; ?>
	</body>
</html>