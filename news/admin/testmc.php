<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
echo get_magic_quotes_gpc();        // 1
echo $_POST['lastname'];            // O\'reilly
echo addslashes($_POST['lastname']); // O\\\'reilly

if (!get_magic_quotes_gpc()) {
   $lastname = addslashes($_POST['lastname']);
} else {
   $lastname = $_POST['lastname'];
}

echo $lastname; // O\'reilly
$sql = "INSERT INTO lastnames (lastname) VALUES ('$lastname')";
?> 
</body>
</html>
