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

mysql_select_db("consor5_nnews", $db);

$getx = mysql_query("SELECT * FROM items WHERE date2=curdate()",$db);
$count=mysql_num_rows($getx);
if ($count>5){
	$resultx = mysql_query("SELECT * FROM items WHERE date2=curdate() ORDER BY date2 DESC, sort DESC",$db);
	}
else {
	$resultx = mysql_query("SELECT items.ID, items.author, items.its, items.headline, items.source, items.date1, items.story, items.lkintro, items.link1, items.lkintro2, items.link2, items.link3, items.date2, items.blog, items.short_story  FROM items WHERE items.headline<>'' AND items.date2<=curdate() ORDER BY items.date2 DESC, sort DESC, items.ID DESC limit 10", $db);
	}

while ($myrow = mysql_fetch_array($resultx)) 

	{
	//Start the if statement- if it isn't a blog entry
	$blog=$myrow["blog"];
$author=stripslashes($myrow["author"]);	
$its=stripslashes($myrow["its"]);
$headline=stripslashes($myrow["headline"]);
$short_story=stripslashes($myrow["short_story"]);
$source=stripslashes(trim($myrow["source"]));
$story=stripslashes(trim($myrow["story"]));
if($blog=='No'){
	
echo "<a name=&quot;#".$myrow["ID"]."&quot;><i></a><font size=2>$its</i><p id='#".$myrow["ID"]."'>";
echo "<b><a href=".$myrow["link1"]." target='_hdl' style='color:#08305A'>$headline</b></p></a>";
if ($author<>""){
echo "<b>$author</b><br>";
}
echo "<font size=2><b>$source ".$myrow["date1"]."</b>&nbsp;$story <a href=".$myrow["link1"].">...Full Story</a>";
	echo "<br><br>";
echo "<center><img src=/bulletins/sep.gif></center>";
}
//Start the if statement- if this IS a blog entry


	

}


?>

<?php
$str = "Is your name O\'reilly?";

// Outputs: Is your name O'reilly?
echo stripslashes($str);
?> 
</span></font>
</body>
</html>
