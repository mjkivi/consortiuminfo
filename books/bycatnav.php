<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;
}
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}
-->
</style>
</head>

<body>
<span class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
<?php

$db = mysql_connect("localhost", "root", "root");
$prevpid="";
mysql_select_db("consor5_books", $db);

$result = mysql_query("SELECT  parent.pname, child.cname, child.sort, child.child, category.cid, category.pid, category.catid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE category.pid='".$_GET["PID"]."' ORDER BY parent.pname, child.sort, child.cname", $db);
echo "<table border=0 cellspacing=0 cellpadding=0>\n";
while ($myrow = mysql_fetch_array($result))
{
$catsid=$myrow["pid"]."-".$myrow["cid"];
$curpid=$myrow["pid"];
$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
if
($curpid <> $prevpid){
echo "<tr><td valign='top' width='9%'></td>";
echo "<td valign='top' width='91%'><span class='style1'><b>".$myrow["pname"]."<br></span></b>";
}
echo "<tr><td valign='top' width='9%'><b>&nbsp;&middot;</b></td>";
echo "<td valign='top' width='91%'><a href='/books/cats.php?PID=".$myrow["pid"]."&ID=".$myrow["cid"]."'><span class='style1'><b>".$myrow["cname"]."</b></a>";
echo "<br></span>";
$prevpid=$curpid;
}
echo "</table>";
?>
</font></strong></font></strong></font></strong></font></strong></span></span>
</body>
</html>
