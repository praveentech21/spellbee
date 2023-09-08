<?php include "access_check.php"; ?>
<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    $ssid=$_SESSION['pid'];
	include "connect.php";
    $table="";
	
	$total_res=mysqli_query($conn, "SELECT distinct sid from responses;"); 		
	$ttl=mysqli_num_rows($total_res);

	$table=$table."<h4>TOTAL PLAYERS: $ttl</h4>"; 
	$my_res=mysqli_query($conn, "SELECT sum(marks) as mymark from responses where pid='$ssid';"); 		
    $mrow=mysqli_fetch_array($my_res);
	$my_score=$mrow['mymark'];
	$table=$table."<h4>MY SCORE: $my_score</h4>"; 
	$ques=mysqli_query($conn, "SELECT sid, sum(marks) as mark from responses group by sid order by mark desc LIMIT 20;"); 		
    //$row=mysqli_fetch_array($ques);	
	
    if(mysqli_num_rows($ques)>0)
	{
        $sno=1;		
		$table=$table."<table><tr><th>Rank</th><th>Name</th><th>Score</th></tr>";
	    while($row=mysqli_fetch_array($ques))
	      {
             $total=$row[1];	  
             $sid=$row[0];	
             $details=mysqli_query($conn, "SELECT player_name, place FROM users where pid='$sid';"); 			
			 $row2=mysqli_fetch_array($details);
		     $player=ucwords($row2['player_name']);      
          	 $table=$table."<tr style='font-size:14px;'><td><b>$sno</b></td><td>".$player."</b>";
             $table=$table." <span style='font-size:10px;'>".$row2['place']."</span></td><td>".$total."</td></tr>";
	  	     $sno++;
		  }	 
         $table=$table."</table>";
		 
/*      if(mysqli_num_rows($ques)>0)
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
*/
	}   
    else
	{
  	   $table="<h4>NO LEADERS AS OF NOW</h4>";
	}
	
    echo "retry:1000\n";
	echo "data:{$table}\n\n";
    flush();

?><?php
