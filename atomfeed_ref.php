<?php


function get_iso_8601_date($int_date) {
   //$int_date: current date in UNIX timestamp
   $date_mod = date('Y-m-d\TH:i:s', $int_date);
   $pre_timezone = date('O', $int_date);
   $time_zone = substr($pre_timezone, 0, 3).":".substr($pre_timezone, 3, 2);
   $date_mod .= $time_zone;
   return $date_mod;
}
?>

<?=get_iso_8601_date(time())?>

<br><br>

<?php
mysql_connect ("localhost", "consor5", "bgt667") or die ("Cannot connect to database server.");
mysql_select_db ("consor5_library") or die ("Cannot connect to database.");

$result = mysql_query("SELECT * FROM entries ORDER BY id DESC limit 0,5") or die (mysql_error());

while ($row = mysql_fetch_array ($result)) {
echo $row[title]."<br><br>".$row[id]."<br><br>".$row[added]."<br><br>".$row[abstract]."<br><br><br><br>";
}

mysql_free_result ($result);
?>