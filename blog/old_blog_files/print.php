<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consortiuminfo.org Standards Blog- Print Page</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="GUNet">


<style type="text/css">

<!--














































  A:visited {color:"blue";}















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
}

.style5 {

	color: #FF0000;

	font-weight: bold;

}

.style7 {

	color: #333399;

	font-weight: bold;

	font-size: 16px;

}

.style10 {color: #FF0000; font-style: italic; font-size: 16px; font-weight: bold; }
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}































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
  <div align="center"><img src="/blog/header.jpg" width="762" height="120"></div></td></tr></table>
</td></tr><tr><td width="100%"><table width="760" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top">
<td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""></td>
<td width="872" bgcolor="#FFFFFF">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#9cbee6"><tr><td bgcolor="#FFFFFF">
<table width="100%" border="0" align="center" cellpadding="8" cellspacing="1" bgcolor="#ffffff"><tr><td height="46">
<center>
  <p align="center" class="style1"><strong><em>The opinions expressed in the Standards Blog are those of the author alone, <br>
  </em></strong><strong><em>and not necessarily those of Gesmer Updegrove LLP </em></strong></p>
  </center></td></tr></table></td></tr></table>
<div align="center"></div>
<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr><td valign="top" bgcolor="#FFFFFF">
<table border="0" cellpadding="0" cellspacing="0" width="99%">
  <tr>
    <td bgcolor="#FFFFFF" class="style1"><a href="/">Home</a> &gt; <a href="/blog/">Blog</a> </td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr><td width="53%" bgcolor="#FFFFFF">
  <span class="style5">&nbsp;&nbsp;[] [] [] <span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif">
  <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_sblog", $db);

$result = mysql_query("SELECT * FROM items WHERE id='".$_GET["ID"]."'", $db);


while ($myrow = mysql_fetch_array($result))

	{
	echo "&nbsp;<span class='style5'>".$myrow["ddate"]."</span>";


}



?>
  </font></strong></span></span></td>
<td width="47%" bgcolor="#FFFFFF"><font class="option">&nbsp;</font></td>
</tr>
<tr valign="top"><td colspan="2" bgcolor="#FFFFFF"><table border="0" width="97%" align="center">
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><h3>
        <span class="style10"><strong><font face="Arial, Helvetica, sans-serif">#</font></strong><span class="style5"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_sblog", $db);

$result = mysql_query("SELECT * FROM items WHERE id='".$_GET["ID"]."'", $db);


while ($myrow = mysql_fetch_array($result))

	{
	echo "<span class='style10'>".$myrow["id"]."</span>&nbsp;";
	echo "<span class='style7'>".$myrow["title"]."</span>";

}



?>
</td>
  </tr>
  <tr><td valign="top"><p class="style1">
    <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_sblog", $db);

$result = mysql_query("SELECT * FROM items WHERE id='".$_GET["ID"]."'", $db);


while ($myrow = mysql_fetch_array($result))

	{
	echo "<span class='style1'>".$myrow["story"]."</span>";

}



?>
  </p>
      <p class="style10"># # # </p>
      <h1 class="style7">Useful Links and Information:</h1>
      <p class="style1">
        <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_sblog", $db);

$result = mysql_query("SELECT * FROM items WHERE id='".$_GET["ID"]."'", $db);


while ($myrow = mysql_fetch_array($result))

	{
	echo "<span class='style1'>".$myrow["ulinks"]."</span>";

}



?>
      <p align="center">&nbsp;</p>
</td></tr></table>
</td></tr></table><br>
</td></tr></table>
</td></tr></table><br>
<br></td><td width="13" bgcolor="#FFFFFF"><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></body>
</html>