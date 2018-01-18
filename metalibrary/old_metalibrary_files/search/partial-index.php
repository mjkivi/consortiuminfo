<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consortiuminfo.org Standards Bookstore Search</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="GUNet">


<style type="text/css">

<!--































  A:link {color:"blue";}















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

.style5 {

	color: #FF0000;

	font-weight: bold;

}

.style7 {

	color: #333399;

	font-weight: bold;

	font-size: 16px;

}

.style10 {color: #FF0000; font-style: italic; font-size: 16px; font-weight: bold; }
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}































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
  <div align="center"><img src="/images/metalibheader.gif" width="762" height="120"></div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
    </b></font></b></font></span>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="29%" bgcolor="#D9F0E7"><div align="center" class="style1"><a href="/">Home</a> &gt; <a href="/metalibrary/">MetaLibrary</a> &gt; Search&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
            <td width="69%" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b></b></font></b></font></span></div></td>
            <td width="2%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b>
             </b></font></b></font></span></div></td>
          </tr>
        </table>
        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>        </b></font></b></font></span>
  </div></td></tr></table>
</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top">
<td width="11" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""></td>
<td width="13" bgcolor="#D9F0E7" valign="top"><br>
  <br>
  <br></td><td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="714" bgcolor="#D9F0E7">
<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6"><tr><td bgcolor="#FFFFFF">
<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#ffffff"><tr><td valign="top">
<center>
  <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr valign="top">
      <td colspan="3" class="style1"><form name="find" id="find" method="GET" action="/metalibrary/search/index.php">
            <div align="center">Search Again&nbsp;                <input name="SEARCH" type="text" id="SEARCH" />
                <input name="sumbit" type="submit" id="SEARCH" />
              </div>
      </form></td>
      </tr>
    <tr>
      <td width="8%" class="style1">&nbsp;</td>
      <td width="18%" class="style1">&nbsp;</td>
      <td width="74%" class="style1"><div align="right"><strong><em>Results for search term </em></strong><strong><em> </em><font color="08305A">
        <?php

    echo "$SEARCH";

?>
      </font></strong></div></td>
    </tr>
  </table>
  </center></td></tr></table></td></tr></table>
<br><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr>
  <td valign="top" bgcolor="#FFFFFF"> <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td class="style1"><p align="center"><strong>Exact Matches:</strong></p>
        <p>
          <?php
$host='localhost';   // Hostname of MySQL server
$dbUser='root';    // Username for MySQL
$dbPass='ho8B7asw';    // Password for user
$dbName='library'; // Database name

// Make connection to MySQL server
if (!$dbConn = mysql_connect($host, $dbUser, $dbPass)) {
    trigger_error('Could not connect to server: '.mysql_error());
    die ();
}

// Select the database
if ( !mysql_select_db($dbName) ) {
    trigger_error ('Could not select database: '.mysql_error());
    die ();
}

// Select only those rows that match
// $sql="SELECT * FROM books WHERE MATCH (TITLE,DESCR,AUTHOR) AGAINST ('XML')";

// Select all rows but display relvance
$sql="SELECT
        *, MATCH (title,abstract,first,last) 
      AGAINST
        ('$SEARCH')
      AS
        score
      FROM
        entries
      ORDER BY score DESC";

// Run the query, identifying the connection
$queryResource=mysql_query($sql,$dbConn);

// Fetch rows from MySQL one at a time
while ($row=mysql_fetch_array($queryResource,MYSQL_ASSOC)) {
  if ($row['score']>=2){ 
    echo ( 'Title: <a href=/metalibrary/detail.php?EID='.$row['id'].'>'.$row['title'].'</a><br />' );
    echo ( 'Author: '.$row['last'].','.$row['first'].'<br />' );
    echo ( 'Description: ');
	echo str_replace($SEARCH, '<B>' .$SEARCH . '</B>', $row['abstract']);
	echo ( '<br />');
    echo ( 'Score: '.$row['score'].'<br />' );
	echo ( '<hr>' );

}}
?>
        </p>
        <p align="center"><strong>Partial Matches </strong></p>
        <?php
$host='localhost';   // Hostname of MySQL server
$dbUser='root';    // Username for MySQL
$dbPass='ho8B7asw';    // Password for user
$dbName='library'; // Database name

// Make connection to MySQL server
if (!$dbConn = mysql_connect($host, $dbUser, $dbPass)) {
    trigger_error('Could not connect to server: '.mysql_error());
    die ();
}

// Select the database
if ( !mysql_select_db($dbName) ) {
    trigger_error ('Could not select database: '.mysql_error());
    die ();
}

// Select only those rows that match
// $sql="SELECT * FROM books WHERE MATCH (TITLE,DESCR,AUTHOR) AGAINST ('XML')";

// Select all rows but display relvance
$sql="SELECT
        *, MATCH (TITLE,DESCR,AUTHOR,ISBN) 
      AGAINST
        ('$SEARCH')
      AS
        score
      FROM
        books HAVING score<2 AND score>0
      ORDER BY score DESC";

// Run the query, identifying the connection
$queryResource=mysql_query($sql,$dbConn);
$weird=(mysql_num_rows($queryResource));
echo ('there are '.$weird.' records');
if ($weird<1){
	echo ( 'There are no partial matches.');
	}
else
{
	while ($row=mysql_fetch_array($queryResource,MYSQL_ASSOC)) {
  	echo ( 'text');
	echo ( 'ISBN: '.$row['ISBN'].'<br />');
    echo ( 'Title: <a href=/books/detail.php?BID='.$row['ID'].'>'.$row['TITLE'].'</a><br />' );
    echo ( 'Author: '.$row['AUTHOR'].'<br />' );
    echo ( 'Description: '.$row['DESCR'].'<br />' );
    echo ( 'Score: '.$row['score'].'<br />' );
	echo ( '<hr>' );
}
}
// Fetch rows from MySQL one at a time


?></td>
    </tr>
  </table>
    <br>
</td>
</tr></table>
</td></tr></table><br>
<br></td><td width="14" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></body>
</html>