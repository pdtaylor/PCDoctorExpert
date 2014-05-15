
<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>

<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?> >
				
				<TABLE width=90%>
					<TR>
						<TD><p>Are you getting parity errors booting up?</p>
							<input type='checkbox' name='chkErrBootYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkErrBootNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Are you getting parity errors when the BIOS tries to boot, or consistently failing at memory address "0000"?</p>
							<input type='checkbox' name='chkBiosBootYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkBiosBootNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using an Abit IT5H motherboard?</p>
							<input type='checkbox' name='chkIT5HYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkIT5HNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using a motherboard that supports both parity and ECC, and you are running with ECC enabled?</p>
							<input type='checkbox' name='chkECCYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkECCNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Does the parity error occur at the same address each time it is encountered?</p>
							<input type='checkbox' name='chkAddSameYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkAddSameNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Have you just added new hardware to the system?</p>
							<input type='checkbox' name='chkAddHdYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkAddHdNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you running with parity checking disabled?</p>
							<input type='checkbox' name='chkParDisYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkParDisNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><input type='Submit' value='Submit' /><input type='RESET' value='Reset' /></TD>
					</TR>
					<TR>
						<td align='right'><a href='default.php?pid=loadquestions&comp=memory'>Back To Diagnosis Main</a></td>
					</TR>
					
				</TABLE>
</FORM>




