<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>The Consortiuminfo.org MetaLibrary In Partnership with Sun Microsystems</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="GUNet">


<style type="text/css">

<!--































  A:link {color:"blue";}















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

<body text="#000000" link="0000ff"><form name="find" id="find" method="GET" action="/metalibrary/search/index.php">
<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">
<tr><td width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="840">
<tr><td width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="762">
<tr>
  <td height="88" bgcolor="#A5DBC6"><img src="/images/newsheader.gif" width="762" height="120"></td>
</tr>
<tr><td width="100%" bgcolor="#D9F0E7">
  <div align="center">
    <?php include 'tab/tab.php'; ?>
  </div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
    </b></font></b></font></span>
        <table width="90%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>
</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top">
<td width="8" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""></td>
<td width="10" valign="top" bgcolor="#D9F0E7"><br>
  <br>
  </p>
</td>
<td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="734" align="left" bgcolor="#D9F0E7">
<table width="98%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6">
  <tr><td valign="top" bgcolor="#FFFFFF">
<table width="99%" height="64" border="0" cellpadding="8" cellspacing="1" bgcolor="#ffffff">
  <tr><td height="46" class="style1">
<center class="style1">
  <p align="left"><strong> Statistics Page </strong></p>
  <p align="left"><strong>MetaLibrary<br>
  </strong>The MetaLibrary was launched on February 16, 2005. &nbsp;It can currently link you to <font size="2" face="Arial, Helvetica, sans-serif">
    <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("library", $db);

$result = mysql_query("SELECT COUNT(*) AS Total FROM entries", $db);

while ($myrow = mysql_fetch_array($result)) 

	{


		echo "<font size=2><i><b>".$myrow["Total"]."</i></b>";

	

}







?>
  </font> articles.
</p>
  <p align="left"><strong>News</strong><br>
    The ConsortiumInfo.org News Portal currently links to <em><font size="2" face="Arial, Helvetica, sans-serif">
    <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("news", $db);

$result = mysql_query("SELECT COUNT(*) AS Total FROM items", $db);

while ($myrow = mysql_fetch_array($result)) 

	{


		echo "<font size=2><b>".$myrow["Total"]."</b>";

	

}







?>
    </font></em>news stories. </p>
  <p align="left"><strong>Consortium List</strong><br>
    The Consortium and Standards list currently links to <em><font size="2" face="Arial, Helvetica, sans-serif">
    <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT COUNT(*) AS Total FROM cons_list", $db);

while ($myrow = mysql_fetch_array($result)) 

	{


		echo "<font size=2><b>".$myrow["Total"]."</b>";

	

}







?>
    </font></em>consortia and standard setting organizations. </p>
  <p align="left"><strong>Blog</strong><br>
    The Standards Blog currently has <em><font size="2" face="Arial, Helvetica, sans-serif">
    <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("sblog", $db);

$result = mysql_query("SELECT COUNT(*) AS Total FROM items", $db);

while ($myrow = mysql_fetch_array($result)) 

	{


		echo "<font size=2><b>".$myrow["Total"]."</b>";

	

}







?>
</font></em><font size="2" face="Arial, Helvetica, sans-serif">posts<em>. </em></font></p>
</center>
<center class="style1"></center></td>
    </tr></table>
</td>
  </tr></table>
<div align="left"><font color="#DEF3E7" size="-1">.</font></div>
<br>
<br><br>
<br></td>
</tr>
<tr valign="top">
  <td bgcolor="#D9F0E7">&nbsp;</td>
  <td bgcolor="#D9F0E7" valign="top">&nbsp;</td>
  <td bgcolor="#D9F0E7">&nbsp;</td>
  <td align="left" bgcolor="#D9F0E7">&nbsp;</td>
</tr>
<tr valign="top">
  <td bgcolor="#D9F0E7">&nbsp;</td>
  <td bgcolor="#D9F0E7" valign="top">&nbsp;</td>
  <td bgcolor="#D9F0E7">&nbsp;</td>
  <td align="left" bgcolor="#D9F0E7"><div align="center"> </div></td>
</tr>
</table>
<br><center><font class="footmsg">
</font>
</center></form>
</body>
</html>