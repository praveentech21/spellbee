<?php include "access_check.php"; ?>
<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	$table="";

	$ques=mysqli_query($conn, "SELECT * FROM questions where status=1;"); 		

    if(mysqli_num_rows($ques)>0)
	{
	  $qrow=mysqli_fetch_array($ques);
      $qid=$qrow[0];	  
      $sid=$_SESSION['pid'];	
      $ranswer=$qrow[4];
      //$question = str_replace(array("\r", "\n"), '<br>', $qrow['question']);	  
  	  $question = $qrow['question'];	  
  	  //$code = str_replace(array("\r", "\n"), '<br>', $qrow[3]);	  
  	  $code=$qrow[3];  
	  		  
      $table=$table."<div align='center'><h4><b>Q)".$question."</b></h4></div><div>".$code."</div><div align='center'>";
	  
      $ans_res=mysqli_query($conn, "SELECT * FROM responses where sid='$sid' and qid=$qid;");
	  if(mysqli_num_rows($ans_res)>0)
	    {				
	     $arow=mysqli_fetch_row($ans_res);
         $answer=$arow[2];

		 $op_res=mysqli_query($conn, "SELECT * FROM answers where qid=$qid;");
		 
	     while($orow=mysqli_fetch_row($op_res))
		 {		 
          $clr="primary"; 
		   
		  $cnt_res=mysqli_query($conn, "SELECT count(*) FROM responses where qid=$qid and answer='$orow[1]';");
          $crow=mysqli_fetch_row($cnt_res);
		  
  	      if($orow[1] == $answer) {$clr="danger";}
	      if($orow[1] == $ranswer) {$clr="success";}

		  $table=$table."<button type='button' class='mb-1 mt-1 mr-1 btn btn-$clr' DISABLED>$orow[1]) $orow[2] <span style='color:#000;'><b>$crow[0] </b><i class='fa fa-users'></i></span></button>";	             
		}	
		   
        if($answer == $ranswer)
  	     {			 
		 $table=$table."<div style='color:green;'>YOU HAVE ANSWERED THIS RIGHT!</div>";
		 }
		 else
		 {			 
		 $table=$table."<div style='color:red;'>YOU HAVE ANSWERED THIS WRONG!</div>";
		 }
		 
		 $table=$table."<button type='button' class='mb-1 mt-1 mr-1 btn btn-success'> </button> Right Answer <button type='button' class='mb-1 mt-1 mr-1 btn btn-danger'> </button> Wrong Answer</div>";
		} 
		else
		{	
		 $op_res=mysqli_query($conn, "SELECT * FROM answers where qid=$qid;");

		 $table=$table."<button class='mb-1 mt-1 mr-1 btn btn-warning' onclick='spell_sound($qid);'>Play Sound <i class='fas fa-play'></i></button>";
		 
		 $table=$table."<form action='post_answer.php' method='get'><input type='hidden' name='qid' value='$qid'><input type='text' class='form-control' name='answer' value='' placeholder='Your Spelling Here'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-success'>Submit Spelling</button></form>";
    	 
		 
/*         while($orow=mysqli_fetch_row($op_res))
		 {		 
    	   //$table=$table."<form action='post_answer.php' method='get'><input type='hidden' name='qid' value='$qid'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary'>$orow[1]) $orow[2]</button></form>";
    	   $table=$table."<a href='dashboard.php?qid=$qid&op=$orow[1]'><button type='submit' class='mb-1 mt-1 mr-1 btn btn-primary'>$orow[1]) $orow[2]</button></a>";
		 }  
*/		 
		   $table=$table."<br>WRITE THE CORRECT SPELLING IN THE TEXT BOX</div>";			             
		}
	}
	else
	{
	  $table="PR";
	}
	
    echo "retry:1000\n";
	echo "data:{$table}\n\n";
    flush();

?><?php	