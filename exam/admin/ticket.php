             <?php include "access_check.php"; ?>
			 <?php
			  include "connect.php";
			 
			 if($tid == 0)
			 {
				$game_res=mysqli_query($conn, "SELECT gid, DATE_FORMAT(schedule, '%W %M %e %Y') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost FROM games where gid=$gid;"); 		

          		$row=mysqli_fetch_array($game_res);

				echo "<h3 align='center'>YOU HAVE NOT JOINED THIS GAME!</h3>";
				echo "<div align='center'><a href='game.php?gid=$gid'><b>Game #$gid</b></a>";
				echo "- $row[1] - $row[2]</div>";
		        $cost = $row[4]>0? $row[4]." points" : "<span style='color:yellow;'>FREE GAME</span>";
        		echo "<div id='gerr$gid' align='center'><button type='button' class='mb-1 mt-1 mr-1 btn btn-sd btn-primary' onclick='buy_ticket($pid,$gid);'>JOIN GAME ($cost)</button></div>";
			 }
             else
             {		 
  				      include "completed.php";	

					  $pid=$_SESSION['pid'];					  
					  					  
                      $ticket=mysqli_query($conn, "SELECT * FROM tickets where ticket_id=$tid order by line;"); 		
                      
					  include "functions.php";
					  
                      while($line=mysqli_fetch_row($ticket))
                       {
	                      echo "<tr>";
						  $cnt=2;
						  $tkt_no=$line[$cnt];

        						  if($tkt_no < 10) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt]; } else { echo "<td></td>";} 
								  if($tkt_no >=10 && $tkt_no < 20) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
								  if($tkt_no >=20 && $tkt_no < 30) { format_no($tkt_no,$completed);  $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
								  if($tkt_no >=30 && $tkt_no < 40) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
								  if($tkt_no >=40 && $tkt_no < 50) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
								  if($tkt_no >=50 && $tkt_no < 60) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
								  if($tkt_no >=60 && $tkt_no < 70) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
								  if($tkt_no >=70 && $tkt_no < 80) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
								  if($tkt_no >=80 && $tkt_no <= 90) { format_no($tkt_no,$completed); $cnt++; $tkt_no=$line[$cnt];} else { echo "<td></td>";} 
						  
						  echo	"</tr>";			
  					   }
		   }	   
			?>
