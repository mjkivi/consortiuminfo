<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<font size="2" face="Arial, Helvetica, sans-serif">
<?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT * FROM cons_list ORDER BY cons_name ASC", $db);

echo "<table border=0>\n";
echo "<font size=1>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result))

	{


	echo "<TR><TD><a href='/links/detail.php?ID=".$myrow["cons_id"]."'><font size=2>".$myrow["cons_name"]."</a>";
	echo "<tr><td><font size=2>".$myrow["link_desc"]."";



}

echo "</TABLE>";





?>
</font>
</body>
</html>
