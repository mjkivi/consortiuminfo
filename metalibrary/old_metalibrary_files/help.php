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
.style12 {font-family: Arial, Helvetica, sans-serif}
.style13 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
.style14 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style15 {font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
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
  <td height="88" bgcolor="#A5DBC6"><img src="/images/metalibheader.gif" width="762" height="120"></td>
</tr>
<tr><td width="100%" bgcolor="#D9F0E7">
  <div align="center">
    <?php include '../tab/tab.php'; ?>
  </div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#D9F0E7"><div align="left"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
      </b></font></b></font></span>
          <table width="90%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr valign="bottom">
                    <td width="34%" class="style1"><div align="left"><a href="/">Home</a>&gt; <a href="/metalibrary/">Metalibrary</a>&gt; Help Build</div></td>
                    <td width="66%" class="style1">Search Articles&nbsp;
                      <input name="SEARCH" type="text" id="SEARCH" />
                      <input name="sumbit" type="submit" id="SEARCH" /></td>
                  </tr>
              </table></td>
            </tr>
          </table>
          <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>
</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top" bgcolor="#D9F0E7">
<td><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt="">  </td>
</tr>
<tr valign="top" bgcolor="#D9F0E7">
  <td><div align="center"> 
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#9cbee6">
        <tr>
          <td valign="top" bgcolor="#FFFFFF"><table width="94%" height="64" border="0" align="center" cellpadding="8" cellspacing="1" bgcolor="#ffffff">
              <tr>
                <td valign="top" class="style1"><center class="style1">
                    <p align="center"><strong>HELP US BUILD THE METALIBARY </strong></p>
                    <p align="left"><br>
  Our goal is to make the Standards MetaLibrary the most complete and easy to use resource possible. There are several ways that you can help build the Standards MetaLibrary: </p>
                    <p align="left"><strong> 1. Tell us about a suitable on-line article that we don't yet link to. </strong> Simply send a link to the article to <span class="style15"><font size="2" face="Arial, Helvetica, sans-serif">
                      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_ci", $db);

$result = mysql_query("SELECT * FROM addresses WHERE AID='1'", $db);


while ($myrow = mysql_fetch_array($result)) 

	{

echo "<a href=/contact/ref.php?AID=".$myrow["AID"].">";
echo "<img src=".$myrow["img"]." border=0></a>.";

	

}






?>
                    </font></span> If we agree that the article is appropriate for inclusion, we'll be very happy to thank you for  your assistance, and add your suggested material to the Standards MetaLibrary. </p>
                    <p align="left"><strong> 2. Send us an article for hosting. </strong> If you have a suitable article or conference paper that is not currently available on line, please send it to us. If we agree that it is appropriate for the Standards MetaLibrary, we will send you a brief copyright permission statement for your agreement before we post the article (you will retain ownership in the article or paper). Please be sure that your article includes a brief abstract. </p>
                    <p align="left"><strong> 3. Tell us how we can make the Standards MetaLibrary better. </strong> All suggestions, critiques and other constructive input will be gratefully received. We will acknowledge and respond to all such email. Please send your input to <span class="style15"><font size="2" face="Arial, Helvetica, sans-serif">
                      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_ci", $db);

$result = mysql_query("SELECT * FROM addresses WHERE AID='2'", $db);


while ($myrow = mysql_fetch_array($result)) 

	{

echo "<a href=/contact/ref.php?AID=".$myrow["AID"].">";
echo "<img src=".$myrow["img"]." border=0></a>";

	

}






?>
                    </font></span>. </p>
                    <p align="left"><strong> 4. Offer to help fund the MetaLibrary</strong> , or one of the other features of ConsortiumInfo.org. Contact Andrew Updegrove at 617/350-6800, or by email at <span class="style15"><font size="2" face="Arial, Helvetica, sans-serif">
                      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_ci", $db);

$result = mysql_query("SELECT * FROM addresses WHERE AID='2'", $db);


while ($myrow = mysql_fetch_array($result)) 

	{

echo "<a href=/contact/ref.php?AID=".$myrow["AID"].">";
echo "<img src=".$myrow["img"]." border=0></a>";

	

}






?>
                    </font></span>. </p>
                    <p align="left"><strong> 5. Partner with us.</strong> If you are a library, university, publisher, or other interested party and think that there is a way that we could work together, please contact Andrew Updegrove at 617/350-6800, or by email at <span class="style15"><font size="2" face="Arial, Helvetica, sans-serif">
                      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_ci", $db);

$result = mysql_query("SELECT * FROM addresses WHERE AID='2'", $db);


while ($myrow = mysql_fetch_array($result)) 

	{

echo "<a href=/contact/ref.php?AID=".$myrow["AID"].">";
echo "<img src=".$myrow["img"]." border=0></a>";

	

}






?>
                    </font></span>. </p>
                    <p align="left"><strong> 6. Join our Advisory Board.</strong> If you have an appropriate background and would like to join the ConsortiumInfo.org Advisory Board, please contact Andrew Updegrove at 617/350-6800, or by email at <span class="style15"><font size="2" face="Arial, Helvetica, sans-serif">
                      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_ci", $db);

$result = mysql_query("SELECT * FROM addresses WHERE AID='2'", $db);


while ($myrow = mysql_fetch_array($result)) 

	{

echo "<a href=/contact/ref.php?AID=".$myrow["AID"].">";
echo "<img src=".$myrow["img"]." border=0></a>";

	

}






?>
                    </font></span>. </p>
                    <p align="left"><strong> 7. Volunteer to help. </strong> There are many ways you can help. The MetaLibrary is an ongoing project, and we would welcome assistance in expanding it and adding features. To learn more about our future plans and some of the projects where assistance would be useful, see <strong><em><a href="/metalibrary/faq/index.php#ii7"><strong>What can we look for next at the Standards MetaLibrary?</strong> </a></em></strong>.</p>
                    <p align="left">&nbsp;</p>
                    <p align="left">&nbsp;</p>
                </center></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
<br><center><font class="footmsg">
</font>
</center></form>
</body>
</html>