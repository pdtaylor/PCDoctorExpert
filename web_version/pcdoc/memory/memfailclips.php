<div align=center><img src='images/doctor_5.gif' alt='PC Doctor Recommendations' width='200' /></div>
<?php
$count=0;
$blnNoOption=false;
// if called by memfail
if($_GET['calledby']=="memfail"){
if($_POST['chkNewYes']=="yes"){
	$newpc="yes";
	$count++;
}
else{
	$newpc="no";
}

if($_POST['chkDuplicateYes']=="yes"){
		$duplicate="yes";
		$count++;
}
else{
	$duplicate="no";
}
if($_POST['chkOpSysYes']=="yes"){
		$os="yes";
		$count++;
}
else{
	$os="no";
}
if($_POST['chkDustyYes']=="yes"){
		$dusty="yes";
		$count++;
}
else{
	$dusty="no";
}
if($_POST['chkSIMMYes']=="yes"){
		$simm="yes";
		$count++;
}
else{
	$simm="no";
}
if($_POST['chkDIMMYes']=="yes"){
		$dimm="yes";
		$count++;
}
else{
	$dimm="no";;
}
if($_POST['chkMisMatchYes']=="yes"){
		$mismatch="yes";
		$count++;
}
else{
	$mismatch="no";
}
if($_POST['chkOldYes']=="yes"){
		$old="yes";
		$count++;
}
else{
	$old="no";
}
if($_POST['chkResYes']=="yes"){
		$restrict="yes";
		$count++;
}
else{
	$restrict="no";
}
if($_POST['chk430HXYes']=="yes"){
		$hx="yes";
		$count++;
}
else{
	$hx="no";
}
if($_POST['chkSdramYes']=="yes"){
		$sdram="yes";
		$count++;
}
else{
	$sdram="no";
}
if($_POST['chkEDOYes']=="yes"){
		$edo="yes";
		$count++;
}
else{
	$edo="no";
}
if($_POST['chkDiffMemYes']=="yes"){
		$diffmem="yes";
		$count++;
}
else{
	$diffmem="no";
}
if($_POST['chkSpecBIOSYes']=="yes"){
		$specbios="yes";
		$count++;
}
else{
	$specbios="no";
}
if($_POST['chkMBoardYes']=="yes"){
		$mboard="yes";
		$count++;
}
else{
	$mboard="no";
}
if($_POST['chkMetalYes']=="yes"){
		$metal="yes";
		$count++;
}
else{
	$metal="no";
}
if($newpc=="no"&& $duplicate=="no"&& $os=="no" && $dusty=="no" && $simm=="no" && $dimm=="no" && $mismatch=="no" && $old=="no" && $restrict=="no" && $hx=="no" && $sdram=="no" && $edo=="no" && $diffmem=="no" && $specbios=="no" && $mboard=="no" && $metal=="no"){
	$blnNoOption=true;
}

}//if called by memparity page
elseif($_GET['calledby']=="memparity"){
if($_POST['chkErrBootYes']=="yes"){
	$err_boot="yes";
	$count++;
}
else{
	$err_boot="no";
}

if($_POST['chkBiosBootYes']=="yes"){
		$bios_boot="yes";
		$count++;
}
else{
	$bios_boot="no";
}
if($_POST['chkIT5HYes']=="yes"){
		$it5h="yes";
		$count++;
}
else{
	$it5h="no";
}
if($_POST['chkECCYes']=="yes"){
		$ecc="yes";
		$count++;
}
else{
	$ecc="no";
}
if($_POST['chkAddSameYes']=="yes"){
		$addr_same="yes";
		$count++;
}
else{
	$addr_same="no";
}
if($_POST['chkAddHdYes']=="yes"){
		$addhd="yes";
		$count++;
}
else{
	$addhd="no";
}

if($_POST['chkParDisYes']=="yes"){
		$pardis="yes";
		$count++;
}
elseif($_POST['chkParDisNo']=="no"){
	$pardis="no";
	$count++;
	
}
else{
	$pardis="";
}

if($err_boot=="no"&& $bios_boot=="no"&& $it5h=="no" && $ecc=="no" && $addr_same=="no" && $addhd=="no" && $pardis==""){
	$blnNoOption=true;
}

}//if called by memnotrec
elseif($_GET['calledby']=="memnotrec"){
if($_POST['chkBootUpYes']=="yes"){
	$bootup="yes";
	$count++;
}
else{
	$bootup="no";
}

if($_POST['chkNotRecYes']=="yes"){
		$notrec="yes";
		$count++;
}
else{
	$notrec="no";
}
/*if($bootup=="no"&& $notrec=="no"){
	$blnNoOption=true;
}*/

}//if called by memout
elseif($_GET['calledby']=="memout"){
if($_POST['chkRunProgYes']=="yes"){
	$runprog="yes";
	$count++;
}
else{
	$runprog="no";
}

if($_POST['chkOutMemYes']=="yes"){
		$outmem="yes";
		$count++;
}
else{
	$outmem="no";
}
/*if($bootup=="no"&& $notrec=="no"){
	$blnNoOption=true;
}*/

}//if called by memperform
elseif($_GET['calledby']=="memperform"){
if($_POST['chkNoImpYes']=="yes"){
	$noimp="yes";
	$count++;
}
else{
	$noimp="no";
}

if($_POST['chkWorseYes']=="yes"){
		$worse="yes";
		$count++;
}
else{
	$worse="no";
}
if($_POST['chkCertAmtYes']=="yes"){
		$certamt="yes";
		$count++;
}
else{
	$certamt="no";
}
if($_POST['chkSlowYes']=="yes"){
		$slow="yes";
		$count++;
}
else{
	$slow="no";
}
if($_POST['chk430hxYes']=="yes"){
		$intel430hx="yes";
		$count++;
}
else{
	$intel430hx="no";
}

/*if($intel430hx=="no" && $noimp=="no" && $worse=="no" && $certamt=="no" && $slow=="no"){
	$blnNoOption=true;
}*/

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
	if($_GET['calledby']=="memfail"){
		clips_assert(array(new_pc=>$newpc,duplicate=>$duplicate,opsys=>$os,dusty=>$dusty,simm=>$simm,dimm=>$dimm,mismatch=>$mismatch,old_mboard=>$old,res_mboard=>$restrict,mboard_430hx=>$hx,sdram=>$sdram,edo=>$edo,diff_mem_type=>$diffmem,spec_bios=>$specbios,mboard_prob=>$mboard,metal=>$metal),"memfailproblems","MAIN");
	}
	elseif($_GET['calledby']=="memparity"){
		clips_assert(array(err_boot=>$err_boot,err_bios_boot=>$bios_boot,it5h_mboard=>$it5h,ecc_enabled=>$ecc,err_addr_same=>$addr_same,addnew_hardware=>$addhd,chkparity_disabled=>$pardis),"memparityproblems","MAIN");
	}
	elseif($_GET['calledby']=="memnotrec"){
		clips_assert(array(bootup=>$bootup,not_all_rec=>$notrec),"memnotrecproblems","MAIN");
	}
	elseif($_GET['calledby']=="memout"){
		clips_assert(array(run_prog=>$runprog,outmem_win=>$outmem),"memoutproblems","MAIN");
	}
	elseif($_GET['calledby']=="memperform"){
		clips_assert(array(add_noimprov=>$noimp,add_worse=>$worse,over256=>$certamt,use_slow=>$slow,intel430hx=>$intel430hx),"memperformanceproblems","MAIN");
	}	
		
	clips_run();
	//$arr=clips_get_fact_list("procfailproblems");
	//print_r($arr);
	if($_GET['calledby']=="memfail"){
		$arr1=clips_get_fact_list("mem01");
		$arr2=clips_get_fact_list("newpc");
		//$arr2=clips_get_fact_list("secondarycache");
		//$arr3=clips_get_fact_list("overheating");
		//print_r($arr1);
	}
	elseif($_GET['calledby']=="memparity"){
		$arr1=clips_get_fact_list("mem02");
		//$arr2=clips_get_fact_list("newpc");
		//$arr3=clips_get_fact_list("overheating");
		//print_r($arr1);
	}
	elseif($_GET['calledby']=="memnotrec"){
		$arr1=clips_get_fact_list("mem03");
		//$arr3=clips_get_fact_list("overheating");
	}
	elseif($_GET['calledby']=="memout"){
		$arr1=clips_get_fact_list("mem04");
		//$arr3=clips_get_fact_list("overheating");
	}
	elseif($_GET['calledby']=="memperform"){
		$arr1=clips_get_fact_list("mem05");
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
								/*if ($arr1[$i][1]=="seccache"){
									echo "<li>Check <a href='#'>Secondary Cache</a> problems.</li>";							
								}*/
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
					echo "<b>If your problems are related to overheating:</b>";
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

if($_GET['calledby']=="memfail"){
	echo "<b>Other important tips for troubleshooting memory failures include:</b>";
	echo "<hr/>";
	echo "<ul>";
	echo "<li>One good first step to try when encountering apparent memory failures is to try running a comprehensive memory test. <br />";
	echo "Using a diagnostic software tool, run a continuous loop memory test for a long period of time and see if it finds any problems with the memory. <br />If it does, this may give you a suggestion of where the problem in memory is.  </li>";
	echo "<li>Make sure to carefully check the memory modules, which sometimes appear to be inserted correctly when they are not. <br/>";
	echo "Make sure they are all sticking up at the correct height from the motherboard.<br />Ensure that the modules have been pushed all the way into their sockets and that the spring clips have snapped into position </li>";
	echo "<li>Check problems related to <a href='#'>overheating</a>.</li>";
	echo "<li>Make sure that you have used the correct sockets. <br />";
	echo "Motherboards have multiple sockets and putting modules in the incorrect ones will often cause problems. <br/>";
	echo "For example, most Pentium motherboards have four SIMM sockets, which make up two banks. <br />If you put the SIMMs in the middle two sockets then you have accidentally put memory into half of the first bank and half of the second bank, and the PC will not boot. <br />Putting the memory into the full second bank instead of the first won't work on many motherboards either (but it will on some). </li>";
	echo "<li>Ensure that the size of memory modules you have selected is supported. <br />";
	echo "Some motherboards will not support certain sizes of modules; in particular, 2 MB, 8 MB and 32 MB SIMMs are generally composite and will not work in some machines. <br />Consult your motherboard manual.  </li>";
	echo "<li>Check the technology of the memory you are using.  <br />";
	echo "Whether a motherboard supports memory types such as EDO or SDRAM for example, depends on the chipset used on the motherboard, as well as how the motherboard itself was implemented. <br />Using EDO memory in many older machines will cause them to lock up.  </li>";
	echo "<li>Some PCs use proprietary, special modules; for example IBM's PS/2 systems.  <br />";
	echo "Using industry standard memory in a machine that requires special modules, or vice-versa, will cause problems.  </li>";
	echo "<li>There could be a problem with the relative speed of the memory modules compared to the timing settings (memory access timing or wait states) that were entered in the BIOS setup program.  <br />";
	echo "Double-check the speed of the modules you are using to make sure it is fast enough. <br />Some PCs will work with slower memory modules, but you may need to increase wait states or slow down the memory timing.</li>";
	echo "<li>There could be something wrong the memory modules themselves.   <br />";
	echo "Note that bad memory will often pass the BIOS memory test at boot time, and will also often pass the tests performed by those small module testers that many vendors use.   <br />";
	echo "Those tests are very superficial and will not catch all memory problems. If you can, try the modules in another PC that uses the same kind of memory. <br />If you have performed all the checks listed in the points above, and the memory works in another PC, the memory itself may very well be bad. <br/> Try to replace the memory and see if the problem goes away.    </li>";
	echo "<li>There could be a <a href='#'>power supply problem</a>, though this is unusual.<br />";
	echo "A bad power supply can cause strange memory errors that crop up because the memory is not getting enough power. </li>";
	echo "<li>Make sure that your BIOS settings have not been changed. <br/>Double-check the ones that are related to the system memory and make sure that they are correct.</li>";
	echo "<li>Something inside the PC may have come loose. Check for loose connections within the PC. </li>";
	echo "</ul>";
}
elseif($_GET['calledby']=="memparity"){
	echo "<b>Other important tips for troubleshooting memory parity errors include:</b>";
	echo "<hr/>";
	echo "<ul>";
	//echo "<li> Also, scan for viruses. These are classic virus behavior.<br/>";
	echo "<li> Make sure that the modules you are using are appropriate for your board. <br />";
	echo "In particular, there are some motherboards that will not support the newer ECC-only modules. </li>";
	echo "<li>You may be surprised to hear me say this, but if your system has been working well for a long time, you haven't changed anything recently, <br />and you only encountered a single parity error, I often recommend just ignoring it. <br />";
	echo "Well, don't <i>ignore</i> it, but don't take any action other than seeing if it happens again, and if so, under what circumstances. <br />";
	echo "The reason is that fluke corruptions of memory occur, sometimes due to stray radiation or odd power glitches. <br />You may have a single error and never another one. If the error recurs, of course, you have a problem that needs to be addressed. </li>";
	echo "<li>There are many different possible causes of intermittent system lockups and glitches. <br />";
	echo "Many of the problems that manifest themselves as lockups, crashes or spontaneous reboots on a non-parity system will show up on a parity system as parity errors.</li>";
	echo "</ul>";
}
elseif($_GET['calledby']=="memnotrec"){
	echo "<b>There are no other important tips related to \"Memory Not Recognized\" problems.</b>";
}
elseif($_GET['calledby']=="memout"){
	echo "<b>There are no other important tips related to \"Out of Memory\" problems.</b>";
}
elseif($_GET['calledby']=="memperform"){
	echo "<b>There are no other important tips related to Memory Performance problems.</b>";
}

?>

<div align='right'><a href=<?php echo "'default.php?pid=".$_GET['calledby']."'"?>>Back To Questions</a></div>