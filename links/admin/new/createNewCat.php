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


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link rel="P3Pv1" href="/w3c/p3p.xml">
<title>Consortiuminfo.org Consortium Standards Bulletin</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
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
h2.page-title {font-family: Arial, Helvetica, sans-serif; font-size: 1.2em; margin-top: 10px;}
.style2 { font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style3 { font-family: verdana, Arial, Helvetica, sans-serif; font-size: 11px; }
.style4 {font-family: verdana, Arial, Helvetica, sans-serif; font-size: 12px; padding-bottom:15px; margin-bottom:0px; }
.style5 {font-family: verdana, Arial, Helvetica, sans-serif; font-size: 12px; padding-bottom:5px; margin-bottom:0px; }
-->
</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
	<!-- Begin
	function formHandler(form){
	var URL = document.form.site.options[document.form.site.selectedIndex].value;
	window.location.href = URL;
	}
	// End -->


		function showField(val,type) {
			var na = "cons_"+type+"_na";
			var avail = "cons_"+type+"_avail";
			var custom ="cons_"+type+"_custom";
			
			if (val=="not") {
				document.getElementById(avail).checked=false;
				document.getElementById(custom).checked=false;
				$('#show_'+type+'_URL').hide();
				$('#show_'+type+'_custom_URL').hide();		
			} else if (val=="avail") {
				document.getElementById(na).checked=false;
				document.getElementById(custom).checked=false;
				$('#show_'+type+'_custom_URL').hide();
				$('#show_'+type+'_URL').show();
			} else if (val=="custom") {
				document.getElementById(na).checked=false;
				document.getElementById(avail).checked=false;
				$('#show_'+type+'_URL').hide();
				$('#show_'+type+'_custom_URL').show();
			}

		}
	</script>
</head>
<body text="#000000">


<table border="0" cellpadding="0" cellspacing="0" width="762" align="center">
	<tr>
		<td width="100%" valign="top">
			<table border="0" cellpadding="0" cellspacing="0" width="762">
				<tr><td bgcolor="#A5DBC6" align="center"><img src="/images/consortiumlist.gif" width="762" height="120" alt=""></td></tr>
				<tr><td bgcolor="#D9F0E7"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif" style="font-size:10px; line-height:18px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.consortiuminfo.org">Home</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;<a href="/links/">Links</a>&nbsp;&nbsp;&nbsp;&gt;&nbsp;<a href="/links/admin/new">Admin</a></b></font></td></tr>
			</table>
		</td>
	</tr>
	<tr>
		<td width="100%" valign="top">
			<table width="762" cellpadding="0" bgcolor="#D9F0E7" cellspacing="0" border="0">
				<tr>
					<td valign="top" bgcolor="#ffffff"><div align="center"><h2 class='page-title'>Create a New Consortium Category</h2>
						<table width="100%"  border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="5%">&nbsp;</td>
									<td width="89%">
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
									<p align="left" class="style2">Category Name: <input name="cat_name" type="text" id="cat_name"></p>
									<p align="left" class="style2">Category Group: 
									<select id="cat_group_id" name="cat_group_id">
									<?php			
										$db = mysql_connect("localhost", "consor5", "c0n$0r667");
										//$db = mysql_connect("localhost", "root", "");
										mysql_select_db("consor5_clist", $db);

											//query the cats joining with the cat group table on cat_group_id
											$query2 = "SELECT id, name FROM cat_groups ORDER BY id ASC";				   
											$result2 = mysql_query($query2) or die('Error, query failed');																				
										
											while($row2 = mysql_fetch_array($result2)) {
												$groupid = $row2["id"];
												$groupname = $row2["name"];												
												 echo "<option value='".$groupid."'>".$groupname."</option>";
											}
											echo "</select>";
									?>
									</select>
									<p align="left" class="style2">Category Header:<br><textarea name="cat_header" cols="40" rows="10" id="cat_header"></textarea></p>
									<p align="left" class="style2">Cagegory URL:<br><input name="cat_url" type="text" id="cat_url"></p>
									<p align="left"><input type="submit" name="Submit" value="Submit"></p>
									</form>
<?php

	//If a consortia has been submitted, add it to the db
	if (isset($_POST["Submit"]) && ($_POST["Submit"]) == "Submit") {
		$cat_name = mysql_real_escape_string(trim($_POST["cat_name"]));
		$cat_group_id = mysql_real_escape_string(trim($_POST["cat_group_id"]));
		$cat_header = mysql_real_escape_string(trim($_POST["cat_header"]));
		$cat_url = mysql_real_escape_string(trim($_POST["cat_url"]));

		
		if (empty($cat_name)) {
			echo "<p style='color: red;'>You must at least enter a Category Name to create a new category. Try again!</p><br/><br/>";
		} else {		
			$sql = "INSERT INTO cons_cats SET
					cat_name='$cat_name',
					cat_group_id='$cat_group_id',
					cat_header='$cat_header',
					cat_url='$cat_url'";
					if (@mysql_query($sql)) {
						echo("<p>Your entry has been added. <a href='catadd.php'>View Categories.</a> </p>");
					} else {
						echo("<p>Error adding entry: " .
								mysql_error() . "</p>");
						}
					}
		}
?>
									</td>
									<td width="6%">&nbsp;</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>