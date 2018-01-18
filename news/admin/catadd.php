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
<P3P: policyref="/w3c/p3p.xml"><link rel="P3Pv1" href="/w3c/p3p.xml">
<title>Consortiuminfo.org Consortium Standards Bulletin</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
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
.style2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
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
  <div align="center"><img src="/images/newsheader.gif" width="762" height="120" alt=""></div></td></tr><tr><td width="100%" valign="top" bgcolor="#FFFFFF"><div align="right">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr valign="top">
        <td width="100%" valign="top" bgcolor="#D9F0E7">
            <table width="99%"  border="0" cellspacing="0" cellpadding="0">
              <tr valign="middle">
                <td width="1%">&nbsp;</td>
                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> <a href="/news/admin/">News Admin </a></b></font></b></font></td>
                <td width="29%"><div align="right"><span class="medium"></span></div></td>
              </tr>
            </table>
        <td width="0%" bgcolor="#D9F0E7"><div align="center"><span class="medium"></span></div></td>
      </tr>
    </table>
    <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>
<tr>
  <td width="100%" valign="top"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
    <tr valign="top">
      <td bgcolor="#D9F0E7"><table width="740"  border="0" align="center" cellpadding="1" cellspacing="0">
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
                                        <?php
if (isset($_GET["addcat"])): //If the user wants to add an entry
$s_addcat = intval($_GET["addcat"]);
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<p class="style2"><b>Category ID: </b><?php echo "$s_addcat" ?></p>
	<p class="style2"><b>Title: </b>
	<?php
	$db = mysql_connect("localhost", "consor5", "c0n$0r667");
	mysql_select_db("consor5_nnews", $db);
	$result = mysql_query("SELECT * FROM items where items.ID = $s_addcat", $db);
	while ($myrow = mysql_fetch_array($result)) {
		echo $myrow["headline"];
	}
	?>
	</p>
	<p class="style2"><b>Categories:</b>
	<?php
	$db = mysql_connect("localhost", "consor5", "c0n$0r667");
	mysql_select_db("consor5_nnews", $db);
	$result = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid, items.ID FROM ((((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) INNER JOIN lookup on parent.pid = lookup.pid AND child.child=lookup.cid) INNER JOIN items on lookup.entry = items.ID) WHERE items.ID = $s_addcat ORDER BY parent.pname, child.sort, child.cname", $db);
	while ($myrow = mysql_fetch_array($result)) {
		echo "<br>".$myrow["pname"]." &mdash; ".$myrow["cname"];
	}
	?>
	</p>
	<p class="style2">
                                     
<?php
$db = mysql_connect("localhost", "consor5", "c0n$0r667");
$prevpid="";
mysql_select_db("consor5_nnews", $db);
$result = mysql_query("SELECT parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) ORDER BY parent.pname, child.sort, child.cname ", $db);

while ($myrow = mysql_fetch_array($result)) {
$catsid=$myrow["pid"]."-".$myrow["cid"];
$curpid=$myrow["pid"];
$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));

//Added this to establish childname
$ChildName=$myrow["cname"];
//Added this to establish childname

if ($curpid <> $prevpid) {
	echo "<b><br>".$myrow["pname"]."<br></b>";
}




if (
(($myrow["pname"] == "Topical News") && ($myrow["cname"] == "China")) ||
(($myrow["pname"] == "Topical News") && ($myrow["cname"] == "Europe")) ||
(($myrow["pname"] == "Consortium News") && ($myrow["cname"] == "Mergers, Dissolutions, etc.")) ||
(($myrow["pname"] == "Standard Setting News") && ($myrow["cname"] == "Intellectual Property Issues")) ||
(($myrow["pname"] == "Standards Business News") && ($myrow["cname"] == "Story Updates")) ||
(($myrow["pname"] == "Consortium News") && ($myrow["cname"] == "New Consortia")) ||
(($myrow["pname"] == "Consortium News")) ||
(($myrow["pname"] == "Standard Setting News") && ($myrow["cname"] == "Open Source"))
)
{
	echo "";
	} else {
	echo $ChildName;
	echo "<input type=\"checkbox\" name=\"category[]\" id=\"$catsid\" value=\"$catsid\"";
	
	//Added this to put check next to existing cat/subcat
	mysql_select_db("consor5_nnews", $db);
	$resultLook = mysql_query("SELECT * FROM lookup where entry=$s_addcat", $db);
	while ($myrow = mysql_fetch_array($resultLook)) {
		$CurSelected = $myrow["pid"]."-".$myrow["cid"];
		if ($CurSelected == $catsid) { echo " checked"; }
	}
	//Added this to put check next to existing cat/subcat
	
	echo ">$pid1&nbsp;$cid1<br>";
}

$prevpid=$curpid;
}

?>
                                         </p>
                                        <p>
										  <input name="ID" type="hidden" id="ID" value="<?php echo $s_addcat ?>">
                                          <input type="submit" name="submitjoke" value="SUBMIT" />
                                        </p>
                                      </form>
                                      <?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = mysql_connect("localhost", "consor5", "c0n$0r667");
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
	if ($_POST["submitjoke"] == "SUBMIT") {
	foreach($_POST["category"] as $catsid){
		$ID = intval($_POST["ID"]);
		$pos = strpos($catsid, "-");
		$pid1 = substr($catsid, 0, $pos);
		$cid1 = substr($catsid, $pos + 1, strlen($catsid) - ($pos + 1));
		//echo("<b>foreach $ID<br>$pid1<br>$cid1</b>$catsid");	// debugging
			$sql = "INSERT IGNORE INTO lookup SET
			entry='$ID',
			pid='$pid1',
			cid='$cid1'";
		if (@mysql_query($sql)) {
			echo("<p>Your entry has been added.</p>");
			//echo("<b>$ID<br>$pid1<br>$cid1</b>$catsid");
			echo "<p><a href='/news/admin/index2.php'>";
			echo "Add another entry</a></p>";
			//print_r($_POST);
		} else {
			echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}
	}


	//Request the text of all the jokes
	$result = @mysql_query("SELECT * FROM items ORDER BY ID DESC");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each joke in a paragraph
	while ( $row = mysql_fetch_array($result) ) {
	$ID = $row["ID"];
	$TITLE = $row["headline"];
	echo("<font face='Arial' size='2'>".
		"<b>$ID</b>&nbsp;<i>$ID</i><br> ".
		"<p><b>$title</b>-".
		"<a href='/news/admin/edit.php?ID=$ID'>" .
		"Edit this entry</a>&nbsp;| ".
		"<a href='$PHP_SELF?addcat=$ID'>" .
		"Add to a category</a></p>");
}

	//When clicked the link will load this page
		echo("<p><a href='/news/admin/index2.php'>" .
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
                         

                         </td>

                      </tr>

                    </table>

</td>

          </tr>

        </table>

       

          </td>

    </tr>

  </table>

</body>

</html>
