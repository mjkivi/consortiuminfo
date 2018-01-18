<?php
  session_start();
  
  if($_SESSION['password'] ==""){     // if not logged in
    header("Location: members.php");  // redirect to login form
  }

	// this page has been fixed so it no longer needs magic quotes
	function stripslashes_nested($v)
	{
	  if (is_array($v)) {
		return array_map('stripslashes_nested', $v);
	  } else {
		return stripslashes($v);
	  }
	}

	if (get_magic_quotes_gpc()) {
		$_REQUEST = stripslashes_nested($_REQUEST);
		$_GET = stripslashes_nested($_GET);
		$_POST = stripslashes_nested($_POST);
		$_COOKIES = stripslashes_nested($_COOKIES);
	}

/* Check User Script */
session_start();  // Start Session

include 'db.php';
// Conver to simple variables
$username = $_POST['username'];
$password = $_POST['password'];
// $session_id = $_POST['mid'];


if((!$username) || (!$password)){
	echo "Please enter ALL of the information! <br />";
	include 'login_form.html';
	exit();
}

$s_username = mysql_real_escape_string($username);
$s_password = mysql_real_escape_string($password);

$sql = mysql_query("SELECT * FROM members WHERE members.username='$s_username' AND members.password='$s_password'");
$login_check = mysql_num_rows($sql);

if($login_check > 0){
	while($row = mysql_fetch_array($sql)){
	
	//foreach( $row AS $key => $val ){
	//	$$key = stripslashes( $val );
	//}
		$mid = $row["mid"];	// member ID ???
		
		// Register some session variables!
		// session_register('username');
		$_SESSION['username'] = $username;
		// session_register('password');
		$_SESSION['password'] = $mid;
		// session_register('session_id');
		$_SESSION['session_id'];
		// Register some session variables!
		
		
		mysql_query("UPDATE members SET lastlogin=now() WHERE mid='$mid'");
		
		header("Location: index2.php");	// redirect
	}
} else {
	echo "You could not be logged in! Either the username and password do not match or you have not validated your membership!<br />
	Please try again!<br />";
	include 'login_form.html';
}
?>
