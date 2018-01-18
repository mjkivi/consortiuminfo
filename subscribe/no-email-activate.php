<?
/* Account activation script */

// Get database connection
include 'db.php';

// Create variables from URL.

$semail = $_GET['semail'];

$sql = mysql_query("UPDATE verify SET sverified='1' WHERE semail='$semail'");

$sql_doublecheck = mysql_query("SELECT * FROM verify WHERE semail='$semail' AND sverified='1'");
$doublecheck = mysql_num_rows($sql_doublecheck);

if($doublecheck == 0){
    echo "<strong><font color=red>Your account could not be activated!</font></strong>";
} elseif ($doublecheck > 0) {
    echo "<strong>Your account has been activated!</strong> You will receive the Consortium Standards Bulletin at $semail<br />";
}

?> 