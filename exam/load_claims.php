<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	
	if(isset($_GET['gid'])) { $gid=$_GET['gid']; }			  

	$prizes=mysqli_query($conn, "SELECT win_type FROM winners where gid=$gid and pid <> '' order by win_type;"); 		
    $d1="";  
 	
    while($row=mysqli_fetch_row($prizes))
        {
			 if($row[0] == "J5A") {$d1=$d1."J5A|";}			 
			 else if($row[0] == "L1A") {$d1=$d1."L1A|";}
			 else if($row[0] == "L2A") {$d1=$d1."L2A|";}
			 else if($row[0] == "L3A") {$d1=$d1."L3A|";}
			 else if($row[0] == "CNA") {$d1=$d1."CNA|";}
			 else if($row[0] == "C6A") {$d1=$d1."C6A|";}
			 else if($row[0] == "CSA") {$d1=$d1."CSA|";}
			 else if($row[0] == "FHA") {$d1=$d1."FHA|";}
        }

	//echo "retry:20000\n";
    echo "data:{$d1}\n\n";
    flush();

?><?php