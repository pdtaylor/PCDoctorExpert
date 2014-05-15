<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?>>
				
				<TABLE width="90%">
					<TR>
						<TD><p>Do you have heat sink compound between the processor and heat sink?</p>
							<input type='checkbox' name='chkCompYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkCompNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Is the CPU fan dirty, looking worn or close to failure?</p>
							<input type='checkbox' name='chkFanYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkFanNo' value='no' /><label>No</label>
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