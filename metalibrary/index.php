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
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/metalibrary.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/toolsets.css" />
<!-- ALTERNATE -->
<link rel="alternate stylesheet" type="text/css" href="/css/default.css" title="default" />
<link rel="alternate stylesheet" type="text/css" href="/css/large.css" title="large" />
<!-- ********* -->
<link rel="home" title="home" href="http://www.consortiuminfo.org" />
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript">AC_FL_RunContent = 0;</script>
<script type="text/javascript" src="/scripts/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="/scripts/styleswitcher.js"></script>
<script type="text/javascript" src="/scripts/obfuscate.js"></script>
<?php
// Write javascript arrays for subcategories
echo "<script language=\"javascript\" type=\"text/javascript\">\n<!--";
$db = mysql_connect("localhost", "consor5", "c0n$0r667");
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
	<?php include '../includes/accessibility.php'; ?>

	<!-- ************* -->
	<!--   MASTHEAD    -->
	<!-- ************* -->
	<?php include '../includes/masthead_subs.php'; ?>

	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p><a href="/">Home</a> &gt; MetaLibrary</p>
		</div>
		<!--   SEARCH FORM   -->
		<?php include 'includes/searchform_meta.php'; ?>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div id="mainbody">

		<!-- CONTENT -->
		<div id="content2">
			<!-- SKIP/START CONTENT LINK -->
			<a name="startcontent" id="startcontent"></a>

			<!-- SIDEBAR CONTENT AREA -->
			<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
				<?php include 'includes/sidenav_meta.php'; ?>
				<?php include '../includes/toolsets.php'; ?>
			</div>

			<!-- BODY CONTENT AREA -->
			<div class="bodymain">
				<h1>Standards &lt;Meta&gt;Library</h1>
				<p>Welcome to the <strong>ConsortiumInfo.org Standards MetaLibrary</strong>, the only on-line research 
				resource focusing exclusively on standards and standard setting.</p>
				<p>Here you can link to
				<?php
				$db = mysql_connect("localhost", "consor5", "c0n$0r667");
				mysql_select_db("consor5_library", $db);
				$result = mysql_query("SELECT COUNT(*) AS Total FROM entries", $db);
				while ($myrow = mysql_fetch_array($result)) {
					echo $myrow["Total"]."";
				}
				?>
				articles, with more being added on a regular basis. The MetaLibrary was initially created using a generous grant from <strong>Sun Microsystems</strong> and is supported on an ongoing basis by <a href="http://www.gesmer.com/industries.php?ServiceID=9">Gesmer Updegrove LLP</a>. 
				You can find a detailed list of the firm's services and a complete client list <a href="http://www.consortiuminfo.org/consortia-client-list/">here</a>
				Do you know of an article that should be in the MetaLibrary but isn't? Submit it to <script language="javascript" type="text/javascript">AuGesAdd();</script>.</p>
				<p>Use the dropdowns to select a category and subcategory, or use the expanded outline below.</p>

				<form action="dropprocess2.php" name="CatList" method="get">
					<p style="margin-bottom:8px;">
						<select name="Category" onchange="populateSubCat(document.CatList,document.CatList.Category.options[document.CatList.Category.selectedIndex].value)">
							<option selected value="">Select a Category</option>
							<?php
							// Write category option tags
							$db = mysql_connect("localhost", "consor5", "c0n$0r667");
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
			<div style="float: left; margin: 10px 0 10px 20px;">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_preferred_1"></a>
				<a class="addthis_button_preferred_2"></a>
				<a class="addthis_button_preferred_3"></a>
				<a class="addthis_button_preferred_4"></a>
				<a class="addthis_button_compact"></a>
				<a class="addthis_counter addthis_bubble_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=updegrove"></script>
				<!-- AddThis Button END -->			
			</div>	
			<div style="clear: both;"></div>					

				<div class="clear"></div>
				<div class="hr" style="margin:0px 0px 0px 22px;"></div><hr />

				<div class="metalinks">
					<?php
					// Write categories and links left column
					$db = mysql_connect("localhost", "consor5", "c0n$0r667");
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
							echo "<a href=\"/metalibrary/bycat.php?PID=".$myrow["pid"]."\">All Titles</a><br />\n";
						}
						echo "<a href=\"/metalibrary/cats.php?PID=".$myrow["pid"]."&amp;ID=".$myrow["cid"]."\">".$myrow["cname"]."</a><br />\n";
						$prevpid=$curpid;
					}
					echo "</p>\n";
					?>
				</div>

				<div class="metalinks">
					<?php
					// Write categories and links right column
					$db = mysql_connect("localhost", "consor5", "c0n$0r667");
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
							echo "<a href=\"/metalibrary/bycat.php?PID=".$myrow["pid"]."\">All Titles</a><br />\n";
						}
						echo "<a href=\"/metalibrary/cats.php?PID=".$myrow["pid"]."&amp;ID=".$myrow["cid"]."\">".$myrow["cname"]."</a><br />\n";
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
	<?php include '../includes/footer.php'; ?>
</body>
</html>