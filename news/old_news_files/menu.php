<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style></head>

<body>
<?php

$db = mysql_connect("localhost", "consor5", "bgt667");
$prevpid="";
mysql_select_db("consor5_nnews", $db);

$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) ORDER BY parent.sort, child.sort, child.cname ", $db);

echo "<table width='100%' border=0 align='center' cellpadding=0 cellspacing=3>";
while ($myrow = mysql_fetch_array($result)) 
{
$catsid=$myrow["pid"]."-".$myrow["cid"];
$curpid=$myrow["pid"];
$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
if
($curpid <> $prevpid){ 
echo "<tr><td width='100%' valign='top' bgcolor='#C4EECE'>";
echo "<b><font face='Arial' size='2'>".$myrow["pname"]."</b></td></tr>";
//echo "<a href='/news/cat.php?PID=".$myrow["pid"]."'>All Titles</a><br>";
}
echo "<tr><td valign='top'><a href='/news/cat.php?CID=".$myrow["cid"]."'><font face='Arial' size='2'>".$myrow["cname"]."</a></td></tr>";

$prevpid=$curpid;
}
echo "<tr><td width='100%' valign='top' bgcolor='#C4EECE'>";
echo "<b><a href='/news/quote.php'><font face='Arial' size='2'>Quotes of the Day</b></td></tr>";
echo "</table>";
?>
              <br>
			  <?php

echo "<table width='100%' border=0 align='center' cellpadding=0 cellspacing=3>";
echo "<tr><td width='100%' valign='top'>";
echo "<center><a href='/bulletins/' title='Subscribe to the CSB'><img src='/images/csbsm.gif' width='177' height='75' border='0'></a></center></td></tr>";
echo "</table>";
?>

<?php
echo "<table width='100%' border=0 align='center' cellpadding=0 cellspacing=3>";
echo "<tr><td width='100%' valign='top'>";
echo "<center><a href='/books/index.php'><img src='/images/biffgif.gif' width='160' height='149' hspace='0' vspace='0' border='0'></a></center></td></tr>";
echo "</table>";
?>


<?php include('referrer.php'); ?><br>
<?php
echo "<table width='100%' border=0 align='center' cellpadding=0 cellspacing=3>";
echo "<tr><td width='100%' valign='top'>";
echo "<center><a href='/submit/pressrelease/'><img src='/images/news.jpg' width='140' height='115' hspace='0' vspace='0' border='0'></a></center></td></tr>";

echo "<tr><td width='100%' valign='top' bgcolor='#C4EECE'>";
echo "<b><a href='/link/'><font face='Arial' size='2'>Link to ConsortiumInfo.org</b></td></tr>";

echo "<tr><td width='100%' valign='top' bgcolor='#C4EECE'>";
echo "<b><a href='/news/ourfeed.php'><font face='Arial' size='2'>Add our news feed to your site</b></td></tr>";
echo "</table>";
?><br>

<p>&nbsp;</p>
</body>
</html>
