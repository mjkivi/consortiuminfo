<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<title>SocialHostLiability</title>
<link rel="STYLESHEET" href="../styles.css" type="text/css" />
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;
}
-->
</style>
</head>
<body>
<div id="pageWrapper">
    <div id="top">
        <br />
        <span class="highlight">SocialHostLiability.org</span><br />
        <span class="slogan">Hosted by <a href="http://www.campbell-trial-lawyers.com/">Campbell, Campbell, Edwards &amp; Conroy</a> </span>
        <br />
        <br />
    </div>
    <div id="header">
</div>
  <div id="contentWrappper">
        <div class="bar">
           <span class="csbhead">
            <?php

$db = mysql_connect("localhost", "evanmc", "mandala");
mysql_select_db("evanmc_ccec", $db);
$result = mysql_query("SELECT * FROM cats WHERE area='1' ORDER BY SORT ASC", $db);







while ($myrow = mysql_fetch_array($result)) 


	{

	echo "<a href='/".$myrow["url"]."'>".$myrow["cname"]."</a>&nbsp;&nbsp;";

}
?>
          </span></div>
        <div id="uleftColumn"><img src="/ccec/images/campbell.gif" alt="Richard Campbell" width="135" height="181" /></div>
        <div id="urightColumn">
            <table width="546"  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="286"><a href="/">Home</a> &gt; Sitemap</td>
                <td width="260"><?php echo(date("F d Y")); ?></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"><span class="csbhead"><span class="feature">
                    Sitemap
                </span></span></div></td>
              </tr>
              <tr>
                <td colspan="2"><table width="98%" border="0" cellspacing="1" cellpadding="8" bgcolor="#ffffff">
                  <tr>
                    <td valign="top"><center>
                        <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr valign="top">
                            <td colspan="3" class="style1"><form name="find" id="find" method="get" action="/search/index.php">
                                <div align="center">Search Again&nbsp;
                                    <input name="SEARCH" type="text" id="SEARCH" />
                                    <input name="sumbit" type="submit" id="SEARCH" />
                                </div>
                            </form></td>
                          </tr>
                          <tr>
                            <td width="8%" class="style1">&nbsp;</td>
                            <td width="18%" class="style1">&nbsp;</td>
                            <td width="74%" class="style1"><div align="right"><strong><em>Results for search term </em></strong><strong><em> </em><font color="08305A">
                                <?php
$SEARCH=$_GET['SEARCH'];
    echo "$SEARCH";

?>
                            </font></strong></div></td>
                          </tr>
                        </table>
                    </center></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><?php
$host='localhost';   // Hostname of MySQL server
$dbUser='evanmc';    // Username for MySQL
$dbPass='mandala';    // Password for user
$dbName='evanmc_ccec'; // Database name

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
$sql1="SELECT pages.pid FROM pages";

// Select all rows but display relvance
//$SEARCH=$_GET['SEARCH'];
$sql="SELECT
        *, MATCH (ptitle,ptext,pkeys) 
      AGAINST
        ('$SEARCH')
      AS
        score
      FROM
        pages
      ORDER BY score DESC";

// Run the query, identifying the connection
$queryResource=mysql_query($sql,$sql1,$dbConn);

// Fetch rows from MySQL one at a time
while ($row=mysql_fetch_array($queryResource,MYSQL_ASSOC)) {
  if ($row['score']>=1){ 
    echo ( 'Title: <a href=/welcome/article.php?ID=$row['pid']>'.$row['pid'].''.$row['ptitle'].'</a><br />' );
    echo ( 'Description: ');
	echo str_replace($SEARCH, '<B>' .$SEARCH . '</B>', $row['ptext']);
	echo ( '<br />');
    echo ( 'Score: '.$row['score'].'<br />' );
	echo ( '<hr>' );

}}
?></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><div align="center">
                  <?php include('../footer.php'); ?>
                </div></td>
              </tr>
            </table>
            <h1>&nbsp;</h1>
      </div>
        <div id="lleftColumn">
                                 <?php include('../links.php'); ?>&nbsp;
</div>
  </div>
</div>
<div id="footer">
    All Content © 2006 Campbell, Campbell, Edwards and Conroy <a href="http://globalelements.nl"></a>
</div>
</body>
</html>