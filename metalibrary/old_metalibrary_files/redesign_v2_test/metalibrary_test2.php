<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>The Consortiuminfo.org MetaLibrary In Partnership with Sun Microsystems</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="GUNet" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<!-- <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="atom.php" /> -->
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/metalibrary.css" />
<!-- ALTERNATE -->
<link rel="alternate stylesheet" type="text/css" href="/consortiuminfo2017/css/metalib_default.css" title="metalib_default" />
<link rel="alternate stylesheet" type="text/css" href="/consortiuminfo2017/css/metalib_large.css" title="metalib_large" />
<script type="text/javascript" src="/scripts/styleswitcher.js"></script>
<!-- ********* -->
<link rel="home" title="home" href="http://www.consortiuminfo.org" />
<?php
// Write javascript arrays for subcategories
echo "<script language=\"javascript\" type=\"text/javascript\">\n<!--";
$db = mysql_connect("localhost", "consor5", "bgt667");
$prevpid="";
mysql_select_db("consor5_library", $db);
$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) ORDER BY parent.pname, child.sort, child.cname ", $db);
while ($myrow = mysql_fetch_array($result)) {
	$curpid=$myrow["pid"];
	if ($curpid <> $prevpid) {
		if ($curpid > 1) echo ");\n";
		echo "\nvar Option".$curpid."CatArray = new Array(\"('Select Subcategory','',true,true)\",\n";
		echo "\"('All Titles')\"";
	}
	$prevpid=$curpid;
	echo ",\"('".str_replace("\"", "", $myrow["cname"])."')\"";
}
echo ");\n";
?>
	
var CatArray = new Array("('Select Subcategory','',true,true)");
function populateSubCat(inForm,selected) {
	var selectedCatArray = eval(selected + "CatArray");
	while (selectedCatArray.length < inForm.SubCat.options.length) {
		inForm.SubCat.options[(inForm.SubCat.options.length - 1)] = null;
	}
	for (var i=0; i < selectedCatArray.length; i++) {
		eval("inForm.SubCat.options[i]=" + "new Option" + selectedCatArray[i]);
		if (i > 0) { // don't do first value
			inForm.SubCat.options[i].value = eval(selectedCatArray[i]); //put's the value tag in the option		
		}
	}
}

function errorCheck() {
	if (document.CatList.Category.value == '') {
		alert('Please Select a Category');
		return false;
	} else if (document.CatList.SubCat.value == '') { 
		alert('Please Select a Subcategory');
		return false;
	} else {
		return true;
	}
}
	
function resetSubcat() {
	if (document.CatList.Category.value > '') {
		populateSubCat(document.CatList,document.CatList.Category.options[document.CatList.Category.selectedIndex].value);
		return false;
	} 
	return true;
}
//-->
</script>
</head>

<!-- <body onload="document.CatList.reset();">  Use this to reset form completely on back -->
<!-- Use this to reset subcategorys on back -->
<body id="bulletin" onload="resetSubcat();">
	<!-- ****************** -->
	<!--   ACCESSIBILITY    -->
	<!-- ****************** -->
	<?php include 'includes/accessibility.php'; ?>
	
	<!-- ************* -->
	<!--   MASTHEAD    -->
	<!-- ************* -->
	<?php include 'includes/masthead.php'; ?>
	
	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p><a href="/">Home</a> &gt; MetaLibrary</p>
		</div>
		<!--   SEARCH FORM   -->
		<?php include 'includes/searchform.php'; ?>
	</div>
	
	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div id="mainbody">
	
		<!-- CONTENT CONTROL -->
		<?php include 'includes/contentcontrol.php'; ?>
		
		<!-- CONTENT -->		
		<div id="content2">
			<!-- SKIP/START CONTENT LINK -->
			<a name="startcontent" id="startcontent"></a>
			
			<!-- fixes inconsistent spacing (namely IE6) -->
			<p class="spacefix" style="font-size:12px;">&nbsp;</p>
			
			<!-- BODY SIDE NAV -->
			<?php include 'includes/bodysidenav.php'; ?>
			
			<!-- BODY CONTENT AREA -->
			<div class="bodymain">
				<p>Welcome to the <strong>ConsortiumInfo.org Standards MetaLibrary</strong>, the only on-line research resource focusing exclusively on standards and standard setting.</p>
				<p>Here you can link to
				<?php
				$db = mysql_connect("localhost", "consor5", "bgt667");
				mysql_select_db("consor5_library", $db);
				$result = mysql_query("SELECT COUNT(*) AS Total FROM entries", $db);
				while ($myrow = mysql_fetch_array($result)) {
					echo $myrow["Total"]."";
				}
				?>
				articles, with more being added on a regular basis. The MetaLibrary was initially created using a generous grant from <strong>Sun Microsystems</strong> and is supported on an ongoing basis by <a href="http://www.gesmer.com/">Gesmer Updegrove LLP</a>. To learn more about Gesmer Updegrove's involvement in the standards area, see the <a href="http://www.gesmer.com/practice_areas/consortium.php">Consortium and Standard Setting</a> section of the firm's Web site.</p>
				<p>Use the dropdowns to select a category and subcategory, or use the expanded outline below.</p>
				
				<form action="dropprocess2.php" name="CatList" method="get">
					<p style="margin-bottom:8px;">
						<select name="Category" onchange="populateSubCat(document.CatList,document.CatList.Category.options[document.CatList.Category.selectedIndex].value)">
							<option selected value="">Select a Category</option>
							<?php
							// Write category option tags
							$db = mysql_connect("localhost", "consor5", "bgt667");
							$prevpid="";
							mysql_select_db("consor5_library", $db);
							$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) ORDER BY parent.pname, child.sort, child.cname ", $db);
							while ($myrow = mysql_fetch_array($result)) {
								$curpid=$myrow["pid"];
								if ($curpid <> $prevpid) {
									echo "<option value=\"Option".$curpid."\">".str_replace("&", "&amp;", $myrow["pname"])."</option>\n";
								}
								$prevpid=$curpid;
							}
							?>
						</select><br />
						<select name="SubCat">
							<option selected value="">Select a Subcategory</option>
						</select><br />
						<input type="submit" value="Go" onclick="return errorCheck();" />
					</p>
				</form>
				
				<div class="clear"></div>
				<div class="hr" style="margin-top:0px; margin-bottom:0px;"></div><hr />
				
				<div class="metalinks">
					<?php
					// Write categories and links left column
					$db = mysql_connect("localhost", "consor5", "bgt667");
					$prevpid="";
					mysql_select_db("consor5_library", $db);
					$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid<9 ORDER BY parent.pname, child.sort, child.cname ", $db);
					while ($myrow = mysql_fetch_array($result)) {
						$curpid=$myrow["pid"];
						if ($curpid <> $prevpid) {
							if ($curpid == "1") {
								echo "<p style=\"margin-top:5px;\">\n";
							} else {
								echo "</p>\n<p>\n";
							}
							echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
							echo "<a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/bycat_test2.php?PID=".$myrow["pid"]."\">All Titles</a><br />\n";
						}
						echo "<a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/cats_test2.php?PID=".$myrow["pid"]."&amp;ID=".$myrow["cid"]."\">".$myrow["cname"]."</a><br />\n";
						$prevpid=$curpid;
					}
					echo "</p>\n";
					?>
				</div>
			
				<div class="metalinks">
					<?php
					// Write categories and links right column
					$db = mysql_connect("localhost", "consor5", "bgt667");
					$prevpid="";
					mysql_select_db("consor5_library", $db);
					$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid>=9 ORDER BY parent.pname, child.sort, child.cname ", $db);
					while ($myrow = mysql_fetch_array($result)) {
						$curpid=$myrow["pid"];
						if ($curpid <> $prevpid) {
							if ($curpid == "9") {
								echo "<p style=\"margin-top:5px;\">\n";
							} else {
								echo "</p>\n<p>\n";
							}
							echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
							echo "<a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/bycat_test2.php?PID=".$myrow["pid"]."\">All Titles</a><br />\n";
						}
						echo "<a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/cats_test2.php?PID=".$myrow["pid"]."&amp;ID=".$myrow["cid"]."\">".$myrow["cname"]."</a><br />\n";
						$prevpid=$curpid;
					}
					echo "</p>\n";
					?>
				</div>
				
			</div>
		</div>
	</div>
	<!-- *********** -->
	<!--   FOOTER    -->
	<!-- *********** -->
	<?php include 'includes/footer.php'; ?>
</body>
</html>