<?php include "access_check.php"; ?>
<?php 
   include "connect.php";
   $sid=$_SESSION['pid'];
   
   $nqres=mysqli_query($conn, "SELECT count(*) from responses where sid='$sid';"); 		
   $qres=mysqli_fetch_array($nqres);
   $q=$qres[0]+1;
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
		
	.code {
           display: inline-block;
           overflow-wrap: break-word;
		   word-wrap: break-word;
		   text-align:left;
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
						<h2>CSD SPELL BEE</h2>
					</header>

					<!-- start: page -->
					<div class='row'>
     				<div class="col-xl-8">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">YOUR SPELL BEE WORD HERE</h5>
							<section class="card mt-4">
								<div class="card-body">
	<?php			
	 
	  $l='E';
	  if(isset($_GET['l']))
	  {
   	   $l=$_GET['l'];
   	  } 
   	  
	  echo "<h4 align='center' STYLE='COLOR:RED;'><B>YOUR QUESTION NO - $q</B></h4>";
   	  $ques=mysqli_query($conn, "SELECT * FROM words where qid not in (select qid from responses where sid='$sid') and level='$l' ORDER BY RAND() LIMIT 1;"); 		

	  $qrow=mysqli_fetch_array($ques);
      $qid=$qrow[0];	  
      $ranswer=$qrow[1];
  	  $question = $qrow['meaning'];	  
  	  $lvl=$qrow[3];

      if($lvl == 'E') { $level="Easy";}	  
      else if($lvl == 'M') { $level="Moderate";}	  
      else if($lvl == 'C') { $level="Difficult";}	  
	  		  
      echo "<div align='center'><h4><b>Word Meaning: </b>".$question."</h4></div>";
	  echo "<div align='center'><h4><b>Difficulty Level: </b>".$level."</h4></div><div align='center'>";
	  
		 echo "<button class='mb-1 mt-1 mr-1 btn btn-warning' onclick='spell_sound($qid);'><span style='color:#000000;'><i class='fas fa-volume-up'></i> SPELL MACHINE WORD <i class='fas fa-play'></i></span></button>";
		 echo "<button class='mb-1 mt-1 mr-1 btn btn-primary' onclick='spell_human($qid);'><span style='color:#000000;'><i class='fas fa-volume-up'></i> SPELL HUMAN WORD <i class='fas fa-play'></i></span></button>";
		 
		 echo "<div id='spelling'>WRITE THE CORRECT SPELLING IN THE TEXT BOX<div class='col-8'><input type='hidden' name='qid' id='qid' value='$qid'><input type='text' class='form-control' name='answer'  id='answer'  value='' placeholder='Your Spelling Here' style='text-transform:uppercase;' autocomplete='off' REQUIRED></div><div class='col-4'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-success' onclick='check_spelling();'>Submit Spelling</button></div></div>";
    	 		 
		 //echo "<a href='dashboard.php'><button type='button' class='mb-1 mt-1 mr-1 btn btn-primary'>NEXT SPELL BEE WORD</button></a></div>";			             
	



								?>
								</div>
					
					</section>
								

					</div>

					<div class="col-xl-4">

					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">LEADERBOARD</h5>
					
									<div class="row">
									<div class="col-12">
										<section class="card mb-4">
								<div class="card-body" id='lboard' align='center'>
								
											</div>
										</section>
									</div>
								</div>

					</div>
	
					
<!--					<div class="col-xl-2">

					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">My Stats</h5>
        			<?php

					$points_res=mysqli_query($conn, "SELECT * from users where pid='$sid';"); 		
          			$points=mysqli_fetch_array($points_res);
					
					?>

					</div>
-->	
                    </div>

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

//add_status
function check_spelling()
{
    var qid=document.getElementById('qid').value;
    var answer = document.getElementById('answer').value;
	
	document.getElementById('spelling').innerHTML="";

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
				document.getElementById('spelling').innerHTML="Checking the spelling.....";
			}
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				var response=xmlhttp.responseText;
				if(response == 1)
				{
					document.getElementById('spelling').innerHTML="<h3 style='color:green'><i class='fa fa-check text-success'></i> Hurray! You Spelled It Right!</h3><a href='dashboard.php?l=<?php echo $lvl; ?>'><button type='button' class='mb-1 mt-1 mr-1 btn btn-primary'>NEXT SPELL BEE WORD</button></a></div>";
					var audio = new Audio("sounds/ipl.mp3");
	                audio.play();
					var audio = new Audio("sounds/claps.mp3");
	                audio.play();
				}	
				else
				{	
					document.getElementById('spelling').innerHTML="<h3 style='color:red'><i class='fa fa-close text-success'></i> Sorry! You Spelled It Wrong!</h3><a href='dashboard.php?l=<?php echo $lvl; ?>''><button type='button' class='mb-1 mt-1 mr-1 btn btn-primary'>NEXT SPELL BEE WORD</button></a></div>";
					var audio = new Audio("sounds/aipaye.mp3");
	                audio.play();
				}

			}
    }
    
	//status=status.replace(/&amp;/, "%26");
	xmlhttp.open("GET","check_spelling.php?answer=" + answer + "&qid=" + qid,true);
	xmlhttp.send();
}
</script>
		
		
		
<script>

function spell_sound(id)
{
	var audio = new Audio("sounds/machine/" + id + ".mp3");
	audio.play();
}
</script>		

<script>

function spell_human(id)
{
	var audio = new Audio("sounds/human/" + id + ".mp3");
	audio.play();
}
</script>		


<script>

	var source = new EventSource("leaderboard2.php");
	source.onmessage = function(event) {
    document.getElementById('lboard').innerHTML = event.data;
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
