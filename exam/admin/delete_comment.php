<?php
        include "connect.php";

	    $msg_id = $_GET['msg_id'];

		mysqli_query($conn, "delete from comments where msg_id=$msg_id;"); 		
 
 		 echo "Comment Deleted Successfully!";
?>