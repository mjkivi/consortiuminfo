<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body>

<font size="2" face="Arial, Helvetica, sans-serif">

<?php



$db = mysql_connect("localhost", "consor5", "bgt667");



mysql_select_db("news", $db);



$result = mysql_query("SELECT items.ID, items.its, items.author, items.headline, items.source, items.date1, items.story, items.lkintro, items.link1, items.lkintro2, items.link2, items.link3, items.date2, cat_lookup.cid, cat_lookup.iid  FROM ((cats INNER JOIN cat_lookup on cats.cid = cat_lookup.cid) INNER JOIN items on cat_lookup.iid = items.id) WHERE items.date2 > '2004-12-31' ORDER BY date2 DESC", $db);



echo "<table border=0>\n";



echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";



while ($myrow = mysql_fetch_array($result)) 



	{



	echo "<tr><td>".$myrow["ID"]."&nbsp;<i><font size=2>".$myrow["its"]."</i><p>";

	echo "<TR><TD><b><font size=2><a href=".$myrow["link1"].">".$myrow["headline"]."</a>";

	echo "<tr><td>".$myrow["author"]."";

	echo "<tr><td><font size=2><b>".$myrow["source"]." ".$myrow["date1"]."</b>".$myrow["story"]." <a href=".$myrow["link1"].">...Full Story</a>";

	echo "<p>";

	echo "<center><img src=/bulletins/sep.gif></center>";

	



	



}



echo "</TABLE>";











?>

</font>

</body>

</html>

