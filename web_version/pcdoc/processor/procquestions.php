<?php	
	include ( "include/db_conn.inc");
	$Tablename = "tblquestions";
	
	if(isset($_POST['cboComponent'])){
		
		//echo "paul";
		
		$comp=$_POST['cboComponent'];	
		$sql = "SELECT * FROM ".$Tablename." WHERE qtype='".$comp."'";
		//echo $sql;
		$result= mysql_query($sql);
		
		while($row = mysql_fetch_array($result, MYSQL_NUM))
		{
				//echo "<p><a href='procfail'>".$row[2]."</a></p>";
				//echo "<br />";			
			//echo "<option value=".$row2[0].">".$row2[0]."</option>";
			if($row[0]=="proc01"){
				echo "<p><a href='default.php?pid=procfail'>".$row[2]."</a></p>";
				echo "<br />";
			}
			elseif($row[0]=="proc02"){
				//echo "<p><a href='#'>".$row[2]."</a></p>";
				//echo "<br />";
			}
			elseif($row[0]=="proc03"){
				echo "<p><a href='default.php?pid=proccrash'>".$row[2]."</a></p>";
				echo "<br />";
			}
			elseif($row[0]=="proc04"){
				//echo "<p><a href='default.php?pid=procfailclips&calledby=".$row[0]."'>".$row[2]."</a></p>";
				//echo "<br />";
			}
			elseif($row[0]=="proc05"){
				echo "<p><a href='default.php?pid=procslow'>".$row[2]."</a></p>";
				echo "<br />";				
			}
			
			//$strCallScript
		}
		
	}	
?>