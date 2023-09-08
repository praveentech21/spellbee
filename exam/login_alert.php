<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	
    $logins=mysqli_query($conn, "SELECT pid, player_name, place FROM users where TIMESTAMPDIFF(SECOND, lastseen, now()) <= 3 order by lastseen desc;"); 		
	
    if(mysqli_num_rows($logins) > 0)
	   {
			$player=mysqli_fetch_row($logins);
			$pid=$player[0];		
			$player_name=$player[1];		
			$place=$player[2];		
			$table=$table."$player_name from $place logged in just now!";
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