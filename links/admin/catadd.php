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


?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

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
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

p { font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
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

<table border="0" cellpadding="0" cellspacing="0" width="840" align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="840">

<tr><td width="100%" valign="top">

<table border="0" cellpadding="0" cellspacing="0" width="762">

<tr><td width="100%" height="88" bgcolor="#A5DBC6">

  <div align="center"><img src="http://consortiuminfo.org/images/consortiumlist.gif" width="762" height="120"></div></td></tr><tr><td width="100%" valign="top" bgcolor="#FFFFFF"><div align="right">

    <table width="100%"  border="0" cellspacing="0" cellpadding="0">

      <tr valign="top">

        <td width="100%" valign="top" bgcolor="#D9F0E7">
            <table width="99%"  border="0" cellspacing="0" cellpadding="0">

              <tr valign="middle">

                <td width="1%">&nbsp;</td>

                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> <a href="/links/">Links</a> &gt; <a href="/links/admin/">Admin</a> </b></font></b></font></td>

                <td width="29%"><div align="right"><span class="medium">

                </span></div></td>

              </tr>

            </table>



        <td width="0%" bgcolor="#D9F0E7"><div align="center"><span class="medium"></span></div></td>

      </tr>

    </table>

   </div></td></tr></table>

<tr>

  <td width="100%" valign="top"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">

    <tr valign="top">

      <td bordercolor="#08305A" bgcolor="#D9F0E7"><table width="740"  border="0" align="center" cellpadding="1" cellspacing="0">

          <tr>

                  <td width="740" align="center" valign="top" bgcolor="#000000">

<table width="738" height="130" border="0" align="center" cellpadding="0" cellspacing="0" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">

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
if (isset($_GET["addcat"])): //If the user wants to add an entry
?>

<p><b>Title: </b>

<?php
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_clist", $db);

$s_addcat = intval($_GET["addcat"]);
$result = mysql_query("SELECT * FROM cons_list WHERE cons_list.cons_id = $s_addcat", $db);
while ($myrow = mysql_fetch_array($result)) { echo $myrow["cons_name"]; }
?>

</p>

<p><b>ID: </b><?php echo "$s_addcat" ?></p>

<p><b>Assigned Categories:</b><br>

<?php
	if (isset($_GET["msg"])) {
		$remove_cat_msg = $_GET["msg"];
		echo "<br/><span style='font-weight: bold; color: #FF0000;'>";
		if ($remove_cat_msg == "no-categories"){
			echo "No categories were selected to remove.";
		} else if ($remove_cat_msg == "categories-removed") {
			echo "The categories you selected were removed.";
		}
		echo "</span>";
	}
	$result = mysql_query("SELECT cons_cats.cat_id, cons_cats.cat_name, cons_list.cons_id, cons_list.cons_name, cat_lookup.cat_id, cat_lookup.cons_no
	FROM ((cons_cats INNER JOIN cat_lookup on cons_cats.cat_id = cat_lookup.cat_id)
	INNER JOIN cons_list on cat_lookup.cons_no = cons_list.cons_id)
	WHERE $s_addcat = cons_list.cons_id ORDER BY cons_cats.cat_name", $db);

	echo "<form id='remove' name='remove' action='remove_categories.php' method='POST' style='font-size: 12px;' action='remove.php'>";
	echo "<input type='hidden' name='id' value='".$s_addcat."'>";
	$i = 0;
	$removed_category;
	while ($myrow = mysql_fetch_array($result)) {
		echo "<input type='checkbox' name='".$i."' value='".$myrow['cat_id']."' />&nbsp;".$myrow['cat_name']."<br>";
		$i = $i + 1;
	}
	echo "<br/><input type='submit' value='Remove Checked Categories'/>";
	echo "</form>";
?>

<form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post">
</p>
<hr>

<p><b>Assign Listing To New Categories:</b><br>--------------------------------------------------------------------------------------------------------------------------------------------------------------</p>

<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td width="50%" valign="top" style="padding-right:70px;">
			<?php
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_clist", $db);

			$result = mysql_query("SELECT * FROM cons_cats WHERE published = 1 ORDER BY cons_cats.cat_name", $db);
			echo "<p style=\"padding:0px; margin:0px\"><strong>Technical Categories</strong></p>";
			while ($myrow = mysql_fetch_array($result)) {
			$catsid=$myrow["cat_id"];
			if (($catsid == 1) || ($catsid == 14) || ($catsid == 61) || ($catsid == 24) || ($catsid == 7) || ($catsid == 51) || ($catsid == 8) || ($catsid == 9) || ($catsid == 10) || ($catsid == 73) || ($catsid == 11) || ($catsid == 12) || ($catsid == 55) || ($catsid == 15) || ($catsid == 17) || ($catsid == 22) || ($catsid == 23) || ($catsid == 25) || ($catsid == 42) || ($catsid == 27) || ($catsid == 68)) { echo "<p style=\"padding:0px; margin:0px\">" . $myrow["cat_name"] . " <input type='checkbox' name='category[]' id='$catsid' value='$catsid'></p>\n"; }
			}

			$result = mysql_query("SELECT * FROM cons_cats WHERE published = 1 ORDER BY cons_cats.cat_name", $db);
			echo "<p style=\"padding:25px 0px 0px 0px; margin:0px\"><strong>Industry Categories</strong></p>";
			while ($myrow = mysql_fetch_array($result)) {
			$catsid=$myrow["cat_id"];
			if (($catsid == 60) || ($catsid == 59) || ($catsid == 38) || ($catsid == 62) || ($catsid == 58) || ($catsid == 63) || ($catsid == 50) || ($catsid == 4) || ($catsid == 53) || ($catsid == 52) || ($catsid == 5) || ($catsid == 48) || ($catsid == 64) || ($catsid == 44) || ($catsid == 13) || ($catsid == 65) || ($catsid == 56) || ($catsid == 26) || ($catsid == 67) || ($catsid == 69) || ($catsid == 70)) { echo "<p style=\"padding:0px; margin:0px\">" . $myrow["cat_name"] . " <input type='checkbox' name='category[]' id='$catsid' value='$catsid'></p>\n"; }
			}

			?>
		</td>
		<td width="50%" valign="top">
			<?php
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_clist", $db);

			$result = mysql_query("SELECT * FROM cons_cats WHERE published = 1 ORDER BY cons_cats.cat_name", $db);
			echo "<p style=\"padding:0px; margin:0px\"><strong>Other Categories</strong></p>";
			while ($myrow = mysql_fetch_array($result)) {
			$catsid=$myrow["cat_id"];
			if (($catsid == 45) || ($catsid == 2) || ($catsid == 47) || ($catsid == 3) || ($catsid == 6) || ($catsid == 18) || ($catsid == 21)) { echo "<p style=\"padding:0px; margin:0px\">" . $myrow["cat_name"] . " <input type='checkbox' name='category[]' id='$catsid' value='$catsid'></p>\n"; }
			}

			$result = mysql_query("SELECT * FROM cons_cats WHERE published = 1 ORDER BY cons_cats.cat_name", $db);
			echo "<p style=\"padding:25px 0px 0px 0px; margin:0px\"><strong>De Jure Standards Development Organizations</strong></p>";
			while ($myrow = mysql_fetch_array($result)) {
			$catsid=$myrow["cat_id"];
			if (($catsid == 28) || ($catsid == 29) || ($catsid == 30)) { echo "<p style=\"padding:0px; margin:0px\">" . $myrow["cat_name"] . " <input type='checkbox' name='category[]' id='$catsid' value='$catsid'></p>\n"; }
			}

			$result = mysql_query("SELECT * FROM cons_cats WHERE published = 1 ORDER BY cons_cats.cat_name", $db);
			echo "<p style=\"padding:25px 0px 0px 0px; margin:0px\"><strong>Open Source Initiatives</strong></p>";
			while ($myrow = mysql_fetch_array($result)) {
			$catsid=$myrow["cat_id"];
			if ($catsid == 66) { echo "<p style=\"padding:0px; margin:0px\">" . $myrow["cat_name"] . " <input type='checkbox' name='category[]' id='$catsid' value='$catsid'></p>\n"; }
			}

			$result = mysql_query("SELECT * FROM cons_cats WHERE published = 1 ORDER BY cons_cats.cat_name", $db);
			echo "<p style=\"padding:25px 0px 0px 0px; margin:0px\"><strong>Select by Geography</strong></p>";
			while ($myrow = mysql_fetch_array($result)) {
			$catsid=$myrow["cat_id"];
			if (($catsid == 31) || ($catsid == 32) || ($catsid == 33) || ($catsid == 34) || ($catsid == 35) || ($catsid == 36)) { echo "<p style=\"padding:0px; margin:0px\">" . $myrow["cat_name"] . " <input type='checkbox' name='category[]' id='$catsid' value='$catsid'></p>\n"; }
			}
			?>
		</td>
	</tr>
</table>
<p>
  <input name="ID" type="hidden" id="ID" value="<?php echo "$s_addcat" ?>">
  <input type="submit" name="submitjoke" value="SUBMIT" />
</p>
</form>

<?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "root", "root");
	if (!$dbcnx) {
		echo( "<p>Unable to connect to the dbserver</p>");
		exit();
	}

	// Select the jokes database
	if (! @mysql_select_db("consor5_clist") ) {
		echo( "<P>Unable to locate the db at this time</p>" );
		exit();
	}

	//If a link has been submitted, add it to the db
	if ($_POST["submitjoke"] == "SUBMIT") {
		$ID = intval($_POST["ID"]);
		foreach($_POST["category"] as $catsid){
			//	$pos=strpos($catsid,"-");
			//	$pid1=substr($catsid, 0, $pos);
			//	$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
			echo("<b>foreachtext-ID=$ID-CID=$catsid");
			$sql = "INSERT INTO cat_lookup SET
			cons_no='$ID',
			cat_id='$catsid',
			added=now()";
			if (@mysql_query($sql)) {
				echo("<p>Your entry has been added.</p>");
				// echo("<b>$ID</b><br>$catsid");
				// echo "<pre>";
				// print_r($_POST);
				// echo "</pre>";
			} else {
				echo("<p>Error adding entry: " .
					mysql_error() . "</p>");
			}
		}
	}

////////////TAKING THIS OUT - NOT SURE WHAT IT IS AND IT'S CAUSING AN ERROR!!!!/////////////
//	//Request the text of all the jokes
//	$result = @mysql_query("SELECT * FROM cons_cats ORDER BY cons_id DESC");
//	if (!result) {
//		echo("<p>Error performing query: " .
//			mysql_error() . "</p>");
//		exit();
//		}
//	//Display the text of each joke in a paragraph
//	while ($row = mysql_fetch_array($result)) {
//	$ID = $row["cons_id"];
//	$TITLE = $row["cons_name"];
//	echo "<font face='Arial' size='2'>".
//		"<b>$ID</b>&nbsp;<i>$ID</i><br> ".
//		"<p><b>$title</b>-".
//		"<a href='/links/admin/edit.php?ID=$ID'>" .
//		"Edit this entry</a>&nbsp;| ".
//		"<a href='$PHP_SELF?addcat=$ID'>" .
//		"Add to a category</a></p>";
//}
////////////TAKING THIS OUT - NOT SURE WHAT IT IS AND IT'S CAUSING AN ERROR!!!!/////////////

	//When clicked the link will load this page
		echo("<p><a href='/links/admin/index2.php'>" .
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
