<?php
session_start();
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title>News:</title>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

<META HTTP-EQUIV="EXPIRES" CONTENT="0">

<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">

<META NAME="DISTRIBUTION" CONTENT="GLOBAL">

<META NAME="AUTHOR" CONTENT="GUNet">





<style type="text/css">



<!--































































  A:link {color:"blue";}

  A:link2 {color:"#000000";}































  A:visited {color:"blue";



}































  A:hover {color:"red";}































  A:hover { text-decoration:none; }



.style1 {	font-family: Arial, Helvetica, sans-serif;



	font-size: 12px;



}



body {

	margin-left: 0px;

	margin-top: 4px;

	margin-right: 0px;

	margin-bottom: 0px;

	background-color: #0E3259;

}

body,td,th {

	font-family: Arial, Helvetica, sans-serif;

}































































-->

</style>





</head>



<body text="#000000" link="0000ff">

<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="840">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="762">

<tr><td width="100%" height="88" bgcolor="#A5DBC6">

  <div align="center"><img src="/images/consortiumlist.gif" width="762" height="120"></div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>

    </b></font></b></font></span>

        <table width="100%"  border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="22%" bgcolor="#D9F0E7"><div align="center" class="style1"><font face=arial size=-1>&nbsp;<a
            href="/">Home</a> &gt; Consortium LIst </font></div></td>

            <td width="70%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font><font face="Arial">
                </font></b></font></span></div></td>

            <td width="6%" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="/feed.php"><img src="/news/xml.gif" alt="RSS News Feed" width="36" height="14" border="0"></a></font></b></font></span></div></td>
            <td width="2%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b>

             </b></font></b></font></span></div></td>

          </tr>

        </table>

        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>        </b></font></b></font></span>

  </div></td></tr></table>

</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">

<tr valign="top">

<td width="4" bgcolor="#D9F0E7"></td>

<td width="60" bgcolor="#D9F0E7" valign="top"><div align="right">
          <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
        </div></td><td width="9" bgcolor="#D9F0E7"></td><td width="675" bgcolor="#D9F0E7">

    <table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">

<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr><td valign="top" bgcolor="#FFFFFF">

  <table width="86%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="89%"><p align="left">
          <?php
		  $addentry=$_GET["addentry"];

if (isset($addentry)): //If the user wants to add an entry
?>
        <form action="<?=$PHP_SELF?>" method="post">
        <?php
		//if you're logged in, you get the admin options
		 echo"
		 <table width='520' border='0' cellspacing='0' cellpadding='0'>
              <tr class='style1'>
              <td><span class='style1'>Consortium Name:</span></td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='cons_name' type='text' id='cons_name'>
              </span></td>
            </tr>
            <tr class='style1'>
              <td><span class='style1'>URL:</span></td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='cons_url' type='text' id='cons_url'>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>Link Description:: </td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <textarea name='link_desc' id='link_desc' cols='40' rows='10' wrap id='link_desc'></textarea>
</span></td>
            </tr>
            <tr class='style1'>
              <td>Consortium Overview: </td>
              <td>&nbsp;</td>
              <td><textarea name='cons_overview' id='cons_overview' cols='40' rows='10' wrap id='cons_overview'></textarea></td>
            </tr>
            <tr class='style1'>
              <td>Specifications: </td>
              <td>&nbsp;</td>
              <td><span class='style1'>
               <textarea name='cons_specs' id='cons_specs' cols='40' rows='10' wrap id='cons_specs'></textarea>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>IPR Policy:</td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <textarea name='cons_ipr' cols='50' rows='20' wrap id='cons_ipr'></textarea>
              </span></td>
            </tr>
                    </table>
                  <p align='left' class='style1'>&nbsp;</p>
          <p align='left'>
            <input type='submit' name='submit' value='submit'>
          </p>
		  </form>";

		  ?>

          <?php



else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "root", "root");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}

	// Select the jokes database
	if (! @mysql_select_db("consor5_clist") ) {
	echo( "<P>Unable to locate the db at this time</p>" );
	exit();
	}

	//If a joke has been submitted, add it to the db
	if ($submit == "submit") {
	  // Is magic quotes on?
		  if (get_magic_quotes_gpc()) {
		  // Yes? Strip the added slashes
		  $_REQUEST = array_map('stripslashes', $_REQUEST);
		  $_GET = array_map('stripslashes', $_GET);
		  $_POST = array_map('stripslashes', $_POST);
		  $_COOKIE = array_map('stripslashes', $_COOKIE);
		  }
	$cleancons_name=addslashes(trim($cons_name));
	$cleanlink_desc=addslashes(trim($link_desc));
	$cleancons_overview=addslashes(trim($cons_overview));
	$cleancons_specs=addslashes(trim($cons_specs));
	$cleancons_ipr=addslashes(trim($cons_ipr));
	$sql = "INSERT INTO cons_list SET
			cons_name='$cleancons_name',
			cons_url='$cons_url',
			link_desc='$cleanlink_desc',
			cons_overview='$cleancons_overview',
			cons_specs='$cleancons_specs',
			cons_ipr='$cleancons_ipr',
			adddate=now()";
	if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}

//If an entry has been deleted, remove it
$deleteitem=$_GET["deleteitem"];
if (isset($deleteitem)) {
	$sql = "DELETE FROM cons_list
			WHERE cons_id=$deleteitem";
	if (@mysql_query($sql)) {
	echo("<p>The entry has been deleted.</p>");
} else {
	echo("<p>error deleting entry: " .
	mysql_error() . "</p>");
}
}
if($_SESSION['password'] <>""){
	echo("<p> Here are all the entries<p>" .
		"<a href='$PHP_SELF?addentry=1'>".
		"<font face='Arial' size='3'>Add an entry!</font></a>".
		"</p>");

	//Request the text of all the entries
	$result = @mysql_query("SELECT cons_id, cons_name, cons_url, link_desc, cons_overview, cons_specs, cons_ipr FROM cons_list ORDER BY cons_name ASC LIMIT 500");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each consortium in a paragraph
	while ( $row = @mysql_fetch_array($result) ) {
	$cons_id = $row["cons_id"];
	$cons_name = $row["cons_name"];
	$cons_url = $row["cons_url"];
	$link_desc = $row["link_desc"];
	$cons_overview = $row["cons_overview"];
	$cons_specs = $row["cons_specs"];
	$cons_ipr = $row["cons_ipr"];
	echo("<font face='Arial' size='2'>".
		"<a href='$cons_url'>".
		"<p><b>$cons_name</b>-</a> ".
		//"$link_desc".
		//"<br>".substr($cons_overview,0,100)."...".
		//"<br>".
		//"$cons_specs".
		//"<br>;".
		//"$cons_ipr".
		"$addentry".
		"<a href='/links/admin/catadd.php?addcat=$cons_id'>".
		"Add this entry to a category</a>&nbsp;| ".
		"<a href='/links/admin/edit.php?ID=$cons_id'>" .
		"Edit this entry</a>&nbsp;| ".
		"<a href='/links/admin/index2.php?deleteitem=$cons_id'>" .
		"Delete this entry</a> ".
		"<p>");
}

	//When clicked the link will load this page
		echo("<p><a href='$PHP_SELF?addentry=1'>" .
			"Add an entry!</a></p>");
			}
	endif;

?>
          <p align="left">&nbsp;</p></td>
      <td width="6%">&nbsp;</td>
    </tr>
  </table>










  <br>

</td></tr></table>

</td></tr></table><br>

<br></td><td width="14" bgcolor="#D9F0E7"><br><br></td></tr></table>

<br><center><font class="footmsg">&nbsp;

</font>

</body>

</html>