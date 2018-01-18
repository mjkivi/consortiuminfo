<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}
-->
</style>
</head>

<body>
<font size="2" face="Arial, Helvetica, sans-serif"><span class="style11">
<?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("geeklog2", $db);
$hourdiff = "0"; // hours difference between server time and local time

$timeadjust = ($hourdiff * 60 * 60);

$melbdate = date("Y-m-d h:i:s",time());
	$resultx = mysql_query("SELECT * FROM gl_stories WHERE date<='$melbdate' ORDER BY date DESC LIMIT 1", $db);
	

while ($myrow = mysql_fetch_array($resultx)) 

	{


$short_story=$myrow["introtext"];
echo "<p><table width='100%'  border='1' cellpadding='1' cellspacing='0' bordercolor='#000000'><tr>";
echo "<td bordercolor='#003366' bgcolor='003366'><div align='left' class='style9'><i>From the Standards Blog</i> </div></td></tr>";
echo "<tr><td>";
  
echo "<a name='#".$myrow["sid"]."'></a>";
echo "<center><b>".$myrow["title"]."</b></center>";
echo "<br><font size=2>&nbsp;<b>".$myrow["date1"]."</b>&nbsp;".$myrow["introtext"]."<a href='/standardsblog/article.php?story=".$myrow["sid"]."'>...Full Story</a>";
echo "<br><br>";
echo "<div align='right'><a href='/standardsblog'>Go to Standards Blog</a>&nbsp;&nbsp;</div>";
echo "</td> </tr></table><br><center><img src=/bulletins/sep.gif></center>";

	

}


?>
</span></font>
</body>
</html>
