<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	
    $joins=mysqli_query($conn, "SELECT p.pid, player_name, place, gid FROM users p, player_games g where p.pid=g.pid and TIMESTAMPDIFF(SECOND, timestamp, now()) <= 5 order by timestamp desc;"); 		
	
    if(mysqli_num_rows($joins) > 0)
	   {
			$player=mysqli_fetch_row($joins);
			$pid=$player[0];		
			$player_name=$player[1];		
			$place=$player[2];		
			$gid=$player[3];		
			$table=$table."$player_name from $place Joined Game No. $gid!\n";
		}
	   else
		{
		   $table=$table."0";
		}
	
 	echo "retry: 3000\n";
    echo "data:{$table}\n\n";
    flush();
?>
<?php