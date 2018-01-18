<?php
$db = mysql_connect("localhost", "consor5", "bgt667");
mysql_select_db("consor5_library", $db);
$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) ORDER BY parent.pname, child.sort, child.cname ", $db);

$strip = array(" ", "/", "(", ")", "\"", ",", "&");
$Base = "http://www.consortiuminfo.org/metalibrary/";
$NewCat = str_replace("Option", "", $_GET["Category"]);
$NewSubCat = str_replace($strip, "", $_GET["SubCat"]);

// Match Subcat name to database name to get ID
$start="";
while ($myrow = mysql_fetch_array($result)) {

if ($NewCat == $myrow["pid"]) {
		if ($myrow["cid"] <> $start) {
			if ($NewSubCat == str_replace($strip, "", $myrow["cname"])) {
				$NewSubCatNum = $myrow["cid"];
			}
		}
	$start=$myrow["cid"];
	}
}

// Set url to appropriate Cat or Subcat page
if ($NewSubCat == "AllTitles") {
	$ViewPage = "bycat_test2.php?PID=".$NewCat;	
} else {
	$ViewPage = "cats_test2.php?PID=".$NewCat."&ID=".$NewSubCatNum;
}

// Redirect to new page
header("Location: $Base$ViewPage"); 
?>	