<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	$count=0;
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
		
		if($_POST['chkPwrOnYes']=="yes"){
			clips_assert(array(val=>"poweron",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkPwrOnNo']=="no"){
			clips_assert(array(val=>"poweron",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkLiveScrYes']=="yes"){
			clips_assert(array(val=>"livescreen",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkLiveScrNo']=="no"){
			clips_assert(array(val=>"livescreen",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBootTryYes']=="yes"){
			clips_assert(array(val=>"boottry",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBootTryNo']=="no"){
			clips_assert(array(val=>"boottry",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBeepYes']=="yes"){
			clips_assert(array(val=>"beeps",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBeepNo']=="no"){
			clips_assert(array(val=>"beeps",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkNewHdwYes']=="yes"){
			clips_assert(array(val=>"newhdw",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkNewHdwNo']=="no"){
			clips_assert(array(val=>"newhdw",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkDrvSpinYes']=="yes"){
			clips_assert(array(val=>"drvspin",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkDrvSpinNo']=="no"){
			clips_assert(array(val=>"drvspin",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkSpinLeadYes']=="yes"){
			clips_assert(array(val=>"spinlead",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkSpinLeadNo']=="no"){
			clips_assert(array(val=>"spinlead",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBadAdapYes']=="yes"){
			clips_assert(array(val=>"badadapter",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBadAdapNo']=="no"){
			clips_assert(array(val=>"badadapter",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBenchYes']=="yes"){
			clips_assert(array(val=>"bench",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkBenchNo']=="no"){
			clips_assert(array(val=>"bench",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkPwrGoodYes']=="yes"){
			clips_assert(array(val=>"pwrgood",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkPwrGoodNo']=="no"){
			clips_assert(array(val=>"pwrgood",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkVoltSetYes']=="yes"){
			clips_assert(array(val=>"voltset",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkVoltSetNo']=="no"){
			clips_assert(array(val=>"voltset",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkMboardLeadYes']=="yes"){
			clips_assert(array(val=>"mboardlead",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkMboardLeadNo']=="no"){
			clips_assert(array(val=>"mboardlead",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkSwitchFailYes']=="yes"){
			clips_assert(array(val=>"switchfail",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkSwitchFailNo']=="no"){
			clips_assert(array(val=>"switchfail",val2=>"no"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkConnCorrectYes']=="yes"){
			clips_assert(array(val=>"conncorrect",val2=>"yes"),"","MAIN");
			$count++;
		}
		elseif($_POST['chkConnCorrectNo']=="no"){
			clips_assert(array(val=>"conncorrect",val2=>"no"),"","MAIN");
			$count++;
		}
		
		clips_run();
		
		if($_POST['chkPwrOnYes']=="yes"){
			$arr1=clips_get_fact_list("psup0101");
		}
		elseif($_POST['chkPwrOnNo']=="no"){
			$arr1=clips_get_fact_list("psup0201");
		}
		elseif($_POST['chkLiveScrYes']=="yes"){
			$arr1=clips_get_fact_list("psup0102");
		}
		elseif($_POST['chkLiveScrNo']=="no"){
			$arr1=clips_get_fact_list("psup0206");
		}
		elseif($_POST['chkBootTryYes']=="yes"){
			$arr1=clips_get_fact_list("psup0207");
		}
		elseif($_POST['chkBootTryNo']=="no"){
			$arr1=clips_get_fact_list("psup0103");
		}
		elseif($_POST['chkBeepYes']=="yes"){
			$arr1=clips_get_fact_list("psup0208");
		}
		elseif($_POST['chkBeepNo']=="no"){
			$arr1=clips_get_fact_list("psup0104");
		}
		elseif($_POST['chkNewHdwYes']=="yes"){
			$arr1=clips_get_fact_list("psup0209");
		}
		elseif($_POST['chkNewHdwNo']=="no"){
			$arr1=clips_get_fact_list("psup0105");
		}
		elseif($_POST['chkDrvSpinYes']=="yes"){
			$arr1=clips_get_fact_list("psup0107");
		}
		elseif($_POST['chkDrvSpinNo']=="no"){
			$arr1=clips_get_fact_list("psup0106");
		}
		elseif($_POST['chkSpinLeadYes']=="yes"){
			$arr1=clips_get_fact_list("psup0211");
		}
		elseif($_POST['chkSpinLeadNo']=="no"){
			$arr1=clips_get_fact_list("psup0210");
		}
		elseif($_POST['chkBadAdapYes']=="yes"){
			$arr1=clips_get_fact_list("psup0212");
		}
		elseif($_POST['chkBadAdapNo']=="no"){
			$arr1=clips_get_fact_list("psup0108");
		}
		elseif($_POST['chkBenchYes']=="yes"){
			$arr1=clips_get_fact_list("psup0213");
		}
		elseif($_POST['chkBenchNo']=="no"){
			$arr1=clips_get_fact_list("psup0214");
		}
		elseif($_POST['chkPwrGoodYes']=="yes"){
			$arr1=clips_get_fact_list("psup0202");
		}
		elseif($_POST['chkPwrGoodNo']=="no"){
			$arr1=clips_get_fact_list("psup0215");
		}
		elseif($_POST['chkVoltSetYes']=="yes"){
			$arr1=clips_get_fact_list("psup0203");
		}
		elseif($_POST['chkVoltSetNo']=="no"){
			$arr1=clips_get_fact_list("psup0216");
		}
	 	elseif($_POST['chkMboardLeadYes']=="yes"){
			$arr1=clips_get_fact_list("psup0204");
		}
		elseif($_POST['chkMboardLeadNo']=="no"){
			$arr1=clips_get_fact_list("psup0217");
		}
		elseif($_POST['chkSwitchFailYes']=="yes"){
			$arr1=clips_get_fact_list("psup0218");
		}
		elseif($_POST['chkSwitchFailNo']=="no"){
			$arr1=clips_get_fact_list("psup0205");
		}
		elseif($_POST['chkConnCorrectYes']=="yes"){
			$arr1=clips_get_fact_list("psup0105");
		}
		elseif($_POST['chkConnCorrectNo']=="no"){
			$arr1=clips_get_fact_list("psup0219");
		}
		
		//print_r($arr1);
	//}//end clips load if

	include ( "include/db_conn.inc");
	
	$Tablename = "tblproblems";
	$Tablename2 = "tblrecommend";
	
		$sql = "SELECT $Tablename.probId,$Tablename.qId,$Tablename.probDesc, $Tablename2.recDesc,$Tablename2.recHead FROM $Tablename,$Tablename2 WHERE $Tablename.probId=$Tablename2.probId ORDER BY $Tablename2.probId";
		$result= mysql_query($sql);
		
		while($row = mysql_fetch_array($result, MYSQL_NUM))
		{
				
			for($i=0;$i<$count;$i++){
				if($arr1[$i][0]==$row[1]){
					
					if ($arr1[$i][1]==$row[2]){
						//if($arr1[$i][2]==$row[5]){

					if($_POST['chkPwrOnYes']=="yes"){
						$intPos=strpos($_SESSION['RecContent'],"chkPwrOnYes");
						//echo $intPos;
						$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",177);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmLiveScr'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkPwrOnNo']=="no"){
						$intPos=strpos($_SESSION['RecContent'],"chkPwrOnNo");
						//echo $intPos;
						$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnNo' value='no' enabled checked /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",259);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmPwrGood'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkLiveScrYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmBootTry'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled/></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkLiveScrNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkPwrOnNo");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnNo' value='no' enabled checked /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",259);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkBootTryNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmBeeps'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkBootTryYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkPwrOnNo");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnNo' value='no' enabled checked /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",259);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkBeepNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmNewHdw'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkBeepYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkPwrOnNo");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnNo' value='no' enabled checked /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",259);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkNewHdwNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmDrvSpin'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkNewHdwYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkPwrOnNo");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnNo' value='no' enabled checked /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",259);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkDrvSpinYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmBadAdap'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkDrvSpinNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmSpinLead'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkSpinLeadYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkSpinLeadNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}	
					elseif($_POST['chkBadAdapYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkBadAdapNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmBench'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkBenchYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkBenchNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}	
					elseif($_POST['chkPwrGoodYes']=="yes"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmVoltSet'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkPwrGoodNo']=="no"){
						//$intPos=strpos($_SESSION['RecContent'],"chkLiveScrYes");
						//echo $intPos;
						//$_SESSION['RecContent']=substr_replace($_SESSION['RecContent'],"chkPwrOnYes' value='yes' disabled checked /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p><input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>",181);
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}	
					elseif($_POST['chkVoltSetYes']=="yes"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmMboardLead'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkVoltSetNo']=="no"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}	
					elseif($_POST['chkMboardLeadYes']=="yes"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmSwitchFail'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkMboardLeadNo']=="no"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}	
					elseif($_POST['chkSwitchFailYes']=="yes"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkSwitchFailNo']=="no"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmConnCorrect'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}	
					elseif($_POST['chkConnCorrectYes']=="yes"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD><FORM name='frmDrvSpin'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>".$row[3]."<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>".$strRec;
					}
					elseif($_POST['chkConnCorrectNo']=="no"){
						$strRec=str_replace("class=''","class='usermessagestyle2'",$_SESSION['RecContent']);
						$strRec=str_replace("enabled","disabled",$strRec);
						$_SESSION['RecContent']="<TR><TD>".$row[3]."<hr /></TD></TR>".$strRec;
					}			
							
						//}
						
					}
					
				}
								
			}//end for
			
		}//end while

			
}
else{
	WriteMessage ("Clips file could not be loaded!",2);
}
	
	
}//end if request method=post
else{
	//echo "GET";	
	$_SESSION['RecContent']="<TR><TD><FORM name='frmPwrOn'  METHOD='POST' ACTION='http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript'>";
	$_SESSION['RecContent'].="<p class=''>Does the power come on?<br/><input type='checkbox' name='chkPwrOnYes' value='yes' enabled /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' enabled /><label>No</label><p>";
	$_SESSION['RecContent'].="<input type='Submit' value='Submit' enabled /><input type='RESET' value='Reset' enabled /></FORM><hr /></TD></TR>";
}


?>

<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>

<TABLE width=90%>
<?php
	echo $_SESSION['RecContent'];
	//echo "My name is ".$_SESSION['TEST'];
?>
					<!--  <TR>
						<TD>
						
							<FORM name="frmPwrOn"  METHOD="POST" ACTION= <?php //echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strScript";?> >
									<p>Does the power come on?<br/>						
									<input type='checkbox' name='chkPwrOnYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkPwrOnNo' value='no' /><label>No</label><p>	
									<input type='Submit' value='Submit' /><input type='RESET' value='Reset' />
							</FORM>
							
							
						<hr />
						</TD>	
						
					</TR>-->
					<tr>
						<td align='right'><a href='default.php?pid=psintdiagnosis'>Back To Interactive Main (Start Over)</a></td>
					</tr>
									
</TABLE>





