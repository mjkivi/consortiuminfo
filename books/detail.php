<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php

$db = mysql_connect("localhost", "root", "root");
$prevpid="";
mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT * FROM books WHERE books.ID='$BID'", $db);

while ($myrow = mysql_fetch_array($result))
{
echo "<title>ConsortiumInfo.org Standards Bookstore-".$myrow["TITLE"]."</title>";
}

?>
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
  <td height="88" bgcolor="#A5DBC6"><img src="/images/tabbed.gif" width="762" height="121"></td>
</tr>
<tr><td width="100%" bgcolor="#A5DBC6">
  <div align="center">
    <?php include '../tab/tab.php'; ?>
</div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
    </b></font></b></font></span>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20%" bgcolor="#D9F0E7"><div align="center" class="style1"><a href="/">Home</a> &gt; &nbsp;<a href="/books/">Bookstore</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
            <td width="78%" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b></b></font></b></font></span></div></td>
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
    <div align="center" class="style1">Subcategories</div></td></tr></table>
<table width="133" border="0" cellpadding="0" cellspacing="1">
<tr><td width="133" bgcolor="#000000"><table width="129"  border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="127" valign="top" bgcolor="#FFFFFF"><table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr valign="top">
        <td class="style1">&nbsp;</td>
        <td class="style1"><a href="/books/">See All Books </a></td>
      </tr>
      <tr valign="top">
        <td width="9%" class="style1">&nbsp;</td>
        <td width="91%" class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT * FROM parent ORDER BY pname ASC", $db);


while ($myrow = mysql_fetch_array($result))

	{
	echo "<span class='style1'><a href='/books/bycat.php?PID=".$myrow["pid"]."'>".$myrow["pname"]."</a></span><br>";


}



?>
        </font></strong></font></strong>        </font></strong></font></strong> </font></strong></font></strong></span></td>
      </tr>
    </table></td>
  </tr>
</table>
</td>
</tr></table><br>
<table width="99%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td bgcolor="#A5DBC6"> <div align="center" class="style11">Links </div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style11">&nbsp;&nbsp;<a href="/subscribe/">Subscribe to Bulletins  </a></span><br></td>
  </tr>
</table>
<br></td><td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="594" bgcolor="#D9F0E7">
<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6"><tr><td bgcolor="#FFFFFF">
<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#ffffff"><tr><td height="46">
<center>
  <p align="center" class="style1">
    <?php

$db = mysql_connect("localhost", "root", "root");
$prevpid="";
mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT * FROM books WHERE books.ID='$BID'", $db);

while ($myrow = mysql_fetch_array($result))
{
echo "<font face='Arial' size='2'>";
echo "<b><br>".$myrow["TITLE"]."<br></b>";
}

?>
  </p>
  </center></td></tr></table></td></tr></table>
<br><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr>
  <td valign="top" bgcolor="#FFFFFF"> <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td width="31%"><span class="style1">
        <?php

$db = mysql_connect("localhost", "root", "root");
$prevpid="";
mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT * FROM books WHERE books.ID='$BID'", $db);

while ($myrow = mysql_fetch_array($result))
{
echo "<font face='Arial' size='2'>";
echo "<b><a href='".$myrow["LINK"]."'><img src='".$myrow["IMG"]."'></a></b>";
}

?>
      </span></td>
      <td width="69%"><span class="style1">
        <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT * FROM books WHERE books.ID='$BID'", $db);


while ($myrow = mysql_fetch_array($result))

	{
	$DESCR=$myrow["DESCR"];
	$pagenos=$myrow["PAGES"];
	$PRICE=$myrow["PRICE"];
	echo "<b><a href='".$myrow["LINK"]."'><span class='style1'>".$myrow["TITLE"]."</span></a></b><br>";
	echo "<b> <span class='style1'>ISBN:&nbsp;</b>".$myrow["ISBN"]."</span><br>";
	echo "<b><span class='style1'>Author:</b>&nbsp;".$myrow["AUTHOR"]."</span><br>";
	if
($pagenos > 0){
	echo "<b><span class='style1'>Pages:</b>&nbsp;$pagenos</span><br>";
	}
	echo "<b><span class='style1'>Copyright Date:</b>&nbsp;".$myrow["COPY"].";</span><br>";
	if
	($PRICE > 0){
	echo "<b><span class='style1'>Price:</b>&nbsp;".$myrow["PRICE"]."</span><p><p><p>";
	}
	if
	($DESCR <>""){
	echo "<b><br><span class='style1'>Description:</b>&nbsp;".$myrow["DESCR"]."</span><p>";
	}
}



?>
      </span></td>
    </tr>
  </table>
    <br>
</td>
</tr></table>
</td></tr></table><br>
<br></td><td width="14" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></body>
</html>