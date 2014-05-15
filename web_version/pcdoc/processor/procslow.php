<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>
<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?>>
				
				<TABLE width="90%">
					<TR>
						<TD><p>Have you recently added more memory to the system?</p>
							<input type='checkbox' name='chkMemYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkMemNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Do you notice the hard disk light flickering when you load a lot of programs or does it say memory is low?</p>
							<input type='checkbox' name='chkLflickYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkLflickNo' value='no' /><label>No</label>
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