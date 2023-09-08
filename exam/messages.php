<?php include "access_check.php"; ?>

<?php
   session_start();
   if(isset($_SESSION['pid'])) #checking if session already exists
     {

	  if(isset($_GET['gid'])) {$gid=$_GET['gid'];}
	  
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
		
			echo "<span style='color:#0088cc;'>$player_name, $place:</span><div style='color:#000000;'>$msg <i style='font-size:8px;'>$time</i></div>";
			echo "<hr class='dotted short'>";
			}
		}
	   else
		{
		   echo "<strong>Be the first to write a message!</strong>";
		}
	 }
?>
