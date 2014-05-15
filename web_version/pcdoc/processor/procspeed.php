<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?>>
				
				<TABLE width="90%">
					<TR>
						<TD><p>In considering the speed, are you referring to the LED readout on the case?</p>
							<input type='checkbox' name='chkLedYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkLedNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Was this system recently purchased?</p>
							<input type='checkbox' name='chkRecBuyYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkRecBuyNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is the reported speed of the processor just off slightly (say a 2GHZ reported as 1.8GHZ)?</p>
							<input type='checkbox' name='chkSlightYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkSlightNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using a newer chip?</p>
							<input type='checkbox' name='chkNewChipYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkNewChipNo' value='no' /><label>No</label>
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