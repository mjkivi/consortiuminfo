<?php
	// this page has been fixed so it no longer needs magic quotes
	//function stripslashes_nested($v) {
	  //if (is_array($v)) {
		//return array_map('stripslashes_nested', $v);
	  //} else {
		//return stripslashes($v);
	  //}
	//}

	//if (get_magic_quotes_gpc()) {
		//$_REQUEST = stripslashes_nested($_REQUEST);
		//$_GET = stripslashes_nested($_GET);
		//$_POST = stripslashes_nested($_POST);
		//$_COOKIES = stripslashes_nested($_COOKIES);
	//}

	session_start();

	if($_SESSION['password'] ==""){			// if not logged in
		header("Location: members.php");	// redirect to login form
	}

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title>News:</title>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

<META HTTP-EQUIV="EXPIRES" CONTENT="0">

<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">

<META NAME="DISTRIBUTION" CONTENT="GLOBAL">

<META NAME="AUTHOR" CONTENT="GUNet">
<style type="text/css">
<!--
  A:link {color:"blue";}
  A:link2 {color:"#000000";}
  A:visited {color:"blue";}
  A:hover {color:"red";}
  A:hover { text-decoration:none; }
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 4px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #0E3259;
}

body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
-->

</style>
</head>
<body text="#000000" link="0000ff">
<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">
<tr><td width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="840">
<tr><td width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="762">
<tr><td width="100%" height="88" bgcolor="#A5DBC6">
  <div align="center"><img src="/images/newsheader.gif" width="762" height="120"></div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>

    </b></font></b></font></span>

        <table width="100%"  border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="22%" bgcolor="#D9F0E7"><div align="center" class="style1"><font face=arial size=-1>&nbsp;<a
            href="/">Home</a> &gt; <a href="/news/admin/"><strong>News Admin</strong></a> </font></div></td>

            <td width="70%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font><font face="Arial">
                </font></b></font></span></div></td>

            <td width="6%" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="/feed.php"><img src="/news/xml.gif" alt="RSS News Feed" width="36" height="14" border="0"></a></font></b></font></span></div></td>
            <td width="2%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b>

             </b></font></b></font></span></div></td>

          </tr>

        </table>

        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>        </b></font></b></font></span>

  </div></td></tr></table>

</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">

<tr valign="top">

<td width="4" bgcolor="#D9F0E7"></td>

<td width="60" bgcolor="#D9F0E7" valign="top"><div align="right">
          <p align="center">&nbsp;</p>
          <p align="center">&nbsp;</p>
        </div></td><td width="9" bgcolor="#D9F0E7"></td><td width="675" bgcolor="#D9F0E7">

    <table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">

<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr><td valign="top" bgcolor="#FFFFFF">

  <table width="86%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="89%"><p align="left">
          <?php

if (isset($_GET["addentry"])): //If the user wants to add an entry
?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <?php
		//if you're logged in, you get the admin options
	  if($_SESSION['password'] <>""){

	  $today = date('Y-m-j');

		 echo"
		 <table width='520' border='0' cellspacing='0' cellpadding='0'>
		 	<tr class='style1'><td colspan='3'>&nbsp;</td></tr>
            <tr class='style1'>
              <td><span class='style1'>Title:</span></td>
              <td>&nbsp;</td>
              <td><span class='style1'><input name='headline' type='text' id='headline2'></span></td>
            </tr>
            <tr class='style1'>
              <td><span class='style1'>Author:</span></td>
              <td>&nbsp;</td>
              <td><span class='style1'><input name='author' type='text' id='author'></span></td>
            </tr>
            <tr class='style1'>
              <td>Source: </td>
              <td>&nbsp;</td>
              <td><span class='style1'><input name='source' type='text' id='source'></span></td>
            </tr>
            <tr class='style1'>
              <td>Display Date </td>
              <td>&nbsp;</td>
              <td><input name='date1' type='text' id='date1'></td>
            </tr>
            <tr class='style1'>
              <td>Real Date: </td>
              <td>&nbsp;</td>
              <td><span class='style1'><input name='date2' type='text' id='date2'></span></td>
            </tr>
            <tr class='style1'>
              <td>Link</td>
              <td>&nbsp;</td>
              <td><span class='style1'><input name='link1' type='text' id='link1'></span></td>
            </tr>
            <tr class='style1'>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><p align='left' style='margin:5px 0px 5px 0px;'><input type='submit' name='submitjoke' value='SUBMIT'></p></td>
            </tr>
            <tr class='style1'>
              <td>Story:</td>
              <td>&nbsp;</td>
              <td><span class='style1'><textarea name='story' cols='50' rows='6' wrap id='story'></textarea></span></td>
            </tr>
            <tr class='style1'>
              <td>Sort Order </td>
              <td>&nbsp;</td>
              <td><input name='sort' type='text' id='sort'></td>
            </tr>
            <tr class='style1'>
              <td width='125'><span class='style1'>Comment:</span></td>
              <td width='10'>&nbsp;</td>
              <td width='381'><span class='style1'><textarea name='its' cols='50' rows='6' id='textarea'></textarea></span></td>
            </tr>
            <tr class='style1'><td colspan='3'>&nbsp;</td></tr>
            <tr class='style1'><td colspan='3' bgcolor='#D9F0E7'><div align='center'><strong>Quote of the Day Stuff</strong></div></td></tr>
            <tr class='style1'>
              <td>Quote</td>
              <td>&nbsp;</td>
              <td><span class='style1'><textarea name='quote' cols='50' rows='4' wrap id='quote'></textarea></span></td>
            </tr>
            <tr class='style1'>
              <td>Quote Source: </td>
              <td>&nbsp;</td>
              <td><textarea name='qsource' cols='50' rows='4' wrap id='qsource'></textarea></td>
            </tr>
            <tr class='style1'><td colspan='3'>&nbsp;</td></tr>
            <tr class='style1'>
              <td>Quote2: </td>
              <td>&nbsp;</td>
              <td><textarea name='quote2' cols='50' rows='4' wrap id='quote'></textarea></td>
            </tr>
            <tr class='style1'>
              <td>Quote Source 2 </td>
              <td>&nbsp;</td>
              <td><textarea name='qsource2' cols='50' rows='4' wrap id='qsource2'></textarea></td>
            </tr>
            <tr class='style1'>
              <td>Quote 2 Link </td>
              <td>&nbsp;</td>
              <td><input name='qlink2' type='text' id='qlink2'></td>
            </tr>
          </table>
          <input name='postdate' type='hidden' id='$today'>
		  </form>";
		  }
		  ?>

<!-- this was removed from above form:
<tr class='style1'>
              <td>Link2:</td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='link2' type='text' id='link2'>
              </span></td>
            </tr>
            <p align='left' class='style1'><input name='postdate' type='hidden' id='<?php echo $today = date('Y-m-j'); ?>'></p>
-->

          <?php



else:  //Default Page Dislplay
	// Connect to db server

	$dbcnx=mysqli_connect("localhost","consor5", "c0n$0r667","consor5_nnews_utf");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// add a news article to the db
	if ($_POST["submitjoke"] == "SUBMIT") {

	// Old function - this is not working for some Word Characters
	$its = trim($_POST['its']);
	$headline = addslashes(trim($_POST['headline']));
	$author = addslashes(trim($_POST['author']));
	$source = addslashes(trim($_POST['source']));
	$date1 = $_POST["date1"];
	$date2 = $_POST["date2"];
	$link1 = $_POST["link1"];
	$link2 = $_POST["link2"];
	$sort = $_POST["sort"];	
	$shortstory = addslashes(trim($_POST['short_story']));
	$story = addslashes(trim($_POST['story']));
	$quote = addslashes(trim($_POST['quote']));
	$source = addslashes(trim($_POST['qsource']));
	$quote2 = addslashes(trim($_POST['quote2']));
	$source2 = addslashes(trim($_POST['qsource2']));
	$link2 = $_POST["qlink2"];

	$cleanits = mysqli_real_escape_string($dbcnx, $its);
	$cleanheadline = mysqli_real_escape_string($dbcnx, $headline);
	$cleanauthor = mysqli_real_escape_string($dbcnx, $author);
	$cleansource = mysqli_real_escape_string($dbcnx, $source);
	$cleandate1 = mysqli_real_escape_string($dbcnx, $date1);
	$cleandate2 = mysqli_real_escape_string($dbcnx, $date2);
	$cleanlink1 = mysqli_real_escape_string($dbcnx, $link1);
	$cleanlink2 = mysqli_real_escape_string($dbcnx, $link2);
	$cleansort = mysqli_real_escape_string($dbcnx, $sort);	
	$cleanshortstory = mysqli_real_escape_string($dbcnx, $shortstory);
	$cleanstory = mysqli_real_escape_string($dbcnx, $story);
	$cleanquote = mysqli_real_escape_string($dbcnx, $quote);
	$cleanqsource = mysqli_real_escape_string($dbcnx, $source);
	$cleanquote2 = mysqli_real_escape_string($dbcnx, $quote2);
	$cleanqsource2 = mysqli_real_escape_string($dbcnx, $source2);
	$cleanqlink2 = mysqli_real_escape_string($dbcnx, $link2);

	$sql = "INSERT INTO items SET
			its='$cleanits',
			headline='$cleanheadline',
			author='$cleanauthor',
			source='$cleansource',
			date1='$cleandate1',
			date2='$cleandate2',
			postdate=CURDATE(),
			link1='$cleanlink1',
			link2='$cleanlink2',
			sort='$cleansort',
			short_story='$cleanshortstory',
			story='$cleanstory',
			quote='$cleanquote',
			qsource='$cleanqsource',
			quote2='$cleanquote2',
			qsource2='$cleanqsource2',
			qlink2 = '$cleanqlink2'";
	if (@mysqli_query($dbcnx, $sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysqli_error($dbcnx) . "</p>");
		}
	}

//If an entry has been deleted, remove it
if (isset($_GET["deleteitem"]) &&  intval($_GET["deleteitem"]) > 0) {
	$s_deleteitem = intval($_GET["deleteitem"]);
	$sql = "DELETE FROM items
			WHERE ID = $s_deleteitem";
	if (@mysqli_query($dbcnx, $sql)) {
	echo("<p>The entry has been deleted.</p>");
} else {
	echo("<p>error deleting entry: " .
	mysqli_error($dbcnx) . "</p>");
}
}
 if($_SESSION['password'] <> ""){
	echo("<p> Here are all the news articles<p>" .
		"<a href='index2.php?addentry=1'>".
		"<font face='Arial' size='3'>Add a news article</font></a>".
		"</p>");

	//Request the text of all the news articles
	$result = @mysqli_query($dbcnx, "SELECT * FROM items WHERE items.blog='No' ORDER BY ID DESC");
	if (!result) {
		echo("<p>Error performing query: " .
			mysqli_error($dbcnx) . "</p>");
		exit();
		}
	//Display the text of each news article in a paragraph
	while ( $row = mysqli_fetch_array($result) ) {
	$its = $row["its"];
	$ID = $row["ID"];
	$headline = $row["headline"];
	$author = $row["author"];
	$link1 = $row["link1"];
	$link2 = $row["link2"];
	$source = $row["source"];
	$date1 = $row["date1"];
	$date2 = $row["date2"];
	$story = $row["story"];
	echo("<font face='Arial' size='2'>".
		"<b>$ID</b>&nbsp;<i>$its</i><br> ".
		"<a href='$link1'>".
		"<p><b>$headline</b>-</a> ".
		"<b>$author</b>".
		"<br>$source".
		"&nbsp;".
		"$date1".
		"&nbsp;".
		"$story".
		"<a href='/news/admin/catadd.php?addcat=$ID'>".
		"Add this entry to a category</a>&nbsp;| ".
		"<a href='/news/admin/edit.php?ID=$ID'>" .
		"Edit this entry</a>&nbsp;| &nbsp;".
		"<a href='/news/admin/index2.php?deleteitem=$ID'>Delete this item</a>".
		"<p>");
}

	//When clicked the link will load this page
		echo("<p><a href='$PHP_SELF?addentry=1'>" .
			"Add an entry!</a></p>");
			}

	endif;

?>
          <p align="left">&nbsp;</p></td>
      <td width="6%">&nbsp;</td>
    </tr>
  </table>










  <br>

</td></tr></table>

</td></tr></table><br>

<br></td><td width="14" bgcolor="#D9F0E7"><br><br></td></tr></table>

<br><center><font class="footmsg">&nbsp;

</font>

</body>

</html>