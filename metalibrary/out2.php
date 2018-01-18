<?
//Redirect browser to web site
$EID=$_GET["EID"];
header("Location: http://www.consortiuminfo.org/metalibrary/detail2.php?EID=$EID");

//connect to dbase like this:
$db = mysql_connect("localhost", "root", "root");

// pedro is the name of the database in this case
mysql_select_db("consor5_library", $db);

// update the database:
// clickcount is the table, with 2 columns: id and clicks
$sql="UPDATE entries SET accessed=accessed+1 WHERE (id = '".$_GET["EID"]."')";
$result=mysql_query($sql,$db);

// update the database for entries accessed in 2010
if (date("Y") == "2010") {
	$sqlaccessed2010="UPDATE entries SET accessed_2010=accessed_2010+1 WHERE (id = '".$_GET["EID"]."')";
	$result=mysql_query($sqlaccessed2010,$db);
}

// just to be nice
exit();
?>