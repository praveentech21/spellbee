<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	
	$prizes=mysqli_query($conn, "SELECT w.player_id, player_name, prize, DATE_FORMAT(timestamp, '%r'), timestamp FROM winners w, users p where w.player_id=p.player_id and gid=$gid order by timestamp desc;"); 		
	$r=0;
    while($row=mysqli_fetch_array($prizes))
    {
		         $r++;
				 $win_type=$row['win_type'];
	             $type=substr($win_type,0,2);

				 if($type == "J5") {$prize = "JALDI 5";}
				 else if($type == "L1") {$prize = "LINE 1";}
				 else if($type == "L2") {$prize = "LINE 2";}
				 else if($type == "L3") {$prize = "LINE 3";}
				 else if($type == "CN") {$prize = "4 CORNERS";}
				 else if($type == "C6") {$prize = "6 CORNERS";}
				 else if($type == "CS") {$prize = "CENTRE STAR";}
				 else if($type == "FH") {$prize = "FULL HOUSIE";}

				 if($r==1)
				 {
				   $table=$table."<div class='item active'><i class='fa fa-trophy'></i> <b>$prize WINNER (New)</b><br>$row[1]</div>";
				 }
				 else
				 {
    			   $table=$table."<div class='item'><i class='fa fa-trophy'></i> <b>$prize WINNER</b><br>$row[1]</div>";
				 }
	}
	
    if($r==0)
	{
     $table=$table."<div class='item active'><b>WINNER<br>UDPATES</b></div>";
     $table=$table."<div class='item'><b>NO WINNERS YET</b><br>All The Best</div>";		
	}
		
	echo "retry:10000\n";
    echo "data:{$table}\n\n";
    flush();

?><?php