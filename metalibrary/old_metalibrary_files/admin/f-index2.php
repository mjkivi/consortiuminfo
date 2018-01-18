<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

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

  <div align="center"><img src="/images/newsheader.gif" width="762" height="120"></div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>

    </b></font></b></font></span>

        <table width="100%"  border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="22%" bgcolor="#D9F0E7"><div align="center" class="style1"><font face=arial size=-1>&nbsp;<a 
            href="/">Home</a> &gt;MetaLibrary  </font></div></td>

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
          <table width="520" border="0" cellspacing="0" cellpadding="0">
            <tr class="style1">
              <td width="125"><span class="style1">Title:</span></td>
              <td width="10">&nbsp;</td>
              <td width="381"><span class="style1">
                <textarea name="title" id="textarea"></textarea>
              </span></td>
            </tr>
            <tr class="style1">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class="style1">
              <td><span class="style1">Author's First Name:</span></td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="first" type="text" id="first">
              </span></td>
            </tr>
            <tr class="style1">
              <td><span class="style1">Author's Last Name:</span></td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="last" type="text" id="last">
              </span></td>
            </tr>
            <tr class="style1">
              <td><span class="style1">Author's Title: </span></td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <textarea name="atitle" id="textarea"></textarea>
              </span></td>
            </tr>
            <tr class="style1">
              <td>Publication Date: </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="pubdate" type="text" id="pubdate">
In the format of 2005-01-13          </span></td>
            </tr>
            <tr class="style1">
              <td>Month</td>
              <td>&nbsp;</td>
              <td><select name="month">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select></td>
            </tr>
            <tr class="style1">
              <td>Day:</td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="day" type="text" id="day">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Year:</td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="year" type="text" id="year">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Link</td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="link" type="text" id="link" size="50">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Source:</td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="source" type="text" id="source">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Site Name: </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="sitename" type="text" id="sitename">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Abstract</td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <textarea name="abstract" cols="40" rows="15" id="textarea"></textarea>
              </span></td>
            </tr>
            <tr class="style1">
              <td>Institution</td>
              <td>&nbsp;</td>
              <td><input name="institution" type="text" id="institution"></td>
            </tr>
            <tr class="style1">
              <td>Citation Type </td>
              <td>&nbsp;</td>
              <td><select name="cite" id="cite">
                <option value="1">Internet Article</option>
                <option value="2">Journal Article</option>
                <option value="3">Book</option>
                <option value="4">Article/Chapter in Book</option>
                <option value="5">Magazine Article</option>
                <option value="6">Government Publication</option>
                <option value="7">Lecture or Speech</option>
                            </select></td>
            </tr>
            <tr class="style1">
              <td>Terms</td>
              <td>&nbsp;</td>
              <td><select name="terms" id="terms">
                <option value="0">Free</option>
                <option value="1">Pay</option>
                            </select></td>
            </tr>
            <tr class="style1">
              <td>Access Month </td>
              <td>&nbsp;</td>
              <td><input name="amo" type="text" id="amo"></td>
            </tr>
            <tr class="style1">
              <td>Access Day </td>
              <td>&nbsp;</td>
              <td><input name="aday" type="text" id="aday"></td>
            </tr>
            <tr class="style1">
              <td>Access Year </td>
              <td>&nbsp;</td>
              <td><input name="ayear" type="text" id="ayear"></td>
            </tr>
            <tr class="style1">
              <td colspan="3"><div align="center">Additional Authors </div></td>
              </tr>
            <tr class="style1">
              <td>Authors First 2 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="first2" type="text" id="first2">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Last 2 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="last2" type="text" id="last2">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Title 2 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="atitle2" type="text" id="atitle2">
              </span></td>
            </tr>
            <tr class="style1">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class="style1">
              <td>Authors First 3 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="first3" type="text" id="first3">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Last 3 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="last3" type="text" id="last3">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Title 3 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="atitle3" type="text" id="atitle3">
              </span></td>
            </tr>
            <tr class="style1">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class="style1">
              <td>Authors First 4 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="first4" type="text" id="first4">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Last 4 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="last4" type="text" id="last4">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Title 4 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="atitle4" type="text" id="atitle4">
              </span></td>
            </tr>
            <tr class="style1">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class="style1">
              <td>Authors First 5 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="first5" type="text" id="first5">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Last 5 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="last5" type="text" id="last5">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Title 5 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="atitle5" type="text" id="atitle5">
              </span></td>
            </tr>
            <tr class="style1">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class="style1">
              <td>Authors First 6 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="first6" type="text" id="first6">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Last 6 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="last6" type="text" id="last6">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Title 6 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="atitle6" type="text" id="atitle6">
              </span></td>
            </tr>
            <tr class="style1">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr class="style1">
              <td>Authors First 7 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="first7" type="text" id="first7">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Last 7 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="last7" type="text" id="last7">
              </span></td>
            </tr>
            <tr class="style1">
              <td>Authors Title 7 </td>
              <td>&nbsp;</td>
              <td><span class="style1">
                <input name="atitle7" type="text" id="atitle7">
              </span></td>
            </tr>
          </table>
          <p align="left" class="style1">
            <input name="postdate" type="hidden" id="<?php echo $today = date("Y-m-j"); ?>">
          </p>
          <p align="left" class="style1">&nbsp;</p>
          <p align="left">
            <input type="submit" name="submitjoke" value="SUBMIT" />
          </p>
		  </form>
          <?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "consor5", "bgt667");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}
	
	// Select the jokes database
	if (! @mysql_select_db("library") ) {
	echo( "<P>Unable to locate the db at this time</p>" );
	exit();
	}
	
	//If a joke has been submitted, add it to the db
	if ($submitjoke == "SUBMIT") {
	$cleantitle=addslashes(trim($HTTP_POST_VARS['title']));
	$cleanfirst=addslashes(trim($HTTP_POST_VARS['first']));
	$cleanlast=addslashes(trim($HTTP_POST_VARS['last']));
	$cleansource=addslashes(trim($HTTP_POST_VARS['title']));
	$cleanshortstory=addslashes(trim($HTTP_POST_VARS['title']));
	$cleanstory=addslashes(trim($HTTP_POST_VARS['title']));
	$cleansitename=addslashes(trim($HTTP_POST_VARS['sitename']));
	$cleanabstract=addslashes(trim($HTTP_POST_VARS['abstract']));
	$cleanatitle=addslashes(trim($HTTP_POST_VARS['atitle']));
	$cleanfirst2=addslashes(trim($HTTP_POST_VARS['cleanfirst2']));
	$cleanfirst3=addslashes(trim($HTTP_POST_VARS['cleanfirst3']));
	$cleanfirst4=addslashes(trim($HTTP_POST_VARS['cleanfirst4']));
	$cleanfirst5=addslashes(trim($HTTP_POST_VARS['cleanfirst5']));
	$cleanfirst6=addslashes(trim($HTTP_POST_VARS['cleanfirst6']));
	$cleanfirst7=addslashes(trim($HTTP_POST_VARS['cleanfirst7']));
	$cleanlast2=addslashes(trim($HTTP_POST_VARS['cleanlast2']));
	$cleanlast3=addslashes(trim($HTTP_POST_VARS['cleanlast3']));
	$cleanlast4=addslashes(trim($HTTP_POST_VARS['cleanlast4']));
	$cleanlast5=addslashes(trim($HTTP_POST_VARS['cleanlast5']));
	$cleanlast6=addslashes(trim($HTTP_POST_VARS['cleanlast6']));				
	$cleanlast7=addslashes(trim($HTTP_POST_VARS['cleanlast7']));
	$cleanatitle2=addslashes(trim($HTTP_POST_VARS['cleanatitle2']));	
	$cleanatitle3=addslashes(trim($HTTP_POST_VARS['cleanatitle3']));	
	$cleanatitle4=addslashes(trim($HTTP_POST_VARS['cleanatitle4']));	
	$cleanatitle5=addslashes(trim($HTTP_POST_VARS['cleanatitle5']));	
	$cleanatitle6=addslashes(trim($HTTP_POST_VARS['cleanatitle6']));	
	$cleanatitle7=addslashes(trim($HTTP_POST_VARS['cleanatitle7']));	
	$cleancite=addslashes(trim($HTTP_POST_VARS['cite']));						
	$cleaninstitution=addslashes(trim($HTTP_POST_VARS['institution']));	
	$cleanterms=addslashes(trim($HTTP_POST_VARS['terms']));
	$cleanamo=addslashes(trim($HTTP_POST_VARS['amo']));	
	$cleanaday=addslashes(trim($HTTP_POST_VARS['aday']));	
	$cleanayear=addslashes(trim($HTTP_POST_VARS['ayear']));	
	$sql = "INSERT INTO entries SET
			title='$cleantitle',
			first='$cleanfirst',
			last='$cleanlast',
			pubdate='$pubdate',
			month='$month',
			day='$day',
			year='$year',
			link='$link',
			source='$cleansource',
			sitename='$cleansitename',
			abstract='$cleanabstract',
			atitle='$cleanatitle',
			first2='$cleanfirst2',
			last2='$cleanlast2',
			atitle2='$cleanatitle2',
			first3='$cleanfirst3',
			last3='$cleanlast3',
			atitle3='$cleanatitle3',
			first4='$cleanfirst4',
			last4='$cleanlast4',
			atitle4='$cleanatitle4',
			first5='$cleanfirst5',
			last5='$cleanlast5',
			atitle5='$cleanatitle5',
			first6='$cleanfirst6',
			last6='$cleanlast6',
			atitle6='$cleanatitle6',
			first7='$cleanfirst7',
			last7='$cleanlast7',
			atitle7='$cleanatitle7',
			cite='$cleancite',
			institution='$cleaninstitution',
			terms='$cleanterms',
			amo='$cleanamo',
			ayear='$cleanayear'";
	if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}

//If an entry has been deleted, remove it
if (isset($deleteitem)) {
	$sql = "DELETE FROM entries
			WHERE ID=$deleteitem";
	if (@mysql_query($sql)) {
	echo("<p>The entry has been deleted.</p>");
} else {
	echo("<p>error deleting entry: " .
	mysql_error() . "</p>");
}
}
	echo("<p> Here are all the entries<p>" .
		"<a href='$PHP_SELF?addentry=1'>".
		"<font face='Arial' size='3'>Add an entry!</font></a>".
		"</p>");

	//Request the text of all the jokes
	$result = @mysql_query("SELECT * FROM entries ORDER BY ID DESC");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each joke in a paragraph
	while ( $row = mysql_fetch_array($result) ) {
	$title = $row["title"];
	$id = $row["id"];
	$first = $row["first"];
	$last = $row["last"];
	$pubdate = $row["pubdate"];
	$month = $row["month"];
	$day = $row["day"];
	$year = $row["year"];
	$link = $row["link"];
	$abstract = $row["abstract"];
	echo("<font face='Arial' size='2'>".
		"<b>$id</b>&nbsp;<br> ".
		"<a href='$link'>$title</a>".
		"<p><b>$last $first</b>- ".
		"<b>$atitle</b>".
		"$month $day $year".
		"&nbsp;".
		"&nbsp;".
		"$abstract".
		"<a href='/metalibrary/admin/catadd.php?addcat=$id'>".
		"Add this entry to a category</a>&nbsp;| ".
		"<a href='/metalibrary/admin/edit.php?ID=$id'>" .
		"Edit this entry</a>&nbsp;|&nbsp;<a href='/metalibrary/admin/index2.php?deleteitem=$id'>Delete This Entry</a> ".
		"<p>");	
}

	//When clicked the link will load this page
		echo("<p><a href='$PHP_SELF?addentry=1'>" .
			"Add an entry!</a></p>");
			
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
 <!-- Start Superstats code version 3.0b.  Copyright 1997-2001 MyComputer.com, Inc. More info available at http://www.mycomputer.com -->
    <script language="JavaScript">/* You may give each page an identifying name, server, and channel on the next lines. */var pageName = "ALL NEWS";/**** DO NOT ALTER ANYTHING BELOW THIS LINE! ****/var code = ' '; </script>
    <script src="http://code.superstats.com/code/ss/lgu/0/30b"></script>
    <script language="JavaScript">br = navigator.appName + parseInt(navigator.appVersion);if (code != ' ' || br == 'Netscape2') document.write(code);else document.write(''+ ' <im'+'g'+ ' src="http://stats.superstats.com/b/ss/lgu/1'+ '?pageName=' + escape(pageName) + '" border=0>');document.write('<'); document.write('!-- ');</script>
    </b></font></b></font></b> 
  <p><b><font color="#009966" face="Arial"><b><font color="#009966" face="Arial"><b><noscript><img src="http://stats.superstats.com/b/ss/lgu/1" border=0></noscript> 
    <script language="JavaScript">document.write(' --'); document.write('>');</script>
    <!-- End Superstats tracking code. -->
</body>

</html>vaScript">document.write(' --'); document.write('>');</script>
    <!-- End Superstats tracking code. -->
</body>

</html>