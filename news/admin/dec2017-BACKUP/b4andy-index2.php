<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

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

.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style13 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }































































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

  <div align="center"><img src="/images/newsheader.gif" width="762" height="120"></div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>

    </b></font></b></font></span>

        <table width="100%"  border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="17%" bgcolor="#D9F0E7"><div align="center" class="style1"><font face=arial size=-1>&nbsp;<a
            href="/">Home</a> &gt;<b> </b>News<b> </b></font></div></td>

            <td width="75%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font><font face="Arial">
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

<td width="140" bgcolor="#D9F0E7" valign="top"><table width="140" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="140" bgcolor="#FFFFFF"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <?php include('../menu.php'); ?>
      </font></strong></font></strong></span> </td>
    </tr>
  </table>
        <div align="right">
          <table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center"></div></td>
            </tr>
          </table>
          <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
        </div></td><td width="10" bgcolor="#D9F0E7"></td><td width="594" bgcolor="#D9F0E7">

    <table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">

<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr><td valign="top" bgcolor="#FFFFFF">

  <table width="86%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="89%"><p align="left">
          <?php
if (isset($addentry)): //If the user wants to add an entry
?>
        <form action="<?=$PHP_SELF?>" method="post">
          <p align="left" class="style1">Italics: Only Add here if there is a comment. </p>
          <p align="left" class="style1">
            <textarea name="its" id="textarea"></textarea>
          </p>
          <p align="left" class="style1">Title:
              <input name="headline" type="text" id="headline2">
        The headline of the news story </p>
          <p align="left" class="style1">Author:
              <input name="author" type="text" id="author">
        If there is an author enter the name here. Example: &lt;/br&gt;Andy Updegrove </p>
          <p align="left" class="style1">Source:
              <input name="source" type="text" id="source">
        The source of the article </p>
          <p align="left" class="style1">Display Date:
              <input name="date1" type="text" id="date1">
          </p>
          <p align="left" class="style1">Real Date:
              <input name="date2" type="text" id="date2">
        Must be in the format of 2004-02-22 </p>
          <p align="left" class="style1">Story<br />
              <textarea name="story" cols="40" rows="10" wrap id="story">
                          </textarea>
          </p>
          <p align="left" class="style1">Short Description (for homepage, if applicable) </p>
          <p align="left" class="style1">
            <textarea name="short_story" cols="40" rows="5" wrap id="short_story">
                            </textarea>
          </p>
          <p align="left" class="style1">Link:
              <input name="link1" type="text" id="link1">
          </p>
          <p align="left" class="style1">Link 2
              <input name="link2" type="text" id="link2">
              <br />
          </p>
          <p align="left" class="style1">Should this entry appear on the home page?&nbsp;&nbsp;&nbsp;
              <input name="hp" type="checkbox" id="hp" value="1">
        Yes </p>
          <p align="left" class="style1">Flag: </p>
          <span class="style1">
          <?php
				$db = mysql_connect("localhost", "consor5", "c0n$0r667");
				mysql_select_db("news", $db);
				$result = mysql_query("SELECT cid, cat FROM cats ORDER BY cat ASC", $db);
				echo "<select name=flag>";
				while ($myrow = mysql_fetch_array ($result))
				{
				echo "<option value =".$myrow["cid"].">".$myrow["cat"]."</option>";
				}
				echo "</select>"
?>
          </span>
          <p align="left" class="style1">
            <input name="postdate" type="hidden" id="<?php echo $today = date("Y-m-j"); ?>">
          </p>
          <p align="left" class="style1">&nbsp;</p>
          <p align="left">
            <input type="submit" name="submitjoke" value="SUBMIT" />
          </p>
		  </form>
          <?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "consor5", "c0n$0r667");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}

	// Select the jokes database
	if (! @mysql_select_db("news") ) {
	echo( "<P>Unable to locate the db at this time</p>" );
	exit();
	}

	//If a joke has been submitted, add it to the db
	if ($submitjoke == "SUBMIT") {
	$cleanits=addslashes(trim($HTTP_POST_VARS['its']));
	$cleanheadline=addslashes(trim($headline));
	$cleanauthor=addslashes(trim($author));
	$cleansource=addslashes(trim($source));
	$cleanshortstory=addslashes(trim($short_story));
	$cleanstory=addslashes(trim($story));
	$sql = "INSERT INTO items SET
			ID='$ID',
			its='$cleanits',
			headline='$cleanheadline',
			author='$cleanauthor',
			source='$cleansource',
			date1='$date1',
			date2='$date2',
			postdate=CURDATE(),
			link1='$link1',
			link2='$link2',
			hp='$hp',
			flag='$flag',
			short_story='$cleanshortstory',
			story='$cleanstory'";
	if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}

//If an entry has been deleted, remove it
if (isset($deleteitem)) {
	$sql = "DELETE FROM items
			WHERE ID=$deleteitem";
	if (@mysql_query($sql)) {
	echo("<p>The entry has been deleted.</p>");
} else {
	echo("<p>error deleting entry: " .
	mysql_error() . "</p>");
}
}
	echo("<p> Here are all the entries<p>" .
		"<a href='$PHP_SELF?addentry=1'>".
		"<font face='Arial' size='3'>Add an entry!</font></a>".
		"</p>");

	//Request the text of all the jokes
	$result = @mysql_query("SELECT * FROM items ORDER BY ID DESC LIMIT 0,50");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each joke in a paragraph
	while ( $row = mysql_fetch_array($result) ) {
	$its = $row["its"];
	$ID = $row["ID"];
	$headline = $row["headline"];
	$author = $row["author"];
	$link1 = $row["link1"];
	$link2 = $row["link2"];
	$source = $row["source"];
	$date1 = $row["date1"];
	$date2 = $row["date2"];
	$story = $row["story"];
	echo("<font face='Arial' size='2'>".
		"<b>$ID</b>&nbsp;<i>$its</i><br> ".
		"<a href='$link1'>".
		"<p><b>$headline</b>-</a> ".
		"<b>$author</b>".
		"<br>$source".
		"&nbsp;".
		"$date1".
		"&nbsp;".
		"$story".
		"<a href='/news/admin/catadd.php?addcat=$ID'>".
		"Add this entry to a category</a>&nbsp;| ".
		"<a href='/news/admin/edit.php?ID=$ID'>" .
		"Edit this entry</a>&nbsp;| ".
		"<p>");
}

	//When clicked the link will load this page
		echo("<p><a href='$PHP_SELF?addentry=1'>" .
			"Add an entry!</a></p>");

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
 <!-- Start Superstats code version 3.0b.  Copyright 1997-2001 MyComputer.com, Inc. More info available at http://www.mycomputer.com -->
    <script language="JavaScript">/* You may give each page an identifying name, server, and channel on the next lines. */var pageName = "ALL NEWS";/**** DO NOT ALTER ANYTHING BELOW THIS LINE! ****/var code = ' '; </script>
    <script src="http://code.superstats.com/code/ss/lgu/0/30b"></script>
    <script language="JavaScript">br = navigator.appName + parseInt(navigator.appVersion);if (code != ' ' || br == 'Netscape2') document.write(code);else document.write(''+ ' <im'+'g'+ ' src="http://stats.superstats.com/b/ss/lgu/1'+ '?pageName=' + escape(pageName) + '" border=0>');document.write('<'); document.write('!-- ');</script>
    </b></font></b></font></b>
  <p><b><font color="#009966" face="Arial"><b><font color="#009966" face="Arial"><b><noscript><img src="http://stats.superstats.com/b/ss/lgu/1" border=0></noscript>
    <script language="JavaScript">document.write(' --'); document.write('>');</script>
    <!-- End Superstats tracking code. -->
</body>

</html>