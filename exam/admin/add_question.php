<?php include "access_check.php"; ?>
<?php 
   include "connect.php";
?>
<?php
if(isset($_POST['question']))
{
	$code=""; 
	include "connect.php";
    $question=addslashes($_POST['question']);	
	
    if(isset($_POST['code']))
      {
        $code=addslashes($_POST['code']);	
      } 
    $answer=$_POST['answer'];	
    $topic_id=$_POST['topic_id'];	
	
    mysqli_query($conn, "insert into questions (question, code, answer, status, topic_id) values ('$question', '$code', '$answer', 0, $topic_id);"); 		
	
    $ques=mysqli_query($conn, "SELECT max(qid) FROM questions;"); 		

    $qidr=mysqli_fetch_row($ques);
    $qid=$qidr[0];
		
    $a=$_POST['A'];	

    mysqli_query($conn, "insert into answers (qid, op, answer) values ($qid,'A','$a');");
	
	if($_POST['B'] != '')
     {
	  $b=$_POST['B'];	
      mysqli_query($conn, "insert into answers (qid, op, answer) values ($qid,'B','$b');");
	 }
	if($_POST['C'] != '')
     {
	  $c=$_POST['C'];	
      mysqli_query($conn, "insert into answers (qid, op, answer) values ($qid,'C','$c');");
	 }
	if($_POST['D'] != '')
     {
	  $d=$_POST['D'];	
      mysqli_query($conn, "insert into answers (qid, op, answer) values ($qid,'D','$d');");
	 }
	if($_POST['E'] != '')
     {
	  $e=$_POST['E'];	
      mysqli_query($conn, "insert into answers (qid, op, answer) values ($qid,'E','$e');");
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
	 </style>
	 <link rel="stylesheet" href="vendor/pnotify/pnotify.custom.css" />
	 <link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />
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
					<div class="col-xl-12">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">ADD NEW QUESTION</h5>
							<section class="card mt-4">
								<div class="card-body">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th>FIELD</th>
												<th>INPUT</th>
											</tr>
										</thead>
										<tbody>
<tr>
 <td>QUESTION</td><th><textarea name='question' class='form-control form-control-lg'></textarea></th>
</tr>

<!--<tr>
 <td>CODE (optional)</td><th><textarea name='code' class='form-control form-control-lg'></textarea></th>
</tr>
-->

<tr>
 <td>CODE (optional)</td><th><textarea name='code' class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'></textarea></th>
</tr>
													
<tr><td>OPTION A</td><th><input type='text' name='A' class='form-control form-control-lg'></th></tr>
										
<tr><td>OPTION B</td><th><input type='text' name='B' class='form-control form-control-lg'></th></tr>
										
<tr><td>OPTION C</td><th><input type='text' name='C' class='form-control form-control-lg'></th></tr>

<tr><td>OPTION D</td><th><input type='text' name='D' class='form-control form-control-lg'></th></tr>
										
<tr><td>OPTION E</td><th><input type='text' name='E' class='form-control form-control-lg'></th></tr>

<tr><td>ANSWER</td><th>
<select class='form-control form-control-lg' name='answer'>
<option value='A'>A</option>
<option value='B'>B</option>
<option value='C'>C</option>
<option value='D'>D</option>
<option value='E'>E</option>
</select></th></tr>
										
<tr><td>TOPIC CATEGORY</td><th>
<select class='form-control form-control-lg' name='topic_id'>
<option value='11'>Social Media / Food</option>
<option value='12'>Music/Riddles</option>
<option value='13'>Movies</option>
<option value='14'>K-Pop/K-Drama</option>
<option value='15'>Sports</option>
</select></th></tr>
										
<tr><td>SUBMIT</td><th><input type='submit' value='POST QUESTION' class='form-control form-control-lg'></th></tr>
										
										
										</tbody>
										</table>
	</form>									
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
        <script src="vendor/summernote/summernote-bs4.js"></script>
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
