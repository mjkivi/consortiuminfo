<?php
header ("Content-type: text/xml");
echo ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");

function get_iso_8601_date($int_date) {
   //$int_date: current date in UNIX timestamp
   $date_mod = date('Y-m-d\TH:i:s', $int_date);
   $pre_timezone = date('O', $int_date);
   $time_zone = substr($pre_timezone, 0, 3).":".substr($pre_timezone, 3, 2);
   $date_mod .= $time_zone;
   return $date_mod;
}
?>

<feed xmlns="http://www.w3.org/2005/Atom">
<title>ConsortiumInfo.org MetaLibrary</title>
<link rel="self" href="http://www.consortiuminfo.org/metalibrary/"/>
<updated><?=get_iso_8601_date(time())?></updated>
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
<updated>".get_iso_8601_date(time()+$row[added])."</updated>
<summary type=\"xhtml\">".$row[abstract]."</summary>
  </entry>";
}

mysql_free_result ($result);
?>

</feed>

<?php
// http://www.consortiuminfo.org/atomfeed_v1.php
?>