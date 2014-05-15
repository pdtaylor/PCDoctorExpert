<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?>>
				
				<TABLE width="90%">
					<TR>
						<TD><p>Are you getting error messages when the problem occurs?</p>
							<input type='checkbox' name='chkErrMesYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkErrMesNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Are you experiencing the problem only when running a specific program?</p>
							<input type='checkbox' name='chkProgramYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkProgramNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Does it only occur when using a particular peripheral?</p>
							<input type='checkbox' name='chkPeriphYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkPeriphNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Do you experience the problem only when the system is warmed up or only when the room is hot?</p>
							<input type='checkbox' name='chkSysWarmYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkSysWarmNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is this a new or newly installed P.C.?</p>
							<input type='checkbox' name='chkNewpcYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkNewpcNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you running a VESA local bus video card on a motherboard that supports both VESA and PCI?</p>
							<input type='checkbox' name='chkVcardYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkVcardNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Does the problem occur only when you lean on the system box?</p>
							<input type='checkbox' name='chkLeanYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkLeanNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Have you changed the BIOS settings recently?</p>
							<input type='checkbox' name='chkBiosYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkBiosNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><input type='Submit' value='Submit' /><input type='RESET' value='Reset' /></TD>
					</TR>
					
					<TR>
						<td align='right'><a href='default.php?pid=loadquestions&comp=processor'>Back To Diagnosis Main</a></td>
					</TR>					
					
				</TABLE>
</FORM> 