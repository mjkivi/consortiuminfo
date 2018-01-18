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
.style14 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }































































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

  <table width="95%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="95%" valign="top"><div align="left">
          <div id="content">
            <div class="story">
              <div>
                <p>
                  <?php
if (isset($addcat)): //If the user wants to add an entry
?>
                <form action="<?=$PHP_SELF?>" method="post">
                  <p class="style1">Category</p>
                  <p class="style1">ID:<?php echo "$addcat" ?><br>
                  Headline: <font size="2" face="Arial, Helvetica, sans-serif">
                  <?php

$db = mysql_connect("localhost", "consor5", "c0n$0r667");

mysql_select_db("news", $db);

$result = mysql_query("SELECT * FROM items where $addcat=items.ID", $db);

echo "<table border=0>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result))

	{

	echo "<tr><td><b><font size=2>".$myrow["headline"]."</b><p>";


}

echo "</TABLE>";





?>
                  <br>
                  Flag: <font size="2" face="Arial, Helvetica, sans-serif">
                  <?php

$db = mysql_connect("localhost", "consor5", "c0n$0r667");

mysql_select_db("news", $db);

$result = mysql_query("SELECT * FROM items where $addcat=items.ID", $db);

echo "<table border=0>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result))

	{

	echo "<tr><td><b><font size=2>".$myrow["flag"]."</b>";


}

echo "</TABLE>";





?>
                  <br>
                  In Categories: <font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif">
                  <?php

$db = mysql_connect("localhost", "consor5", "c0n$0r667");

mysql_select_db("library", $db);

$result = mysql_query("SELECT  cats.cid, cats.cat, items.id, cat_lookup.cid, cat_lookup.iid FROM ((cats INNER JOIN cat_lookup on cats.cid = cat_lookup.cid) INNER JOIN items on cat_lookup.iid = items.ID)  WHERE $addcat=items.ID ORDER BY cats.cat", $db);

echo "<table border=0>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result))

	{

	echo "<tr><td><b><font size=2>".$myrow["cat"]."</b><p>";


}

echo "</TABLE>";





?>
                  </font></font>                  </font></font></p>
                  <p class="style1">&nbsp; </p>
                  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="30%" class="style1">New Consortia
                          <input name="iid" type="hidden" id="iid" value="<?php echo"$addcat"?>">
                      </td>
                      <td width="4%" class="style1"><input name="cid" type="checkbox" id="cid" value="1">
                      </td>
                      <td width="66%" class="style1"><strong>1</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">New Standards Etc
                        <input name="iid2" type="hidden" id="iid2" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="2">
                      </td>
                      <td class="style1"><strong>2</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">New Initiatives
                          <input name="iid3" type="hidden" id="iid3" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="3">
                      </td>
                      <td class="style1"><strong>3</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Open Source
                          <input name="iid42" type="hidden" id="iid42" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="5">
                      </td>
                      <td class="style1"><strong>5</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Legislation &amp; Advocacy
                          <input name="iid43" type="hidden" id="iid43" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="6">
                      </td>
                      <td class="style1"><strong>6</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Mergers, Withdrawals
                        <input name="iid44" type="hidden" id="iid44" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="7">
                      </td>
                      <td class="style1"><strong>7</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Miscellaneous
                          <input name="iid48" type="hidden" id="iid48" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="11">
                      </td>
                      <td class="style1"><strong>11</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Standards and Society
                          <input name="iid49" type="hidden" id="iid49" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="12">
                      </td>
                      <td class="style1"><strong>12</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Intellectual Property Issues
                          <input name="iid410" type="hidden" id="iid410" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="14">
                      </td>
                      <td class="style1"><strong>14</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Story Updates
                          <input name="iid411" type="hidden" id="iid411" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="15">
                      </td>
                      <td class="style1"><strong>15</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Who's Doing What to Whom
                          <input name="iid413" type="hidden" id="iid413" value="<?php echo"$addcat"?>">
                      </td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="17">
                      </td>
                      <td class="style1"><strong>17</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Standards &amp; Your Business
                          <input name="iid4132" type="hidden" id="iid4132" value="<?php echo"$addcat"?>"></td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="18"></td>
                      <td class="style1"><strong>18</strong></td>
                    </tr>
                    <tr>
                      <td class="style1">Standards in Action
                        <input name="iid4132" type="hidden" id="iid4132" value="<?php echo"$addcat"?>"></td>
                      <td class="style1"><input name="cid" type="checkbox" id="cid" value="20"></td>
                      <td class="style14">20</td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                  <p>
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
	$sql = "INSERT INTO cat_lookup SET
			iid='$iid',
			cid='$cid'";
	if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}

	//Request the text of all the jokes
	$result = @mysql_query("SELECT * FROM items ORDER BY ID DESC");
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
	$source = $row["source"];
	$date1 = $row["date1"];
	$date2 = $row["date2"];
	$story = $row["story"];
	echo("<font face='Arial' size='2'>".
		"<b>$ID</b>&nbsp;<i>$its</i><br> ".
		"<a href='$link1'> ".
		"<p><b>$headline</b>-</a> ".
		"<br>$source".
		"&nbsp;".
		"$date1".
		"&nbsp;".
		"$story".
		"<a href='/news/admin/edit.php?ID=$ID'>" .
		"Edit this entry</a>&nbsp;| ".
		"<a href='$PHP_SELF?addcat=$ID'>" .
		"Add to a category</a></p>");
}

	//When clicked the link will load this page
		echo("<p><a href='/news/admin/index2.php'>" .
			"Add an entry!</a></p>");

	endif;
?>
              </div>
            </div>
          </div>
          <!--end content -->
          <!--end navbar -->
          <div id="siteInfo"> </div>
          <br>
      </div></td>
      <td width="0%">&nbsp;</td>
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