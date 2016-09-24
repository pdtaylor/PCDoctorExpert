<div align=center><img src='images/doctor_5.gif' alt='PC Doctor Recommendations' width='200' /></div>
<?php
$count=0;
$blnNoOption=false;
// if called by procfail
if($_GET['calledby']=="procfail"){
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

if($upgrade=="no"&& $extra=="no" && $insert=="no" && $bios=="no" && $volt=="no" && $mboard=="no" && $seccache=="no"){
	$blnNoOption=true;
}

}// if called by proccrash
elseif($_GET['calledby']=="proccrash"){
	
if($_POST['chkErrMesYes']=="yes"){
	$errmess="yes";
	$count++;
}
else{
	$errmess="no";
}

if($_POST['chkProgramYes']=="yes"){
		$program="yes";
		$count++;
}
else{
	$program="no";
}
if($_POST['chkPeriphYes']=="yes"){
		$periph="yes";
		$count++;
}
else{
	$periph="no";
}
if($_POST['chkSysWarmYes']=="yes"){
		$syswarm="yes";
		$count++;
}
else{
	$syswarm="no";
}
if($_POST['chkNewpcYes']=="yes"){
		$newpc="yes";
		$count++;
}
else{
	$newpc="no";
}
if($_POST['chkVcardYes']=="yes"){
		$vcard="yes";
		$count++;
}
else{
	$vcard="no";;
}
if($_POST['chkLeanYes']=="yes"){
		$lean="yes";
		$count++;
}
else{
	$lean="no";
}
if($_POST['chkBiosYes']=="yes"){
		$nbios="yes";
		$count++;
}
else{
	$nbios="no";
}

if($errmess=="no" && $program=="no"&& $periph=="no" && $syswarm=="no" && $newpc=="no" && $vcard=="no" && $lean=="no" && $nbios=="no"){
	$blnNoOption=true;
}

}//if called by procslow
elseif($_GET['calledby']=="procslow"){
	
if($_POST['chkMemYes']=="yes"){
	$mem="yes";
	$count++;
}
else{
	$mem="no";
}

if($_POST['chkLflickYes']=="yes"){
		$lflick="yes";
		$count++;
}
else{
		$lflick="no";
}

if($mem=="no" && $lflick=="no"){
	$blnNoOption=true;
}

}//if called by procspeed 
elseif($_GET['calledby']=="procspeed"){
	
if($_POST['chkLedYes']=="yes"){
	$led="yes";
	$count++;
}
else{
	$led="no";
}

if($_POST['chkRecBuyYes']=="yes"){
		$recbuy="yes";
		$count++;
}
else{
		$recbuy="no";
}
if($_POST['chkSlightYes']=="yes"){
		$offslight="yes";
		$count++;
}
else{
		$offslight="no";
}
if($_POST['chkNewChipYes']=="yes"){
		$newchip="yes";
		$count++;
}
else{
		$newchip="no";
}

if($led=="no" && $recbuy=="no" && $offslight=="no" && $newchip=="no"){
	$blnNoOption=true;
}

}//if called by procheat
elseif($_GET['calledby']=="procheat"){
	
if($_POST['chkCompNo']=="no"){
	$compound="no";
	$count++;
}
else{
	$compound="yes";
}

if($_POST['chkFanYes']=="yes"){
		$fanworn="yes";
		$count++;
}
else{
		$fanworn="no";
}

if($compound=="yes" && $fanworn=="no"){
	$blnNoOption=true;
}

}

//echo "upgrade=$upgrade, extra=$extra, oheat=$oheat, insert=$insert, bios=$bios, volt=$volt, mboard=$mboard, secache=$seccache <BR><BR>" ;
if($blnNoOption){
	//echo "You did not select an option? However you can view some other important tips.<br/><br />";
	WriteMessage ("View some other important tips.<br/><br />",1);
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
	if($_GET['calledby']=="procfail"){
		clips_assert(array(recently_assembled=>$upgrade,extra_proc=>$extra,inserted_improperly=>$insert,bios_incorrect=>$bios,volt_incorrect=>$volt,mboard_notsupport=>$mboard,sec_cache=>$seccache),"procfailproblems","MAIN");
	}
	elseif($_GET['calledby']=="proccrash"){
		clips_assert(array(err_messages=>$errmess,app_fail=>$program,peripheral_problem=>$periph,new_pc=>$newpc,vesa_running=>$vcard,warmup_problems=>$syswarm,leanonbox=>$lean,bios_changed=>$nbios),"sysinstabilityproblems","MAIN");
	}
	elseif($_GET['calledby']=="procslow"){
		clips_assert(array(add_mem=>$mem,hd_light_blink=>$lflick),"sysslowdownproblems","MAIN");
	}
	elseif($_GET['calledby']=="procspeed"){
		clips_assert(array(led=>$led,recent_buy=>$recbuy,off_slightly=>$offslight,new_chip=>$newchip),"procspeedproblems","MAIN");
	}
	elseif($_GET['calledby']=="procheat"){
		clips_assert(array(hs_comp=>$compound,fan_worn=>$fanworn),"procheatproblems","MAIN");
	}
		
	clips_run();
	//$arr=clips_get_fact_list("procfailproblems");
	//print_r($arr);
	if($_GET['calledby']=="procfail"){
		$arr1=clips_get_fact_list("proc01");
		//$arr2=clips_get_fact_list("secondarycache");
		//$arr3=clips_get_fact_list("overheating");
		//print_r($arr1);
	}
	elseif($_GET['calledby']=="proccrash"){
		$arr1=clips_get_fact_list("proc02");
		$arr2=clips_get_fact_list("newpc");
		//$arr3=clips_get_fact_list("overheating");
	}
	elseif($_GET['calledby']=="procslow"){
		$arr1=clips_get_fact_list("proc03");
		//$arr3=clips_get_fact_list("overheating");
	}
	elseif($_GET['calledby']=="procspeed"){
		$arr1=clips_get_fact_list("proc04");
		//$arr3=clips_get_fact_list("overheating");
	}
	elseif($_GET['calledby']=="procheat"){
		$arr1=clips_get_fact_list("proc05");
		//$arr3=clips_get_fact_list("overheating");
	}
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
		$sql = "SELECT $Tablename.probId,$Tablename.qId,$Tablename.probDesc, $Tablename2.recDesc,$Tablename2.recHead FROM $Tablename,$Tablename2 WHERE $Tablename.probId=$Tablename2.probId ORDER BY $Tablename2.probId";
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
		elseif($arr2[0][0]=="newpc" && $arr2[0][1]="yes"){
			echo "<b>If this is a newly installed pc:</b>";
					echo "<hr/>";
					echo "<ul>";
					echo "<li>Check problems related to <a href='#'>new pcs</a>.</li>";
					echo "</ul>";
		}
		
	//}
	
}
else{
	WriteMessage ("Clips file could not be loaded!",2);
}
}

if($_GET['calledby']=="procfail"){
	echo "<b>Other important tips for troubleshooting processor failures include:</b>";
	echo "<hr/>";
	echo "<ul>";
	echo "<li>Check to see if the <a href='default.php?pid=procheat'>processor is overheating</a>. After the PC has been running for a while, open it up, and turn it off. <br />";
	echo "Then ground yourself and touch the processor carefully, or part of the heat sink near the processor. <br />If you cannot leave your finger on the processor for more than a few seconds due to the heat, the chances are good that the <a href='default.php?pid=procheat'>processor is overheating</a>.</li>";
	echo "<li>Try toning down the BIOS settings to conservative or default values and see if this solves the problem.<br/>";
	echo "Incorrect or overly aggressive BIOS settings can cause processors to behave strangely.</li>";
	echo "<li>Try to reduce the speed of the processor to see if it fixes the problem.<br />";
	echo "If the problem goes away, then it's quite likely your problem was due to <a href='default.php?pid=procheat'>processor overheating</a>.</li>";
	echo "<li>If the processor can only run at slower speeds, it's possible that you may have unfortunately purchased a re-marked CPU.</li>";
	echo "</ul>";
}
elseif($_GET['calledby']=="proccrash"){
	echo "<b>Other important tips for troubleshooting processor instability include:</b>";
	echo "<hr/>";
	echo "<ul>";
	//echo "<li> Also, scan for viruses. These are classic virus behavior.<br/>";
	echo "<li> Also, scan for viruses. These are classic virus behavior.</li>";
	//echo "Incorrect or overly aggressive BIOS settings can cause processors to behave strangely.</li>";
	echo "<li>If you have a network card set up, check your network settings.<br />";
	echo "Sometimes the built in Windows networking will use up system resources looking for a network.<br />";
	echo "If you are using TCP/IP or some other network protocol, try disabling it and see if it solves your problem. If so, you may need to contact the network card manufactuerer.</li>";
	echo "<li>Make sure you also disable all power management options in the BIOS.</li>";
	echo "<li>Scan the hard disk for file system corruption and bad sectors.</li>";
	echo "<li>A badly written driver program can also cause random glitches and lockups. Try running the system with a default driver or one given to you by the manufactuerer.</li>";
	echo "<li>Unreliable power can also cause all sorts of problems. If possible, try running your system off a UPS or swapping the power supply with a new one.<br />";
	echo "If this works you have a <a href='#'>power problem</a>.</li>";
	echo "<li> Try using less aggressive BIOS settings for things like memory timing and hard disk timing.<br/>";
	echo "Set memory access settings to the lowest possible, disable any performance enhancing BIOS settings.</li>";
	echo "<li>Check for resource conflicts.</li>";
	echo "<li>Check for possible <a href='#'>memory problems</a>.</li>";
	echo "</ul>";
}
elseif($_GET['calledby']=="procslow"){
	echo "<b>Other important tips for troubleshooting processor slowdowns include:</b>";
	echo "<hr/>";
	echo "<ul>";
	echo "<li> Scan the system for viruses. This may be a contributary factor.</li>";
	//echo "<li>If you have a network card set up, check your network settings.<br />";
	echo "<li>Double check BIOS settings to ensure they are in proper order.</li>";
	echo "<li>On an older machine with a functioning turbo switch, make sure it is pressed and the light is on.</li>";
	echo "<li>Try defragmenting the hard disk.</li>";
	//echo "If this works you have a <a href='#'>power problem</a>.</li>";
	echo "<li>Check the amount of free space on the hard disk, as this may be low.</li>";
	echo "<li>Update your Windows drivers.</li>";
	echo "<li>Consider removing unnecessary programs from the system.</li>";
	echo "<li>Check to make sure that the <a href='default.php?pid=procheat'>processor is not overheating</a>, and make sure the CPU fan is still running. <br />";
	echo "Some CPUs, especially OverDrive processors, will intentionally slow the CPU down if they detect a failed fan, in order to prevent heat buildup. </li>";
	echo "</ul>";
}
elseif($_GET['calledby']=="procspeed"){
	echo "<b>Important tips for troubleshooting incorrect processor speeds include:</b>";
	echo "<hr/>";
	echo "<ul>";
	echo "<li>Double check that the processor is set up properly; check the motherboard jumper settings.<br />If it is misconfigured the BIOS may be reflecting an incorrect speed.</li>";
	echo "</ul>";
}
elseif($_GET['calledby']=="procheat"){
	echo "<b>Important tips for troubleshooting processor overheating include:</b>";
	echo "<hr/>";
	echo "<ul>";
	echo "<li>Test the temperature of the processor. Leave the machine running for an hour. Turn it off and unplug it, then open it up. <br />Touch the processor, or its heat sink near where it attaches to the processor.";
	echo " If it feels very hot, especially if it is hot enough that you cannot leave your finger on it for more than a couple of seconds, <br />the processor is probably running hotter than it should be. </li>";
	echo "<li>Consult your motherboard manual and double-check all the jumper settings for the processor. Make sure it is set to the correct type and speed. <br/ >";
	echo "Make sure the processor is supported by the motherboard. Make sure the processor is inserted correctly into the board. </li>";
	echo "<li>Verify the voltage requirements for the chip, and make sure they are set properly. Providing too much voltage to the CPU can overheat it. </li>";
	echo "<li>Make sure you are using an appropriate cooling device for your processor. If you are using a Cyrix 6x86, make sure you use a heat sink and cooling fan designed for it. </li>";
	echo "<li>Check your CPU fan to make sure it is still turning and ensure that it will not be obstructed by cables or hardware when the cover is put on the case. </li>";
	echo "<li>There are many other parts of the system that can overheat. These can affect other components by increasing heat in the overall system. <br />";
	echo "Check <a href='#'>general overheating problems</a> for a look at some of these.</li>";
	echo "<li>Increase your processor cooling level. Some typical ways to do this include using a cooling fan if you weren't before, using a stronger fan, or using a larger heat sink. <br />";
	echo "You can in some cases also install additional fans in the case that blow on the processor, but this is generally overkill.</li>";
	echo "</ul>";
}

?>

<div align='right'><a href=<?php echo "'default.php?pid=".$_GET['calledby']."'"?>>Back To Questions</a></div>