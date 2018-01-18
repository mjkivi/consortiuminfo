<?
//Redirect browser to web site
header("Location: http://".$_GET["url"]."");

//connect to dbase like this:
$db=mysql_connect("localhost","consor5","c0n$0r667");

// pedro is the name of the database in this case
mysql_select_db("consor5_clickcount",$db);


// update the database:
// clickcount is the table, with 2 columns: id and clicks
$sql="UPDATE clicks SET clicks=clicks+1 WHERE (id = '".$_GET["id"]."')";
$result=mysql_query($sql,$db);

// just to be nice
exit();
?>