<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.foot {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style15 {font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
</head>

<body>

<div align="center" class="foot">
<A href="/terms/">Terms of Use </A>| <A 
href="http://www.gesmer.com/">GU Site </A>| <A href="/search/">Search </A>| <A 
href="/contact/">Contact </A>| <A href="/faq/">FAQ</A></SPAN>&nbsp;| <A 
href="/sitemap/">Sitemap</A> <BR>
      <STRONG>(617) 350-6800 <span class="style15"><font size="2" face="Arial, Helvetica, sans-serif">
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
      </font></span></STRONG><BR>
      <SPAN 
class=style2>&copy; 2007 All Rights Reserved </P>
</div>
</body>
</html>
