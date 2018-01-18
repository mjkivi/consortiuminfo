<?php
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
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}
.style12 {
	color: #FF0000;
	font-weight: bold;
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

<td width="140" bgcolor="#D9F0E7" valign="top">
        <div align="right">
          <table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center"></div></td>
            </tr>
          </table>

        </div></td><td width="10" bgcolor="#D9F0E7"></td><td width="594" bgcolor="#D9F0E7">

    <table border="0" cellpadding="0" cellspacing="0" width="92%"><tr><td bgcolor="#000000">

<table border="0" cellpadding="0" cellspacing="1" width="100%">
  <tr><td valign="top" bgcolor="#FFFFFF">

  <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><?php

//$con = mysql_connect("localhost", "consor5", "c0n$0r667");
//mysql_select_db("consor5_nnews");

$con=mysqli_connect("localhost","consor5", "c0n$0r667","consor5_nnews_utf");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if ($_POST["action"] == "edit") {

	$ID = intval($_REQUEST["ID"]);
	$cleanits = mysqli_real_escape_string($con, $_POST["its"]);
	$cleanheadline = mysqli_real_escape_string($con, $_POST["headline"]);
	$cleanauthor = mysqli_real_escape_string($con, $_POST["author"]);
	$cleansource = mysqli_real_escape_string($con, $_POST["source"]);
	$cleandate1 = mysqli_real_escape_string($con, $_POST["date1"]);
	$cleandate2 = mysqli_real_escape_string($con, $_POST["date2"]);
	$cleanstory = mysqli_real_escape_string($con, $_POST["story"]);
	$cleanlink1 = mysqli_real_escape_string($con, $_POST["link1"]);
	$cleanlink2 = mysqli_real_escape_string($con, $_POST["link2"]);
	$cleansort = mysqli_real_escape_string($con, $_POST["sort"]);	
	$cleanquote = mysqli_real_escape_string($con, $_POST["quote"]);
	$cleanqsource = mysqli_real_escape_string($con, $_POST["qsource"]);
	$cleanquote2 = mysqli_real_escape_string($con, $_POST["quote2"]);
	$cleanqsource2 = mysqli_real_escape_string($con, $_POST["qsource2"]);
	$cleanqlink2 = mysqli_real_escape_string($con, $_POST["qlink2"]);

	$xsql="UPDATE items SET 
		its='$cleanits', 
		headline='$cleanheadline', 
		author='$cleanauthor', 
		source='$cleansource', 
		date1='$cleandate1', 
		date2='$cleandate2', 
		story='$cleanstory', 
		link1='$cleanlink1', 
		link2='$cleanlink2', 
		sort='$cleansort', 
		quote='$cleanquote', 
		qsource='$cleanqsource', 
		quote2='$cleanquote2', 
		qsource2='$cleanqsource2', 
		qlink2='$cleanqlink2' 
		WHERE (ID='$ID')";
	$sql = mysqli_query($con, $xsql);
	//echo " $xsql";
	//$xsql="INSERT INTO items SET headline='$headline', author='$author', source='$source', date1='$date1', story='$story', link1='$link1'";
	//$sql = mysql_query($xsql);
?>

<div align="left" class="style2"><font size="2">Your changes have been saved.</font> <BR>
        &nbsp;&nbsp;<font size="2">  <b>Title:</b> <?php echo $headline ?> <BR>
        &nbsp;&nbsp;       <font size="2">   <b>ID:</b>  <?php echo $ID ?> <BR>


        <center>  <p><b><a href="/news/admin/index2.php">Return</a> to entry list</b></center>

<?php

}

else {
$ID = intval($_REQUEST["ID"]);
$query = mysqli_query($con, "SELECT * FROM items WHERE(ID='$ID')");

if (mysqli_num_rows($query) != 1) {
        echo "The news article ID is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysqli_fetch_array($query);
        echo("Edit ".$info['headline']."");
?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">

                                  <INPUT TYPE="hidden" NAME="action" VALUE="edit">

<TABLE width="499">
                                    <TR>
                                      <TD COLSPAN=2><CENTER class="style12">
                                          Make your changes in the fields below, and when done, click &quot;Save Changes.&quot;
                                      </CENTER></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD width="83" class="style1">Headline:</TD>
                                      <TD width="404"><input name="headline" type="text" id="headline" value="<?php echo $info['headline'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Author</TD>
                                      <TD><input name="author" type="text" id="author" value="<?php echo $info['author'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Source</TD>
                                      <TD><input name="source" type="text" id="source" value="<?php echo $info['source'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Display Date </TD>
                                      <TD><input name="date1" type="text" id="date1" value="<?php echo $info['date1'] ?>" size="60"></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Real Date: </TD>
                                      <TD><input name="date2" type="text" id="date2" value="<?php echo $info['date2'] ?>" size="60"></TD>
                                    </TR>
                                    <TR valign="top" class="style2">
                                      <TD class="style1">Comments</TD>
                                      <TD><textarea name="its" cols="50" rows="25" id="its"><?php echo $info['its'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Link</TD>
                                      <TD><input name="link1" type="text" id="link1" value="<?php echo $info['link1'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Link 2 </TD>
                                      <TD><input name="link2" type="text" id="link2" value="<?php echo $info['link2'] ?>" size="60"></TD>
                                    </TR>
                                    <TR valign="top" class="style2">
                                      <TD class="style1">Story</TD>
                                      <TD><textarea name="story" cols="50" rows="25" id="story"><?php echo htmlspecialchars($info['story']) ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Sort</TD>
                                      <TD><input name="sort" type="text" id="sort" value="<?php echo $info['sort'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">&nbsp;</TD>
                                      <TD>&nbsp;</TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top" class="style1">Quote:</TD>
                                      <TD><textarea name="quote" cols="50" rows="25" id="story"><?php echo $info['quote'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top" class="style1">Quote Source: </TD>
                                      <TD><textarea name="qsource" cols="50" rows="15" id="story"><?php echo $info['qsource'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">&nbsp;</TD>
                                      <TD>&nbsp;</TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Quote 2: </TD>
                                      <TD><textarea name="quote2" cols="50" rows="25" id="quote2"><?php echo $info['quote2'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Quote Source 2: </TD>
                                      <TD><textarea name="qsource2" cols="50" rows="15" id="qsource2"><?php echo $info['qsource2'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD class="style1">Quote 2 Link </TD>
                                      <TD><input name="qlink2" type="text" id="qlink2" value="<?php echo $info['qlink2'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2><div align="center">
                                          <p>
                                            <input name="submit" type="submit" value="Save Changes">
                                          </p>
                                          </div></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2>&nbsp;</TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2></TD>
                                    </TR>
                                  </TABLE>
</FORM>

                                  <?php // showfooter(); // where is this function defined?????
    }
}
?>
</td>
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
