<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	
	if(isset($_GET['gid'])) { $gid=$_GET['gid']; }			  
		  
	$winner_res=mysqli_query($conn, "SELECT * FROM winners where gid=$gid order by win_type;"); 		
  	while($win=mysqli_fetch_array($winner_res))
	   {   
		$win_type=$win['win_type'];
		$type=substr($win_type,0,2);
		$points=$win['points'];
		$prize=$win['prize'];
		$pid=$win['pid'];
        $time=date('h:i:s a',strtotime($win['timestamp']));										
		
		if($type == "J5") {$prize2 = "JALDI 5 ($win_type)";}
		else if($type == "L1") {$prize2 = "LINE 1 ($win_type)";}
		else if($type == "L2") {$prize2 = "LINE 2 ($win_type)";}
		else if($type == "L3") {$prize2 = "LINE 3 ($win_type)";}
		else if($type == "CN") {$prize2 = "4 CORNERS ($win_type)";}
		else if($type == "C6") {$prize2 = "6 CORNERS ($win_type)";}
		else if($type == "CS") {$prize2 = "CENTRE STAR ($win_type)";}
		else if($type == "FH") {$prize2 = "FULL HOUSIE ($win_type)";}

		
		$table=$table."<li class='blue'><span class='title'>$prize2</a>: <i class='fa fa-gift'></i> ";

		if($prize != "")
		{
		 $table=$table."$prize <b>OR</b> $points points";
		} 
		else
		{
		 $table=$table."$points points";
		} 
        $table=$table."</span>";
					
		if($pid=="") { $winner_details="<span style='color:green;'>Not Yet Claimed</span>";}
		else 
		{
  		  $person_details=mysqli_query($conn, "SELECT * FROM users where pid=$pid;"); 		
  		  $person=mysqli_fetch_array($person_details);
		  $winner_details=$person['player_name'].", ".$person['place']." <span style='font-size:10px;'>[".$time."]</span>";
		}
		
		$table=$table."<div style='color:#0088cc;font-size:14px;'><b style='color:#ff0000;'>WINNER:</b> <span style='color:#0088cc;' id='".$type."_win'>$winner_details</span></div></li>";
	}

	echo "retry:10000\n";
    echo "data:{$table}\n\n";
    flush();

?><?php