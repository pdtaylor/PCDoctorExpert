<?PHP
/*'**********************************************************************************
'* Script Name		:	DEFAULT.PHP
'*
'* Author			:	PCDOC Web Team
'* Date created		:	14-03-2008
'* Last Updated		:	14-03-2008
'*
'* Calling Script	:	Called from menu
'*
'* Description		:	
'***********************************************************************************/
	/*----------------------------------------------------------------
	'PHP Code that deteremines how page will function
	'----------------------------------------------------------------*/
	
	//'Declare global variables
	global $strTbl;		//table name
	global $strID;		//to store ID
	global $result;		//main recordset
	global $blnEmptyTable;	//flag for empty table
	global $strMenu; //Menu Item
     
	global $prjID;
	global $strScript;
	global $strPath;
	global $strCallScript;
	global $strMenu;
	
	session_start();
			
	//Common functions
	require_once("include/functions.inc");
	
	//Common Constants
	require_once("include/constants.inc");

	//database connection script
	include ( "include/db_conn.inc");

	
	//Determine action 
	$strAction = $_GET['action'];	

	//let default action be ACTION_ADD
	if (strlen($strAction) == 0)
	{
		$strAction = ACTION_VIEW;
	}


//Determine if page table empty 
	if (isEmptyTable("tblpages","pageID"))	//check if page is empty
	{
		$blnRedir = false;

		WriteMessage ("Page Table empty!",2);
		exit;
	}

	//Determine if page information exists in browse table
	$sqlc = "SELECT COUNT(pageID) FROM tblpages WHERE pageID ='".$_GET['pid']."'";	//get page info

	$resultc = mysql_query($sqlc);
	$rowc = mysql_fetch_array($resultc, MYSQL_NUM);

	if ($rowc[0] <= 0)
	{
		//redirect to 404 page
		header("Location: ".$_SERVER['PHP_SELF']."?pid=404");		
		exit;
	}
	else
	{
		//get page informmation and assign to script variables
		$sql = "SELECT * FROM tblpages WHERE pageID ='".$_GET['pid']."'";

		$result = mysql_query($sql);
		$row = mysql_fetch_array($result, MYSQL_NUM);
		$strScript = $row[0];
		$strPath = $row[1];

		if (strlen(trim($strAction)) <= 0)	//if no action then page is for viewing
		{
			$strPgTitle = $row[3];
		}
		else
		{
			$strPgTitle = ucfirst($strAction)." ".$row[3];
		}

		$strPgTitle = "[".$_SERVER['SERVER_NAME']."] ".$strPgTitle;

		$strPgDesc = $row[2];

		$strCallScript =  $row[4];  //script to be called after succesfull completion
		$strCallFilter = $row[6]; //filter option to be called
		$strMenu =  $row[5];  //menu to be called
	}
?>

<!-- ----------------------------------------------------------------
' HTML code determines the shell for the site or pages. 
'  - Common header, footer amd navigation
'---------------------------------------------------------------- -->
<HTML>
<HEAD>
<?php 
	echo "<TITLE>".$strPgTitle."</TITLE>";
?>

<META NAME="Author" CONTENT="PC Doc Web Team">
<META NAME="robots" CONTENT="all">
<META NAME="Keywords" CONTENT="">
<?php echo "<META NAME='Description' CONTENT='".$strPgDesc."'>"; ?>
<link rel="stylesheet" type="text/css" href="include/main.css" />
<link rel="stylesheet" type="text/css" href="include/style.css" />

<script language="JavaScript">
<!--
//By George Chiang (www.javascriptkit.com) JavaScript site.
img1=new Image()
img1.src="images/fold.gif"
img2=new Image()
img2.src="images/open.gif"
ns6_index=0
//-->
function change(e){

if(!document.all&&!document.getElementById)
return

if (!document.all&&document.getElementById)
ns6_index=1

var source=document.getElementById&&!document.all? e.target:event.srcElement
if (source.className=="folding"){
var source2=document.getElementById&&!document.all? source.parentNode.childNodes:source.parentElement.all
if (source2[2+ns6_index].style.display=="none"){
source2[0].src="images/open.gif"
source2[2+ns6_index].style.display=''
}
else{
source2[0].src="images/closed.gif"
source2[2+ns6_index].style.display="none"
}
}
}
document.onclick=change


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

</SCRIPT>
</HEAD>

<BODY class="backstyle" onload="MM_preloadImages('images/open.gif','images/closed.gif','images/list.gif')"> 
  <DIV id="mainbody">
    <div height="100" align="center">
	    <h1>PC Doctor</h1>
		<hr />
		<h2>Expert System</h2>

    </div>
  <div height ="25" align="center">
    <!--  determine which menu to use-->
		<?php 	

			If ($strMenu == "main")
			{
				include  "http://".$_SERVER['SERVER_NAME']."/pcdoc/include/menu.inc";								
			}
		?>
  </div>
  <DIV width=100%>
<!-- dynamically changing content -->
	<?php 
		
				
		//display title
		echo "<br /><br /><div class=heading >".$strPgTitle."</div></DIV><br />";	
		
		if ($strPath == "/")
		{
      
	       		require_once("http://".$_SERVER['SERVER_NAME']."/pcdoc/".$strScript.".php");
		}
		else
		{
			require_once($strPath."/".$strScript.".php");
		}		
	?>
 </DIV>
</DIV>
<hr/>
<div class="copyrightstyle">copyright &copy; 2008 - UTech PHP-CLIPS Research Team
<br /> 
</div>
</BODY>
</HTML>