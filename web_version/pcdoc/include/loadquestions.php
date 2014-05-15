<?php	
	//echo $_SERVER['REQUEST_METHOD'];
	$_SESSION['RecContent']="";
	//$_SESSION['TEST']="paul";
	include ( "include/db_conn.inc");
	$Tablename = "tblquestions";
	
	if(isset($_POST['cboComponent'])){
		$comp=$_POST['cboComponent'];
	}
	elseif(isset($_GET['comp'])){
		$comp=$_GET['comp'];
	}
	
	//echo "Com:".$_POST['cboComponent'];
	
	if(isset($comp)){
		
		//echo $comp;
		
		echo "<table>";
		echo "<th colspan=2 align=left>For problems related to the <span class=heading >".ucfirst($comp).":</span><br /></th>";
		//echo $comp;
		
		//$comp=$_POST['cboComponent'];	
		$sql = "SELECT * FROM ".$Tablename." WHERE qtype='".$comp."'";
		//echo $sql;
		$result= mysql_query($sql);
		echo "<tr><td>";
		while($row = mysql_fetch_array($result, MYSQL_NUM))
		{
				
				switch($comp){
					
					case "processor":
						if($row[0]=="proc01"){
							echo "<p><a href='default.php?pid=procfail'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="proc05"){
							echo "<p><a href='default.php?pid=procheat'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="proc02"){
							echo "<p><a href='default.php?pid=proccrash'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="proc04"){
							echo "<p><a href='default.php?pid=procspeed'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="proc03"){
							echo "<p><a href='default.php?pid=procslow'>".$row[2]."</a></p>";
							echo "<br />";				
						}
						break;
					case "memory":	
						if($row[0]=="mem01"){
							echo "<br /><p><a href='default.php?pid=memfail'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="mem02"){
							echo "<p><a href='default.php?pid=memparity'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="mem03"){
							echo "<p><a href='default.php?pid=memnotrec'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="mem04"){
							echo "<p><a href='default.php?pid=memout'>".$row[2]."</a></p>";
							echo "<br />";
						}
						elseif($row[0]=="mem05"){
							echo "<p><a href='default.php?pid=memperform'>".$row[2]."</a></p>";
							echo "<br />";				
						}
						break;
					case "power supply":	
						echo "<p><a href='default.php?pid=psintdiagnosis'>Go To The Interactive Power Supply Diagnosis Page</a></p>";
						echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
						break;	
					default:
							echo "<p>This problem area is not listed.</p>";
							echo "<br />";
							break;				
				}//end switch
				//echo "<p><a href='procfail'>".$row[2]."</a></p>";
				//echo "<br />";			
			//echo "<option value=".$row2[0].">".$row2[0]."</option>";
			
			
			//$strCallScript
		}//end while
		echo "</td><td>";
		echo "<img src='images/doctor_13.gif' alt='PC Doctor' width='200' /></td></tr></table>";
		
	}//end if
?>