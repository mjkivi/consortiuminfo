<?php
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


?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

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

.unnamed1 {	font-weight: bold;

	color: #FF0000;

	text-decoration: none;

}

.style10 {font-family: Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; font-weight: bold; }

.style2 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

}

.style3 {font-family: verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}

.style25 {font-size: 12px}

-->

</style>

</style>

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
	function formHandler(form){
		var URL = document.form.site.options[document.form.site.selectedIndex].value;
		window.location.href = URL;
	}
// End -->
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

                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> <a href="/links/">Links</a> &gt; <a href="/links/admin/">Admin</a> </b></font></b></font></td>

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
                                <?php

	mysql_connect("localhost", "root", "root");
	mysql_select_db("consor5_clist");

if ($_POST["submit"] == "Edit Profile") {	// save changes
	$ID = intval($_REQUEST["ID"]);
	$s_cons_name = mysql_real_escape_string($_POST["cons_name"]);
	$s_cons_url = mysql_real_escape_string($_POST["cons_url"]);
	$s_link_desc = mysql_real_escape_string($_POST["link_desc"]);
	$s_cons_overview = mysql_real_escape_string($_POST["cons_overview"]);
	$s_cons_specs = mysql_real_escape_string($_POST["cons_specs"]);
	$s_cons_ipr = mysql_real_escape_string($_POST["cons_ipr"]);
	$cur_stat = $_POST["cur_stat"];
	$last_updated = $_POST["last_updated"];
	$no_link = $_POST["no_link"];
	$sql = mysql_query("UPDATE cons_list SET 
		cons_name='$s_cons_name', 
		cons_url='$s_cons_url', 
		link_desc='$s_link_desc', 
		cons_overview='$s_cons_overview', 
		cons_specs='$s_cons_specs',
		cons_ipr='$s_cons_ipr',
		cur_stat='$cur_stat',
		last_updated='$last_updated',
		no_link='$no_link'
		WHERE (cons_id='$ID')");
?>
	<div align="left" class="style2">The consortium information has been updated.<br>
	name: <?php echo $cons_name ?><br>
	def: <?php echo $ID ?><br>
	<a href="/links/admin/index2.php">Return</a> to entry list
<?php
}


else if ($_POST["submit"] == "Delete Profile") {		// delete the entry
	$ID = intval($_REQUEST["ID"]);
	$sql = mysql_query("DELETE FROM cons_list WHERE (cons_id = '$ID')");
?>
	<div align="left" class="style2">The consortium has been deleted.<br>
	name: <?php echo $cons_name ?><br>
	def: <?php echo $ID ?> <br>
	<a href="/links/admin/index2.php">Return</a> to entry list
<?php
}


else {
$ID = intval($_REQUEST["ID"]);
$query = mysql_query("SELECT * FROM cons_list WHERE(cons_id='$ID')");

if (mysql_num_rows($query) != 1) {
        echo "The consortium ID is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysql_fetch_array($query);
        echo("Edit ".$info['cons_name']." Def");
?>
                                </div>
                                <FORM METHOD="POST" ACTION="<?php echo($_SERVER['PHP_SELF']) ?>">
                                  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
                                  <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
                                  <TABLE width="638">
                                    <TR>
                                      <TD COLSPAN=2><CENTER>
                                      </CENTER></TD>
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
                                      <TD>SPECS</TD>
                                      <TD><textarea name="cons_specs" cols="50" id="cons_specs"><?php echo $info['cons_specs'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>IPR Policy</TD>
                                      <TD><textarea name="cons_ipr" cols="50" id="cons_ipr"><?php echo $info['cons_ipr'] ?></textarea></TD>
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
                                      <TD colspan="2">&nbsp;</TD>
                                    </TR>
                                    
                                    <TR class="style2">
                                      <TD COLSPAN=2><div align="center">
                                          <p>
                                            <input name="submit" type="submit" value="Edit Profile">&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="Delete Profile">
                                          </p>
                                          </div></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2>&nbsp;</TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2></TD>
                                    </TR>
                                  </TABLE>
                                </FORM>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
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
