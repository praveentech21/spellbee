<?php

session_start();
if($_POST['pin'])
{
  $pin=$_POST['pin'];
  include "connect.php";  
  
  if($pin == "707070")
   {
	 $_SESSION['admin']="ADMIN BO LIVE";
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
else if(isset($_SESSION['admin']))
{

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
