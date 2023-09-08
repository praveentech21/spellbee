<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";

	
	  if(isset($_GET['gid'])) {$gid=$_GET['gid'];}
	  
	  $comments=mysqli_query($conn, "SELECT msg_id, player_name, place, msg, DATE_FORMAT(timestamp, '%l:%i %p') FROM comments c, users p where c.pid=p.pid and gid=$gid and c.status=2 and c.pid <> '0000000000' and TIMESTAMPDIFF(SECOND, timestamp, now()) <= 4 order by timestamp desc;"); 		
	
  	  if(mysqli_num_rows($comments) > 0)
	   {
	     while($comment=mysqli_fetch_array($comments))
	       {
			$player_name=$comment['player_name'];		
			$place=$comment['place'];		
			$msg=$comment['msg'];		
			$table=$table."<span style='color:yellow;'><b>".$player_name.", ".$place.":</span> ".$msg."<br>";
			}
		}
	   else
		{
		   $table=$table."0";
		}
 	//echo "retry: 4000\n";
    echo "data:{$table}\n\n";
    flush();

?><?php