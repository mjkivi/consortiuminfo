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



<body text="#000000" link="0000ff">
<form name="form1" method="get" action="http://search.Blossom.com/query/320">
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
            href="/">Home</a> &gt; <a href="/news/">News</a><b> </b></font></div></td>

            <td width="75%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font><font face="Arial">
                <input type=text name=key>
                <input type=submit value=Search name="submit">
                <a href="/search/"><font size="2" face="Arial, Helvetica, sans-serif"><b>Advanced </b></font></a><b></b></font></b></font></span></div></td>

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

<td width="140" align="center" valign="top" bgcolor="#D9F0E7"><table width="140" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="140" bgcolor="#FFFFFF"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <?php include('menu.php'); ?>
      </font></strong></font></strong></span> </td>
    </tr>
  </table>  
  <br>
  <div align="center"><br>
    <br>
  </div>
  </td>
<td width="10" bgcolor="#D9F0E7"></td><td width="594" bgcolor="#D9F0E7">

    <table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">

<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr><td valign="top" bgcolor="#FFFFFF">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

<tr valign="top"><td width="100%" align="center" bgcolor="#FFFFFF"><table width=98% cellpadding=0 cellspacing=0 border=0>
  <tr valign=top>
    <td valign="top" class=article><font size="2" face="Arial, Helvetica, sans-serif">&nbsp; </font><font size="2" face="Arial, Helvetica, sans-serif">&nbsp; </font>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#C4EECE"><strong>All News</strong> </td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="100%"><font size="2" face="Arial, Helvetica, sans-serif">
                  <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("news", $db);

$result = mysql_query("SELECT items.id, items.its, items.headline, items.author, items.source, items.date1, items.story, items.lkintro, items.link1, items.lkintro2, items.link2, items.link3, items.date2, cat_lookup.cid, cat_lookup.iid  FROM ((cats INNER JOIN cat_lookup on cats.cid = cat_lookup.cid) INNER JOIN items on cat_lookup.iid = items.id) WHERE date2>date_sub(now(), interval 1 month) ORDER BY date2 DESC", $db);

echo "<table border=0>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result)) 

	{

	echo "<tr><td><i><font size=2>".$myrow["its"]."</i><p>";
	echo "<TR><TD><b><font size=2><a href=".$myrow["link1"].">".$myrow["headline"]."</a>";
	echo "<b>".$myrow["author"]."</b><tr><td><font size=2><b>".$myrow["source"]." ".$myrow["date1"]."</b>".$myrow["story"]." <a href=".$myrow["link1"].">...Full Story</a>";
	echo "<p>";
	if ($myrow["link2"] <>"")
{
	echo "<i>See Also:&nbsp;<a href=".$myrow["link2"].">".substr($myrow["link2"],0,35)."...</i></a>";
	}
	echo "<center><img src=/bulletins/sep.gif></center>";
	

	

}

echo "</TABLE>";





?>
</font></td>
                </tr>
            </table></td>
          </tr>
        </table>
        <font size="2" face="Arial, Helvetica, sans-serif">&nbsp; </font>
    </td>
  </tr>
</table></td></tr></table>
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
</form></body>

</html>