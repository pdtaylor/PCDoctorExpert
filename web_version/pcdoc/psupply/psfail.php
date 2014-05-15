
<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>

<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?> >
				
				<TABLE width=90%>
					<TR>
						<TD><p>Is this PC new or recently upgraded?</p>
							<input type='checkbox' name='chkNewYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkNewNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Do you have a duplicate set of Memory Modules?</p>
							<input type='checkbox' name='chkDuplicateYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkDuplicateNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Have you just installed a new 32-bit Operating System, and before you were using DOS?</p>
							<input type='checkbox' name='chkOpSysYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkOpSysNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is the memory used, or the motherboard old and dusty?</p>
							<input type='checkbox' name='chkDustyYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkDustyNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using SIMM modules?</p>
							<input type='checkbox' name='chkSIMMYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkSIMMNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using DIMM modules?</p>
							<input type='checkbox' name='chkDIMMYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkDIMMNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using SIMM and DIMM Modules on the same board?</p>
							<input type='checkbox' name='chkMisMatchYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkMisMatchNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using an older motherboard, say 486 or earlier?</p>
							<input type='checkbox' name='chkOldYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkOldNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using a 486, Pentium or later, motherboard?</p>
							<input type='checkbox' name='chkResYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkResNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using a 430HX motherboard?</p>
							<input type='checkbox' name='chk430HXYes' value='yes' /><label>Yes</label><input type='checkbox' name='chk430HXNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using SDRAM?</p>
							<input type='checkbox' name='chkSdramYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkSdramNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using EDO?</p>
							<input type='checkbox' name='chkEDOYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkEDONo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using different Memory Types (i.e EDO, SDRAM, FPM, etc.) on the same board?</p>
							<input type='checkbox' name='chkDiffMemYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkDiffMemNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using more than 64MB of memory?</p>
							<input type='checkbox' name='chkSpecBIOSYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkSpecBIOSNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Have you double checked all the settings and replaced the memory; does this fix the problem?</p>
							<input type='checkbox' name='chkMBoardYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkMBoardNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>	
					<TR>
						<TD><p>Do the memory modules use the same metal as the sockets (e.g. gold, or tin)?</p>
							<input type='checkbox' name='chkMetalYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkMetalNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>							
					<TR>
						<TD><input type='Submit' value='Submit' /><input type='RESET' value='Reset' /></TD>
					</TR>
					
					
				</TABLE>
</FORM>




