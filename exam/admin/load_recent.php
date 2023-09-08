<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	$gid=$_GET['gid'];

	include "connect.php";
	include "completed.php";
	
    $last_ten=mysqli_query($conn, "SELECT * FROM housie_current where gid=$gid order by timestamp DESC LIMIT 6;"); 		
		
	  $r=0;
      while($numbers=mysqli_fetch_row($last_ten))
	  {
		if($r == 0)
		{
			$table=$table."<a class='active' style='font-size:16px;'>".$numbers[1]."</a>";
			$r++;
		}
 		else 
		{
			$table=$table."<a style='font-size:16px;'>".$numbers[1]."</a>";
		}
 	  } 
       
       echo "retry: 10000\n";
       echo "data:{$table}\n\n";
       flush();

?><?php