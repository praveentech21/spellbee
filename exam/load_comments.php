<?php include "access_check.php"; ?>
<?php
    session_start();
	
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";

	
	  if(isset($_GET['gid'])) {$gid=$_GET['gid'];}
	  
//	  $comments=mysqli_query($conn, "SELECT msg_id, p.pid, player_name, place, msg, DATE_FORMAT(timestamp, '%l:%i %p') FROM comments c , users p where p.pid=c.pid and gid=$gid and TIMESTAMPDIFF(SECOND, timestamp, now()) <= 5 order by timestamp desc;"); 		
	  $comments=mysqli_query($conn, "SELECT msg_id, p.pid, player_name, place, msg, DATE_FORMAT(timestamp, '%l:%i %p') FROM comments c , users p where p.pid=c.pid and gid=$gid and c.status=2 order by timestamp desc;"); 		
	
  	  if(mysqli_num_rows($comments) > 0)
	   {
	     while($comment=mysqli_fetch_row($comments))
	       {
			$msg_id=$comment[0];
			$player_id=$comment[1];
			$player_name=$comment[2];
			$place=$comment[3];
			$msg=$comment[4];
			$time=$comment[5];
		
			
			if($player_id == $_SESSION['pid'])
			{
	          $table=$table."<span style='color:red;'>You: </span>";			
			}
			else if($player_id == '000000000')
			{
	          $table=$table."<span style='color:red;'><b>ADMIN: </b></span>";			
			}
			else
			{
			  $table=$table."<span style='color:#0088cc;'>$player_name, $place: </span>";
			}
			
			$table=$table."<span style='color:#000000;'>$msg <i style='font-size:8px;'>$time</i></span>";
			$table=$table."<hr class='dotted short'>";
			}
		}
	   else
		{
		   $table=$table."PR";
		}

/*	$comments=mysqli_query($conn, "SELECT msg_id, p.player_id, player_name, place, msg FROM comments c , users p where p.player_id=c.player_id and TIMESTAMPDIFF(SECOND, timestamp, now()) <= 5 order by timestamp desc;"); 		
	
	if(mysqli_num_rows($comments) > 0)
	{
	 $comment=mysqli_fetch_row($comments);
	 $msg_id=$comment[0];
	 $player_id=$comment[1];
	 $player_name=$comment[2];
	 $place=$comment[3];
	 $msg=$comment[4];

	 $last="<strong>$player_name, $place: </strong><div style='font-size:16px;'>$msg</div>";
	}
	else
	{
	  $last="";
	}
*/
 	//echo "retry: 5000\n";
    echo "data:{$table}\n\n";
    flush();

?><?php