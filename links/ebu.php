<html><HEAD><TITLE>European Broadcasting Union (EBU) </TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META content="MSHTML 5.50.4912.300" name=GENERATOR></HEAD>
<BODY link="#178265" vlink="#178265" alink="#178265">
<form name="form1" method="get" action="http://search.Blossom.com/query/320">
  <table cellspacing=0 cellpadding=0 width="100%" border=0>
    <tbody> 
    <tr> 
      <td width="1%">&nbsp;</td>
      <td> 
        <div align="center"><img height=75 
alt=Consortiuminfo.org src="http://www.consortiuminfo.org/logo.gif" width=635 border=0 usemap="#MapMap"></div>
      </td>
    </tr>
    </tbody> 
  </table>
  <center>
  </center>
  <table>
    <tbody> 
    <tr> 
      <td></td>
    </tr>
    </tbody>
  </table>
  <table cellspacing=0 cellpadding=0 width="100%" bgcolor=white border=0>
    <tbody> 
    <tr> 
      <td height=1> 
        <table cellspacing=0 cellpadding=0 border=0>
          <tbody> 
          <tr> 
            <td height=1></td>
          </tr>
          </tbody>
        </table>
      </td>
    </tr>
    </tbody>
  </table>
  <table cellspacing=0 cellpadding=4 width="100%" bgcolor=white border=0>
    <tr valign=top> 
      <td noWrap><br>
      </td>
      <td align=right>&nbsp;</td>
      <td noWrap width="1%">&nbsp;</td>
    </tr>
    <td height="11">&nbsp; 
  </table>
  <table cellspacing=0 cellpadding=1 width="96%" border=0 height="320">
    <tbody> 
    <tr> 
      <td valign="top" height="412" > 
        <table width="88%" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000" align="center">
          <tr> 
            <td height="19" valign="top" bgcolor="#C4EECE"> 
              <table width="83%" border="0" cellspacing="0" cellpadding="0" bgcolor="#C4EECE">
                <tr> 
                  <td width="23%" valign="middle" height="36"> 
                    <div align="center"><font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="2"></font><font face="Arial"> 
                        </font></div>
                  </td>
                  <td width="77%" valign="middle" height="36" bgcolor="#C4EECE"> 
                    <div align="center"><font face="Arial"> 
                      <input type=text name=key>
                      <input type=submit value=Search name="submit">
                      <a href="/search/"><font size="2" face="Arial, Helvetica, sans-serif"><b>Advanced 
                      </b></font></a></font></div>
                  </td>
                  <td width="0%" valign="bottom" height="36">&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr> 
              <td height="19" valign="top" bgcolor="#FFFFFF"><font face=arial size=-1>&nbsp;&nbsp;&nbsp;<a 
            href="http://www.consortiuminfo.org">Home</a> &gt;<b> </b><a href="http://www.consortiuminfo.org/links/">Consortium 
                List</a> &gt;<b> European Broadcasting Union (EBU) </b></font></td>
          </tr>
          <tr> 
              <td valign="top" height="310"> <div align="left"><font face="Arial, Helvetica, sans-serif" size="3"><a href="http://www.consortiuminfo.org/links/10gea2.shtml"><b><font size="2"> 
                  </font></b></a></font><font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="2"></font><font face="Arial, Helvetica, sans-serif" size="2"> 
                  </font> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="22%" height="37">
<div align="center"><font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="2"><a href="http://www.consortiuminfo.org/subscribe/"><img src="http://www.consortiuminfo.org/images/subscribe-e.gif" width="130" height="25" border="0" alt="Subscribe to Bulletins"></a></font></div></td>
                      <td width="77%">&nbsp;</td>
                      <td width="1%">&nbsp;</td>
                    </tr>
                  </table>
                  <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
                    </font></div>
                </div>
                <blockquote> 
                  <p align="center"><font face="Arial, Helvetica, sans-serif" size="2"> 
                    <?php

$db = mysql_connect("localhost", "root", "letmein");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT cons_list.cons_id, cons_list.cons_name, cons_list.cons_url  FROM cons_list WHERE cons_list.cons_id='30'", $db);

echo "<table border=0>\n";
echo "<font size=1>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result)) 

	{


	echo "<TR><TD><a href=".$myrow["cons_url"]."><b><font size=2>".$myrow["cons_name"]."</a>";
	

}

echo "</TABLE>";





?>
                    </font></p>
                  <p><font face="Arial, Helvetica, sans-serif" size="2"><b>Overview:</b> 
                    <?php

$db = mysql_connect("localhost", "root", "letmein");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT cons_list.cons_id, cons_list.cons_overview  FROM cons_list  WHERE cons_list.cons_id='30'", $db);

while ($myrow = mysql_fetch_array($result)) 

	{

	
	echo "<font size=2>".$myrow["cons_overview"]."";

	

}







?>
                    <br>
                    <br>
                    <b>Specifications</b>: 
                    <?php

$db = mysql_connect("localhost", "root", "letmein");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT cons_list.cons_id, cons_list.cons_specs  FROM cons_list  WHERE cons_list.cons_id='30'", $db);

while ($myrow = mysql_fetch_array($result)) 

	{

	
	echo "<font size=2>".$myrow["cons_specs"]."";

	

}







?>
                    </font></p>
                  <p><font face="Arial, Helvetica, sans-serif" size="2"><b>IPR 
                    Policy</b>: 
                    <?php

$db = mysql_connect("localhost", "root", "letmein");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT cons_list.cons_id, cons_list.cons_ipr  FROM cons_list  WHERE cons_list.cons_id='30'", $db);

while ($myrow = mysql_fetch_array($result)) 

	{

	
	echo "<font size=2>".$myrow["cons_ipr"]."";

	

}







?>
                    </font></p>
              </blockquote>
            <blockquote>&nbsp;</blockquote>
            <blockquote> 
                  <div align="center"> </div>
              </blockquote>
            <p align="left">&nbsp; </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    </tbody> 
  </table>
  <p> 
  <p> 
  <p> <br 
clear=all>
    <center>
    </center>
  <p align="center"><br>
  <p> 
    <center>
      <b><font color="#009966" face="Arial"><b> 
      <!-- Start Superstats code version 3.0b.  Copyright 1997-2001 MyComputer.com, Inc. More info available at http://www.mycomputer.com -->
      <script language="JavaScript">/* You may give each page an identifying name, server, and channel on the next lines. */var pageName = "EBU";/**** DO NOT ALTER ANYTHING BELOW THIS LINE! ****/var code = ' '; </script>
      <script src="http://code.superstats.com/code/ss/lgu/0/30b"></script>
      <script language="JavaScript">br = navigator.appName + parseInt(navigator.appVersion);if (code != ' ' || br == 'Netscape2') document.write(code);else document.write(''+ ' <im'+'g'+ ' src="http://stats.superstats.com/b/ss/lgu/1'+ '?pageName=' + escape(pageName) + '" border=0>');document.write('<'); document.write('!-- ');</script>
      <noscript><img src="http://stats.superstats.com/b/ss/lgu/1" border=0></noscript> 
      <script language="JavaScript">document.write(' --'); document.write('>');</script>
      <!-- End Superstats tracking code. -->
      </b></font></b> 
    </center>
  <p align="center">
    <map name="MapMap"> 
      <area shape="rect" coords="426,3,709,88" href="http://www.lgu.com/practice_areas/consortium.shtml">
    </map>
</form>
<p align="center">
  <map name="Map"> 
    <area shape="rect" coords="426,3,709,88" href="http://www.lgu.com/practice_areas/consortium.shtml">
  </map>
</BODY></HTML>
