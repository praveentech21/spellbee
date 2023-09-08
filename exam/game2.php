<?php include "access_check.php"; ?>
<?php

header('Cache-Control: no-cache');

if(isset($_GET['gid']))
{
	$gid=$_GET['gid'];
	$pid=$_SESSION['pid'];
      
	include "connect.php";		
	$ptkt_res=mysqli_query($conn, "SELECT tid FROM player_games where pid='$pid' and gid=$gid;"); 
	$ptkt=mysqli_fetch_row($ptkt_res);
	$tid=$ptkt[0];
	$tid2=$tid+100;
}
else
{
 $gid=0;	
}

?>
	<?php

    include "completed.php";	

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
  background-color: #0088cc !important;
  color:#ffffff;
  border:0px;
}
	 </style>
    </head>
	<body>
		<script>
 	 var sound="on";
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

					<!-- start: page -->
					<div class="row">
						<div class="col-lg-8 mb-4">
							<section class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-12">
							<?php

        					$game_res=mysqli_query($conn, "SELECT gid, DATE_FORMAT(schedule, '%W %e %M') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost, DATE_FORMAT(schedule, '%M %e, %Y %T') as gt FROM games where gid=$gid;"); 		
							$row=mysqli_fetch_array($game_res);
							
							$game_time=$row['gt'];
							echo "<h4 align='center' style='color:red;text-transform:uppercase;'><b>GAME $gid <span style='color:#000000;text-transform:uppercase;'> - ".$row[1]." - ".$row[2]."</span></b></h4>";
                            ?>

										</div>
									</div>	
									<div class="row">
										<div class="col-xl-8">
										
							
							<?php 
							
							if($row['status'] != 1)
							{
							  //echo "<div id='demohd' style='text-align:center;color:#000000;font-size:14px;'><b>GAME STARTS IN</b></div>";
							  echo "<div id='demo' style='text-align:center;color:red;font-size:20px;font-weight:bold;'></div>";
                            }  

							if($tid == 0)
							  {
   								    echo "<h4 align='center'>YOU HAVE NOT JOINED THIS GAME!</h4>";
									echo "<h5 align='center' style='color:#000000;text-transform:uppercase;'><a href='#'><b>Game #$gid";
									echo "- $row[1] - $row[2]</b></a></h5>";
									if($row['status'] != 0)
						 			  {
									    $cost = $row[4]>0? $row[4]." points" : "<span style='color:yellow;'>FREE GAME</span>";
									    echo "<div id='gerr$gid' align='center'><button type='button' class='mb-1 mt-1 mr-1 btn btn-sd btn-primary' onclick='buy_ticket($pid,$gid);'>JOIN GAME ($cost)</button></div>";
									  }
									else 
 									  {
										echo "<div style='text-align:center;color:red;font-size:20px;'>GAME COMPLETED</div>";
									  }										
							   }
							 else
 							   {  
			 
			                 ?>  
			 
  		         <h4 class="box-title" id="tkt" align='center'>MY TICKET (#<?php echo $tid2; ?>) <!-- <a href='' style='font-size:12px;color:green;' onclick='refresh_ticket(<?php //echo $tid.", ".$gid; ?>);'>Refresh Ticket</a> --></h4>
<!--				 <table border='1' class='responsive' id='ticket' style="margin:auto;background-image: url('img/ticketbg.jpg');">  -->
                <div class="table-responsive" style='text-align: center;'>
				<table border='1' class='table' id='ticket'>
                 <?php include "ticket.php"; ?>
   			     </table>
 			    </div>
				<div id='check_err' style='text-align:center;font-size:14px;'>Click on a number in ticket to check.</div>
									<hr>
									<div align='center'><i class="fas fa-history text-success"></i> <span id='recent'></span></div>				

									<div id="myProgress" style='display:none;'>
										<div id="myBar"></div>
									</div>	

			                <?php
							
							}
							 
							?>
										</div>
										<div class="col-xl-4 text-center">
											<h2 class="card-title mt-3">GAME NO: <?php echo $gid; ?></h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-3">
												<div class="liquid-meter" style='padding-left:15px;'>
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

 	
	<div style='text-align:center;font-size:14px;color:green;'>
  			   <b>CURRENT GAME STATUS <div id='gstatus' style='color:red;'></div></b>
			  </div>		
<div>

</div>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xl-12">									
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
											<h2 class="card-title mt-3" align='center'>CLAIM WINS</h2>
			  <div style='text-align:center;' id='claims'>
              <?php
 
               include "prizes.php";
			   
              ?>			  
			  
              </div>

	  		  <div id='claim_err' style='text-align:center;font-size:14px;'>Click on the buttons to claim your prize</div>
					  <h4 align='center' style='color:#000000;'>GAME <?php echo $gid; ?> SPONSORS</h4>

					  <div class="owl-carousel owl-theme" data-plugin-carousel data-plugin-options='{ "dots": false, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": true, "responsive": {"0":{"items":2 }, "600":{"items":2 }, "1000":{"items":2 } }  }'>
                        <div class="item"><img class="img-thumbnail" src="img/sponsors/bvrmol.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/varma.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/food_republic.jpg" alt=""></div>
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
						<div class="col-lg-3">
							<section class="card">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
									<h2 class="card-title">Prizes & Winners</h2>
								</header>
								<div class="card-body">
								<ul class="simple-bullet-list mb-3" id='winners_list'>

							    </ul>	
								</div>
							</section>
						</div>
                        <div class="col-lg-3">
						<section class="card mb-3">
								<header class="card-header">
									<div class="card-actions">
										<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
									</div>
					
									<h2 class="card-title">
									<?php
									
									 $comments=mysqli_query($conn, "SELECT count(*) FROM comments c , users p where p.pid=c.pid and gid=$gid;"); 		
		                             $cnt_comments=mysqli_fetch_row($comments);
                                     $cnt=$cnt_comments[0]; 									 
									?>
<!--										<span class="badge badge-primary font-weight-normal va-middle p-2 mr-2" id='cmt_cnt'><?php //echo $cnt; ?></span> -->
										<span class="va-middle">Messages</span>
									</h2>
								</header>
								<div class="card-body">
									<div class="scrollable colored-slider" data-plugin-scrollable style="height: 300px;">
										<div class="scrollable-content" id='messages'>
                                        <?php 
										 include "messages.php";
                                        ?>										

								</div>		
									</div>
								</div>
								<div class="card-footer">
											<div class="input-group mb-3" style='padding-top:10px;'>
														<input type="text" id='msg2' class="form-control" placeholder='Write Comment!' data-plugin-maxlength maxlength="100" REQUIRED>
														<span class="input-group-append">
															<button class="btn btn-success" type="button" onclick="send_message(2);">Send</button>
														</span>
											</div>
											<div id='msg2_err' style='text-align:center;font-size:14px;'></div>

								</div>
							</section>
						</div>
						</div>
					
	
		<div id="swinner" class="modal-block modal-header-color modal-block-primary mfp-hide">
		<section class="card">
				<header class="card-header">
				<h2 class="card-title">WINNER ALERT!</h2>
				</header>
		<div class="card-body">
			<div class="modal-wrapper">
				<div class="modal-text">
				 <p style='text-align:center;'>
      		      <table border='0' class='responsive' id='winner' width='100%'>

                  </table>
		        </p>
				</div>
			</div>
		</div>
		<footer class="card-footer">
			<div class="row">
			<div class="col-md-12 text-right">
			<button class="btn btn-success modal-dismiss">OK</button>
			</div>
			</div>
		</footer>
		</section>
		
		</div>
		
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

		</section>
		
		
			<span id='winner_err' style='text-align:left;font-size:14px;'></span>

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
		<script src="js/theme.js"></script>
		
		<script src="vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>

				
		<!-- Theme Custom -->
		<!-- <script src="js/custom.js"></script> -->
		<!--<script src="js/housie.js"></script> -->
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
        <script src="js/examples/examples.modals.js"></script>
        <script src="vendor/pnotify/pnotify.custom.js"></script>
		
		
<script type="text/javascript">

//check_number......
function check(tkt_no, gid)
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
     document.getElementById("check_err").innerHTML="<div style='color:green;'>Checking the status of no " + tkt_no + "</div>";
     document.getElementById(tkt_no).innerHTML="<u>" + tkt_no + "</u>";
	 $('#ticket').fadeTo('slow',.3);
	 $('#ticket').append('<div id="fade" style="position: absolute;top:0;bottom:0;left:0;width:100%;height:100%;z-index:2;opacity:0.4;filter: alpha(opacity = 50)"></div>');
    }
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	 $('#ticket').fadeTo('slow',6.0);
   	 $("#fade").remove(); 	
     if(xmlhttp.responseText==tkt_no)
	 {		 
       document.getElementById("check_err").innerHTML="<span style='color:red;'>The number " + tkt_no + " is not yet taken!</span>";
	   setTimeout(function(){ document.getElementById("check_err").innerHTML="Click on a number in ticket to check.";
 }, 5000);       
	 }  
	 else{		 
       document.getElementById("check_err").innerHTML="<span style='color:green;'>Hurray! The number " + tkt_no + " is completed!</span>";
	 }  
     document.getElementById(tkt_no).innerHTML=xmlhttp.responseText;
    }
  }

   //alert("manage_items.php" + str + "&type=s");
   xmlhttp.open("GET","housie_functions.php" + "?tkt_no=" + tkt_no + "&gid=" + gid + "&type=c",true);
   xmlhttp.send();
}

//refresh ticket......
function refresh_ticket(tkt_no, gid)
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
     document.getElementById("check_err").innerHTML="<span style='color:green;'>Refreshing Ticket.....</span>";
	 $('#ticket').fadeTo('slow',.6);
    }
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
     document.getElementById("ticket").innerHTML=xmlhttp.responseText;
     document.getElementById("check_err").innerHTML="Ticket Refreshed.....";
	 setTimeout(function(){ document.getElementById("check_err").innerHTML="Click on a number in ticket to check.";
 }, 5000);
    }
  }
  
 xmlhttp.open("GET","ticket.php?gid=" + gid + "&tid=" + tkt_no, true);
 xmlhttp.send();
}

</script>

<script>
//claim prize......
function claim_prize(tid,pid,gid,type)
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
     document.getElementById("claim_err").innerHTML="<span style='color:red;'>Checking your claim.....</span>";
    }
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	  if(xmlhttp.responseText == '0')
	  {	
       document.getElementById("claim_err").innerHTML="<span style='color:red;'>SORRY! WRONG CLAIM!</span>";
	  } 
	  else if(xmlhttp.responseText == '*')
	  {		  
       document.getElementById("claim_err").innerHTML="<span style='color:red;'>SORRY! PRIZE ALREADY CLAIMED!</span>";
	   document.getElementById(type).disabled=true; 
	  } 
	  else
	  {
	    var win_type=xmlhttp.responseText.substring(0,2);
		
		if(win_type == "J5") { 
	       document.getElementById("claim_err").innerHTML="<span style='color:green;'><b>CONGRATS! YOU WON JALDI 5 PRIZE</b></span>"; 
     	   document.getElementById(type).disabled=true; 
		   document.getElementById(type).innerHTML="<i class='fas fa-gift'></i> <strike>JALDI 5</strike>";
	       }
  	    if(win_type == "L1") { 
	       document.getElementById("claim_err").innerHTML="<span style='color:green;'><b>CONGRATS! YOU WON LINE 1 PRIZE</b></span>"; 
     	   document.getElementById(type).disabled=true; 
		   document.getElementById(type).innerHTML="<i class='fas fa-gift'></i> <strike>LINE 1</strike>";
	       }
  	    if(win_type == "L2") { 
	       document.getElementById("claim_err").innerHTML="<span style='color:green;'><b>CONGRATS! YOU WON LINE 2 PRIZE</b></span>"; 
     	   document.getElementById(type).disabled=true; 
		   document.getElementById(type).innerHTML="<i class='fas fa-gift'></i> <strike>LINE 2</strike>";
	       }
  	    if(win_type == "L3") { 
	       document.getElementById("claim_err").innerHTML="<span style='color:green;'><b>CONGRATS! YOU WON LINE 3 PRIZE</b></span>"; 
     	   document.getElementById(type).disabled=true; 
		   document.getElementById(type).innerHTML="<i class='fas fa-gift'></i> <strike>LINE 3</strike>";
	       }
  	    if(win_type == "CN") { 
	       document.getElementById("claim_err").innerHTML="<span style='color:green;'><b>CONGRATS! YOU WON 4 CORNERS PRIZE</b></span>"; 
     	   document.getElementById(type).disabled=true; 
		   document.getElementById(type).innerHTML="<i class='fas fa-gift'></i> <strike>4 CORNERS</strike>";
	       }
  	    if(win_type == "FH") { 
	       document.getElementById("claim_err").innerHTML="<span style='color:green;'><b>CONGRATS! YOU WON FULL HOUSIE</b></span>"; 
     	   document.getElementById(type).disabled=true; 
		   document.getElementById(type).innerHTML="<i class='fas fa-gift'></i> <strike>FULL HOUSIE</strike>";
	       }		 
        //show_winner();		 		 
	  } 
	  }
  }
  xmlhttp.open("GET","claim_prize.php?tid=" + tid + "&pid=" + pid  + "&gid=" + gid + "&type=" + type,true);
  xmlhttp.send();
}
</script>

<script>
        var source = new EventSource("load_claims.php?gid=<?php echo $gid; ?>");
        source.onmessage = function(event) {
		   var dat = event.data;
		   var res=dat.split("|");	
	       var i,x;
		   for(i=0;i<res.length;i++)
			 {
          	   x=res[i];
               if(x == "J5A") {var y = document.getElementById("J5A"); y.disabled=true;}
               if(x == "L1A") {var y = document.getElementById("L1A"); y.disabled=true;}
               if(x == "L2A") {var y = document.getElementById("L2A"); y.disabled=true;}
               if(x == "L3A") {var y = document.getElementById("L3A"); y.disabled=true;}
               if(x == "CNA") {var y = document.getElementById("CNA"); y.disabled=true;}
               if(x == "FHA") {var y = document.getElementById("FHA"); y.disabled=true;}
 //              if(x == "FHA") {var y = document.getElementById("FHA"); y.disabled=true; y.classList.remove('bg-green'); y.classList.add('bg-black');}
             }   
		};
        </script>
<script>
//BUY_TICKET......
function buy_ticket(pid, gid)
  {
			var er = "gerr" + gid;	 

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
						 document.getElementById(er).innerHTML="Joining Game...!";
						}
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 document.getElementById(er).innerHTML=xmlhttp.responseText;
						 get_points();
						}
				}
			xmlhttp.open("GET","buy_ticket.php" + "?pid=" + pid + "&gid=" + gid, true);
			xmlhttp.send();
		}
</script>

<script>
//SEND MESSAGE......
function send_message(mno)
  {
 	var gid=<?php echo $gid; ?>;   						 
 	var pid=<?php echo $pid; ?>;
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
  var source = new EventSource("show_winner.php?gid=<?php echo $gid; ?>");
  source.onmessage = function(event) {

		if(event.data != "PR")
		   {
             document.getElementById('winner').innerHTML = event.data;
			 $.magnificPopup.open({
					items: {
					src: '#swinner',
					type: 'inline',
					modal: false
				}
			 });

  			 if(sound == "on")
			 {
         	  var audio = new Audio("sounds/ipl.mp3");
              audio.play();
			 }

 	         var magnificPopup = $.magnificPopup.instance; // save instance in magnificPopup variable
			 
		 	 setTimeOut(function() {
                 magnificPopup.close(); // Close popup that is currently opened
			 }, 3000);			 
		   }
        };
</script>

<script>
  var source = new EventSource("update_winner.php?gid=<?php echo $gid; ?>");
  source.onmessage = function(event) {

  if(event.data != "PR")
	  {
        document.getElementById('winners_list').innerHTML = event.data;
      }
   };
</script>

<!-- Display the countdown timer in an element -->

<script>
  var source = new EventSource("load_new.php?gid=<?php echo $gid; ?>");
  source.onmessage = function(event) {
		   if(event.data == "GP")
		    {
				display_cube("<span style='font-size:20px;padding-top:0px;'>PAUSED</span>");
				document.getElementById('gstatus').innerHTML = "GAME PAUSED";
			}
		   else if(event.data == "GO")
		    {
				display_cube("<span style='font-size:18px;'>OVER</span>");
				document.getElementById('gstatus').innerHTML = "GAME OVER";
		    }
		   else if(event.data == "GR" || event.data == "GR2")
		    {
				display_cube("<span style='font-size:20px;margin-top:0px;'>READY</span>");
				document.getElementById('gstatus').innerHTML = "SCHEDULED ON TIME";
		    }
		   else
		   {
				display_cube("<span style='font-size:70px;'>" + event.data + "</span>");
				document.getElementById('myProgress').style.display="block";
				document.getElementById('gstatus').innerHTML = "GAME IN PROGRESS";
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
</script>

<script>
  var source = new EventSource("load_comments.php?gid=<?php echo $gid; ?>");
  source.onmessage = function(event) {
	  if(event.data != "PR")
	  {
	   var existing = document.getElementById('messages').innerHTML;  
       document.getElementById('messages').innerHTML = event.data; // + existing;
	   //document.getElementById('cmt_cnt').innerHTML += 1; 
	  } 
  };
</script>

<script>
  //var stack_bottomright = {"dir1": "up", "dir2": "left", "firstpos1": 15, "firstpos2": 15};
  var source = new EventSource("admin_comments.php?gid=<?php echo $gid; ?>");
  source.onmessage = function(event) {
	  if(event.data != "0")
	  {  
		new PNotify({
			title: 'Admin Message!',
			text: event.data,
            addclass: 'red notification-primary',
			icon: 'fab fa-twitter',
			delay:5000
		   });
	  }
   }	  
</script>

<script>
  function display_cube(dmsg)
	 {
           document.getElementById('f1').innerHTML = dmsg;		   
           document.getElementById('f2').innerHTML = "<img src='img/sponsor.png'>";		   
           document.getElementById('f3').innerHTML = dmsg;		   
           document.getElementById('f4').innerHTML = "<img src='img/sponsor.png'>";		   
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
 var source = new EventSource("login_alert.php");
  source.onmessage = function(event) {
	  if(event.data != "0")
	  {
		new PNotify({
			title: 'New Login!',
			text: event.data,
            addclass: 'red notification-primary',
			icon: 'fab fa-tweet',
			delay:1000
		   });
	  }
   }	  
</script>

<script>
		
var i = 0;
function timer() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 100	);
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
<br><br><br><br>
     <?php include "footer.php"; ?>
	</body>
</html>