<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;
}
-->
</style>
</head>

<body>
<span class="medium"><font face="Arial, Helvetica, sans-serif" size="2"><span class="style2">
<?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT * FROM cons_list WHERE cons_id='$ID'", $db);


while ($myrow = mysql_fetch_array($result))

	{
	echo "<span class='style1'>&nbsp;".$myrow["cons_name"]."</span>";

}



?>
</span></font></span>
</body>
</html>
