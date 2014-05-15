
<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>

<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?> >
				
				<TABLE width=90%>
					<TR>
						<TD><p>Are you trying to run a program that only needs a few kilobytes to load, and you know you have enough memory, yet you are getting Out of Memory errors?</p>
							<input type='checkbox' name='chkRunProgYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkRunProgNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Are you running Windows, and getting "Out of Memory" errors, yet when you check the Program Manager, it says you have several megabytes free?</p>
							<input type='checkbox' name='chkOutMemYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkOutMemNo' value='no' /><label>No</label>
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




