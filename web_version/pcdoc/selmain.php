
<FORM name=frmSelComp  METHOD=POST ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=loadquestions" ?>>
				
				<TABLE HEIGHT="280px" width=100% align=center>
					<TR>
						<TD width=50% align=right>Select the component that's giving the problem:<br/><br/><br/></TD>
						<TD width=20%><select name="cboComponent" id="cboComponent">
								<option VALUE="">[Select Problem]</OPTION>
								<?php
									//CreateConnection("localhost", "root", "", "pcdoc");
									include ( "include/db_conn.inc");
									$Tablename = "tblquestions";
									$sql = "SELECT DISTINCT qtype FROM ".$Tablename;
									$result = mysql_query($sql);
						
									while($row = mysql_fetch_array($result, MYSQL_NUM))
									{
										echo "<option value='".$row[0]."'>".$row[0]."</option>";
									}
									mysql_close(); 
								?>
</select><br/><br/><input type='Submit' value='Submit' /><input type='RESET' value='Reset' /></TD>
					<td width=30%><img src="images/doctor_13.gif" alt="PC Doctor" width="200" /></td>
					</TR>
					<TR>
						<TD colspan=3></TD>
					</TR>
					
				</TABLE>
				
	    </FORM>   


