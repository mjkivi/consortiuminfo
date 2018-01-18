<? 
//Redirect browser to web site 
header("Location: http://$url"); 

//connect to dbase like this: 
$db=mysql_connect("localhost","root","ho8B7asw"); 

// pedro is the name of the database in this case 
mysql_select_db("clickcount",$db); 


// update the database: 
// clickcount is the table, with 2 columns: id and clicks 
$sql="UPDATE clicks SET clicks=clicks+1 WHERE (id = '".$_GET["ID"]."')"; 
$result=mysql_query($sql,$db); 

// just to be nice 
exit(); 
?> 