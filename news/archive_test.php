<?php
include '../includes/replace_specchars.php';

// Read In Dropdowns
$Category = str_replace("Option", "", $_GET["Category"]);
$SubCat = $_GET["SubCat"];
$Year =  $_GET["Year"];
$Month =  $_GET["Month"];

// Database Connection
$db = mysql_connect("localhost", "consor5", "c0n$0r667");
mysql_select_db("consor5_nnews", $db);

// Get Child ID Number based on SubCat name
$resultChildID = mysql_query("SELECT * FROM child WHERE cname='$SubCat'", $db);
while ($myrow = mysql_fetch_array($resultChildID))
{
	$SubCatNum = $myrow["child"];
}

// Get Child ID Number if SubCats are duplicates
if ($Category==1 && $SubCat=="Intellectual Property Issues") { $SubCatNum = 14; }
if ($Category==2 && $SubCat=="Intellectual Property Issues") { $SubCatNum = 42; }
if ($Category==6 && $SubCat=="Intellectual Property Issues") { $SubCatNum = 34; }
if ($Category==2 && $SubCat=="Europe") { $SubCatNum = 29; }
if ($Category==7 && $SubCat=="Europe") { $SubCatNum = 37; }
if ($Category==1 && $SubCat=="Open Source") { $SubCatNum = 5; }
if ($Category==6 && $SubCat=="Open Source") { $SubCatNum = 40; }
if ($Category==1 && $SubCat=="Mergers, Dissolutions, etc.") { $SubCatNum = 41; }
if ($Category==5 && $SubCat=="Mergers, Dissolutions, etc.") { $SubCatNum = 7; }
if ($Category==2 && $SubCat=="Story Updates") { $SubCatNum = 43; }
if ($Category==3 && $SubCat=="Story Updates") { $SubCatNum = 15; }
if ($Category==1 && $SubCat=="New Consortia") { $SubCatNum = 44; }
if ($Category==5 && $SubCat=="New Consortia") { $SubCatNum = 1; }

// Page Navigation
$rowsPerPage = 15;
$pageNum = 1; // by default we show first page
// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
	$pageNum = $_GET['page'];
}
$offset = ($pageNum - 1) * $rowsPerPage;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org News</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/news.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/toolsets.css" />
<!-- ALTERNATE -->
<link rel="alternate stylesheet" type="text/css" href="/css/default.css" title="default" />
<link rel="alternate stylesheet" type="text/css" href="/css/large.css" title="large" />
<!-- ********* -->
<link rel="home" title="home" href="http://www.consortiuminfo.org" />
<script type="text/javascript">AC_FL_RunContent = 0;</script>
<script type="text/javascript" src="/scripts/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="/scripts/styleswitcher.js"></script>
<script type="text/javascript" src="/scripts/obfuscate.js"></script>

<script language="javascript" type="text/javascript">
<!--
var Option1CatArray = new Array("('Select Subcategory','',true,true)",
"('Mergers, Dissolutions, etc.')","('New Consortia')","('New Initiatives')","('New Standards, etc.')");

var Option2CatArray = new Array("('Select Subcategory','',true,true)",
"('Blockchain')","('Cloud Computing')","('eHealth')","('Environment')","('FOSS/Standards Interaction')","('Intellectual Property Issues')","('Internet of Things')","('Open Document/OOXML')","('Open Government')","('Security')","('Semantic and NextGen Web')","('Smart Grid')","('Story Updates')","('Web Services')","('Wireless and Mobile')","('WSIS/Internet Governance')");

var Option3CatArray = new Array("('Select Subcategory','',true,true)",
'("Standards and Your Business")','("Whos Doing What to Whom")');

var Option4CatArray = new Array("('Select Subcategory','',true,true)",
"('eHealth')","('Laws/Litigation/Advocacy')","('Open Government')","('Smart Grid')","('Standards and Society')","('Standards in Action')");

var Option6CatArray = new Array("('Select Subcategory','',true,true)",
"('General')","('Intellectual Property Issues')","('Linux')","('Open Source')");

var Option7CatArray = new Array("('Select Subcategory','',true,true)",
"('Africa')","('Asia/Pacific Rim')","('Europe')","('North America')","('South America')");

var CatArray = new Array("('Select Subcategory','',true,true)");
function populateSubCat(inForm,selected) {
	var selectedCatArray = eval(selected + "CatArray");
	while (selectedCatArray.length < inForm.SubCat.options.length) {
		inForm.SubCat.options[(inForm.SubCat.options.length - 1)] = null;
	}
	for (var i=0; i < selectedCatArray.length; i++) {
		eval("inForm.SubCat.options[i]=" + "new Option" + selectedCatArray[i].replace("Whos","Who\'s"));
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

function errorCheck2() {
	if (document.YearList.Year.value == '') {
		alert('Please Select a Year');
		return false;
	} else if (document.YearList.Month.value == '') {
		alert('Please Select a Month');
		return false;
	} else {
		return true;
	}
}

//function resetSubcat() {
//	if (document.CatList.Category.value > '') {
//		populateSubCat(document.CatList,document.CatList.Category.options[document.CatList.Category.selectedIndex].value);
//		return false;
//	}
//	return true;
//}

//-->
</script>

<?php
// Write Javascript For Show/Hide Divs If By Category And Subcategory
if ($Category > "" && $SubCat > "") {
	echo "<script type=\"text/javascript\" language=\"javascript\">\r
	<!--\r
	function ShowHide(ShowID)\r
	{\r";
	$resultLookupID = mysql_query("SELECT * FROM lookup WHERE pid='$Category' AND cid='$SubCatNum' ORDER BY entry DESC LIMIT $offset, $rowsPerPage", $db);
	while ($myrow = mysql_fetch_array($resultLookupID))
	{
		$ItemID = $myrow["entry"];
		$resultItemID = mysql_query("SELECT * FROM items WHERE ID='$ItemID'", $db);
		while ($myrow = mysql_fetch_array($resultItemID))
		{
			echo "if (ShowID == 'Entry".$myrow["ID"]."') {\r
				var e = document.getElementById(ShowID);\r
				e.style.display = (e.style.display == 'none' ? 'block' : 'none');\r
			}\r
			if (ShowID != 'Entry".$myrow["ID"]."') {\r
				document.getElementById('Entry".$myrow["ID"]."').style.display='none';\r
			}\r";
		}
	}
	echo "}\r
	//-->\r
	</script>\r";
}

// Write Javascript For Show/Hide Divs If By Year And Month
if ($Year > "" && $Month > "") {
	echo "<script type=\"text/javascript\" language=\"javascript\">\r
	<!--\r
	function ShowHide(ShowID)\r
	{\r";
	$resultItemIDdate = mysql_query("SELECT * FROM items WHERE DATE_FORMAT(date2, '%M')='$Month' AND DATE_FORMAT(date2, '%Y')='$Year' ORDER BY date2 DESC LIMIT $offset, $rowsPerPage", $db);
	while ($myrow = mysql_fetch_array($resultItemIDdate))
	{
		echo "if (ShowID == 'Entry".$myrow["ID"]."') {\r
			var e = document.getElementById(ShowID);\r
			e.style.display = (e.style.display == 'none' ? 'block' : 'none');\r
		}\r
		if (ShowID != 'Entry".$myrow["ID"]."') {\r
			document.getElementById('Entry".$myrow["ID"]."').style.display='none';\r
		}\r";
	}
	echo "}\r
	//-->\r
	</script>\r";
}

//Set SelectedIndex Value for SubCat Dropdown Reset
if ($Category==1)
{
	if ($SubCat == "Mergers, Dissolutions, etc.") { $SelectValue = 1; }
	if ($SubCat == "New Consortia") { $SelectValue = 2; }
	if ($SubCat == "New Initiatives") { $SelectValue = 3; }
	if ($SubCat == "New Standards, etc.") { $SelectValue = 4; }
}

if ($Category==2)
{
	if ($SubCat == "Cloud Computing") { $SelectValue = 1; }
	if ($SubCat == "eHealth") { $SelectValue = 2; }
	if ($SubCat == "Environment") { $SelectValue = 3; }
	if ($SubCat == "FOSS/Standards Interaction") { $SelectValue = 4; }
	if ($SubCat == "Intellectual Property Issues") { $SelectValue = 5; }
	if ($SubCat == "Internet of Things") { $SelectValue = 6; }
	if ($SubCat == "Open Document/OOXML") { $SelectValue = 7; }
	if ($SubCat == "Open Government") { $SelectValue = 8; }
	if ($SubCat == "Security") { $SelectValue = 9; }
	if ($SubCat == "Semantic and NextGen Web") { $SelectValue = 10; }
	if ($SubCat == "Smart Grid") { $SelectValue = 11; }
	if ($SubCat == "Story Updates") { $SelectValue = 12; }
	if ($SubCat == "Web Services") { $SelectValue = 13; }
	if ($SubCat == "Wireless and Mobile") { $SelectValue = 14; }
	if ($SubCat == "WSIS/Internet Governance") { $SelectValue = 15; }
}

if ($Category==3)
{
	if ($SubCat == "Standards and Your Business") { $SelectValue = 1; }
	if ($SubCat == "Whos Doing What to Whom") { $SelectValue = 2; }
}

if ($Category==4)
{
	if ($SubCat == "eHealth") { $SelectValue = 1; }
	if ($SubCat == "Laws/Litigation/Advocacy") { $SelectValue = 2; }
	if ($SubCat == "Open Government") { $SelectValue = 3; }
	if ($SubCat == "Smart Grid") { $SelectValue = 4; }
	if ($SubCat == "Standards and Society") { $SelectValue = 5; }
	if ($SubCat == "Standards in Action") { $SelectValue = 6; }
}

if ($Category==6)
{
	if ($SubCat == "General") { $SelectValue = 1; }
	if ($SubCat == "Intellectual Property Issues") { $SelectValue = 2; }
	if ($SubCat == "Linux") { $SelectValue = 3; }
	if ($SubCat == "Open Source") { $SelectValue = 4; }
}

if ($Category==7)
{
	if ($SubCat == "Africa") { $SelectValue = 1; }
	if ($SubCat == "Asia/Pacific Rim") { $SelectValue = 2; }
	if ($SubCat == "Europe") { $SelectValue = 3; }
	if ($SubCat == "North America") { $SelectValue = 4; }
	if ($SubCat == "South America") { $SelectValue = 5; }
}
?>
</head>
<!-- <body onload="document.CatList.reset();">  Use this to reset form completely on back -->
<!-- <body onload="resetSubcat();">  Use this to reset subcategorys on back -->
<?php
if ($Category != "")
{
	echo "<body id=\"bulletin\" onload=\"populateSubCat(document.CatList,document.CatList.Category.options[document.CatList.Category.selectedIndex].value); document.getElementById('SubCatMenu').selectedIndex = ".$SelectValue.";\">\n";
} else {
	echo "<body id=\"bulletin\" onload=\"document.CatList.reset();\">\n";
}
?>
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
			<p><a href="/">Home</a> &gt; <a href="index.php">News</a> &gt; News Archive</p>
		</div>
		<!--   SEARCH FORM   -->
		<form class="search" name="form1" method="get" action="http://search.Blossom.com/query/320">
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		</form>
		<div class="clear"></div>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="NewsContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<?php include 'includes/sidenav2_news.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="NewsMain">
			<h1>Standards News Portal Archive</h1>
			<p>Use the dropdowns below to sort the news archive by category and subcategory, or by year and month. Or you can use the expanded outline below.</p>
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>
					<td valign="top" width="50%">
						<h2 style="margin-bottom:5px;">Sort Archive by Category</h2>
						<p style="padding-bottom:10px; text-align:center;">Select a Category and Subcategory.</p>
						<form action="archive.php" name="CatList" method="get">
							<select name="Category" onchange="populateSubCat(document.CatList,document.CatList.Category.options[document.CatList.Category.selectedIndex].value)" style="margin-left:10px;">
								<option selected="selected" value="">Select a Category</option>
								<option value="Option1" <?php if ($Category=='1') echo "selected=\"selected\""; ?>>Standard Setting News</option>
								<option value="Option6" <?php if ($Category=='6') echo "selected=\"selected\""; ?>>Community News</option>
								<option value="Option2" <?php if ($Category=='2') echo "selected=\"selected\""; ?>>Topical News</option>
								<option value="Option3" <?php if ($Category=='3') echo "selected=\"selected\""; ?>>Standards Business News</option>
								<option value="Option4" <?php if ($Category=='4') echo "selected=\"selected\""; ?>>Policy and Impact News</option>
								<option value="Option7" <?php if ($Category=='7') echo "selected=\"selected\""; ?>>News by Region</option>
							</select><br />
							<select name="SubCat" id="SubCatMenu" style="margin-left:10px;">
								<option selected="selected" value="">Select a Subcategory</option>
							</select><br />
							<input type="submit" value="Go" onclick="return errorCheck();" style="margin-left:10px;" />
						</form>
					</td>
					<td valign="top" width="50%">
						<h2 style="margin-bottom:5px;">Sort Archive by Date</h2>
						<p style="padding-bottom:10px; text-align:center;">Select a Year and Month of publication.</p>
						<form action="archive.php" name="YearList" method="get">
							<select name="Year" style="margin-left:10px;">
								<option selected="selected" value="">Select a Year</option>
								<option value="2002" <?php if ($Year=='2002') echo "selected=\"selected\""; ?>>2002</option>
								<option value="2003" <?php if ($Year=='2003') echo "selected=\"selected\""; ?>>2003</option>
								<option value="2004" <?php if ($Year=='2004') echo "selected=\"selected\""; ?>>2004</option>
								<option value="2005" <?php if ($Year=='2005') echo "selected=\"selected\""; ?>>2005</option>
								<option value="2006" <?php if ($Year=='2006') echo "selected=\"selected\""; ?>>2006</option>
								<option value="2007" <?php if ($Year=='2007') echo "selected=\"selected\""; ?>>2007</option>
								<option value="2008" <?php if ($Year=='2008') echo "selected=\"selected\""; ?>>2008</option>
								<option value="2009" <?php if ($Year=='2009') echo "selected=\"selected\""; ?>>2009</option>
								<option value="2010" <?php if ($Year=='2010') echo "selected=\"selected\""; ?>>2010</option>
								<option value="2011" <?php if ($Year=='2011') echo "selected=\"selected\""; ?>>2011</option>
							</select><br />
							<select name="Month" style="margin-left:10px;">
								<option selected="selected" value="">Select a Month</option>
								<option value="January" <?php if ($Month=='January') echo "selected=\"selected\""; ?>>January</option>
								<option value="February" <?php if ($Month=='February') echo "selected=\"selected\""; ?>>February</option>
								<option value="March" <?php if ($Month=='March') echo "selected=\"selected\""; ?>>March</option>
								<option value="April" <?php if ($Month=='April') echo "selected=\"selected\""; ?>>April</option>
								<option value="May" <?php if ($Month=='May') echo "selected=\"selected\""; ?>>May</option>
								<option value="June" <?php if ($Month=='June') echo "selected=\"selected\""; ?>>June</option>
								<option value="July" <?php if ($Month=='July') echo "selected=\"selected\""; ?>>July</option>
								<option value="August" <?php if ($Month=='August') echo "selected=\"selected\""; ?>>August</option>
								<option value="September" <?php if ($Month=='September') echo "selected=\"selected\""; ?>>September</option>
								<option value="October" <?php if ($Month=='October') echo "selected=\"selected\""; ?>>October</option>
								<option value="November" <?php if ($Month=='November') echo "selected=\"selected\""; ?>>November</option>
								<option value="December" <?php if ($Month=='December') echo "selected=\"selected\""; ?>>December</option>
							</select><br />
							<input type="submit" value="Go" onclick="return errorCheck2();" style="margin-left:10px;" />
						</form>
					</td>
				</tr>
			</table>

			<div id="archive" style="margin-top:10px;">
				<?php
				// Database Connection
				$db = mysql_connect("localhost", "consor5", "c0n$0r667");
				mysql_select_db("consor5_nnews", $db);
				// If Sort Is By Category And Subcategory
				if ($Category > "" && $SubCat > "") {
					//Get parent name for header
					$resultParentName = mysql_query("SELECT * FROM parent WHERE pid='$Category'", $db);
					while ($myrow = mysql_fetch_array($resultParentName))
					{
						$CatName = $myrow["pname"];
					}

					//Write header, possible duplicate see more links, and date/entry headers
					echo "<div class=\"hr\" style=\"margin-bottom:15px;\"></div><hr />\r
					<table class=\"tableArchive\" style=\"width:100%;\">\r
						<caption>News archives for: ".$CatName." &gt; ".str_replace("Whos", "Who's", stripslashes($SubCat))."</caption>\r";
						
					//Add See Newer Articles Links if Subcat Is A Duplicate
					//China
					if ($Category==2 && $SubCat=="China") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For newer articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option7&SubCat=Asia%2FPacific+Rim\">News by Region &gt; Asia/Pacific Rim</a></p></td></tr>\n"; }
					if ($Category==7 && $SubCat=="Asia/Pacific Rim") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For more articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option2&SubCat=China\">Topical News &gt; China</a></p></td></tr>\n"; }

					//Europe
					if ($Category==2 && $SubCat=="Europe") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For newer articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option7&SubCat=Europe\">News by Region &gt; Europe</a></p></td></tr>\n"; }
					if ($Category==7 && $SubCat=="Europe") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For more articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option2&SubCat=Europe\">Topical News &gt; Europe</a></p></td></tr>\n"; }

					//Open Source
					if ($Category==1 && $SubCat=="Open Source") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For newer articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option6&SubCat=Open+Source\">Community News &gt; Open Source</a></p></td></tr>\n"; }
					if ($Category==6 && $SubCat=="Open Source") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For more articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option1&SubCat=Open+Source\">Standard Setting News > Open Source</a></p></td></tr>\n"; }

					//Mergers, Dissolutions, etc.
					if ($Category==5 && $SubCat=="Mergers, Dissolutions, etc.") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For newer articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option1&SubCat=Mergers%2C+Dissolutions%2C+etc.\">Standard Setting News &gt; Mergers, Dissolutions, etc.</a></p></td></tr>\n"; }
					if ($Category==1 && $SubCat=="Mergers, Dissolutions, etc.") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For more articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option5&SubCat=Mergers%2C+Dissolutions%2C+etc.\">Consortium News &gt; Mergers, Dissolutions, etc.</a></p></td></tr>\n"; }

					//Intellectual Property Issues
					if ($Category==1 && $SubCat=="Intellectual Property Issues") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For newer articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option2&SubCat=Intellectual+Property+Issues\">Topical News &gt; Intellectual Property Issues</a></p></td></tr>\n"; }
					if ($Category==2 && $SubCat=="Intellectual Property Issues") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For more articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option1&SubCat=Intellectual+Property+Issues\">Standard Setting News &gt; Intellectual Property Issues</a></p></td></tr>\n"; }

					//Story Updates
					if ($Category==3 && $SubCat=="Story Updates") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For newer articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option2&SubCat=Story+Updates\">Topical News &gt; Story Updates</a></p></td></tr>\n"; }
					if ($Category==2 && $SubCat=="Story Updates") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For more articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option3&SubCat=Story+Updates\">Standards Business News &gt; Story Updates</a></p></td></tr>\n"; }

					//New Consortia
					if ($Category==5 && $SubCat=="New+Consortia") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For newer articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option1&SubCat=New+Consortia\">Standard Setting News &gt; New Consortia</a></p></td></tr>\n"; }
					if ($Category==1 && $SubCat=="New+Consortia") { echo "<tr><td colspan=\"2\"><p style=\"padding:3px 0px 7px 0px;\">For more articles see <a href=\"http://www.consortiuminfo.org/news/archive.php?Category=Option5&SubCat=New+Consortia\">Consortium News &gt; New Consortia</a></p></td></tr>\n"; }

					echo "<tr>\r
							<th width=\"120\">Date</th>\r
							<th>Entry</th>\r
						</tr>\r";

					//Get Entry ID
					$result2LookupID = mysql_query("SELECT * FROM lookup WHERE pid='$Category' AND cid='$SubCatNum' ORDER BY entry DESC LIMIT $offset, $rowsPerPage", $db);
					while ($myrow = mysql_fetch_array($result2LookupID))
					{
						$ItemID = $myrow["entry"];
						//Get matching items
						$result2ItemID = mysql_query("SELECT * FROM items WHERE ID='$ItemID'", $db);
						while ($myrow = mysql_fetch_array($result2ItemID))
						{
							$entrydate = date("F j, Y",strtotime($myrow["date2"]));
							$headline=stripslashes($myrow["headline"]);
							$author=stripslashes($myrow["author"]);
							$source=stripslashes(trim($myrow["source"]));
							$story=stripslashes(trim($myrow["story"]));
							//Replace curlys and whatnot
							$headline = str_replace($oldchars, $newchars, $headline);
							$story = str_replace($oldchars, $newchars, $story);
							echo "<tr>\r
								<td style=\"padding:0px 20px 10px 0px; white-space:nowrap;\">".$entrydate."</td>\r
								<td style=\"padding:0px 0px 10px 0px;\">\r
									<a href=\"#\" onclick=\"ShowHide('Entry".$myrow["ID"]."'); return false;\">".$headline."</a>\r
									<div id=\"Entry".$myrow["ID"]."\" style=\"display:none;\">\r
										<p>";
										if ($author<>"") {
											echo "<strong>".$author."</strong><br />";
										}
										if ($source<>"") {
											echo "<strong>".$source." &ndash; </strong>";
										}
										if ($myrow["date1"]<>"") {
											echo "<strong>".$myrow["date1"].": </strong>";
										}
										echo $story." <a href=\"".$myrow["link1"]."\">...Full Story</a></p>\r
									</div>\r
								</td>\r
							</tr>\r";
						}
					}
					// How Many Rows We Have In Database
					$query = "SELECT COUNT(*) AS numrows FROM lookup WHERE pid='$Category' AND cid='$SubCatNum'";
					$resultLookupRows = mysql_query($query) or die('Error, query failed');
					$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
					$numrows = $row['numrows'];

					// How Many Pages We Have When Using Paging
					$maxPage = ceil($numrows/$rowsPerPage);

					// Print The Link To Access Each Page
					$self = $_SERVER['PHP_SELF'];
					$nav  = '';

					// Replace Amp in SubCat Name
					$SubCatForLink = stripslashes(str_replace("&", "%26", $SubCat));

					for($page = 1; $page <= $maxPage; $page++)
					{
					   if ($page == $pageNum)
					   {
						  $nav .= "<span class=\"PageOn\">$page</span>"; // No Need To Create A Link To Current Page
					   }
					   else
					   {
						  $nav .= " <a href=\"$self?page=$page&Category=$Category&SubCat=$SubCatForLink\">$page</a> ";
					   }
					}

					// Creating The Link To Go To The First And Last Page Plus Previous And Next Links (Not Using Prev/Next)
					if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					   $prev  = " <a href=\"$self?page=$page&Category=$Category&SubCat=$SubCatForLink\">[Prev]</a> ";
					   $first = " <a href=\"$self?page=1&Category=$Category&SubCat=$SubCatForLink\">[First Page]</a> ";
					}
					else
					{
					   $prev  = '&nbsp;'; // We're On Page One, Don't Print Previous Link
					   $first = '&nbsp;'; // Nor The First Page Link
					}

					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = " <a href=\"$self?page=$page&Category=$Category&SubCat=$SubCatForLink\">[Next]</a> ";
					   $last = " <a href=\"$self?page=$maxPage&Category=$Category&SubCat=$SubCatForLink\" style=\"white-space:nowrap\">[Last Page]</a> ";
					}
					else
					{
					   $next = '&nbsp;'; // We're On The Last Page, Don't Print Next Link
					   $last = '&nbsp;'; // Nor The Last Page Link
					}

					// Print The Navigation Links (Took Out Prev And Next)
					echo "<tr><td colspan=\"2\" align=\"center\"><p>".$first . $nav . $last."</p></td></tr>\r
					\t\t\t\t</table>\r
					<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\r";
				}


				// If sort is by Year and Month
				if ($Year > "" && $Month > "") {
					echo "<div class=\"hr\" style=\"margin-bottom:15px;\"></div><hr />\r
					<table class=\"tableArchive\">\r
					<caption><span style=\"white-space:nowrap\";>News archives for: ".$Month." ".$Year."</span></caption>\r
					<tr>\r
						<th width=\"120\">Date</th>\r
						<th>Entry</th>\r
					</tr>\r";
					//Get entry id
					$result2ItemIDdate = mysql_query("SELECT * FROM items WHERE DATE_FORMAT(date2, '%M')='$Month' AND DATE_FORMAT(date2, '%Y')='$Year' ORDER BY date2 DESC LIMIT $offset, $rowsPerPage", $db);
					while ($myrow = mysql_fetch_array($result2ItemIDdate))
					{
						$author=stripslashes($myrow["author"]);
						$source=stripslashes(trim($myrow["source"]));
						$story=stripslashes(trim($myrow["story"]));
						$entrydate = date("F j, Y",strtotime($myrow["date2"]));
						$headline=stripslashes($myrow["headline"]);
						//Replace curlys and whatnot
						$headline = str_replace($oldchars, $newchars, $headline);
						$story = str_replace($oldchars, $newchars, $story);
						echo "<tr>\r
							<td style=\"padding:0px 20px 10px 0px; white-space:nowrap;\">".$entrydate."</td>\r
							<td style=\"padding:0px 0px 10px 0px;\"><a href=\"#\" onclick=\"ShowHide('Entry".$myrow["ID"]."'); return false;\">".$headline."</a>
							<div id=\"Entry".$myrow["ID"]."\" style=\"display:none;\">\r
								<p>";
								if ($author<>"") {
									echo "<strong>".$author."</strong><br />";
								}
								if ($source<>"") {
									echo "<strong>".$source." &ndash; </strong>";
								}
								if ($myrow["date1"]<>"") {
									echo "<strong>".$myrow["date1"].": </strong>";
								}
								echo $story." <a href=\"".$myrow["link1"]."\">...Full Story</a></p>\r
							</div>\r
							</td>\r
						</tr>\r";
					}

					// How Many Rows We Have In Database
					$query = "SELECT COUNT(*) AS numrows FROM items WHERE DATE_FORMAT(date2, '%M')='$Month' AND DATE_FORMAT(date2, '%Y')='$Year'";
					$resultItemsRows = mysql_query($query) or die('Error, query failed');
					$row = mysql_fetch_array($resultItemsRows, MYSQL_ASSOC);
					$numrows = $row['numrows'];

					// How Many Pages We Have When Using Paging
					$maxPage = ceil($numrows/$rowsPerPage);

					// Print The Link To Access Each Page
					$self = $_SERVER['PHP_SELF'];
					$nav  = '';
					for($page = 1; $page <= $maxPage; $page++)
					{
					   if ($page == $pageNum)
					   {
						  $nav .= "<span class=\"PageOn\">$page</span>"; // No Need To Create A Link To Current Page
					   }
					   else
					   {
						  $nav .= " <a href=\"$self?page=$page&Year=$Year&Month=$Month\">$page</a> ";
					   }
					}

					// Creating The Link To Go To The First And Last Page Plus Previous And Next Links (Not Using Prev/Next)
					if ($pageNum > 1)
					{
					   $page  = $pageNum - 1;
					   $prev  = " <a href=\"$self?page=$page&Year=$Year&Month=$Month\">[Prev]</a> ";
					   $first = " <a href=\"$self?page=1&Year=$Year&Month=$Month\">[First Page]</a> ";
					}
					else
					{
					   $prev  = '&nbsp;'; // We're On Page One, Don't Print Previous Link
					   $first = '&nbsp;'; // Nor The First Page Link
					}

					if ($pageNum < $maxPage)
					{
					   $page = $pageNum + 1;
					   $next = " <a href=\"$self?page=$page&Year=$Year&Month=$Month\">[Next]</a> ";
					   $last = " <a href=\"$self?page=$maxPage&Year=$Year&Month=$Month\">[Last Page]</a> ";
					}
					else
					{
					   $next = '&nbsp;'; // We're On The Last Page, Don't Print Next Link
					   $last = '&nbsp;'; // Nor The Last Page Link
					}

					// Print The Navigation Links (Took Out Prev And Next)
					echo "<tr><td colspan=\"2\" align=\"center\"><p>".$first . $nav . $last."</p></td></tr>\r
					\t\t\t\t</table>\r
					<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\r";
				}
				?>
			</div>
			<div class="hr" style="margin-top:15px; margin-bottom:10px;"></div><hr />
			<div class="NewsExpandLinks">
				<?php
				// Write Categories And Links For Left Column
				$prevpid="";
				$resultLinksLeft = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid=1 ORDER BY parent.sort, child.sort, child.cname ", $db);
				while ($myrow = mysql_fetch_array($resultLinksLeft)) {
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<p style=\"margin-top:5px;\">\n";
						echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
					}

					//Dont Show Open Source Link Here
					if (($myrow["cname"] == "Open Source") || ($myrow["cname"] == "Intellectual Property Issues"))
					{
						echo "";
						} else {
						echo "<a href=\"archive.php?page=1&Category=$curpid&SubCat=".str_replace("&", "%26", $myrow["cname"])."\">".$myrow["cname"]."</a><br />\n";
					}

					$prevpid=$curpid;
				}
				echo "</p>\n";

				$prevpid="";
				$resultLinksLeft = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid=6 ORDER BY parent.sort, child.sort, child.cname ", $db);
				while ($myrow = mysql_fetch_array($resultLinksLeft)) {
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<p>\n";
						echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
					}
					echo "<a href=\"archive.php?page=1&Category=$curpid&SubCat=".str_replace("&", "%26", $myrow["cname"])."\">".$myrow["cname"]."</a><br />\n";
					$prevpid=$curpid;
				}
				echo "</p>\n";

				$prevpid="";
				$resultLinksLeft = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid=2 ORDER BY parent.sort, child.sort, child.cname ", $db);
				while ($myrow = mysql_fetch_array($resultLinksLeft)) {
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<p>\n";
						echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
					}

					//Dont Show China Or Europe Link Here
					if (($myrow["cname"] == "China") || ($myrow["cname"] == "Europe"))
					{
						echo "";
						} else {
						echo "<a href=\"archive.php?page=1&Category=$curpid&SubCat=".str_replace("&", "%26", $myrow["cname"])."\">".$myrow["cname"]."</a><br />\n";
					}

					$prevpid=$curpid;
				}
				echo "</p>\n";
				?>
			</div>
			<div class="NewsExpandLinks">
				<?php
				// Write Categories And Links For Right Column
				$prevpid="";
				$resultLinksLeft = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid=3 ORDER BY parent.sort, child.sort, child.cname ", $db);
				while ($myrow = mysql_fetch_array($resultLinksLeft)) {
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<p style=\"margin-top:5px;\">\n";
						echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
					}

					//Dont Show Story Updates Link Here
					if ($myrow["cname"] == "Story Updates")
					{
						echo "";
						} else {
						
						//$searchC  = array("&", "Whos");
						//$replaceC = array("%26", "Who\'s");
						echo "<a href=\"archive.php?page=1&Category=$curpid&SubCat=".str_replace("&", "%26", $myrow["cname"])."\">".str_replace("Whos", "Who's", $myrow["cname"])."</a><br />\n";
					}
					
					$prevpid=$curpid;
				}
				echo "</p>\n";

				$prevpid="";
				$resultLinksLeft = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid=4 ORDER BY parent.sort, child.sort, child.cname ", $db);
				while ($myrow = mysql_fetch_array($resultLinksLeft)) {
					
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<p>\n";
						echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
					}
					
					echo "<a href=\"archive.php?page=1&Category=$curpid&SubCat=".str_replace("&", "%26", $myrow["cname"])."\">".$myrow["cname"]."</a><br />\n";
					$prevpid=$curpid;
				}
				echo "</p>\n";

				/*
				$prevpid="";
				$resultLinksLeft = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid=5 ORDER BY parent.sort, child.sort, child.cname ", $db);
				while ($myrow = mysql_fetch_array($resultLinksLeft)) {
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<p>\n";
						echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
					}

					//Dont Show Mergers, Dissolutions, etc. Link Here
					if ($myrow["cname"] == "Mergers, Dissolutions, etc.")
					{
						echo "";
						} else {
						echo "<a href=\"archive.php?page=1&Category=$curpid&SubCat=".str_replace("&", "%26", $myrow["cname"])."\">".$myrow["cname"]."</a><br />\n";
					}

					$prevpid=$curpid;
				}
				echo "</p>\n";
				*/

				$prevpid="";
				$resultLinksLeft = mysql_query("SELECT parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE parent.pid=7 ORDER BY parent.sort, child.sort, child.cname ", $db);
				while ($myrow = mysql_fetch_array($resultLinksLeft)) {
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<p>\n";
						echo "<strong>".str_replace("&", "&amp;", $myrow["pname"])."</strong><br />\n";
					}
					echo "<a href=\"archive.php?page=1&Category=$curpid&SubCat=".str_replace("&", "%26", $myrow["cname"])."\">".$myrow["cname"]."</a><br />\n";
					$prevpid=$curpid;
				}
				echo "</p>\n";
				?>
			</div>
			<div class="clear"><br /></div>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
	</div>
</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>