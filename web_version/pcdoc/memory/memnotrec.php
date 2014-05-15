
<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>

<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?> >
				
				<TABLE width=90%>
					<TR>
						<TD><p>When the system boots up, does it report either 128 KB or 384 KB less memory than is in the system?</p>
							<input type='checkbox' name='chkBootUpYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkBootUpNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Are you noticing that not all of the memory you've installed is recognized?</p>
							<input type='checkbox' name='chkNotRecYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkNotRecNo' value='no' /><label>No</label>
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




