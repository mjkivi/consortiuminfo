<?php
  session_start();
  
  if($_SESSION['password'] ==""){     // if not logged in
    header("Location: members.php");  // redirect to login form
  }

        // this page has been fixed so it no longer needs magic quotes
        function stripslashes_nested($v)
        {
          if (is_array($v)) {
                return array_map('stripslashes_nested', $v);
          } else {
                return stripslashes($v);
          }
        }

        if (get_magic_quotes_gpc()) {
                $_REQUEST = stripslashes_nested($_REQUEST);
                $_GET = stripslashes_nested($_GET);
                $_POST = stripslashes_nested($_POST);
                $_COOKIES = stripslashes_nested($_COOKIES);
        }


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link rel="P3Pv1" href="/w3c/p3p.xml">
<title>Consortiuminfo.org Consortium Standards Bulletin</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
  A:link {color:"#178265";}
  A:visited {color:"#178265";}
  A:hover {color:"red";}
  A:hover { text-decoration:none; }
body {
	margin-left: 0px;
	margin-top: 4px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #0E3259;
}
h2.page-title {font-family: Arial, Helvetica, sans-serif; font-size: 1.2em; margin-top: 10px;}
.style2 { font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style3 { font-family: verdana, Arial, Helvetica, sans-serif; font-size: 11px; }
.style4 {font-family: verdana, Arial, Helvetica, sans-serif; font-size: 12px; padding-bottom:15px; margin-bottom:0px; }
.style5 {font-family: verdana, Arial, Helvetica, sans-serif; font-size: 12px; padding-bottom:5px; margin-bottom:0px; }
-->
</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
	<!-- Begin
	function formHandler(form){
	var URL = document.form.site.options[document.form.site.selectedIndex].value;
	window.location.href = URL;
	}
	// End -->


		function showField(val,type) {
			var na = "cons_"+type+"_na";
			var avail = "cons_"+type+"_avail";
			var custom ="cons_"+type+"_custom";
			
			if (val=="not") {
				document.getElementById(avail).checked=false;
				document.getElementById(custom).checked=false;
				$('#show_'+type+'_URL').hide();
				$('#show_'+type+'_custom_URL').hide();		
			} else if (val=="avail") {
				document.getElementById(na).checked=false;
				document.getElementById(custom).checked=false;
				$('#show_'+type+'_custom_URL').hide();
				$('#show_'+type+'_URL').show();
			} else if (val=="custom") {
				document.getElementById(na).checked=false;
				document.getElementById(avail).checked=false;
				$('#show_'+type+'_URL').hide();
				$('#show_'+type+'_custom_URL').show();
			}

		}
	</script>
</head>
<body text="#000000">


<table border="0" cellpadding="0" cellspacing="0" width="762" align="center">
	<tr>
		<td width="100%" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="762">
				<tr><td bgcolor="#A5DBC6" align="center"><img src="/images/consortiumlist.gif" width="762" height="120" alt=""></td></tr>
				<tr><td bgcolor="#D9F0E7"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif" style="font-size:10px; line-height:18px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.consortiuminfo.org">Home</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;<a href="/links/">Links</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;<a href="/links/admin/new">Admin</a></b></font></td></tr>
			</table>
		</td>
	</tr>
	<tr>
		<td width="100%" valign="top">
			<table width="762" cellpadding="0" bgcolor="#D9F0E7" cellspacing="0" border="0">
				<tr>
					<td valign="top" bgcolor="#ffffff"><div align="center"><p class="style2"><h2 class="page-title">Consortiuminfo.org Add a Consortium Entry</h2></p>
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="5%">&nbsp;</td>
									<td width="89%">
									<?php
										if (isset($_GET["addentry"])): //If the user wants to add an entry
									?>
									<a href="index2.php" style="text-decoration: none; color: #333;"><button>Return to Consortium List</button></a>
									<form action="index2.php" method="post">
									<p align="left" class="style2">Consortium Name: <input name="cons_name" type="text" id="cons_name"></p>
									<p align="left" class="style2">URL: <input name="cons_url" type="text" id="cons_url">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check here if there is no link available: <input type="checkbox" name="no_link" id="no_link" value="NoLink"></p>
									<p align="left" class="style2">Link Description:<br><textarea name="link_desc" cols="40" rows="10" id="link_desc"></textarea></p>
									<p align="left" class="style2">Consortium Overview:<br><textarea name="cons_overview" cols="40" rows="10" id="cons_overview"></textarea></p>
									<!--<p align="left" class="style2">Legacy Specs:<br><textarea name="cons_specs" cols="40" rows="10" id="cons_specs"></textarea></p>-->
									<table>
										<TR class="style2">
										  <TD style="vertical-align: top;"><br/>SPECS</TD>
										  <TD><br/>
											<input type="radio" value="1" name="cons_specs_na" id="cons_specs_na" onclick="showField('not','specs');"/>Not Available<br/>
											<input type="radio" value="1" name="cons_specs_avail" id="cons_specs_avail" onclick="showField('avail','specs');" />Available at <br/>
												<div id="show_specs_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_avail_url" id="cons_specs_avail_url" value="" size="42"></div>
											<input type="radio" value="1" name="cons_specs_custom" id="cons_specs_custom" onclick="showField('custom','specs');"/>Custom: <br/>
												<div id="show_specs_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_custom_url" id="cons_specs_custom_url" value="" size="42">
												 <br/>Description:<br/><textarea type="text" name="cons_specs_custom_desc" id="cons_specs_custom_desc" value="" cols="50"></textarea></div>

										</TR>
									</table>
									<!--<p align="left" class="style2">Legacy IPR Policy<br><textarea name="cons_ipr" cols="40" rows="10" id="cons_ipr"></textarea></p>-->
									<table>
										<TR class="style2">
										  <TD style="vertical-align: top;"><br/>IPR Policy</TD>
										  <TD><br/>
											<input type="radio" value="1" name="cons_ipr_na" id="cons_ipr_na"  onclick="showField('not','ipr');"/>Not Available<br/>
											<input type="radio" value="1" name="cons_ipr_avail" id="cons_ipr_avail"  onclick="showField('avail','ipr');"/>Available at: <br/>
												<div id="show_ipr_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_avail_url" id="cons_ipr_avail_url" value="" size="42"></div>
											<input type="radio" value="1" name="cons_ipr_custom" id="cons_ipr_custom"  onclick="showField('custom','ipr');"/>Custom: <br/>
												<div id="show_ipr_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_custom_url" id="cons_ipr_custom_url" value="" size="42">
												<br/>Description:<br/><textarea type="text" name="cons_ipr_custom_desc" id="cons_ipr_custom_desc" value="" cols="50"></textarea></div>
										</TR>	
									</table>
									<p align="left" class="style2" style="padding:10px 0px 0px 0px;">Current Status: <input name="cur_stat" type="text" id="cur_stat">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<label for="Active">Active</label> <input type="checkbox" name="cur_stat" id="Active" value="Active">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<label for="Inactive">Inactive</label> <input type="checkbox" name="cur_stat" id="Inactive" value="Inactive"></p>
									<p align="left" class="style2" style="padding:10px 0px 0px 0px;">Last Updated: <input name="last_updated" type="text" id="last_updated"></p>
									<p align="left" class="style3" style="padding:10x 0px 0px 0px;">Please enter the date in this format: 0000-00-00.<br>It will be displayed on the page written out as: Month day, year.<br>For example 2010-01-25 will display as January 25, 2010.</p>
									<p align="left" class="style2">&nbsp;</p>
									<p align="left"><input type="submit" name="Submit" value="Submit"></p>
									</form>
<?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "consor5", "c0n$0r667");
	//$dbcnx = @mysql_connect("localhost", "root", "");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}

	// Select the consortium list database
	if (! @mysql_select_db("consor5_clist") ) {
	echo( "<P>Unable to locate the db at this time</p>" );
	exit();
	}

	//If a consortia has been submitted, add it to the db
	if (isset($_POST["Submit"]) && ($_POST["Submit"]) == "Submit") {
		if (isset($_POST["cons_name"])) {
			$cleancons_name = mysql_real_escape_string(trim($_POST["cons_name"]));
		} 
		if (isset($_POST["cons_url"])) {
			$cleancons_url = mysql_real_escape_string(trim($_POST["cons_url"]));
		} else {
			$cleancons_url = "";
		}
		if (isset($_POST["link_desc"])) {
			$cleanlink_desc = mysql_real_escape_string(trim($_POST["link_desc"]));
		} else {
			$cleanlink_desc = "";
		}
		if (isset($_POST["cons_overview"])) {
			$cleancons_overview = mysql_real_escape_string(trim($_POST["cons_overview"]));
		}  else {
			$cleancons_overview = "";
		}
		//legacy specs field
		if (isset($_POST["cons_specs"])) {
			$cleancons_specs = mysql_real_escape_string(trim($_POST["cons_specs"]));
		} else {
			$cleancons_specs = "";
		}
		
		//new specs fields
		if (isset($_POST["cons_specs_na"])) {
			$cleancons_specs_na = mysql_real_escape_string(trim($_POST["cons_specs_na"]));
		} else {
			$cleancons_specs_na = "";
		} 
		if (isset($_POST["cons_specs_avail"])) {
			$cleancons_specs_avail = mysql_real_escape_string(trim($_POST["cons_specs_avail"]));
		} else {
			$cleancons_specs_avail = "";
		} 
		if (isset($_POST["cons_specs_avail_url"])) {
			$cleancons_specs_avail_url = mysql_real_escape_string(trim($_POST["cons_specs_avail_url"]));
		} else {
			$cleancons_specs_avail_url = "";
		} 
		if (isset($_POST["cons_specs_custom"])) {
			$cleancons_specs_custom = mysql_real_escape_string(trim($_POST["cons_specs_custom"]));
		} else {
			$cleancons_specs_custom = "";
		} 
		if (isset($_POST["cons_specs_custom_url"])) {
			$cleancons_specs_custom_url = mysql_real_escape_string(trim($_POST["cons_specs_custom_url"]));
		} else {
			$cleancons_specs_custom_url = "";
		} 
		if (isset($_POST["cons_specs_custom_desc"])) {
			$cleancons_specs_custom_desc = mysql_real_escape_string(trim($_POST["cons_specs_custom_desc"]));
		} else {
			$cleancons_specs_custom_desc = "";
		} 		
		
		//legacy ipr field
		if (isset($_POST["cons_ipr"])) {
			$cleancons_ipr = mysql_real_escape_string(trim($_POST["cons_ipr"]));
		} else {
			$cleancons_ipr = "";
		}  		
		//new ipr fields
		if (isset($_POST["cons_ipr_na"])) {
			$cleancons_ipr_na = mysql_real_escape_string(trim($_POST["cons_ipr_na"]));
		} else {
			$cleancons_ipr_na = "";
		}  
		if (isset($_POST["cons_ipr_avail"])) {
			$cleancons_ipr_avail = mysql_real_escape_string(trim($_POST["cons_ipr_avail"]));
		} else {
			$cleancons_ipr_avail = "";
		}  
		if (isset($_POST["cons_ipr_avail_url"])) {
			$cleancons_ipr_avail_url = mysql_real_escape_string(trim($_POST["cons_ipr_avail_url"]));
		} else {
			$cleancons_ipr_avail_url = "";
		}  
		if (isset($_POST["cons_ipr_custom"])) {
			$cleancons_ipr_custom = mysql_real_escape_string(trim($_POST["cons_ipr_custom"]));
		} else {
			$cleancons_ipr_custom = "";
		}  
		if (isset($_POST["cons_ipr_custom_url"])) {
			$cleancons_ipr_custom_url = mysql_real_escape_string(trim($_POST["cons_ipr_custom_url"]));
		} else {
			$cleancons_ipr_custom_url = "";
		}  
		if (isset($_POST["cons_ipr_custom_desc"])) {
			$cleancons_ipr_custom_desc = mysql_real_escape_string(trim($_POST["cons_ipr_custom_desc"]));
		} else {
			$cleancons_ipr_custom_desc = "";
		} 

 		
		if (isset($_POST["cur_stat"])) {
			$cur_stat = mysql_real_escape_string(trim($_POST["cur_stat"]));
		} else {
			$cur_stat = "";
		}  		
		if (isset($_POST["last_updated"])) {
			$last_updated = mysql_real_escape_string(trim($_POST["last_updated"]));
		} else {
			$last_updated = "";
		}  
		if (isset($_POST["no_link"])) {
			$no_link = mysql_real_escape_string(trim($_POST["no_link"]));
		} else {
			$no_link = "";
		}  		

		
		if (empty($cleancons_name)) {
			echo "<p style='color: red;'>You must at least enter a Consortium Name to create a new entry. Try again!</p>";
		} else {
			$sql = "INSERT INTO cons_list SET
					cons_name='$cleancons_name',
					cons_url='$cleancons_url',
					link_desc='$cleanlink_desc',
					cons_overview='$cleancons_overview',
					cons_specs='$cleancons_specs',			
					cons_specs_na='$cleancons_specs_na',
					cons_specs_avail='$cleancons_specs_avail',
					cons_specs_avail_url='$cleancons_specs_avail_url',
					cons_specs_custom='$cleancons_specs_custom',
					cons_specs_custom_url='$cleancons_specs_custom_url',
					cons_specs_custom_desc='$cleancons_specs_custom_desc',			
					cons_ipr='$cleancons_ipr',
					cons_ipr_na='$cleancons_ipr_na',
					cons_ipr_avail='$cleancons_ipr_avail',
					cons_ipr_avail_url='$cleancons_ipr_avail_url',
					cons_ipr_custom='$cleancons_ipr_custom',
					cons_ipr_custom_url='$cleancons_ipr_custom_url',
					cons_ipr_custom_desc='$cleancons_ipr_custom_desc',
					cur_stat='$cur_stat',
					last_updated='$last_updated',
					no_link='$no_link'";
			if (@mysql_query($sql)) {
				echo("<p>Your entry has been added.</p>");
			} else {
				echo("<p>Error adding entry: " .
						mysql_error() . "</p>");
				}
			}		
		}
	
		

//If an entry has been deleted, remove it
if (isset($_POST["deleteitem"]) && intval($_POST["deleteitem"]) > 0) {
	$s_deleteitem = intval($_POST["deleteitem"]);
	$sql = "DELETE FROM cons_list
			WHERE ID =$s_deleteitem";
	if (@mysql_query($sql)) {
		echo("<p>The entry has been deleted.</p>");
	} else {
		echo("<p>error deleting entry: " .
		mysql_error() . "</p>");
	}
}	
	echo("<p class=\"style5\"><a href='" . $_SERVER['PHP_SELF'] . "?addentry=1' style='text-decoration: none; color: #333;'><button>Add an entry!</button></a></p>");
	echo("<h3> Here are all the entries</h3>");


	//Request the text of all the entries
	$result = @mysql_query("SELECT * FROM cons_list ORDER BY cons_id DESC");
	if (!$result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each consortium in a paragraph
	while ( $row = mysql_fetch_array($result) ) {


	///////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////
	$cons_id = $row["cons_id"];
	$cons_name = $row["cons_name"];
	$cons_url = $row["cons_url"];
	$link_desc = $row["link_desc"];
	$cons_overview = $row["cons_overview"];
	$cons_specs = $row["cons_specs"];
	$cons_ipr = $row["cons_ipr"];
	echo("<p class=\"style4\">".
		"<b><a href='$cons_url'>"."$cons_name -</a></b> "."$link_desc".
		"<br>".substr($cons_overview,0,100)."...<br>".
		//"$cons_specs<br>".
		//"$cons_ipr".
		"<a href='catadd.php?addcat=$cons_id'>Add or remove categories</a>&nbsp;|&nbsp;".
		"<a href='edit.php?ID=$cons_id'>Edit this entry</a></p>");
}

	//When clicked the link will load this page
		echo("<p class=\"style5\"><a href='" . $_SERVER['PHP_SELF'] . "?addentry=1' style='text-decoration: none; color: #333;'><button>Add an entry!</button></a></p>");

	endif;
?>
									</td>
									<td width="6%">&nbsp;</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>