<?php include "access_check.php"; ?>
<?php

include "connect.php";

if($_GET['type'] == 'r')
 {
	$player_id = $_GET['player_id'];

	mysqli_query($conn,"update users set status=1 where player_id = '$player_id';"); 		

	$result=mysqli_query($conn,"SELECT tid FROM users where player_id = '$player_id';"); 		
    $ticket=mysqli_fetch_row($result);
	$_SESSION['tid']=$ticket[0];	
 }


if($_GET['type'] == 'c')
 {
	$tkt_no = $_GET['tkt_no'];
	$gid = $_GET['gid'];

	$result=mysqli_query($conn,"SELECT * FROM housie_current where gid= $gid and number = $tkt_no;"); 		

   if(mysqli_num_rows($result) > 0)
    {
 	 echo "<span id='ticked2'>$tkt_no</span>";
    }  
   else
    {
 	 echo $tkt_no;
	}
 }


if($_GET['type'] == 'd')
 {
	$player_id = $_GET['player_id'];

	mysqli_query($conn, "delete from users where player_id = '$player_id'");

	echo "Deleted Player Successfully!";
 }
 
if($_GET['type'] == 'a')
 {
	$player_id = $_GET['player_id'];
	$player_name = $_GET['player_name'];

	$result=mysqli_query($conn,"SELECT player_id FROM users where player_id = '$player_id';"); 		

   if(mysqli_num_rows($result) > 0)
    {
 	 echo "<font color='red'>Player NOT Added! Player ID already exists!</font>";
    }  
   else
    {
	 mysqli_query($conn, "insert into users values ($player_id, '$player_name')");
	 echo "Player Added Successfully!";
	}
 }

if($_GET['type'] == 's')
 {

   $cnt = $_GET['cnt'];
   $round=mysqli_query($conn,"SELECT max(round_id) FROM play;"); 		
   $rmax=mysqli_fetch_row($round);
   $round_max=$rmax[0]+1;

   for($i=1;$i<=$cnt;$i++)
   {
	 $str="player".$i;  
     $score=$_GET[$str];
	 mysqli_query($conn, "insert into play (round_id,player_id,score) values ($round_max, $i, $score)");
   }
	 echo "Scores Added for Round $round_max Successfully!";
 }

if($_GET['type'] == 'del')
 {

	mysqli_query($conn, "delete from play");

	echo "Deleted Score Board Successfully!";
 }
 
?>