<?php include "access_check.php"; ?>

<?php
        include "connect.php";

	    $qid = $_GET['qid'];

		mysqli_query($conn, "delete from responses where qid=$qid;"); 		
 
 		 echo "Responses Deleted!";
?>