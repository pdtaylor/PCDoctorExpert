
<div align=left><img src='images/computer_doctor.gif' alt='Doctor Diagnosis' width='200' /></div>

<FORM name="frmProcFail"  METHOD="POST" ACTION= <?php echo "http://".$_SERVER['SERVER_NAME']."/pcdoc/default.php?pid=$strCallScript&calledby=$strScript";?> >
				
				<TABLE width=90%>
					<TR>
						<TD><p>Have you installed additional memory, and seen no improvement in performance?</p>
							<input type='checkbox' name='chkNoImpYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkNoImpNo' value='no' /><label>No</label>
						<hr />
						</TD>	
						
					</TR>
					<TR>
						<TD><p>Have you installed additional memory, and the performance got worse?</p>
							<input type='checkbox' name='chkWorseYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkWorseNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Have you installed enough memory to take you over a certain amount (say from 256MB to 400MB)?</p>
							<input type='checkbox' name='chkCertAmtYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkCertAmtNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Is the additional memory slower in speed or uses a slower technology?</p>
							<input type='checkbox' name='chkSlowYes' value='yes' /><label>Yes</label><input type='checkbox' name='chkSlowNo' value='no' /><label>No</label>
						<hr />
						</TD>
					</TR>
					<TR>
						<TD><p>Are you using an Intel Triton II 430HX motherboard, and your PC still slows down with more than 64 MB RAM?</p>
							<input type='checkbox' name='chk430hxYes' value='yes' /><label>Yes</label><input type='checkbox' name='chk430hxNo' value='no' /><label>No</label>
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




