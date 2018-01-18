<?php
  session_start();
  
  if($_SESSION['password'] ==""){     // if not logged in
    header("Location: members.php");  // redirect to login form
  }

	// this page has been fixed so it no longer needs magic quotes
	function stripslashes_nested($v) {
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
	<P3P: policyref="/w3c/p3p.xml"><link rel="P3Pv1" href="/w3c/p3p.xml">
	<title>Consortiuminfo.org Consortium Standards Bulletin</title>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
	<META HTTP-EQUIV="EXPIRES" CONTENT="0">
	<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
	<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
	<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, ">
	<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
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
		.unnamed1 {	
			font-weight: bold;
			color: #FF0000;
			text-decoration: none;
		}
		h2.page-title {font-family: Arial, Helvetica, sans-serif; font-size: 1.2em; margin-top: 10px;}
		.style10 {
			font-family: Arial, Helvetica, sans-serif; 
			color: #000000; 
			font-size: 16px; 
			font-weight: bold; 
		}
		.style2 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px;
		}
		.style3 {
			font-family: verdana, Arial, Helvetica, sans-serif;
			font-size: 11px;
		}
		.style25 {font-size: 12px}

		.show { display: block;  }
		.hide { display: none; }
	
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="jquery.confirm.js"></script>
	<SCRIPT LANGUAGE="JavaScript">
		function formHandler(form){
			var URL = document.form.site.options[document.form.site.selectedIndex].value;
			window.location.href = URL;
		}
		 
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
		
		
	$(document).ready(function() {
		if($('#cons_specs_na').is(':checked')) {
			showField('not','specs');
		} else if($('#cons_specs_avail').is(':checked')) {
			showField('avail','specs');
		} else if($('#cons_specs_custom').is(':checked')) {
			showField('custom','specs');
		}
		if($('#cons_ipr_na').is(':checked')) {
			showField('not','ipr');
		} else if($('#cons_ipr_avail').is(':checked')) {
			showField('avail','ipr');
		} else if($('#cons_ipr_custom').is(':checked')) {
			showField('custom','ipr');
		}		
	});
		
    </SCRIPT>
</head>
<body text="#000000">
<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">
<tr><td width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="840">
<tr><td width="100%" valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="762">
<tr><td width="100%" height="88" bgcolor="#A5DBC6">
  <div align="center"><img src="/bulletins/header.gif" width="762" height="120"></div></td></tr><tr><td width="100%" valign="top" bgcolor="#FFFFFF"><div align="right">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr valign="top">
        <td width="100%" valign="top" bgcolor="#D9F0E7">
            <table width="99%"  border="0" cellspacing="0" cellpadding="0">
              <tr valign="middle">
                <td width="1%">&nbsp;</td>
                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> <a href="/links/">Links</a> &gt; <a href="/links/admin/new">Admin</a> </b></font></b></font></td>
                <td width="29%"><div align="right"><span class="medium">
                </span></div></td>
              </tr>
            </table>
        <td width="0%" bgcolor="#D9F0E7"><div align="center"><span class="medium"></span></div></td>
      </tr>
    </table>
    <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>
<tr>
  <td width="100%" valign="top"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
    <tr valign="top">
      <td bordercolor="#08305A" bgcolor="#D9F0E7"><table width="740"  border="0" align="center" cellpadding="1" cellspacing="0">
          <tr>
                  <td width="740" align="center" valign="top" bgcolor="#000000">
					<table width="738" height="130" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr align="left" valign="top" bgcolor="#FFFFFF">
                        <td width="738" align="left"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="5%">&nbsp;</td>
                            <td width="89%"><CENTER>
							<h2 class='page-title'>Edit Consortium Entry</h2>
 <?php
	mysql_connect("localhost", "consor5", "c0n$0r667");
	//mysql_connect("localhost", "root", "");
	mysql_select_db("consor5_clist");

	if (isset($_POST["submit"]) && ($_POST["submit"]) == "Save Profile") { // save changes
		if (isset($_REQUEST["ID"])) {
			$ID = intval($_REQUEST["ID"]);
		} 
		if (isset($_POST["cons_name"])) {
			$s_cons_name = mysql_real_escape_string($_POST["cons_name"]);
		} else {
			$s_cons_name = "";
		}
		if (isset($_POST["cons_url"])) {
			$s_cons_url = mysql_real_escape_string($_POST["cons_url"]);
		} else {
			$s_cons_url = "";
		}
		if (isset($_POST["link_desc"])) {
			$s_link_desc = mysql_real_escape_string($_POST["link_desc"]);
		} else {
			$s_link_desc = "";
		}
		if (isset($_POST["cons_overview"])) {
			$s_cons_overview = mysql_real_escape_string($_POST["cons_overview"]);
		} else {
			$s_cons_overview = "";
		}
		if (isset($_POST["cons_specs_na"])) {
			$s_cons_specs_na = mysql_real_escape_string($_POST["cons_specs_na"]);
		} else {
			$s_cons_specs_na = "";
		}
		if (isset($_POST["cons_specs"])) {
			$s_cons_specs = mysql_real_escape_string($_POST["cons_specs"]);
		} else {
			$s_cons_specs = "";
		}
		//new cons specs fields
		if (isset($_POST["cons_specs_avail"])) {
			$s_cons_specs_avail = mysql_real_escape_string($_POST["cons_specs_avail"]);
		} else {
			$s_cons_specs_avail = "";
		}
		if (isset($_POST["cons_specs_avail_url"])) {
			$s_cons_specs_avail_url = mysql_real_escape_string($_POST["cons_specs_avail_url"]);
		} else {
			$s_cons_specs_avail_url = "";
		}
		if (isset($_POST["cons_specs_custom"])) {
			$s_cons_specs_custom = mysql_real_escape_string($_POST["cons_specs_custom"]);
		} else {
			$s_cons_specs_custom = "";
		}
		if (isset($_POST["cons_specs_custom_url"])) {
			$s_cons_specs_custom_url = mysql_real_escape_string($_POST["cons_specs_custom_url"]);
		} else {
			$s_cons_specs_custom_url = "";
		}
		if (isset($_POST["cons_specs_custom_desc"])) {
			$s_cons_specs_custom_desc = mysql_real_escape_string($_POST["cons_specs_custom_desc"]);
		} else {
			$s_cons_specs_custom_desc = "";
		}				
		
		
		if (isset($_POST["cons_ipr_na"])) {
			$s_cons_ipr_na = mysql_real_escape_string($_POST["cons_ipr_na"]);
		} else {
			$s_cons_ipr_na = "";
		}		
		if (isset($_POST["cons_ipr"])) {
			$s_cons_ipr = mysql_real_escape_string($_POST["cons_ipr"]);
		} else {
			$s_cons_ipr = "";
		}
		
		//new cons ipr fields
		if (isset($_POST["cons_ipr_avail"])) {
			$s_cons_ipr_avail = mysql_real_escape_string($_POST["cons_ipr_avail"]);
		} else {
			$s_cons_ipr_avail = "";
		}
		if (isset($_POST["cons_ipr_avail_url"])) {
			$s_cons_ipr_avail_url = mysql_real_escape_string($_POST["cons_ipr_avail_url"]);
		} else {
			$s_cons_ipr_avail_url = "";
		}
		if (isset($_POST["cons_ipr_custom"])) {
			$s_cons_ipr_custom = mysql_real_escape_string($_POST["cons_ipr_custom"]);
		} else {
			$s_cons_ipr_custom = "";
		}
		if (isset($_POST["cons_ipr_custom_url"])) {
			$s_cons_ipr_custom_url = mysql_real_escape_string($_POST["cons_ipr_custom_url"]);
		} else {
			$s_cons_ipr_custom_url = "";
		}
		if (isset($_POST["cons_ipr_custom_desc"])) {
			$s_cons_ipr_custom_desc = mysql_real_escape_string($_POST["cons_ipr_custom_desc"]);
		} else {
			$s_cons_ipr_custom_desc = "";
		}		
				
		if (isset($_POST["cur_stat"])) {
			$cur_stat = $_POST["cur_stat"];
		} else {
			$cur_stat = "";
		}
		if (isset($_POST["last_updated"])) {
			$last_updated = $_POST["last_updated"];
		} else {
			$last_updated = "";
		}
		if (isset($_POST["no_link"])) {
			$no_link = $_POST["no_link"];
		} else {
			$no_link = "";
		}
		if (isset($_POST["published"])) {
			$published = $_POST["published"];
		} else {
			$published = "";
		}	
		
		$sql = mysql_query("UPDATE cons_list SET 
			cons_name='$s_cons_name', 
			cons_url='$s_cons_url', 
			link_desc='$s_link_desc', 
			cons_overview='$s_cons_overview', 
			cons_specs_na='$s_cons_specs_na',
			cons_specs='$s_cons_specs',
			cons_specs_avail='$s_cons_specs_avail',
			cons_specs_avail_url='$s_cons_specs_avail_url',
			cons_specs_custom='$s_cons_specs_custom',
			cons_specs_custom_url='$s_cons_specs_custom_url',
			cons_specs_custom_desc='$s_cons_specs_custom_desc',
			cons_ipr_na='$s_cons_ipr_na',
			cons_ipr='$s_cons_ipr',
			cons_ipr_avail='$s_cons_ipr_avail',
			cons_ipr_avail_url='$s_cons_ipr_avail_url',
			cons_ipr_custom='$s_cons_ipr_custom',
			cons_ipr_custom_url='$s_cons_ipr_custom_url',
			cons_ipr_custom_desc='$s_cons_ipr_custom_desc',			
			cur_stat='$cur_stat',
			last_updated='$last_updated',
			no_link='$no_link',
			published='$published'
			WHERE (cons_id='$ID')");
	?>
	<div align="left" class="style2">
		<br/>The consortium information has been updated for: <br><br>
		<table class="style2">
			<tr>
				<td><b>Name:</b> </td>
				<td><?php echo $s_cons_name ?> <a href="edit.php?ID=<?php echo $ID;?>" style='text-decoration: none; color: #333;'><button>Edit <?php echo $s_cons_name;?></button></a></td>
			</tr>
			<tr>
				<td><b>Def:</b> </td>
				<td><?php echo $ID ?></td>
			</tr>
		</table>
		<br/>
		<?php			
			$ID = intval($_REQUEST["ID"]);
			//pull query from current and apply it
			$nextID = intval($ID-1);
		?>
		<a href="index2.php" style="text-decoration: none; color: #333;"><button>Return to Entry List</button></a>
		<a href="edit.php?ID=<?php echo $nextID; ?>" style="text-decoration: none; color: #333;"><button>Go to Next Entry</button></a>
		<hr/>
		<?php

		$query = mysql_query("SELECT * FROM cons_list WHERE(cons_id='$ID')");
		
		//Translate Specs and IPR to 0 or 1
		//This will require a database update

		if (mysql_num_rows($query) != 1) {
				echo "The consortium ID - <b>". $ID ."</b> - is no longer in the Database. <a href='edit.php?ID=".intval($ID-1)."' style='font-weight: bold;'>Click here</a> for the next entry.";
				echo "<div style='height: 400px;'></div>";
				exit;
			} else {
				$info = mysql_fetch_array($query);
				echo("<h3>Edit ".$info['cons_name']." Def</h3>");
		?>
		</div>
		<FORM METHOD="POST" ACTION="<?php echo($_SERVER['PHP_SELF']) ?>">
		  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
		  <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
		  <TABLE width="638">
			<TR>
			  <TD COLSPAN=2><CENTER>One</CENTER></TD>
			</TR>
			<TR class="style2">
			  <TD width="83">Name:</TD>
			  <TD width="543"><input name="cons_name" type="text" id="cons_name" value="<?php echo $info['cons_name'] ?>" size="60"></TD>
			</TR>
			<TR class="style2">
			  <TD>Consortium URL</TD>
			  <TD><input type="text" name="cons_url" id="cons_url" value="<?php echo $info['cons_url'] ?>" size="60"></TD>
			</TR>
			<TR class="style2">
			  <TD colspan="2">Check here if there is no link available: <input type="checkbox" name="no_link" id="no_link" value="NoLink" <?php if ($info['no_link'] == 'NoLink') echo 'checked'; ?>></TD>
			</TR>
			<TR class="style2">
			  <TD>Link Desc </TD>
			  <TD><textarea name="link_desc" cols="50" id="link_desc"><?php echo $info['link_desc'] ?></textarea></TD>
			</TR>
			<TR class="style2">
			  <TD>Overview</TD>
			  <TD><textarea name="cons_overview" cols="50" id="cons_overview"><?php echo $info['cons_overview'] ?></textarea></TD>
			</TR>
			<TR class="style2">
			  <TD style="vertical-align: top;"><br/>SPECS</TD>
			  <TD><br/>
				<input type="radio" value="1" name="cons_specs_na" id="cons_specs_na" <?php if ($info['cons_specs_na']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('not','specs');"/>Not Available<br/>
				<input type="radio" value="1" name="cons_specs_avail" id="cons_specs_avail" <?php if ($info['cons_specs_avail']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('avail','specs');"/>Available at <br/>
					<div id="show_specs_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_avail_url" id="cons_specs_avail_url" value="<?php echo $info['cons_specs_avail_url'] ?>" size="42"></div>
				<input type="radio" value="1" name="cons_specs_custom" id="cons_specs_custom" <?php if ($info['cons_specs_custom']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('custom','specs');" />Custom: <br/>
					<div id="show_specs_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_custom_url" id="cons_specs_custom_url" value="<?php echo $info['cons_specs_custom_url'] ?>" size="42">
					 <br/>Description:<br/><textarea type="text" name="cons_specs_custom_desc" id="cons_specs_custom_desc" value="" cols="50"><?php echo $info['cons_specs_custom_desc'] ?></textarea></div>
					<!--<textarea name="cons_specs" cols="50" id="cons_specs" <?php //if ($info['cons_specs_na']== 1 ) {echo "readonly='readonly' style='background-color: #ccc;'";} ?>><?php //echo $info['cons_specs'] ?></textarea></TD>-->
				
					
			 </td>
			</TR>
			<TR class="style2">
			  <TD style="vertical-align: top;"><br/>IPR Policy</TD>
			  <TD><br/>
				<input type="radio" value="1" name="cons_ipr_na" id="cons_ipr_na" <?php if ($info['cons_ipr_na']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('not','ipr');"/>Not Available<br/>
				<input type="radio" value="1" name="cons_ipr_avail" id="cons_ipr_avail" <?php if ($info['cons_ipr_avail']== 1 ) {echo "checked='checked'";} ?>onclick="showField('avail','ipr');"/>Available at: <br/>
					<div id="show_ipr_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_avail_url" id="cons_ipr_avail_url" value="<?php echo $info['cons_ipr_avail_url'] ?>" size="42"></div>
				<input type="radio" value="1" name="cons_ipr_custom" id="cons_ipr_custom" <?php if ($info['cons_ipr_custom']== 1 ) {echo "checked='checked'";} ?>onclick="showField('custom','ipr');"/>Custom: <br/>
					<div id="show_ipr_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_custom_url" id="cons_ipr_custom_url" value="<?php echo $info['cons_ipr_custom_url'] ?>" size="42">
					 <br/>Description:<br/><textarea type="text" name="cons_ipr_custom_desc" id="cons_ipr_custom_desc" value="" cols="50"><?php echo $info['cons_ipr_custom_desc'] ?></textarea></div>
					<!--<textarea name="cons_ipr" cols="50" id="cons_ipr" <?php //if ($info['cons_ipr_na']== 1 ) {echo "readonly='readonly' style='background-color: #ccc;'";} ?>><?php //echo $info['cons_ipr'] ?></textarea></TD>-->
				</td>
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">&nbsp;</TD>
			</TR>
			
			<TR class="style2">
			  <TD>Current Status</TD>
			  <TD>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="cur_stat" type="text" id="cur_stat" value="<?php if (($info['cur_stat'] != 'Active') && ($info['cur_stat'] != 'Inactive')) echo $info['cur_stat'] ?>">
				&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<label for="Active">Active</label> <input type="checkbox" name="cur_stat" id="Active" value="Active" <?php if ($info['cur_stat'] == 'Active') echo 'checked'; ?>>
				&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<label for="Inactive">Inactive</label> <input type="checkbox" name="cur_stat" id="Inactive" value="Inactive" <?php if ($info['cur_stat'] == 'Inactive') echo 'checked'; ?>></TD>
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">&nbsp;</TD>
			</TR>
			
			 <TR class="style2">
			  <TD>Last Updated</TD>
			  <TD><input name="last_updated" type="text" id="last_updated" value="<?php echo $info['last_updated'] ?>" size="60"></TD>
			</TR>
			<TR class="style3">
			  <TD colspan="2">Please enter the date in this format: 0000-00-00.<br>It will be displayed on the page written out as: Month day, year.<br>For example 2010-01-25 will display as January 25, 2010.</TD>
			</TR>
			
			<TR class="style2">
			  <TD>Published</TD>
			  <TD>
				<input type="checkbox" name="published" id="published" value="1" <?php if ($info['published'] == 1) echo "checked='checked'"; ?>>
			  </TD>
			</TR>
					
			<TR class="style2">
			  <TD colspan="2">To delete this Entry, uncheck the "Publish" checkbox. Likewise, check the box to re-publish this entry.</TD>
			</TR>				
			
			<TR class="style2">
			  <TD COLSPAN=2>
			  <div align="center">
				<input name="submit" type="submit" value="Save Profile" style="display: inline-block;">
				</FORM>
				<FORM METHOD="POST" ACTION="<?php echo($_SERVER['PHP_SELF']) ?>" onsubmit="return confirm('Are you sure you want Delete this Profile?');" style="display: inline-block;">
					<INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
					<input name="cons_name" type="hidden" id="cons_name" value="<?php echo $info['cons_name'] ?>" size="60">
					<!--<input class="confirm" name="submit" type="submit" value="Delete Profile">-->
				</FORM>				
					
					<br/><br/><b>*NOTE:</b><br/>Clicking 'Save Profile' will record your changes and take you to the next entry.<br/> 
				  </div>
			</TD>
			</TR>
			<TR class="style2">
			  <TD COLSPAN=2>&nbsp;</TD>
			</TR>
			<TR class="style2">
			  <TD COLSPAN=2></TD>
			</TR>
		  </TABLE>

		<p>
	<?php 
		} //end if mysql num_rows != 1 ? yikes
	
	
	} else if (isset($_POST["submit"]) && ($_POST["submit"]) == "Delete Profile") { // delete the entry
		$ID = intval($_REQUEST["ID"]);
		if (isset($_POST["cons_name"])) {
			$s_cons_name = mysql_real_escape_string($_POST["cons_name"]);
		} else {
			$s_cons_name = "";
		}
		//$sql = mysql_query("DELETE FROM cons_list WHERE (cons_id = '$ID')");
		$sql = mysql_query("UPDATE cons_list set 'published' = 0 WHERE (cons_id = '$ID')");
	?>
		<div align="left" class="style2">
			<br/>The following consortium has been deleted: <br><br>
			<b>Name:</b> <?php echo $s_cons_name ?><br>
			<b>Def:</b> <?php echo $ID ?><br><br>
			<a href="index2.php" style="font-weight: bold;">Return</a> to entry list
			<hr/>
	<?php
		//$ID = intval($_REQUEST["ID"]);
		//pull query from current and apply it
		$ID = intval($ID-1);
		$query = mysql_query("SELECT * FROM cons_list WHERE(cons_id='$ID')");
		if (mysql_num_rows($query) != 1) {
				echo "The consortium ID is not in the Database. <P>Please Try Again.";
				echo "<button><a href='index2.php' style='text-decoration: none; color: #333;'>Return to Consortium List</a></button>";
				exit;
			} else {
				$info = mysql_fetch_array($query);
				echo("<h3>Edit ".$info['cons_name']." Def</h3>");
		?>
		</div>
		<FORM METHOD="POST" ACTION="<?php echo($_SERVER['PHP_SELF']) ?>">
		  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
		  <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
		  <TABLE width="638">
			<TR>
			  <TD COLSPAN=2><CENTER>Two</CENTER></TD>
			</TR>
			<TR class="style2">
			  <TD width="83">Name:</TD>
			  <TD width="543"><input name="cons_name" type="text" id="cons_name" value="<?php echo $info['cons_name'] ?>" size="60"></TD>
			</TR>
			<TR class="style2">
			  <TD>Consortium URL</TD>
			  <TD><input type="text" name="cons_url" id="cons_url" value="<?php echo $info['cons_url'] ?>" size="60"></TD>
			</TR>
			<TR class="style2">
			  <TD colspan="2">Check here if there is no link available: <input type="checkbox" name="no_link" id="no_link" value="NoLink" <?php if ($info['no_link'] == 'NoLink') echo 'checked'; ?>></TD>
			</TR>
			<TR class="style2">
			  <TD>Link Desc </TD>
			  <TD><textarea name="link_desc" cols="50" id="link_desc"><?php echo $info['link_desc'] ?></textarea></TD>
			</TR>
			<TR class="style2">
			  <TD>Overview</TD>
			  <TD><textarea name="cons_overview" cols="50" id="cons_overview"><?php echo $info['cons_overview'] ?></textarea></TD>
			</TR>
			<TR class="style2">
			  <TD style="vertical-align: top;"><br/>SPECS</TD>
			  <TD><br/>
				<input type="radio" value="1" name="cons_specs_na" id="cons_specs_na" <?php if ($info['cons_specs_na']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('not','specs');"/>Not Available<br/>
				<input type="radio" value="1" name="cons_specs_avail" id="cons_specs_avail" <?php if ($info['cons_specs_avail']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('avail','specs');"/>Available at <br/>
					<div id="show_specs_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_avail_url" id="cons_specs_avail_url" value="<?php echo $info['cons_specs_avail_url'] ?>" size="42"></div>
				<input type="radio" value="1" name="cons_specs_custom" id="cons_specs_custom" <?php if ($info['cons_specs_custom']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('custom','specs');" />Custom: <br/>
					<div id="show_specs_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_custom_url" id="cons_specs_custom_url" value="<?php echo $info['cons_specs_custom_url'] ?>" size="42">
					 <br/>Description:<br/><textarea type="text" name="cons_specs_custom_desc" id="cons_specs_custom_desc" value="" cols="50"><?php echo $info['cons_specs_custom_desc'] ?></textarea></div>
					<!--<textarea name="cons_specs" cols="50" id="cons_specs" <?php //if ($info['cons_specs_na']== 1 ) {echo "readonly='readonly' style='background-color: #ccc;'";} ?>><?php //echo $info['cons_specs'] ?></textarea></TD>-->
			</TR>
			<TR class="style2">
			  <TD style="vertical-align: top;"><br/>IPR Policy</TD>
			  <TD><br/>
				<input type="radio" value="1" name="cons_ipr_na" id="cons_ipr_na" <?php if ($info['cons_ipr_na']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('not','ipr');"/>Not Available<br/>
				<input type="radio" value="1" name="cons_ipr_avail" id="cons_ipr_avail" <?php if ($info['cons_ipr_avail']== 1 ) {echo "checked='checked'";} ?>onclick="showField('avail','ipr');"/>Available at: <br/>
					<div id="show_ipr_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_avail_url" id="cons_ipr_avail_url" value="<?php echo $info['cons_ipr_avail_url'] ?>" size="42"></div>
				<input type="radio" value="1" name="cons_ipr_custom" id="cons_ipr_custom" <?php if ($info['cons_ipr_custom']== 1 ) {echo "checked='checked'";} ?>onclick="showField('custom','ipr');"/>Custom: <br/>
					<div id="show_ipr_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_custom_url" id="cons_ipr_custom_url" value="<?php echo $info['cons_ipr_custom_url'] ?>" size="42">
					 <br/>Description:<br/><textarea type="text" name="cons_ipr_custom_desc" id="cons_ipr_custom_desc" value="" cols="50"><?php echo $info['cons_ipr_custom_desc'] ?></textarea></div>
					<!--<textarea name="cons_ipr" cols="50" id="cons_ipr" <?php //if ($info['cons_ipr_na']== 1 ) {echo "readonly='readonly' style='background-color: #ccc;'";} ?>><?php //echo $info['cons_ipr'] ?></textarea></TD>-->
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">&nbsp;</TD>
			</TR>
			
			<TR class="style2">
			  <TD>Current Status</TD>
			  <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="cur_stat" type="text" id="cur_stat" value="<?php if (($info['cur_stat'] != 'Active') && ($info['cur_stat'] != 'Inactive')) echo $info['cur_stat'] ?>">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<label for="Active">Active</label> <input type="checkbox" name="cur_stat" id="Active" value="Active" <?php if ($info['cur_stat'] == 'Active') echo 'checked'; ?>>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<label for="Inactive">Inactive</label> <input type="checkbox" name="cur_stat" id="Inactive" value="Inactive" <?php if ($info['cur_stat'] == 'Inactive') echo 'checked'; ?>></TD>
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">&nbsp;</TD>
			</TR>
			
			 <TR class="style2">
			  <TD>Last Updated</TD>
			  <TD><input name="last_updated" type="text" id="last_updated" value="<?php echo $info['last_updated'] ?>" size="60"></TD>
			</TR>
			<TR class="style3">
			  <TD colspan="2">Please enter the date in this format: 0000-00-00.<br>It will be displayed on the page written out as: Month day, year.<br>For example 2010-01-25 will display as January 25, 2010.</TD>
			</TR>
			
			<TR class="style2">
			  <TD>Published</TD>
			  <TD>
				<input type="checkbox" name="published" id="published" value="1" <?php if ($info['published'] == 1) echo "checked='checked'"; ?>>
			  </TD>
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">To delete this Entry, uncheck the "Publish" checkbox. Likewise, check the box to re-publish this entry.</TD>
			</TR>			
			
			<TR class="style2">
			  <TD COLSPAN=2>
			  <div align="center">
				<input name="submit" type="submit" value="Save Profile" style="display: inline-block;">
				</FORM>
				<FORM METHOD="POST" ACTION="<?php echo($_SERVER['PHP_SELF']) ?>" onsubmit="return confirm('Are you sure you want Delete this Profile?');" style="display: inline-block;">
					<INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
					<input name="cons_name" type="hidden" id="cons_name" value="<?php echo $info['cons_name'] ?>" size="60">
					<!--<input class="confirm" name="submit" type="submit" value="Delete Profile">-->
				</FORM>				
					
					<br/><br/><b>*NOTE:</b><br/>Clicking 'Save Profile' will record your changes and take you to the next entry.<br/> 
				  </div>
			</TD>
			</TR>
			<TR class="style2">
			  <TD COLSPAN=2>&nbsp;</TD>
			</TR>
			<TR class="style2">
			  <TD COLSPAN=2></TD>
			</TR>
		  </TABLE>
		</FORM>
		<p>
<?php 
		} //end if mysql num_rows != 1 ? yikes
	}
		
		
	
	if (!isset($_POST["submit"])) {
		$ID = intval($_REQUEST["ID"]);
		$query = mysql_query("SELECT * FROM cons_list WHERE(cons_id='$ID')");

		if (mysql_num_rows($query) != 1) {
				echo "The consortium ID is incorrect<P>Please Try Again.";
				exit;
			} else {
				$info = mysql_fetch_array($query);
				echo("Edit ".$info['cons_name']." Def");
		?>
		</div>
		<FORM METHOD="POST" ACTION="<?php echo($_SERVER['PHP_SELF']) ?>">
		  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
		  <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
		  <TABLE width="638">
			<TR>
			  <TD COLSPAN=2><CENTER>Three</CENTER></TD>
			</TR>
			<TR class="style2">
			  <TD width="83">Name:</TD>
			  <TD width="543"><input name="cons_name" type="text" id="cons_name" value="<?php echo $info['cons_name'] ?>" size="60"></TD>
			</TR>
			<TR class="style2">
			  <TD>Consortium URL</TD>
			  <TD><input type="text" name="cons_url" id="cons_url" value="<?php echo $info['cons_url'] ?>" size="60"></TD>
			</TR>
			<TR class="style2">
			  <TD colspan="2">Check here if there is no link available: <input type="checkbox" name="no_link" id="no_link" value="NoLink" <?php if ($info['no_link'] == 'NoLink') echo 'checked'; ?>></TD>
			</TR>
			<TR class="style2">
			  <TD>Link Desc </TD>
			  <TD><textarea name="link_desc" cols="50" id="link_desc"><?php echo $info['link_desc'] ?></textarea></TD>
			</TR>
			<TR class="style2">
			  <TD>Overview</TD>
			  <TD><textarea name="cons_overview" cols="50" id="cons_overview"><?php echo $info['cons_overview'] ?></textarea></TD>
			</TR>
			<TR class="style2">
			  <TD style="vertical-align: top;"><br/>SPECS</TD>
			  <TD><br/>
				<input type="radio" value="1" name="cons_specs_na" id="cons_specs_na" <?php if ($info['cons_specs_na']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('not','specs');"/>Not Available<br/>
				<input type="radio" value="1" name="cons_specs_avail" id="cons_specs_avail" <?php if ($info['cons_specs_avail']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('avail','specs');"/>Available at <br/>
					<div id="show_specs_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_avail_url" id="cons_specs_avail_url" value="<?php echo $info['cons_specs_avail_url'] ?>" size="42"></div>
				<input type="radio" value="1" name="cons_specs_custom" id="cons_specs_custom" <?php if ($info['cons_specs_custom']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('custom','specs');" />Custom: <br/>
					<div id="show_specs_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_specs_custom_url" id="cons_specs_custom_url" value="<?php echo $info['cons_specs_custom_url'] ?>" size="42">
					 <br/>Description:<br/><textarea type="text" name="cons_specs_custom_desc" id="cons_specs_custom_desc" value="" cols="50"><?php echo $info['cons_specs_custom_desc'] ?></textarea></div>
					<!--<br/>Legacy Specs Description:<br/><textarea name="cons_specs" cols="50" id="cons_specs" <?php if ($info['cons_specs_na']== 1 ) {echo "readonly='readonly' style='background-color: #ccc;'";} ?><?php echo $info['cons_specs'] ?></textarea>-->
				</TD>
			</TR>
			<TR class="style2">
			  <TD style="vertical-align: top;"><br/>IPR Policy</TD>
			  <TD><br/>
				<input type="radio" value="1" name="cons_ipr_na" id="cons_ipr_na" <?php if ($info['cons_ipr_na']== 1 ) {echo "checked='checked'";} ?>  onclick="showField('not','ipr');"/>Not Available<br/>
				<input type="radio" value="1" name="cons_ipr_avail" id="cons_ipr_avail" <?php if ($info['cons_ipr_avail']== 1 ) {echo "checked='checked'";} ?>onclick="showField('avail','ipr');"/>Available at: <br/>
					<div id="show_ipr_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_avail_url" id="cons_ipr_avail_url" value="<?php echo $info['cons_ipr_avail_url'] ?>" size="42"></div>
				<input type="radio" value="1" name="cons_ipr_custom" id="cons_ipr_custom" <?php if ($info['cons_ipr_custom']== 1 ) {echo "checked='checked'";} ?>onclick="showField('custom','ipr');"/>Custom: <br/>
					<div id="show_ipr_custom_URL" style="display: none; padding-left: 30px;">URL: <input type="text" name="cons_ipr_custom_url" id="cons_ipr_custom_url" value="<?php echo $info['cons_ipr_custom_url'] ?>" size="42">
					 <br/>Description:<br/><textarea type="text" name="cons_ipr_custom_desc" id="cons_ipr_custom_desc" value="" cols="50"><?php echo $info['cons_ipr_custom_desc'] ?></textarea></div>
					<!--<br/>Legacy IPR Description:<br/><textarea name="cons_ipr" cols="50" id="cons_ipr" <?php if ($info['cons_ipr_na']== 1 ) {echo "readonly='readonly' style='background-color: #ccc;'";} ?>><?php echo $info['cons_ipr'] ?></textarea>-->
				</TD>
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">&nbsp;</TD>
			</TR>
			
			<TR class="style2">
			  <TD>Current Status</TD>
			  <TD>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="cur_stat" type="text" id="cur_stat" value="<?php if (($info['cur_stat'] != 'Active') && ($info['cur_stat'] != 'Inactive')) echo $info['cur_stat'] ?>">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<label for="Active">Active</label> <input type="checkbox" name="cur_stat" id="Active" value="Active" <?php if ($info['cur_stat'] == 'Active') echo 'checked'; ?>>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<label for="Inactive">Inactive</label> <input type="checkbox" name="cur_stat" id="Inactive" value="Inactive" <?php if ($info['cur_stat'] == 'Inactive') echo 'checked'; ?>></TD>
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">&nbsp;</TD>
			</TR>
			
			 <TR class="style2">
			  <TD>Last Updated</TD>
			  <TD><input name="last_updated" type="text" id="last_updated" value="<?php echo $info['last_updated'] ?>" size="60"></TD>
			</TR>
			<TR class="style3">
			  <TD colspan="2">Please enter the date in this format: 0000-00-00.<br>It will be displayed on the page written out as: Month day, year.<br>For example 2010-01-25 will display as January 25, 2010.</TD>
			</TR>
			
			<TR class="style2">
			  <TD>Published</TD>
			  <TD>
				<input type="checkbox" name="published" id="published" value="1" <?php if ($info['published'] == 1) echo "checked='checked'"; ?>>
			  </TD>
			</TR>
			
			<TR class="style2">
			  <TD colspan="2">To delete this Entry, uncheck the "Publish" checkbox. Likewise, check the box to re-publish this entry.</TD>
			</TR>				
			
			<TR class="style2">
			  <TD COLSPAN=2>
			  <div align="center">
				<input name="submit" type="submit" value="Save Profile" style="display: inline-block;">
				</FORM>
				<FORM METHOD="POST" ACTION="<?php echo($_SERVER['PHP_SELF']) ?>" onsubmit="return confirm('Are you sure you want Delete this Profile?');" style="display: inline-block;">
					<INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
					<input name="cons_name" type="hidden" id="cons_name" value="<?php echo $info['cons_name'] ?>" size="60">
					<!--<input class="confirm" name="submit" type="submit" value="Delete Profile">-->
				</FORM>				
					
					<br/><br/><b>*NOTE:</b><br/>Clicking 'Save Profile' will record your changes and take you to the next entry.<br/> 
				  </div>
			</TD>
			</TR>
			<TR class="style2">
			  <TD COLSPAN=2>&nbsp;</TD>
			</TR>
			<TR class="style2">
			  <TD COLSPAN=2></TD>
			</TR>
		  </TABLE>
		</FORM>
		<p>
<?php 
    }
}
?>
                                </p>
                                <p>&nbsp;</p>
                              </center>
                                <p align="left">
                              <p align="left">&nbsp;</p></td>
                            <td width="6%">&nbsp;</td>
                          </tr>
                        </table>
                          <p align="left"><font size="2" face="Arial, Helvetica, sans-serif">

                            </font>
                            </p>

                          <blockquote><blockquote>&nbsp;</blockquote>

                          </blockquote></td>

                      </tr>

                    </table>

                <div align="center"></div></td>

          </tr>

        </table>

          <blockquote>

            <blockquote>&nbsp;</blockquote>

          </blockquote>

          <b><font color="#009966" face="Arial"><b>

          </b></font></b></td>

    </tr>

  </table>

</body>

</html>