<?php include "access_check.php"; ?>
<?php

  include "connect.php";

  $qid = (int)$_GET['qid'];
  $response = strtoupper(trim($_GET['answer']));
  // $speed = mysqli_fetch_assoc(mysqli_query($conn, "SELECT count(`sid`) FROM `responses3` where qid = '$qid'"))['count(*)'];
  // if($speed == 0) $marks = 200;
  // else if($speed == 1) $marks = 190;
  // else if($speed == 2) $marks = 180;
  // else if($speed == 3) $marks = 170;
  // else if($speed == 4) $marks = 160;
  // else if($speed == 5) $marks = 150;
  // else if($speed == 6) $marks = 140;
  // else if($speed == 7) $marks = 130;
  // else if($speed == 8) $marks = 120;
  // else if($speed == 9) $marks = 110; 
  // else $marks = 100;
  $marks = 100;
  $ans=mysqli_query($conn, "SELECT * FROM words3 where qid=$qid;"); 		

  $answer=mysqli_fetch_row($ans);
  $sid=$_SESSION['pid'];	
  $ranswer=strtoupper(trim($answer[1]));	  
  // $level=$answer[3];	  

  $right=1;
  if($ranswer != $response) {$marks=0; $right=0;}
  $query = "insert into responses3 (sid, qid, answer,marks) values ('$sid', $qid, '$response', $marks)";  
  mysqli_query($conn, $query);  
  
  echo $right;
  
?>
