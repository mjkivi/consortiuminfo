<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consortiuminfo.org Presents Biff's Technology Bookstore</title>
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
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}
.style12 {font-family: Arial, Helvetica, sans-serif}
.style13 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
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
<tr>
  <td height="88" bgcolor="#A5DBC6"><img src="/images/metalibheader.gif" width="762" height="120"></td>
</tr>
<tr><td width="100%" bgcolor="#D9F0E7">
  <div align="center">
    <?php include '../tab/tab.php'; ?>
  </div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
    </b></font></b></font></span>
        <table width="90%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr valign="top">
                <td width="100%" class="style1"><form name="find" id="find" method="GET" action="/books/search/index.php">
                    <div align="center">Search Books &nbsp;
                        <input name="SEARCH" type="text" id="SEARCH" />
                        <input name="sumbit" type="submit" id="SEARCH" />
                    </div>
                </form></td>
              </tr>
            </table></td>
          </tr>
        </table>
        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>
</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top">
<td width="8" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""></td>
<td width="185" valign="top" bgcolor="#D9F0E7"><table width="178" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
  <td width="174" valign="top" bgcolor="#A5DBC6">
    <div align="center" class="style1">Browse</div></td></tr></table>
<table width="177" border="0" cellpadding="0" cellspacing="1">
<tr><td width="175" bgcolor="#000000"><table width="174"  border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="172" valign="top" bgcolor="#FFFFFF"><span class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("metalib", $db);

$result = mysql_query("SELECT * FROM parent ORDER BY pname ASC", $db);
echo "<table border=0 cellspacing=0 cellpadding=0>\n";


while ($myrow = mysql_fetch_array($result)) 

	{
	echo "<tr><td valign='top' width='9%'><b>&nbsp;&middot;</b></td>";
	echo "<td valign='top' width='91%'><span class='style1'><b><a href='/metalibrary/bycat.php?PID=".$myrow["pid"]."'>".$myrow["pname"]."</a></b></span>";
	

}

echo "</table>";

?>
    </font></strong></font></strong></span></span></td>
  </tr>
</table>
</td>
</tr></table>
<br>
<br>
<table width="178" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="174" valign="top" bgcolor="#A5DBC6"><div align="center" class="style1">Site Links </div></td>
  </tr>
</table>
<table width="99%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td bgcolor="#FFFFFF"><table width="174"  border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#000000">
      <tr>
        <td width="172" valign="top" bgcolor="#FFFFFF"><table width="96%"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="9%" valign="top" class="style1">&nbsp;</td>
              <td width="91%" valign="top" class="style11"><font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif"> <a href="/aboutsite/">About this Site </a> </font></font></td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/news/">Standards News Portal </a></td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/bulletins/">Consortium Standards Bulletin (free/subscribe)</a> </td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/blog/">The Standards Blog </a></td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/links/">Consortium and Standards List/Links </a></td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/essentialguide/">Essential Guide to Consortia and Standard Setting </a></td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/commcenter/">Communications Center </a></td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/about/">About GU </a></td>
            </tr>
            <tr>
              <td valign="top" class="style1">&nbsp;</td>
              <td valign="top" class="style1"><a href="/sitemap/">Sitemap</a></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<center><script language="JavaScript" src="/syn.php"></script></center>
</p>
 </td>
<td width="22" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="547" align="left" bgcolor="#D9F0E7">
<table width="98%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6">
  <tr><td valign="top" bgcolor="#FFFFFF">
<table width="99%" height="64" border="0" cellpadding="8" cellspacing="1" bgcolor="#ffffff">
  <tr><td height="46" class="style1">
<center class="style1">
  <p align="left" class="style1">Welcome to <strong>the ConsortiumInfo.org MetaLibrary</strong>, presented by <a href="http://www.sun.com/">Sun Microsystems </a></p>
  <p align="left"><strong>Test</strong></p>
  </center>
<center class="style1"></center></td>
    </tr></table>
</td>
  </tr></table>
<div align="left"><font color="#DEF3E7" size="-1">.</font></div>
<table width="98%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#000000">
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="1">
  <tr>
  <td valign="top" bgcolor="#FFFFFF"> <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="2%" align="left" valign="top">&nbsp;</td>
      <td width="38%" valign="top"><?php

$db = mysql_connect("localhost", "consor5", "bgt667");
$prevpid="";
mysql_select_db("metalib", $db);

$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid<11 ORDER BY parent.pname, child.sort, child.cname ", $db);

while ($myrow = mysql_fetch_array($result)) 
{
$catsid=$myrow["pid"]."-".$myrow["cid"];
$curpid=$myrow["pid"];
$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
if
($curpid <> $prevpid){ 
echo "<font face='Arial' size='2'>";
echo "<b><br>".$myrow["pname"]."<br></b>";
}
echo "<a href='/metalibrary/cats.php?PID=".$myrow["pid"]."&ID=".$myrow["cid"]."'>".$myrow["cname"]."</a>";
echo "<br>";
$prevpid=$curpid;
}

?></td>
      <td width="16%" valign="top">&nbsp;</td>
      <td width="44%" valign="top">        <?php

$db = mysql_connect("localhost", "consor5", "bgt667");
$prevpid="";
mysql_select_db("metalib", $db);

$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid>=11 ORDER BY parent.pname, child.sort, child.cname ", $db);

while ($myrow = mysql_fetch_array($result)) 
{
$catsid=$myrow["pid"]."-".$myrow["cid"];
$curpid=$myrow["pid"];
$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
if
($curpid <> $prevpid){ 
echo "<font face='Arial' size='2'>";
echo "<b><br>".$myrow["pname"]."<br></b>";
}
echo "<a href='/metalibrary/cats.php?PID=".$myrow["pid"]."&ID=".$myrow["cid"]."'>".$myrow["cname"]."</a>";
echo "<br>";
$prevpid=$curpid;
}

?>
        <div align="left"></div></td>
    </tr>
  </table>
    <div align="center"><br>
       
  
  </div></td>
</tr></table>
</td></tr></table><br>
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
</center>
</body>
</html>