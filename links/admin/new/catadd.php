<?php
  session_start();
  
  if($_SESSION['password'] ==""){     // if not logged in
    header("Location: members.php");  // redirect to login form
  }

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
		
	//If a link has been submitted, add it to the db
	if(isset($_POST["addcategory"])) {
		if ($_POST["addcategory"] == "Assign New Category") {
			$db = mysql_connect("localhost", "consor5", "c0n$0r667");
			//$db = mysql_connect("localhost", "root", "");
			mysql_select_db("consor5_clist", $db);		
		
			$ID = intval($_POST["ID"]);
			
			if (empty($_POST["category"])) {
				
				 header("Location: catadd.php?addcat=".$ID."&cats=0");			
			} else {
				foreach($_POST["category"] as $catsid){
					//	$pos=strpos($catsid,"-");
					//	$pid1=substr($catsid, 0, $pos);
					//	$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
					//	echo("<b>foreachtext$ID<br>$pid1<br>$cid1</b>$catsid");
					$sql = "INSERT INTO cat_lookup SET
					cons_no='$ID',
					cat_id='$catsid',
					added=now()";
					if (@mysql_query($sql)) {
						//echo("<p>Your entry has been added.</p>");
						 header("Location: catadd.php?addcat=".$ID);
						// echo("<b>$ID</b><br>$catsid");
						// echo "<pre>";
						// print_r($_POST);
						// echo "</pre>";
					} else {
						header("Location: catadd.php?addcat=".$ID."&cats=-1");	
					}
				}
			}
		}	
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
h2.page-title {font-family: Arial, Helvetica, sans-serif; font-size: 1.2em; margin-top: 10px;}
p { font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
a.btn {background: #ededed; border: 1px solid #999; border-radius: 4px; padding: 4px 10px; text-decoration: none; color: #333;}
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

                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> <a href="/links/">Links</a> &gt; <a href="/links/admin/new">Admin</a> </b></font></b></font></td>

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
                            <td width="90%" valign="top"><div align="left">
                                <div id="content">
                                  <div class="story">
                                    <div>
                                      <p>
									  
<?php
if (isset($_GET["addcat"])): //If the user wants to add an entry
?>



<?php
	$db = mysql_connect("localhost", "consor5", "c0n$0r667");
	//$db = mysql_connect("localhost", "root", "");
	mysql_select_db("consor5_clist", $db);

	$s_addcat = intval($_GET["addcat"]);
	$result = mysql_query("SELECT * FROM cons_list WHERE cons_list.cons_id = $s_addcat", $db);
	while ($myrow = mysql_fetch_array($result)) { 
		if (isset($myrow)) {
			echo "<br/><h4 style='margin: .3em;'>Title:".$myrow["cons_name"]."</h4>"; 
			echo "<h4 style='margin: .3em;'>ID:".$s_addcat."</h4>";
		}
	
	}
?>

</p>
<p><b>Assigned Categories:</b><br>

<?php
	if (isset($_GET["cats"])) {
		if ($_GET["cats"] == 0) {
			echo "<p style='color: red; font-weight: bold;'>You must select at least one category to add.</p>";
		} else if  ($_GET["cats"] == -1) {
			echo "<p style='color: red; font-weight: bold;'>The category you selected is already selected for this consortia. </p>";
		}
	}
	
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

<p><b>Assign Listing To New Categories:</b>  &nbsp;&nbsp;&nbsp;&nbsp;<a href="createNewCat.php" class="btn">Create New Category</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index2.php"  class="btn">Return to Consortium List</a>
<hr/>

<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		
			<?php
$db = mysql_connect("localhost", "consor5", "c0n$0r667");
//$db = mysql_connect("localhost", "root", "");
			mysql_select_db("consor5_clist", $db);

				//query the cats joining with the cat group table on cat_group_id
				$query2 = "SELECT cc.cat_id, cc.cat_name, cg.id, cg.name FROM cons_cats cc
							INNER JOIN cat_groups cg
							ON cc.cat_group_id = cg.id ORDER BY cg.id ASC, cc.cat_name ASC";				   
				$result2 = mysql_query($query2) or die('Error, query failed');
				
				$row2 = mysql_fetch_array($result2);
				$groupname = $row2["name"];
				$catname = $row2["cat_name"];
				
				$last = $groupname;
				
				echo "<td width='50%' valign='top' style='padding-right:10px;'><br/><b>".$groupname."</b><p style='margin-top: 5px;'>";

				while($row2 = mysql_fetch_array($result2)) {
					$groupname = $row2["name"];
					$groupid = $row2["id"];
					$catname = $row2["cat_name"];
					$catid = $row2["cat_id"];
					
					if($last != $groupname){
						if ($groupid == 3) {
							echo "</p></td><td width='50%' valign='top' style='padding-right:10px;'>";
						}
						echo "<br/><b>$groupname</b><p style='margin-top: 5px;'>";
					}
					//echo "<a href='/links/linkscats.php?ID=".$catid."'>".$catname."</a>";
					 echo "<table style='margin: 10px 0; font-size: 12px;'><tr><td style=\"vertical-align: top; padding-top: 5px; margin:0px\"><a href='editCat.php?id=".$row2["cat_id"]."' class='btn'>Edit</a></td><td style='vertical-align: top;'>" . $row2["cat_name"] . " <input type='checkbox' name='category[]' id='$catid' value='$catid'></td></tr></table>\n";
					$last = $groupname;
				}
				echo "</p></td>";
			?>


	</tr>
</table>
<p>
  <input name="ID" type="hidden" id="ID" value="<?php echo "$s_addcat" ?>">
  <input type="submit" name="addcategory" value="Assign New Category" />
</p>
</form>

<?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "consor5", "c0n$0r667");
	//$dbcnx = @mysql_connect("localhost", "root", "");
	if (!$dbcnx) {
		echo( "<p>Unable to connect to the dbserver</p>");
		exit();
	}

	// Select the jokes database
	if (! @mysql_select_db("consor5_clist") ) {
		echo( "<P>Unable to locate the db at this time</p>" );
		exit();
	}


	//When clicked the link will load this page
		echo("<br/><p><a href='index2.php' style='font-weight: bold;'><h3>Add or Edit an Entry!</h3></a></p>");

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
                            <td width="5%">&nbsp;</td>
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
