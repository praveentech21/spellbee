<?php

session_start();
if(isset($_POST['mobile']) && $_POST['pin']=="291122")
{
  $pid=$_POST['mobile'];
  $pin="0000";

  include "connect.php";  
  
  $result=mysqli_query($conn, "select * from users where pid='$pid' and pin='$pin' and status=1");
  
  if(mysqli_num_rows($result) > 0)
   {
 	 $profile=mysqli_fetch_array($result);
	 $_SESSION['pid']=$profile['pid'];    	
	 $_SESSION['player_name']=$profile['player_name'];    	
	 $_SESSION['place']=$profile['place'];    	
	 $_SESSION['points']=$profile['points'];    	
     mysqli_query($conn, "update users set lastseen=now() where pid='$pid' and pin='$pin'");	 
   }
  else
   {
    //clear session from globals
    $_SESSION = array();
    //clear session from disk
    session_destroy();
    header("Location:index.php?pwderror");
    exit;
   }
}
else if(isset($_SESSION['pid']))
{
  $pid=$_SESSION['pid'];    	
}
else #if user access the page directly, redirect to login page
{
    //clear session from globals
    $_SESSION = array();
    //clear session from disk
    session_destroy();
	header("Location:index.php");
	exit;
}

?>
