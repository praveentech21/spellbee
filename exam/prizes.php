            <?php include "access_check.php"; ?>
			<?php
		    	
				include "connect.php";

                if(isset($_GET['gid'])) { $gid=$_GET['gid']; }			  

				$winner_res=mysqli_query($conn, "SELECT * FROM winners where gid=$gid order by win_type;"); 		

  			    while($win=mysqli_fetch_array($winner_res))
				{   
					$win_type=$win['win_type'];
					$points=$win['points'];
					$lbl=get_win_label($win_type);
       			    if($win['pid'] != "") 
  		 			  {
						echo "<button type='button' class='mb-1 mt-1 mr-1 btn btn-primary' id='$win_type' DISABLED><i class='fas fa-gift'></i> <strike>".$lbl."</strike></button>";
					  }
					else 
					 {
						echo "<button type='button' class='mb-1 mt-1 mr-1 btn btn-primary' id='$win_type' onclick=\"claim_prize($tid, '$pid', $gid, '$win_type');\"><i class='fas fa-gift'></i> ".$lbl."</button>";
					 }					  						
				}
				
				function get_win_label($win)
				{
				  if(substr($win, 0, 2) == "J5") { return "JALDI 5";} 	
				  else if(substr($win, 0, 2) == "L1") { return "LINE 1";} 	
				  else if(substr($win, 0, 2) == "L2") { return "LINE 2";} 	
				  else if(substr($win, 0, 2) == "L3") { return "LINE 3";} 	
				  else if(substr($win, 0, 2) == "CN") { return "4 CORNERS";} 	
				  else if(substr($win, 0, 2) == "C6") { return "6 CORNERS";} 	
				  else if(substr($win, 0, 2) == "CS") { return "CENTRE STAR";} 	
				  else if(substr($win, 0, 2) == "FH") { return "FULL HOUSIE";}
				}
?>