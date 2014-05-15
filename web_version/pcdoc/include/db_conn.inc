<?php
//CreateConnection("localhost", "root", "new-password", "STMS");
	$dblink = mysql_pconnect("localhost", "root", "") or die("Could not connect".mysql_error());
		mysql_select_db("pcdoc", $dblink)or die("Cannot open database".mysql_error());
	
?>