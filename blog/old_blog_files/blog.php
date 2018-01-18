<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consortiuminfo.org Standards Blog</title>
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
	background-color: #0E3259;
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
<tr>
  <td height="88" bgcolor="#A5DBC6"><img src="/blog/header.jpg" width="762" height="120"></td>
</tr>
<tr><td width="100%" bgcolor="#D9F0E7">
  <div align="center">
    <?php include '../tab/tab.php'; ?>
  </div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
    </b></font></b></font></span>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="13%" bgcolor="#D9F0E7"><div align="center" class="style1"><a href="/">Home</a> &gt; <a href="/blog/">Blog</a> </div></td>
            <td width="85%" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b><a href="/rss/"><img src="/new/rss.jpg" alt="[Valid RSS]" width="57" height="20" hspace="0" vspace="0" border="0" title="Validate my RSS feed" /></a></b></font></b></font></span></div></td>
            <td width="2%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b>
             </b></font></b></font></span></div></td>
          </tr>
        </table>
        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>        </b></font></b></font></span>
  </div></td></tr></table>
</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top">
<td width="11" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""></td>
<td width="133" bgcolor="#D9F0E7" valign="top"><table width="130" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000"><tr>
  <td width="126" valign="top" bgcolor="#A5DBC6">
    <div align="center" class="style15">Prior Entries </div></td></tr></table>
  <table border="0" cellpadding="0" cellspacing="0" width="129">
    <tr>
      <td width="129" bgcolor="#FFFFFF"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <?php



$db = mysql_connect("localhost", "root", "root");



mysql_select_db("consor5_sblog", $db);



$result = mysql_query("SELECT * FROM items ORDER BY id DESC", $db);

echo "<table border=0>\n";




while ($myrow = mysql_fetch_array($result))



	{
	echo "<tr><td valign='top' width='9%'><big><b>&middot;<big></b></td>";
	echo "<td valign='top' width='91%'><span class='style1'><a href='/blog/blog.php?ID=".$myrow["id"]."'><b>".$myrow["title"]."</a></b></span>";





}


echo "</table>";




?>
      </font></strong></font></strong></span> </td>
    </tr>
  </table>
  <br>
  <br><br></td><td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="594" bgcolor="#D9F0E7">
<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6"><tr><td bgcolor="#FFFFFF">
<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#ffffff"><tr><td height="46">
<center>
  <p align="center" class="style1"><strong><em>The opinions expressed in the Standards Blog are those of the author alone, <br>
  </em></strong><strong><em>and not necessarily those of Gesmer Updegrove LLP </em></strong></p>
  </center></td></tr></table></td></tr></table>
<br><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr><td valign="top" bgcolor="#FFFFFF">
<table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td width="53%" bgcolor="#FFFFFF">
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
<td width="47%" bgcolor="#FFFFFF"><div align="right"><font class="option"><span class="style5"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif">
  <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_sblog", $db);

$result = mysql_query("SELECT * FROM items WHERE id='".$_GET["ID"]."'", $db);


while ($myrow = mysql_fetch_array($result))

	{
	echo "<a href='/blog/print.php?ID=".$myrow["id"]."'><img src='/images/print.jpg' border='0'></a>";


}



?>
</font></strong></span></span></font></div></td>
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

        <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_sblog", $db);

$result = mysql_query("SELECT * FROM items WHERE id='".$_GET["ID"]."'", $db);


while ($myrow = mysql_fetch_array($result))

	{
$ulinks=$myrow["ulinks"];
	if ($ulinks<>""){
	echo  "<p class='style10'># # # </p>";
    echo "<h1 class='style7'>Useful Links and Information:</h1>";
      echo "<p class='style1'>";
	echo "<span class='style1'>".$myrow["ulinks"]."</span>";
	}

}



?>
      <p align="center">
	  </p>
</td></tr></table>
</td></tr></table>
<div align="center"></div>
<div align="center">
  <?php include '../tab/footer.php'; ?>
  <br>
</div></td></tr></table>
</td></tr></table><br>
<br></td><td width="14" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></body>
</html>