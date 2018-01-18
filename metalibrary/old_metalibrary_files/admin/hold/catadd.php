<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<P3P: policyref="/w3c/p3p.xml"><link rel="P3Pv1" href="/w3c/p3p.xml">

<title>Consortiuminfo.org Consortium Standards Bulletin</title>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

<META HTTP-EQUIV="EXPIRES" CONTENT="0">

<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">

<META NAME="DISTRIBUTION" CONTENT="GLOBAL">

<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, ">

<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">





<style type="text/css">

<!--



  A:link {color:"#178265";}

  A:visited {color:"#178265";}

  A:hover {color:"red";}

  A:hover { text-decoration:none; }

body {

	margin-left: 0px;

	margin-top: 4px;

	margin-right: 0px;

	margin-bottom: 0px;

	background-color: #0E3259;

}

.unnamed1 {	font-weight: bold;

	color: #FF0000;

	text-decoration: none;

}

.style10 {font-family: Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; font-weight: bold; }

.style2 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

}

.style25 {font-size: 12px}



-->

</style>

</style>

<SCRIPT LANGUAGE="JavaScript">











<!-- Begin



function formHandler(form){



var URL = document.form.site.options[document.form.site.selectedIndex].value;



window.location.href = URL;



}



// End -->



</SCRIPT>



</head>



<body text="#000000">

<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="840">

<tr><td width="100%" valign="top">

<table border="0" cellpadding="0" cellspacing="0" width="762">

<tr><td width="100%" height="88" bgcolor="#A5DBC6">

  <div align="center"><img src="/bulletins/header.gif" width="762" height="120"></div></td></tr><tr><td width="100%" valign="top" bgcolor="#FFFFFF"><div align="right">

    <table width="100%"  border="0" cellspacing="0" cellpadding="0">

      <tr valign="top">

        <td width="100%" valign="top" bgcolor="#D9F0E7">
            <table width="99%"  border="0" cellspacing="0" cellpadding="0">

              <tr valign="middle">

                <td width="1%">&nbsp;</td>

                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a 

            href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> <a href="/library/">librarytore</a>  &gt; <a href="/library/admin/">Admin</a> </b></font></b></font></td>

                <td width="29%"><div align="right"><span class="medium">

                </span></div></td>

              </tr>

            </table> 

    

        <td width="0%" bgcolor="#D9F0E7"><div align="center"><span class="medium"></span></div></td>

      </tr>

    </table>     

    <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>

<tr>

  <td width="100%" valign="top"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">

    <tr valign="top">

      <td bordercolor="#08305A" bgcolor="#D9F0E7"><table width="740"  border="0" align="center" cellpadding="1" cellspacing="0">

          <tr>

                  <td width="740" align="center" valign="top" bgcolor="#000000">

<table width="738" height="130" border="0" align="center" cellpadding="0" cellspacing="0">

                      <tr align="left" valign="top" bgcolor="#FFFFFF"> 

                        <td width="738" align="left"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="5%">&nbsp;</td>
                            <td width="77%" valign="top"><div align="left">
                                <div id="content">
                                  <div class="story">
                                    <div>
                                      <p>
                                        <?php
if (isset($addcat)): //If the user wants to add an entry
?>
                                      <form action="<?=$PHP_SELF?>" method="post">
                                        <p class="style2">Category</p>
                                        <p class="style2">ID:<?php echo "$addcat" ?><br>
                  Title: <font size="2" face="Arial, Helvetica, sans-serif">
                  <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("library", $db);

$result = mysql_query("SELECT * FROM entries where $addcat=entries.ID", $db);

echo "<table border=0>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result)) 

	{

	echo "<tr><td><b><font size=2>".$myrow["title"]."</b><p>";
	

}

echo "</TABLE>";





?>
                  </font> </p>
                                        <p><span class="style2">
                                        <font size="2" face="Arial, Helvetica, sans-serif"><font size="2" face="Arial, Helvetica, sans-serif">
                                       <?php

$db = mysql_connect("localhost", "consor5", "bgt667");
$prevpid="";
mysql_select_db("library", $db);

$result = mysql_query("SELECT  parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) ORDER BY parent.pname, child.sort, child.cname ", $db);

while ($myrow = mysql_fetch_array($result)) 
{
$catsid=$myrow["pid"]."-".$myrow["cid"];
$curpid=$myrow["pid"];
$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
if
($curpid <> $prevpid){ 
echo "<b><br>".$myrow["pname"]."<br></b>";
}
echo "".$myrow["cname"]."";
echo "<input type='checkbox' name='category[]' id='$catsid' value='$catsid'>";
echo "$pid1&nbsp;$cid1<br>";
$prevpid=$curpid;
}

?>
                                        </font> </font></span></p>
                                        <p>
										  <input name="ID" type="hidden" id="ID" value="<?php echo"$addcat"?>">
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
	foreach($category as $catsid){
	$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
		echo("<b>foreachtext$ID<br>$pid1<br>$cid1</b>$catsid");
			$sql = "INSERT INTO lookup SET
			entry='$ID',
			pid='$pid1',
			cid='$cid1'";
			if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
		echo("<b>$ID<br>$pid1<br>$cid1</b>$catsid");
		echo "<pre>"; 
print_r($_POST); 
echo "</pre>"; 
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}} 
	

	//Request the text of all the jokes
	$result = @mysql_query("SELECT * FROM entries ORDER BY id DESC");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each joke in a paragraph
	while ( $row = mysql_fetch_array($result) ) {
	$ID = $row["id"];
	$TITLE = $row["title"];
	echo("<font face='Arial' size='2'>".
		"<b>$ID</b>&nbsp;<i>$ID</i><br> ".
		"<p><b>$title</b>-".
		"<a href='/metalibrary/admin/edit.php?ID=$ID'>" .
		"Edit this entry</a>&nbsp;| ".
		"<a href='$PHP_SELF?addcat=$ID'>" .
		"Add to a category</a></p>");	
}

	//When clicked the link will load this page
		echo("<p><a href='/metalibrary/admin/index2.php'>" .
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
                          <p align="left"><font size="2" face="Arial, Helvetica, sans-serif"> 

                            </font>
                          </p>

                          <blockquote><blockquote>&nbsp;</blockquote>

                          </blockquote></td>

                      </tr>

                    </table>

                <div align="center"></div></td>

          </tr>

        </table>

          <blockquote>

            <blockquote>&nbsp;</blockquote>

          </blockquote>

          <b><font color="#009966" face="Arial"><b>

          </b></font></b></td>

    </tr>

  </table>  

</body>

</html>