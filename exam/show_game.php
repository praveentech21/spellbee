<?php include "access_check.php"; ?>
<?php

	include "connect.php";
	$ques=mysqli_query($conn, "SELECT * FROM words where qid not in (select qid from responses where sid='$sid');"); 		

    if(mysqli_num_rows($ques)>0)
	{
	  $qrow=mysqli_fetch_array($ques);
      $qid=$qrow[0];	  
      $sid=$_SESSION['pid'];	
      $ranswer=$qrow[1];
      //$question = str_replace(array("\r", "\n"), '<br>', $qrow['question']);	  
  	  $question = $qrow['meaning'];	  
  	  //$code = str_replace(array("\r", "\n"), '<br>', $qrow[3]);	  
  	  $code=$qrow[3];

      if($code == 'E') { $level="Easy";}	  
      else if($code == 'M') { $level="Moderate";}	  
      else if($code == 'C') { $level="Difficult";}	  
	  		  
      echo "<div align='center'><h4><b>Word Meaning: </b>".$question."</h4></div>";
	  echo "<div align='center'><h4><b>Difficulty Level: </b>".$level."</h4></div><div align='center'>";
	  
		 echo "<button class='mb-1 mt-1 mr-1 btn btn-warning' onclick='spell_sound($qid);'><span style='color:#000000;'><i class='fas fa-volume-up'></i> SPELL WORD <i class='fas fa-play'></i></span></button>";
		 
		 echo "<div class='col-8' id='spelling'><input type='hidden' name='qid' id='qid' value='$qid'><input type='text' class='form-control' name='answer'  id='answer'  value='' placeholder='Your Spelling Here' autocomplete='off'></div><div class='col-4'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-success' onclick='check_spelling();'>Submit Spelling</button></div>";
    	 		 
		 echo "<br>WRITE THE CORRECT SPELLING IN THE TEXT BOX</div>";			             
	}
	

?>	