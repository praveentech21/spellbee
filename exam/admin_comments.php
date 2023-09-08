<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";

	
	  if(isset($_GET['gid'])) {$gid=$_GET['gid'];}
	  
	  $comments=mysqli_query($conn, "SELECT msg_id, msg, DATE_FORMAT(timestamp, '%l:%i %p') FROM comments where gid=$gid and pid='0000000000' and TIMESTAMPDIFF(SECOND, timestamp, now()) <= 8 order by timestamp desc;"); 		
	
  	  if(mysqli_num_rows($comments) > 0)
	   {
	     while($comment=mysqli_fetch_row($comments))
	       {
			$msg=$comment[1];		
			$table=$table.$msg;
			}
		}
	   else
		{
		   $table=$table."0";
		}
 	echo "retry: 8000\n";
    echo "data:{$table}\n\n";
    flush();

?><?php