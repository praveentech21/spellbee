<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	$table="";

	if(isset($_GET['gid'])) { $gid=$_GET['gid']; }			  

//	$logged=mysqli_query($conn, "SELECT player_id, player_name, place,DATE_FORMAT(timestamp, '%r')  FROM players WHERE lastseen <= DATE_SUB(NOW(), INTERVAL 30 MINUTE);"); 		
	$logged=mysqli_query($conn, "SELECT g.pid, player_name, place, DATE_FORMAT(lastseen, '%h:%i %p') FROM players p, player_games g where p.pid=g.pid and gid=$gid order by lastseen DESC;"); 		

    if(mysqli_num_rows($logged)>0)
	{ $cnt=0;
	  while($row=mysqli_fetch_row($logged))
	  {					       
	   $table=$table."<div><i class='fa fa-user'></i> <b style='color:red;'>$row[1] </b><span style='font-size:10px;'>($row[2]) - $row[3]</span></div>";			
       $cnt++;	   
	  }
	  $table=$table."<hr>Total Logged-in: $cnt<hr>";
	}
	else
	{
	 $table="PR";
	}
	
    echo "retry:5000\n";
	echo "data:{$table}\n\n";
    flush();

?><?php