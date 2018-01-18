<? 
//Redirect browser to web site 
$EID=$_GET["EID"];
$PID=$_GET["PID"];
$ID=$_GET["ID"];
header("Location: http://www.consortiuminfo.org/metalibrary/detail_test2.php?EID=$EID&PID=$PID&ID=$ID"); 

//connect to dbase like this: 
$db = mysql_connect("localhost", "consor5", "bgt667");

// pedro is the name of the database in this case 
mysql_select_db("consor5_library", $db);

// update the database: 
// clickcount is the table, with 2 columns: id and clicks 
$sql="UPDATE entries SET accessed=accessed+1 WHERE (id = '".$_GET["EID"]."')"; 
$result=mysql_query($sql,$db); 

// just to be nice 
exit(); 
?> 