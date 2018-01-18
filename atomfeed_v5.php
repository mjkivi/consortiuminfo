<?php
header ("Content-type: text/xml");
echo ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
?>

<feed xmlns="http://www.w3.org/2005/Atom">
<title>ConsortiumInfo.org MetaLibrary</title>
<link rel="self" href="http://www.consortiuminfo.org/metalibrary/"/>
<id>http://www.consortiuminfo.org/metalibrary/</id>

<?php
mysql_connect ("localhost", "consor5", "bgt667") or die ("Cannot connect to database server.");
mysql_select_db ("consor5_library") or die ("Cannot connect to database.");

$result = mysql_query("SELECT * FROM entries ORDER BY id DESC limit 0,5") or die (mysql_error());

while ($row = mysql_fetch_array ($result)) {
echo "<entry>
<title>".$row[title]."</title>
<link href=\"http://www.consortiuminfo.org/metalibrary/out_test2.php?EID=".$row[id]."\"/>
<id>http://www.consortiuminfo.org/metalibrary/out_test2.php?EID=".$row[id]."</id>
<summary type=\"xhtml\">".$row[abstract]."</summary>
  </entry>";
}

mysql_free_result ($result);
?>

</feed>

<?php
// http://www.consortiuminfo.org/atomfeed_v5.php
?>