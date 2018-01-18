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
<table border="0" cellpadding="0" cellspacing="0" width="806">
<tr>
  <td height="88" bgcolor="#A5DBC6"><div align="center"><img src="/images/tabbed.gif" width="762" height="121"></div></td>
</tr>
<tr><td width="100%" bgcolor="#A5DBC6">
  <div align="center">
    <?php include '../tab/tab.php'; ?>
  </div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
    </b></font></b></font></span>
        <table width="90%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="find" id="find" method="GET" action="/books/search/index.php"><tr valign="top">
                <td width="100%" class="style1">
                    <div align="center">Search Books &nbsp;
                        <input name="SEARCH" type="text" id="SEARCH" />
                        <input name="sumbit" type="submit" id="SEARCH" />
                    </div>
                </td>
              </tr></form>
            </table></td>
          </tr>
        </table>
        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>
</td></tr><tr><td width="100%"><table width="788" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top">
<td width="8" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""></td>
<td width="148" valign="top" bgcolor="#D9F0E7"><table width="146" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
  <td width="147 valign="top" bgcolor="#A5DBC6">
    <div align="center" class="style1">Browse</div></td></tr></table>
<table width="147" border="0" align="center" cellpadding="0" cellspacing="1">
<tr><td width="146" bgcolor="#000000"><table width="146"  border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="146" valign="top" bgcolor="#FFFFFF"><span class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
      <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT * FROM parent ORDER BY pname ASC", $db);
echo "<table border=0 cellspacing=0 cellpadding=0>\n";


while ($myrow = mysql_fetch_array($result))

	{
	echo "<tr><td valign='top' width='9%'><b>&nbsp;&middot;</b></td>";
	echo "<td valign='top' width='80%'><span class='style1'><b><a href='/books/bycat.php?PID=".$myrow["pid"]."'>".$myrow["pname"]."</a></b></span>";


}

echo "</table>";

?>
    </font></strong></font></strong></span></span></td>
  </tr>
</table>
</td>
</tr></table>
<br>
<center>
  <table width="146"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">&nbsp;</td>
            <td>
              <?php include '../includes/googleads.php'; ?>
              <br>
              <?php include '../includes/amazoninc.php'; ?>
              <br>
              <?php include '../includes/googleads.php'; ?></td>
          </tr>
          <tr>
            <td width="4%" valign="top">&nbsp;</td>
            <td width="98%"><script type="text/javascript"><!--
google_ad_client = "pub-2731496462288704";
google_ad_width = 120;
google_ad_height = 600;
google_ad_format = "120x600_as";
google_ad_channel ="";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "0000FF";
google_color_url = "206260";
google_color_text = "000000";
//--></script>
                <script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script></td>
          </tr>
        </table>
          <script type="text/javascript"><!--
google_ad_client = "pub-2731496462288704";
google_ad_width = 120;
google_ad_height = 600;
google_ad_format = "120x600_as";
google_ad_channel ="";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "0000FF";
google_color_url = "206260";
google_color_text = "000000";
//--></script>
      </td>
    </tr>
  </table>
  </center></p></td>
<td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td>
<td width="622" align="left" bgcolor="#D9F0E7">
<table width="94%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6">
  <tr><td valign="top" bgcolor="#FFFFFF">
<table width="100%" height="95" border="0" cellpadding="2" cellspacing="0" bgcolor="#ffffff">
  <tr><td width="19%" height="46" valign="top" class="style1">
<center class="style1">
<iframe src="http://rcm.amazon.com/e/cm?t=biffstechnolo-20&o=1&p=8&l=as1&asins=0321321847&fc1=000000&IS2=1&lt1=_blank&lc1=0000ff&bc1=000000&bg1=ffffff&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
  </center>
</td>
    <td width="19%" valign="top" class="style1"><iframe src="http://rcm.amazon.com/e/cm?t=biffstechnolo-20&o=1&p=8&l=as1&asins=1932735003&fc1=000000&IS2=1&lt1=_blank&lc1=0000ff&bc1=000000&bg1=ffffff&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></td>
    <td width="19%" valign="top" class="style1"><iframe src="http://rcm.amazon.com/e/cm?t=biffstechnolo-20&o=1&p=8&l=as1&asins=159420103X&fc1=000000&IS2=1&lt1=_blank&lc1=0000ff&bc1=000000&bg1=ffffff&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></td>
    <td width="19%" valign="top" class="style1"><iframe src="http://rcm.amazon.com/e/cm?t=biffstechnolo-20&o=1&p=8&l=as1&asins=B000FP2O2C&fc1=000000&IS2=1&lt1=_blank&lc1=0000ff&bc1=000000&bg1=ffffff&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></td>
    <td width="24%" valign="top" class="style1"><iframe src="http://rcm.amazon.com/e/cm?t=biffstechnolo-20&o=1&p=8&l=as1&asins=B000F3AADE&fc1=000000&IS2=1&lt1=_blank&lc1=0000ff&bc1=000000&bg1=ffffff&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></td>
  </tr>
  <tr>
    <td height="46" valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=http%3A%2F%2Fwww.amazon.com%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fbooks%2F5%2Fref%3Dpd_ts_b_nav%3Fts-parent-id%3D">Computer & Internet Best Sellers</a></td>
    <td valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=http%3A%2F%2Fwww.amazon.com%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fbooks%2F3448%2Fref%3Dpd_ts_b_nav%3Fts-parent-id%3D5">Certification Central Best Sellers</a></td>
    <td valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=http%3A%2F%2Fwww.amazon.com%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fbooks%2Fall%2Fref%3Db_tn_bh_be">All Amazon Best Sellers</a></td>
    <td valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=http%3A%2F%2Fwww.amazon.com%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fmusic%2F40%2Fref%3Dpd_ts_h">Music/Rock Best Sellers</a></td>
    <td valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=http%3A%2F%2Fwww.amazon.com%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fvideogames%2Fall%2Fref%3Dpd_ts_h">Computer & Video Best Sellers</a></td>
  </tr>
</table>
</td>
  </tr></table>
<div align="left"><br>
  <table width="91%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#9cbee6">
    <tr>
      <td height="34" valign="top" bgcolor="#FFFFFF"><table width="103%" height="34" border="0" cellpadding="2" cellspacing="0" bgcolor="#ffffff">

          <tr>
            <td width="27%" height="34" valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fbooks%2F25%2Fref%3Dpd_ts_b_nav%3Fts-parent-id%3D">Sci-Fi & Fantasy (books)</a></td>
            <td width="19%" valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fmusic%2F30%2Fref%3Dpd_ts_h">Alternative Rock</a></td>
            <td width="18%" valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fmusic%2F266023%2Fref%3Dpd_ts_h">Indie Music</a></td>
            <td width="18%" valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fmusic%2F32%2Fref%3Dpd_ts_h">Folk Music</a></td>
            <td width="18%" valign="top" class="style1"><a href="http://www.amazon.com/gp/redirect.html?link_code=ur2&tag=biffstechnolo-20&camp=1789&creative=9325&location=%2Fexec%2Fobidos%2Ftg%2Fnew-for-you%2Ftop-sellers%2F-%2Fdvd%2Fall%2Fref%3Dpd_ts_h">DVD/Video</a></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <br>
  <table width="91%" height="34" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#ffffff">
    <tr>
      <td height="34" valign="top" class="style1">Welcome to <strong>Biff&rsquo;s Technology Bookstore.</strong>  For information about ordering, shipping, Biff's, and its host site, <a href="/">ConsortiumInfo.org</a> (not to mention Biff), please see our <a href="http://consortiuminfo.org/books/faq/">FAQ </a>page. And remember to tell your friends to Buy Your Books From Biff.</td>
      </tr>
  </table>
  <br>
</div>
<table width="98%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr><td bgcolor="#000000">
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="1">
  <tr>
  <td valign="top" bgcolor="#FFFFFF"> <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="2%" align="left" valign="top">&nbsp;</td>
      <td width="36%" valign="top"><?php

$db = mysql_connect("localhost", "root", "root");
$prevpid="";
mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT  parent.pname, child.cname, child.sort, child.child, category.cid, category.pid, category.catid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid<11 ORDER BY parent.pname, child.sort, child.cname ", $db);

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
echo "<a href='/books/cats.php?PID=".$myrow["pid"]."&ID=".$myrow["cid"]."'>".$myrow["cname"]."</a>";
echo "<br>";
$prevpid=$curpid;
}

?></td>
      <td width="41%" valign="top"><?php

$db = mysql_connect("localhost", "root", "root");
$prevpid="";
mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT  parent.pname, child.cname, child.sort, child.child, category.cid, category.pid, category.catid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid>=11 ORDER BY parent.pname, child.sort, child.cname ", $db);

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
echo "<a href='/books/cats.php?PID=".$myrow["pid"]."&ID=".$myrow["cid"]."'>".$myrow["cname"]."</a>";
echo "<br>";
$prevpid=$curpid;
}

?></td>
      <td width="21%" valign="top"><div align="center">
        <table width="80%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><div align="center"><strong><font size="1" face="Arial, Helvetica, sans-serif">Featured Books</font></strong> </div></td>
          </tr>
          <tr>
            <td><div align="center"><iframe src="http://rcm.amazon.com/e/cm?t=biffstechnolo-20&o=1&p=8&l=as1&asins=0131478230&fc1=000000&IS2=1&lt1=_blank&lc1=0000ff&bc1=000000&bg1=ffffff&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe></div></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td><?php include '../includes/twobooks.php'; ?>
                           <?php include '../includes/lastbook.php'; ?></td>
          </tr>
        </table>

            </div>
        </td>
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
  <td align="left" bgcolor="#D9F0E7"><div align="center"> <script type="text/javascript"><!--
google_ad_client = "pub-2731496462288704";
google_ad_width = 468;
google_ad_height = 60;
google_ad_format = "468x60_as";
google_ad_channel ="";
google_color_border = "D9F0E7";
google_color_bg = "D9F0E7";
google_color_link = "0000FF";
google_color_url = "206260";
google_color_text = "000000";
//--></script>
        <script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script></div></td>
</tr>
</table>
<br><center>
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
<font class="footmsg">
</font>
</center>
</body>
</html>