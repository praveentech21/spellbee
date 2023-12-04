<?php include 'access_check.php'; ?>

<?php

$right = -1;

include 'connect.php';

$sid = $_SESSION['pid'];

$checkstart = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `start_time` from users3 where pid='$sid';"))['start_time'];
if ($checkstart == NULL)
header('Location: startgame.php');

$nqres = mysqli_query($conn, "SELECT count(*) from responses3 where sid='$sid';");

$qres = mysqli_fetch_array($nqres);

$q = $qres[0] + 1;

$statuscheck = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `status` from users3 where pid='$sid';"))['status'];
if ($statuscheck == 0) header('Location: index.php?stop');

if (isset($_GET['qid'])) {
	$qid = (int) $_GET['qid'];
	$response = strtoupper(trim($_GET['op']));

	$ans = mysqli_query($conn, "SELECT * FROM words3 where qid=$qid;");

	$answer = mysqli_fetch_row($ans);

	$sid = $_SESSION['pid'];

	$ranswer = strtoupper($answer[1]);

	$right = 1;

	$marks = 100;
	if ($ranswer != $response) {
		$marks = 0;
		$right = 0;
	}

	$query = "insert into responses3 (sid, qid, answer,marks) values ('$sid', $qid, '$response',$marks)";

	mysqli_query($conn, $query);
}

$nqres = mysqli_query($conn, "SELECT count(*) from responses3 where sid='$sid';");

$qres = mysqli_fetch_array($nqres);

$q = $qres[0] + 1;

?>

<!doctype html>

<html class="sidebar-light fixed sidebar-left-collapsed">

<head>

	<?php include 'head.php'; ?>

	<style>
		td {

			color: #000000;

		}



		.ui-pnotify.red .ui-pnotify-container {

			background-color: #DC143C !important;

			color: #ffffff;

			border: 0px;

		}



		.ui-pnotify.blue .ui-pnotify-container {

			background-color: #0088cc !important;

			color: #ffffff;

			border: 0px;

		}



		.code {

			display: inline-block;

			overflow-wrap: break-word;

			word-wrap: break-word;

			text-align: left;

		}
	</style>



	<?php

	if ($right == 1) {
	?>



		<script>
			var audio = new Audio("sounds/ipl.mp3");

			audio.play();

			var audio = new Audio("sounds/claps.mp3");

			audio.play();
		</script>



	<?php
	}

	if ($right == 0) {
	?>



		<script>
			var audio = new Audio("sounds/aipaye.mp3");

			audio.play();
		</script>



	<?php
	}

	?>

</head>

<body>

	<section class="body">

		<?php include 'header.php'; ?>

		<div class="inner-wrapper">

			<?php include 'sidebar.php'; ?>

			<section role="main" class="content-body">

				<header class="page-header">

					<h2>SRKR SPELL BEE</h2>

				</header>

				<?php

				if ($right == 1) {
				?>

					<div id="swinner" class="modal-block modal-header-color modal-block-primary">

						<section class="card">

							<header class="card-header">

								<div class="card-actions">

									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>

									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>

								</div>

								<h2 class="card-title">SRKR SPELL BEE ANSWER</h2>

							</header>

							<div class="card-body" style='text-align:center;'>

								<ul class="simple-bullet-list mb-3">

									<img src="img/congrats.gif">

								</ul>

								<h5><b>YOUR ANSWER:</b> <?php echo $response; ?><br> <b>RIGHT ANSWER:</b> <?php echo $ranswer; ?></h5>

							</div>

							<footer class="card-footer">

								<div class="row">

									<div class="col-md-12 text-right">

										<button class="btn btn-success modal-dismiss"><a href="#" class="card-action card-action-dismiss" style='color:#ffffff;' data-card-dismiss> CLOSE</a></button>

									</div>

								</div>

							</footer>



						</section>

					</div>

				<?php
				} else if ($right == 0) {
				?>



					<div id="srunner" class="modal-block modal-header-color modal-block-danger">

						<section class="card">

							<header class="card-header">

								<div class="card-actions">

									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>

									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>

								</div>

								<h2 class="card-title">SRKR SPELL BEE ANSWER</h2>

							</header>

							<div class="card-body" style='text-align:center;'>

								<ul class="simple-bullet-list mb-3">

									<img src="img/fail.gif">

								</ul>

								<h5><b>YOUR ANSWER:</b> <?php echo $response; ?><br> <b>RIGHT ANSWER:</b> <?php echo $ranswer; ?></h5>

							</div>

							<footer class="card-footer">

								<div class="row">

									<div class="col-md-12 text-right">

										<button class="btn btn-success modal-dismiss"><a href="#" class="card-action card-action-dismiss" style='color:#ffffff;' data-card-dismiss> CLOSE</a></button>

									</div>

								</div>

							</footer>



						</section>

					</div>

				<?php
				}

				?>



				<!-- start: page -->

				<div class='row'>

					<div class="col-xl-8">

						<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">YOUR SPELL BEE WORD HERE</h5>

						<section class="card mt-4">

							<div class="card-body">

								<?php
								if ($q <= 30) {
									echo "<h4 align='center' STYLE='COLOR:RED;'><B>YOUR QUESTION NO - $q</B></h4>";

									$ques = mysqli_query($conn, "SELECT * FROM words3 where qid not in (select qid from responses3 where sid='$sid') ORDER BY RAND() LIMIT 1;");

									$qrow = mysqli_fetch_array($ques);

									$qid = $qrow['qid'];

									$ranswer = strtoupper($qrow['word']);

									$question = $qrow['meaning'];


									echo "<div align='center'><h4><b>Word Meaning: </b>" . $question . '</h4></div>';

									echo "<div align='center'><button class='mb-1 mt-1 mr-1 btn btn-danger' onclick='spell_sound($qid);'><span style='color:#ffffff;'><i class='fas fa-volume-up'></i> SPELL WORD <i class='fas fa-play'></i></span></button><br><br>";

									echo "<div id='spelling'>WRITE THE CORRECT SPELLING IN THE TEXT BOX<br><div class='col-8'><input type='hidden' name='qid' id='qid' value='$qid'><input type='text' required class='form-control' name='answer'  id='answer'  value='' placeholder='Your Spelling Here' style='text-transform:uppercase;' autocomplete='off' required></div><div class='col-4'><br><button type='submit' id='submitbtn' class='mb-1 mt-1 mr-1 btn btn-success' onclick='check_spell()'>Submit Spelling</button></div></div>";

									echo '</div>';
								} else {+
									$point = mysqli_fetch_assoc(mysqli_query($conn, "SELECT *, sum(marks) as points from responses3 where sid='$sid';"));
									$points = $point['points'];

									mysqli_query($conn, "UPDATE users3 set `points`=$points where pid='$sid';");
									if(is_null($point['end_time'])) {mysqli_query($conn, "UPDATE users3 set `end_time`=now() where pid='$sid'");}

									echo "<h3 style='color:red;' align='center'>YOUR SPELL BEE QUIZ HAS BEEN COMPLETED!</h3>";
								?>

									<table style='line-height:0px;' align="center">
										<th>
										<th>Word</th>
										<th>Responce</th>
										<th>Status</th>
										<th>Score</th>
										</th>
										<tbody>
											<?php
											$responces_res = mysqli_query($conn, "SELECT * from responses3 where sid='$sid' order by timestamp LIMIT 35;");
											$sno = 1;
											while ($row = mysqli_fetch_assoc($responces_res)) {
												$marks = $row['marks'];
												$answer = $row['answer'];
												$word = mysqli_fetch_assoc(mysqli_query($conn, "select word from words3 where qid='{$row['qid']}'"))['word'];
												echo "<tr><td align='center'>$sno </td>";
												echo "<td align='left'>" . strtoupper($word) . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
												echo "<td align='left'>" . $answer . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><th>";
												if ($marks > 0) {
													echo "<span style='color:green;'>RIGHT</span></th>";
												} else {
													echo "<span style='color:red;'>WRONG</span></th>";
												}
												echo "<td align='center'>" . $marks . "</td></tr>";
												$sno++;
											}
											?>
										</tbody>

									</table>

								<?php } ?>

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

				
				</div>

			</section>

		</div>

	</section>

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
		function spell_sound(id)
		{

			var audio = new Audio("sounds/round3/" + id + ".mp3");

			audio.play();

		}
	</script>

	<script>
		var source = new EventSource("leaderboard5.php");

		source.onmessage = function(event) {

			document.getElementById('lboard').innerHTML = event.data;

		};
	</script>

<script>
		var source = new EventSource("login_alert.php");

		source.onmessage = function(event) {

			if (event.data != "0")

			{

				new PNotify({

					title: 'New Login!',

					text: event.data,

					addclass: 'red notification-primary',

					icon: 'fab fa-twitter',

					delay: 1000

				});

			}

		}
	</script>

	<script>
		//add_status
		function check_spell() {
			var qid = document.getElementById('qid').value;
			var answer = document.getElementById('answer').value;

			var len =answer.length;


			document.getElementById('spelling').innerHTML = "";

			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 1) {
					document.getElementById('spelling').innerHTML = "Checking the spelling.....";
				}
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var response = xmlhttp.responseText;
					if (response == 0) {
						document.getElementById('spelling').innerHTML = "<h3 style='color:red'><i class='fa fa-close text-success'></i> Sorry! You Spelled It Wrong!</h3><a href='dashboard4.php'><button type='button' class='mb-1 mt-1 mr-1 btn btn-primary'>NEXT SPELL BEE WORD</button></a></div>";
						var audio = new Audio("sounds/aipaye.mp3");
						audio.play();
					} else {
						document.getElementById('spelling').innerHTML = "<h3 style='color:green'><i class='fa fa-check text-success'></i> Hurray! You Spelled It Right!</h3><a href='dashboard4.php'><button type='button' class='mb-1 mt-1 mr-1 btn btn-primary'>NEXT SPELL BEE WORD</button></a></div>";
						var audio = new Audio("sounds/ipl.mp3");
						audio.play();
						var audio = new Audio("sounds/claps.mp3");
						audio.play();
					}

				}
			}

				if(len > 0){
					xmlhttp.open("GET", "check_spelling3.php?answer="+ answer+"&qid="+qid, true);
					xmlhttp.send();
				}
			}
	</script>

<script>
document.getElementById('submitbtn').addEventListener('click', function(event) {
    var answerInput = document.getElementById('answer');
    if (answerInput.value.trim() === '') {
        event.preventDefault(); // Prevent form submission
        alert('Answer cannot be empty. Please enter a spelling.');
    }
});
</script>




	<br><br>

	<?php include 'footer.php'; ?>

</body>

</html>