<?php include "access_check.php"; ?>
<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
    $table="";
	
	$ques=mysqli_query($conn, "SELECT * FROM questions where status=1;"); 		

    if(mysqli_num_rows($ques)>0)
	{
	  $qrow=mysqli_fetch_row($ques);
      $qid=$qrow[0];	  
      $sid=$_SESSION['pid'];	
      $ranswer=$qrow[4];	  

      $ques=mysqli_query($conn, "SELECT player_name, sid, qid,answer,DATE_FORMAT(timestamp, '%h:%i:%s %p') as tm FROM responses r, users p where p.pid=r.sid and qid=$qid order by timestamp;"); 			

      if(mysqli_num_rows($ques)>0)
	    {
	     $table=$table."<table border='0'><tr><th> NAME</th></tr>";
		 $sno=1;
		 $rgt=$wrg=0;
         while($row=mysqli_fetch_array($ques))
	      {
		   if($row['answer'] == $ranswer)
		   {
            $table=$table."<tr><td><b style='font-size:20px;'>$sno : ".ucwords($row['player_name'])."</b>";
            $table=$table."<i class='fa fa-check text-success'></i>";  
            $table=$table." <span style='font-size:10px;'>".$row['tm']."</span></td></tr>";
	  	    $sno++;$rgt++;
			//if($rgt ==3) break;
		   }
		   else
		   {  
	         //$table=$table."<button type='button' class='mb-1 mt-1 mr-1 btn btn-danger'> </button> Wrong"; }
			 $wrg++;  
		   }	
	      }  
	     
  		   $table=$table."</table><b><button type='button' class='mb-1 mt-1 mr-1 btn btn-success'> </button> Right - $rgt  <button type='button' class='mb-1 mt-1 mr-1 btn btn-danger'> </button> Wrong - $wrg </b>";

	   }
	}   
    else
	{
       $logins=mysqli_query($conn, "SELECT pid FROM users where TIMESTAMPDIFF(SECOND, lastseen, now()) <= 600;");
       $l= mysqli_num_rows($logins);
	
  	   $table="<h4>LOGGED IN USERS: ".$l."</h4>";
	}
	
    echo "retry:1000\n";
	echo "data:{$table}\n\n";
    flush();

?><?php
