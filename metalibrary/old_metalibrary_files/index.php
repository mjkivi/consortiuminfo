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
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}































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
  <td height="88" bgcolor="#A5DBC6"><?php include 'logo.php'; ?></td>
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
                <td width="100%" class="style1">
                    <div align="center">Search Articles&nbsp;
                        <input name="SEARCH" type="text" id="SEARCH" />
                        <input name="sumbit" type="submit" id="SEARCH" />
                    </div>
                </td>
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
    <div align="center" class="style1">Browse</div></td></tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><span class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
      &nbsp;
      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_library", $db);

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
  <table width="178" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="174" valign="top" bgcolor="#FFFFFF"><div align="center"><a href="/bulletins/"><img src="/images/csbsm.gif" width="177" height="75" border="0"><br>
        </a>
      </div>
        <table width="100%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
          <tr>
            <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="4%" valign="top">&nbsp;</td>
                  <td width="98%"><a href="/books/"><img src="/images/biffssm.gif" width="177" height="75" border="0"></a></td>
                </tr>
            </table></td>
          </tr>
        </table></td>
    </tr>
  </table>


  <table width="99%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td bgcolor="#A5DBC6"><div align="center"><span class="style1">Site Links </span></div></td>
  </tr>
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
              <td valign="top" class="style1"><a href="/links/">Standard Setting Organization and Standards List</a></td>
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

  <table width="178" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="174" valign="top" bgcolor="#FFFFFF"><a href="/books/"></a></td>
  </tr>
</table> </td>
<td width="22" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="547" align="left" bgcolor="#D9F0E7">
<table width="98%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6">
  <tr><td valign="top" bgcolor="#FFFFFF">
<table width="99%" height="64" border="0" cellpadding="8" cellspacing="1" bgcolor="#ffffff">
  <tr><td height="46" class="style1">
<center class="style1">
  <p align="left"> Welcome to the <strong>ConsortiumInfo.org Standards MetaLibrary. </strong>The MetaLibrary is the only on-line research resource focusing exclusively on standards and standard setting. To learn more about the MetaLibrary, click <a href="/metalibrary/faq/">here</a>. If you know of a suitable on-line article that is not listed, or wish to submit an article for us to host, or otherwise would like to help, please click <a href="/metalibrary/help.php">here.</a> </p>
  <p align="left"> The MetaLibrary is made possible through a generous grant from <strong><em>Sun Microsystems</em></strong> and the support of <strong><em>Gesmer Updegrove LLP</em></strong>. To learn more about Sun and its commitment to standards and standard setting, see <a href="http://www.sun.com/standards/" target="_off">Standards at Sun</a>. To learn more about Gesmer Updegrove&rsquo;s involvement in the standards area, see the <a href="http://www.gesmer.com/practice_areas/consortium.php">Consortium and Standard Setting</a>  section of the firm website. </p>
  <div align="left">
    <p><em> The MetaLibrary was launched on February 16, 2005. &nbsp;It can currently link you to <font size="2" face="Arial, Helvetica, sans-serif">
      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_library", $db);

$result = mysql_query("SELECT COUNT(*) AS Total FROM entries", $db);

while ($myrow = mysql_fetch_array($result)) 

	{


		echo "<font size=2>".$myrow["Total"]."";

	

}







?>
      </font> articles.</em>
      <em>To see the 50 most accessed articles in the Metalibrary, see <a href="/metalibrary/top50.php">Top 50 List</a>. </em></p>
    <p><em>To view new material, see <a href="/metalibrary/newest.php">Recent Additions</a> to the MetaLibrary. To install an automatic RSS alert on your computer, see <a href="/rss/">RSS Feed Installation </a></em></p>
  </div>
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
mysql_select_db("consor5_library", $db);

$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid<9 ORDER BY parent.pname, child.sort, child.cname ", $db);

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
echo "<a href='/metalibrary/bycat.php?PID=".$myrow["pid"]."'>All Titles</a><br>";
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
mysql_select_db("consor5_library", $db);

$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid>=9 ORDER BY parent.pname, child.sort, child.cname ", $db);

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
echo "<a href='/metalibrary/bycat.php?PID=".$myrow["pid"]."'>All Titles</a><br>";
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
</center></form>
<table border=0 cellspacing=0 cellpadding=0 align=center>
  <script language="javascript">
var success=0; cRef=""; cRefType=""; cPage="";
var L10qstr,L10pc,L10ref,L10a,L10pg; L10pg=document.URL.toString(); L10ref=document.referrer;
if(top.document.location==document.referrer || (document.referrer == "" && top.document.location != "")) {L10ref=top.document.referrer;}
L10qStr = "pg="+escape(L10pg)+"&ref="+escape(L10ref)+"&os="+escape(navigator.userAgent)+"&nn="+escape(navigator.appName)+"&nv="+escape(navigator.appVersion)+"&nl="+escape(navigator.language)+"&sl="+escape(navigator.systemLanguage)+"&sa="+success+"&cR="+escape(cRef)+"&cRT="+escape(cRefType)+"&cPg="+escape(cPage);
if(navigator.appVersion.substring(0,1) > "3") { L10d = new Date(); L10qStr = L10qStr+"&cd="+screen.colorDepth+"&sx="+screen.width+"&sy="+screen.height+"&tz="+L10d.getTimezoneOffset();}
<!-- The L10 Hit Counter logo and links must not be removed or altered -->
if((location.href.substr(0,6)=="https:") || (location.href.substr(0,6)=="HTTPS:")) { L10pc="https"; } else { L10pc="http"; }
document.write('<tr><td><img border=0 hspace=0 vspace=0 width=25 height=25 src="'+L10pc+'://consortiuminfo.org/L10Apps/L10HC_Counter.php?'+L10qStr+'" alt="LevelTen Hit Counter 3.15"></td>');
</script>
  <noscript>
  <tr>
    <td><img border=0 hspace=0 vspace=0 width=25 height=25 src="http://consortiuminfo.org/L10Apps/L10HC_Counter.php?acct=." alt="L10 Web Stats Reporter 3.15"></td>
  </noscript>
  <!-- The credit logos must not be removed -->
  <td><img border='0' src='http://consortiuminfo.org/L10Apps/L10HC_Img_R.gif' width='70' height='25' alt='LevelTen Hit Counter - Free PHP Web Analytics Script'></td>
  </tr><tr>
    <td colspan=2><img border='0' src='http://consortiuminfo.org/L10Apps/L10HC_Img_B.gif' width='95' height='9' alt='LevelTen dallas web development firm - website design, flash, graphics & marketing'></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>