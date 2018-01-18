<?php
session_start();
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































  A:visited {color:"blue";



}































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
            href="/">Home</a> &gt;News</font></div></td>

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

if (isset($addentry)): //If the user wants to add an entry
?>
        <form action="<?=$PHP_SELF?>" method="post">
        <?php
		//if you're logged in, you get the admin options
	  if($_SESSION['password'] <>""){
		 echo"
		 <table width='520' border='0' cellspacing='0' cellpadding='0'>
            <tr class='style1'>
              <td width='125'><span class='style1'>Comment:</span></td>
              <td width='10'>&nbsp;</td>
              <td width='381'><span class='style1'>
                <textarea name='its' cols='50' rows='12' id='textarea'></textarea>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class='style1'>
              <td><span class='style1'>Title:</span></td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='headline' type='text' id='headline2'>
              </span></td>
            </tr>
            <tr class='style1'>
              <td><span class='style1'>Author:</span></td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='author' type='text' id='author'>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>Source: </td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='source' type='text' id='source'>
</span></td>
            </tr>
            <tr class='style1'>
              <td>Display Date </td>
              <td>&nbsp;</td>
              <td><input name='date1' type='text' id='date1'></td>
            </tr>
            <tr class='style1'>
              <td>Real Date: </td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='date2' type='text' id='date2'>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>Story:</td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <textarea name='story' cols='50' rows='20' wrap id='story'></textarea>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>Link</td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='link1' type='text' id='link1'>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>Link2:</td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <input name='link2' type='text' id='link2'>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>Sort Order </td>
              <td>&nbsp;</td>
              <td><input name='sort' type='text' id='sort'></td>
            </tr>
            <tr class='style1'>
              <td colspan='3'>&nbsp;</td>
              </tr>
            <tr class='style1'>
              <td colspan='3' bgcolor='#D9F0E7'><div align='center'><strong>Quote of the Day Stuff </strong></div></td>
              </tr>
            <tr class='style1'>
              <td>Quote</td>
              <td>&nbsp;</td>
              <td><span class='style1'>
                <textarea name='quote' cols='50' rows='20' wrap id='quote'></textarea>
              </span></td>
            </tr>
            <tr class='style1'>
              <td>Quote Source: </td>
              <td>&nbsp;</td>
              <td><textarea name='qsource' cols='50' rows='15' wrap id='qsource'></textarea></td>
            </tr>
            <tr class='style1'>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class='style1'>
              <td>Quote2: </td>
              <td>&nbsp;</td>
              <td><textarea name='quote2' cols='50' rows='20' wrap id='quote'></textarea></td>
            </tr>
            <tr class='style1'>
              <td>Quote Source 2 </td>
              <td>&nbsp;</td>
              <td><textarea name='qsource2' cols='50' rows='15' wrap id='qsource2'></textarea></td>
            </tr>
            <tr class='style1'>
              <td>Quote 2 Link </td>
              <td>&nbsp;</td>
              <td><input name='qlink2' type='text' id='qlink2'></td>
            </tr>
          </table>
          <p align='left' class='style1'>
            <input name='postdate' type='hidden' id='<?php echo $today = date('Y-m-j'); ?>'>
          </p>
          <p align='left' class='style1'>&nbsp;</p>
          <p align='left'>
            <input type='submit' name='submitjoke' value='SUBMIT'>
          </p>
		  </form>";
		  }
		  ?>

          <?php



else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "consor5", "c0n$0r667");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}

	// Select the jokes database
	if (! @mysql_select_db("consor5_nnews") ) {
	echo( "<P>Unable to locate the db at this time</p>" );
	exit();
	}

	//If a joke has been submitted, add it to the db
	if ($submitjoke == "SUBMIT") {
	  // Is magic quotes on?
		  if (get_magic_quotes_gpc()) {
		  // Yes? Strip the added slashes
		  $_REQUEST = array_map('stripslashes', $_REQUEST);
		  $_GET = array_map('stripslashes', $_GET);
		  $_POST = array_map('stripslashes', $_POST);
		  $_COOKIE = array_map('stripslashes', $_COOKIE);
		  }
	$cleanits=addslashes(trim($HTTP_POST_VARS['its']));
	$cleanheadline=addslashes(trim($HTTP_POST_VARS['headline']));
	$cleanauthor=addslashes(trim($HTTP_POST_VARS['author']));
	$cleansource=addslashes(trim($HTTP_POST_VARS['source']));
	$cleanshortstory=addslashes(trim($HTTP_POST_VARS['short_story']));
	$cleanstory=trim($HTTP_POST_VARS['story']);
	$cleanquote=addslashes(trim($HTTP_POST_VARS['quote']));
	$cleanqsource=addslashes(trim($HTTP_POST_VARS['qsource']));
	$cleanquote2=addslashes(trim($HTTP_POST_VARS['quote2']));
	$cleanqsource2=addslashes(trim($HTTP_POST_VARS['qsource2']));
	$sql = "INSERT INTO items SET
			ID='$ID',
			its='$cleanits',
			headline='$cleanheadline',
			author='$cleanauthor',
			source='$cleansource',
			date1='$date1',
			date2='$date2',
			postdate=CURDATE(),
			link1='$link1',
			link2='$link2',
			sort='$sort',
			hp='$hp',
			flag='$flag',
			short_story='$cleanshortstory',
			story='$cleanstory',
			quote='$cleanquote',
			qsource='$cleanqsource',
			quote2='$cleanquote2',
			qsource2='$cleanqsource2'";
	if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}

//If an entry has been deleted, remove it
if (isset($deletethisentry06)) {
	$sql = "DELETE FROM items
			WHERE ID=$deleteitem";
	if (@mysql_query($sql)) {
	echo("<p>The entry has been deleted.</p>");
} else {
	echo("<p>error deleting entry: " .
	mysql_error() . "</p>");
}
}
 if($_SESSION['password'] <>""){
	echo("<p> Here are all the entries<p>" .
		"<a href='$PHP_SELF?addentry=1'>".
		"<font face='Arial' size='3'>Add an entry!</font></a>".
		"</p>");

	//Request the text of all the jokes
	$result = @mysql_query("SELECT * FROM items WHERE items.blog='No' ORDER BY ID DESC");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each joke in a paragraph
	while ( $row = mysql_fetch_array($result) ) {
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