<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	$gid=$_GET['gid'];

	include "connect.php";
	include "completed.php";
	
    $last_ten=mysqli_query($conn, "SELECT * FROM housie_current where gid=$gid order by timestamp DESC LIMIT 5;"); 		
	
	$table="<i class='fas fa-history text-success'></i> ";
	
	$r=0;
    while($numbers=mysqli_fetch_row($last_ten))
	  {
		if($r == 0)
		{
			$table=$table."<span style='font-size:14px;color:#0088cc;'>".$numbers[1]."</span>";
			$r++;
		}
 		else 
		{
			$table=$table."<span style='font-size:14px;'> | ".$numbers[1]."</span>";
		}
		
 	  } 
       
	  $status_res=mysqli_query($conn, "SELECT * FROM housie_current where gid=$gid;"); 		
	  $status=mysqli_num_rows($status_res);
	  
	  $table= $table. " <b>Progress: $status/90</b>";
	  
    echo "retry: 15000\n";
    echo "data:{$table}\n\n";
    flush();

?><?php