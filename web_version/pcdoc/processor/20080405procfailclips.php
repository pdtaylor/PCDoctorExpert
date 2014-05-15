<?php
$count=0;
if($_POST['chkUpgradeYes']=="yes"){
	$upgrade="yes";
	$count++;
}
else{
	$upgrade="no";
}

if($_POST['chkExtraYes']=="yes"){
		$extra="yes";
		$count++;
}
else{
	$extra="no";
}
if($_POST['chkOheatYes']=="yes"){
		$oheat="yes";
		$count++;
}
else{
	$oheat="no";
}
if($_POST['chkInsertYes']=="yes"){
		$insert="yes";
		$count++;
}
else{
	$insert="no";
}
if($_POST['chkBiosYes']=="yes"){
		$bios="yes";
		$count++;
}
else{
	$bios="no";
}
if($_POST['chkVoltYes']=="yes"){
		$volt="yes";
		$count++;
}
else{
	$volt="no";;
}
if($_POST['chkMboardYes']=="yes"){
		$mboard="yes";
		$count++;
}
else{
	$mboard="no";
}
if($_POST['chkSecCacheYes']=="yes"){
		$seccache="yes";
		$count++;
}
else{
	$seccache="no";
}

//echo "upgrade=$upgrade, extra=$extra, oheat=$oheat, insert=$insert, bios=$bios, volt=$volt, mboard=$mboard, secache=$seccache <BR><BR>" ;
if($upgrade=="no"&& $extra=="no"&& $oheat=="no" && $insert=="no" && $bios=="no" && $volt=="no" && $mboard=="no" && $seccache=="no"){
	//echo "You did not select an option? However you can view some other important tips.<br/><br />";
	WriteMessage ("You did not select an option? However you can view some other important tips.<br/><br />",1);
}
else{
//Used to load the path for the CLIPS file from a text file.
$filename="eng/pathtoclipsfile.txt";
$file=fopen($filename,"r") or die("Cannot open file!");
while(!feof($file)){
	$fpath=fgets($file);
	//echo "Clips File:".$fpath;
}

//Accesses the CLIPS file.
clips_clear();

if(clips_load($fpath)==true){
	clips_reset();
	
	//$arr2=clips_get_deftemplate_list();
	//echo $arr2[7];
	clips_assert(array(recently_assembled=>$upgrade,extra_proc=>$extra,overheating=>$oheat,inserted_improperly=>$insert,bios_incorrect=>$bios,volt_incorrect=>$volt,mboard_notsupport=>$mboard,sec_cache=>$seccache),"procfailproblems","MAIN");
	clips_run();
	//$arr=clips_get_fact_list("procfailproblems");
	//print_r($arr);
	$arr1=clips_get_fact_list("proc01");
	//$arr2=clips_get_fact_list("secondarycache");
	$arr3=clips_get_fact_list("overheating");
	//echo clips_deftemplate_module("procfailproblems");	
	//print_r($arr1);
		
	//print_r($arr2);
	//print_r($arr3);
	//echo $arr3[0][0].",".$arr3[0][1];
	
	//Load the recommendations.
	include ( "include/db_conn.inc");
	
	$Tablename = "tblproblems";
	$Tablename2 = "tblrecommend";
	
	//if(isset($_POST['cboComponent'])){
		
		//echo "paul";
		
		//$comp=$_POST['cboComponent'];	
		$sql = "SELECT $Tablename.probId,$Tablename.qId,$Tablename.probDesc, $Tablename2.recDesc,$Tablename2.recHead FROM $Tablename,$Tablename2 WHERE $Tablename.probId=$Tablename2.probId";
		//echo $sql;
		$result= mysql_query($sql);
		
		while($row = mysql_fetch_array($result, MYSQL_NUM))
		{
				
			for($i=0;$i<$count;$i++){
				if($arr1[$i][0]==$row[1]){
					
					if ($arr1[$i][1]==$row[2]){
						//echo "<hr />";
						//echo "<br />";
						if($arr1[$i][2]=="yes"){
							//echo "<br />";
							if($row[4]=="Y"){
								echo "<b>".$row[3]."</b>";
								echo "<hr />";
								echo "<ul>";;
							}
							else{
								
								echo "<li>".$row[3]."</li>";													
								//echo " - ".;
								//echo "<br />";
								if ($arr1[$i][1]=="seccache"){
									echo "<li>Check <a href='#'>Secondary Cache</a> problems.</li>";							
								}
							}
							//echo $row[4];
							//echo "<br />";
													
							echo "</ul>";
							
						}
						
					}
					
				}
								
			}//end for
			
		}//end while

		if($arr3[0][0]=="overheating" && $arr3[0][1]=="yes"){
					echo "<b>If you believe the Processor is Overheating:</b>";
					echo "<hr/>";
					echo "<ul>";
					echo "<li>Check problems related to <a href='#'>overheating</a>.</li>";
					echo "</ul>";
					
		}
		
	//}
	
}
else{
	WriteMessage ("Clips file could not be loaded!",2);
}
}
echo "<b>Other important tips for troubleshooting the processor include:</b>";
echo "<hr/>";
echo "<ul>";
echo "<li>Try toning down the BIOS settings to conservative or default values and see if this solves the problem.<br/>";
echo "Incorrect or overly aggressive BIOS settings can cause processors to behave strangely.</li>";
echo "<li>Try to reduce the speed of the processor to see if it fixes the problem.<br />";
echo "If the problem goes away, then it's quite likely your problem was due to <a href='#'>overheating</a>.</li>";
echo "<li>If the processor can only run at slower speeds, it's possible that you may have unfortunately purchased a re-marked CPU.</li>";
echo "</ul>";

?>