<?php include "access_check.php"; ?>
<?php

$tid=$_GET['tid'];
$pid=$_GET['pid'];
$gid=$_GET['gid'];
$type=$_GET['type'];
$win_type=substr($type, 0, 2);

include "connect.php";
include "completed.php";

$prizes=mysqli_query($conn, "SELECT * FROM winners where gid = $gid and SUBSTRING(win_type,1,2)='$win_type';"); 		
$winner=mysqli_fetch_array($prizes);

$winflg=0;
  
if($winner['pid'] != "")
 {
	//echo "$type*";  
	echo "*";  
 }
else
 {
   if($win_type == "J5")
    { 
   	 $full_res=mysqli_query($conn, "SELECT * FROM tickets where ticket_id=$tid order by line;"); 		
	
	 $r=0;
	 while($status=mysqli_fetch_row($full_res))
	  {
	   for($i=2;$i<=6;$i++)
     	{
	      if(in_array($status[$i],$completed))
	        {
             $r++;	
	        }  
	    }
	  }
	if($r<5)
	{
	 echo "0";
	}
	else
	{
	    mysqli_query($conn, "update winners set pid='$pid' where gid=$gid and win_type='$type';"); 		
        echo $type;
		$winflg=1;
	}
 }

   if($win_type == 'L1' || $win_type == 'L2' || $win_type == 'L3')
    {

	if($win_type == 'L1') {$line=1;}
	else if($win_type == 'L2') {$line=2;}
	else if($win_type == 'L3') {$line=3;}

	$line_res=mysqli_query($conn, "SELECT * FROM tickets where ticket_id=$tid and line=$line;"); 		
	
	$status=mysqli_fetch_row($line_res);

	$r=1;
	for($i=2;$i<=6;$i++)
	{
	  if(!in_array($status[$i],$completed))
	  {
        $r=0;	
	  }  
	}
	
	if($r==0)
	{
	 echo "0";
	}
	else
	{
	    mysqli_query($conn, "update winners set pid='$pid' where gid=$gid and win_type='$type';"); 		
        echo $type;
		$winflg=1;
	}
	
 }
 
   if($win_type == 'FH')
    {

	$full_res=mysqli_query($conn, "SELECT * FROM tickets where ticket_id=$tid order by line;"); 		
	
	$r=1;
	while($status=mysqli_fetch_row($full_res))
	{
	   for($i=2;$i<=6;$i++)
     	{
	      if(!in_array($status[$i],$completed))
	        {
             $r=0;	
	        }  
	    }
	}
	if($r==0)
	{
	 echo "0";
	}
	else
	{
	 mysqli_query($conn, "update winners set pid='$pid' where gid=$gid and win_type='$type';"); 		
     echo $type;
	 mysqli_query($conn, "update games set status=0 where gid=$gid;"); 			  
	}
	
 }

   if($win_type == 'CN')
    {

	$corner_res=mysqli_query($conn, "SELECT * FROM tickets where ticket_id=$tid order by line;"); 		
	
	$line1=mysqli_fetch_array($corner_res);
	$line2=mysqli_fetch_array($corner_res);
	$line3=mysqli_fetch_array($corner_res);

	$r=0;
	if(in_array($line1['no1'],$completed) && in_array($line1['no5'],$completed) && in_array($line3['no1'],$completed) && in_array($line3['no5'],$completed))
	{
	  $r=1;	
	}
		
	if($r==0)
	{
	 echo "0";
	}
	else
	{
	 mysqli_query($conn, "update winners set pid='$pid' where gid=$gid and win_type='$type';"); 		
     echo $type;
  	 $winflg=1;
	}	
 }

    if($win_type == 'C6')
    {

	$corner_res=mysqli_query($conn, "SELECT * FROM tickets where ticket_id=$tid order by line;"); 		
	
	$line1=mysqli_fetch_array($corner_res);
	$line2=mysqli_fetch_array($corner_res);
	$line3=mysqli_fetch_array($corner_res);

	$r=0;
	if(in_array($line1['no1'],$completed) && in_array($line1['no5'],$completed) && in_array($line2['no1'],$completed) && in_array($line2['no5'],$completed) && in_array($line3['no1'],$completed) && in_array($line3['no5'],$completed))
	{
	  $r=1;	
	}
		
	if($r==0)
	{
	 echo "0";
	}
	else
	{
	 mysqli_query($conn, "update winners set pid='$pid' where gid=$gid and win_type='$type';"); 		
     echo $type;
  	 $winflg=1;
	}	
 }

    if($win_type == 'CS')
    {

	$center_res=mysqli_query($conn, "SELECT * FROM tickets where ticket_id=$tid order by line;"); 		
	
	$line1=mysqli_fetch_array($center_res);
	$line2=mysqli_fetch_array($center_res);

	$r=0;
	if(in_array($line2['no3'],$completed))
	{
	  $r=1;	
	}
		
	if($r==0)
	{
	 echo "0";
	}
	else
	{
	 mysqli_query($conn, "update winners set pid='$pid' where gid=$gid and win_type='$type';"); 		
     echo $type;
  	 $winflg=1;
	}	
 }

   	 if($winflg==1)
	 {
	  mysqli_query($conn, "update games set status=2 where gid=$gid;"); 			  
     }    
 }
?>