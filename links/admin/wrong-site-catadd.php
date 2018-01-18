<html><HEAD>
<TITLE>News:</TITLE>
<style type="text/css">
<!--















  A:link {color:#"178265";}







  A:visited {color:"#178265";}







  A:hover {color:"red";}







  A:hover { text-decoration:none; }
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style2 {font-size: 12px; font-family: Arial, Helvetica, sans-serif;}















--></style>
<meta name="keywords" content="Laws, cases, regulations, antitrust, business interdependence, standard-setting, articles, industry regulation, enforcement, IP, ANSI's National Standards">
<meta name="description" content="Broadly stated, the basic objective of the US antitrust laws is to preserve and promote competition and the free enterprise system. They are premised on the assumption that private enterprise and free competition are the most efficient ways to allocate resources, to produce goods at the lowest possible price and to assure the production of high quality products. At their simplest, the antitrust laws require that business people make independent business decisions without consultation or agreement with competitors.">
</HEAD>
<BODY link="#178265" vlink="#178265" alink="#178265">
  <table cellspacing=0 cellpadding=0 width="100%" border=0>
    <tbody> 
    
    </tbody> 
  </table>
  <center>
  </center>
  <table>
    <tbody> 
    <tr> 
      <td></td>
    </tr>
    </tbody>
  </table>
  <table cellspacing=0 cellpadding=0 width="100%" bgcolor=white border=0>
    <tbody> 
    <tr> 
      <td height=1> 
        <table cellspacing=0 cellpadding=0 border=0>
          <tbody> 
          <tr> 
            <td height=1></td>
          </tr>
          </tbody>
        </table>
      </td>
    </tr>
    </tbody>
  </table>
  <table width="98%" height="43" border=0 align="center" cellpadding=0 cellspacing=0>
    <tbody> 
    <tr> 
      <td valign="top" height="1893" > 
        <table width="100%" height="11%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr> 
              <td valign="top"><div align="center">
                <p class="style1">Consortiuminfo.org Consortium ListAdmin Interface- Add to a category </p>
                <p align="left">
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="5%">&nbsp;</td>
                      <td width="77%">                        <div align="left">
                        <div id="content">
                          <div class="story">
                            <div>
                              <p><?php
if (isset($addcat)): //If the user wants to add an entry
?>
                              <form action="<?=$PHP_SELF?>" method="post">
                                <p class="style2">Category</p>
                                <p class="style2">ID:<?php echo "$addcat" ?><br>
          Headline: <font size="2" face="Arial, Helvetica, sans-serif">
          <?php

$db = mysql_connect("localhost", "root", "letmein");

mysql_select_db("license", $db);

$addcat = $_GET["addcat"];
$result = mysql_query("SELECT title FROM software WHERE $addcat=software.sid", $db);

echo "<table border=0>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result)) 

	{

	echo "<tr><td><b><font size=2>".$myrow["title"]."</b><p>";
	

}

echo "</TABLE>";





?>
          </font></p>
                                <p class="style2">  <?php
				$db = mysql_connect("localhost", "root", "letmein");
				mysql_select_db("license", $db);
				$addcat = $_GET["addcat"];
				$result = mysql_query("SELECT id, name FROM license", $db);
				while ($myrow = mysql_fetch_array ($result))
				{
				echo "<input name='hidden' type='hidden' value='$addcat'>";
				echo  "<input name='cat_id' type='checkbox' id='cat_id' value=".$myrow["id"].">".$myrow["name"]."<br>";
				}
?> </p>
                                <p>&nbsp;</p>
                                <p>
                                  <input type="submit" name="submitjoke" value="SUBMIT" />
                                </p>
                              </form>
                              <?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "root", "letmein");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}
	
	// Select the jokes database
	if (! @mysql_select_db("license") ) {
	echo( "<P>Unable to locate the db at this time</p>" );
	exit();
	}
	
	//If a joke has been submitted, add it to the db
	if ($submitjoke == "SUBMIT") {
	$sql = "INSERT INTO lslookup SET
			lid='$cat_id',
			swid='$hidden'";
	if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}

	//Request the text of all the jokes
	$result = @mysql_query("SELECT * FROM software ORDER BY sid DESC");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each joke in a paragraph
	while ( $row = mysql_fetch_array($result) ) {
	$sid = $row["sid"];
	$title= $row["title"];
	$comment = $row["comment"];
	echo("<font face='Arial' size='2'>".
		"<b>$sid</b>&nbsp;$title<br> ".
		"<p><b>$comment</b> ".
		"<a href='/licensedb/admin/edit.php?ID=$sid'>" .
		"Edit this entry</a>&nbsp;| ".
		"<a href='$PHP_SELF?addcat=$sid'>" .
		"Add to a category</a></p>");	
}

	//When clicked the link will load this page
		echo("<p><a href='/licensedb/admin/index2.php'>" .
			"Add an entry!</a></p>");
			
	endif;
?>
                            </div>
                          </div>
                        </div>
                        <!--end content -->
                        <!--end navbar -->
                        <div id="siteInfo"> </div>
                        <br>
                      </div></td>
                      <td width="18%">&nbsp;</td>
                    </tr>
                </table>
                <p align="left">                </div>
              </td>
          </tr>
        </table>
      </td>
    </tr>
    </tbody> 
  </table>
  <div align="center"></div>
  <p> 
  <p> 
  <p> <br 
clear=all>
    <center>
    </center>
  <p align="center"> 
    <!--#include virtual="/include2.shtml" -->
    <b><font color="#009966" face="Arial"><b> <font color="#009966" face="Arial"><b> 
    <!-- Start Superstats code version 3.0b.  Copyright 1997-2001 MyComputer.com, Inc. More info available at http://www.mycomputer.com -->
    <script language="JavaScript">/* You may give each page an identifying name, server, and channel on the next lines. */var pageName = "ALL NEWS";/**** DO NOT ALTER ANYTHING BELOW THIS LINE! ****/var code = ' '; </script>
    <script src="http://code.superstats.com/code/ss/lgu/0/30b"></script>
    <script language="JavaScript">br = navigator.appName + parseInt(navigator.appVersion);if (code != ' ' || br == 'Netscape2') document.write(code);else document.write(''+ ' <im'+'g'+ ' src="http://stats.superstats.com/b/ss/lgu/1'+ '?pageName=' + escape(pageName) + '" border=0>');document.write('<'); document.write('!-- ');</script>
    </b></font></b></font></b> 
  <p><b><font color="#009966" face="Arial"><b><font color="#009966" face="Arial"><b><noscript><img src="http://stats.superstats.com/b/ss/lgu/1" border=0></noscript> 
    <script language="JavaScript">document.write(' --'); document.write('>');</script>
    <!-- End Superstats tracking code. -->
    </b></font></b></font></b>
  <p><br>
<P>
</BODY></HTML>
