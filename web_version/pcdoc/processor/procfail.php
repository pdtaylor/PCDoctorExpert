<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?>>
				
				<TABLE width="90%">
					<TR>
						<TD><p>Have you recently assembled this P.C. or performed an upgrade to it?</p>
							<input type='checkbox' name='chkUpgradeYes' value='yes' onselect='disable_procfail()'/><label>Yes</label><input type='checkbox' name='chkUpgradeNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Do you have another processor available for a quick test?</p>
							<input type='checkbox' name='chkExtraYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkExtraNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is the processor inserted improperly?</p>
							<input type='checkbox' name='chkInsertYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkInsertNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is the BIOS settings correct?</p>
							<input type='checkbox' name='chkBiosYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkBiosNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is the processor receiving the correct voltage?</p>
							<input type='checkbox' name='chkVoltYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkVoltNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is the processor supported by this motherboard?</p>
							<input type='checkbox' name='chkMboardYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkMboardNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Try disabling the secondary cache in the BIOS setup. Does this work?</p>
							<input type='checkbox' name='chkSecCacheYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkSecCacheNo' value='no' /><label>No</label>
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