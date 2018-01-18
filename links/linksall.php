<?php
include '../includes/replace_specchars.php';

// Database Connection
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_clist", $db);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org Standards List</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/links.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/toolsets.css" />
<!-- ALTERNATE -->
<link rel="alternate stylesheet" type="text/css" href="/consortiuminfo2017/css/default.css" title="default" />
<link rel="alternate stylesheet" type="text/css" href="/consortiuminfo2017/css/large.css" title="large" />
<!-- ********* -->
<link rel="home" title="home" href="http://www.consortiuminfo.org" />
<script type="text/javascript">AC_FL_RunContent = 0;</script>
<script type="text/javascript" src="/scripts/AC_RunActiveContent.js"></script>
<script type="text/javascript" src="/scripts/styleswitcher.js"></script>
<script type="text/javascript" src="/scripts/obfuscate.js"></script>
</head>
<body id="bulletin">
	<!-- ****************** -->
	<!--   ACCESSIBILITY    -->
	<!-- ****************** -->
	<?php include '../includes/accessibility.php'; ?>

	<!-- ************* -->
	<!--   MASTHEAD    -->
	<!-- ************* -->
	<?php include 'includes/masthead_links.php'; ?>

	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p><a href="/">Home</a> &gt; <a href="index.php">Standards List</a></p>
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
	<div class="LinksContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<?php include 'includes/sidenav2_links.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="LinksMain">
			<h1>Standard Setting Organizations<br />and Standards List</h1>
			<p>Click on a consortium name to view a description of that consortium and to access links that will take you to its homepage, supported standards and (if available) its IPR policy.</p>
			<p>You can also search this list by <a href="index.php#categories">category</a>.</p> 
			<div style="float: left; margin: 0 0 15px 0;">
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
			<div class="hr" style="margin-top:15px; margin-bottom:10px;"></div><hr />
			<?php
			// There Are More Than 10 Results - Write ABC Links And Items
			// How Many Results We Have In Database
			$query = "SELECT COUNT(*) AS numrows FROM cat_lookup";
			$resultLookupRows = mysql_query($query) or die('Error, query failed');
			$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
			$numrows = $row['numrows'];

			//More Than 10 So Write ABC Links
			if ($numrows > 10)
			{
				// Begin Write ABC Links
				echo "<h4>";
				// Check For Items Before A
				$queryPreA = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)<'A'";
				$resultLookupRows = mysql_query($queryPreA) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsPreA = $row['numrows'];
				// Check For A
				$queryA = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='A'";
				$resultLookupRows = mysql_query($queryA) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsA = $row['numrows'];
				//Write A
				if (($numrowsPreA <> "0") || ($numrowsA <> "0")) { echo "<a href=\"#A\">A</a>&nbsp;"; } else { echo "A&nbsp;"; }

				// Check For B
				$queryB = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='B'";
				$resultLookupRows = mysql_query($queryB) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsB = $row['numrows'];
				//Write B
				if ($numrowsB <> "0") { echo "<a href=\"#B\">B</a>&nbsp;"; } else { echo "B&nbsp;"; }

				// Check For C
				$queryC = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='C'";
				$resultLookupRows = mysql_query($queryC) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsC = $row['numrows'];
				//Write C
				if ($numrowsC <> "0") { echo "<a href=\"#C\">C</a>&nbsp;"; } else { echo "C&nbsp;"; }

				// Check For D
				$queryD = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='D'";
				$resultLookupRows = mysql_query($queryD) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsD = $row['numrows'];
				//Write D
				if ($numrowsD <> "0") { echo "<a href=\"#D\">D</a>&nbsp;"; } else { echo "D&nbsp;"; }

				// Check For E
				$queryE = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='E'";
				$resultLookupRows = mysql_query($queryE) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsE = $row['numrows'];
				//Write E
				if ($numrowsE <> "0") { echo "<a href=\"#E\">E</a>&nbsp;"; } else { echo "E&nbsp;"; }

				// Check For F
				$queryF = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='F'";
				$resultLookupRows = mysql_query($queryF) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsF = $row['numrows'];
				//Write F
				if ($numrowsF <> "0") { echo "<a href=\"#F\">F</a>&nbsp;"; } else { echo "F&nbsp;"; }

				// Check For G
				$queryG = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='G'";
				$resultLookupRows = mysql_query($queryG) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsG = $row['numrows'];
				//Write G
				if ($numrowsG <> "0") { echo "<a href=\"#G\">G</a>&nbsp;"; } else { echo "G&nbsp;"; }

				// Check For H
				$queryH = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='H'";
				$resultLookupRows = mysql_query($queryH) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsH = $row['numrows'];
				//Write H
				if ($numrowsH <> "0") { echo "<a href=\"#H\">H</a>&nbsp;"; } else { echo "H&nbsp;"; }

				// Check For I
				$queryI = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='I'";
				$resultLookupRows = mysql_query($queryI) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsI = $row['numrows'];
				//Write I
				if ($numrowsI <> "0") { echo "<a href=\"#I\">I</a>&nbsp;"; } else { echo "I&nbsp;"; }

				// Check For J
				$queryJ = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='J'";
				$resultLookupRows = mysql_query($queryJ) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsJ = $row['numrows'];
				//Write J
				if ($numrowsJ <> "0") { echo "<a href=\"#J\">J</a>&nbsp;"; } else { echo "J&nbsp;"; }

				// Check For K
				$queryK = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='K'";
				$resultLookupRows = mysql_query($queryK) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsK = $row['numrows'];
				//Write K
				if ($numrowsK <> "0") { echo "<a href=\"#K\">K</a>&nbsp;"; } else { echo "K&nbsp;"; }

				// Check For L
				$queryL = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='L'";
				$resultLookupRows = mysql_query($queryL) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsL = $row['numrows'];
				//Write L
				if ($numrowsL <> "0") { echo "<a href=\"#L\">L</a>&nbsp;"; } else { echo "L&nbsp;"; }

				// Check For M
				$queryM = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='M'";
				$resultLookupRows = mysql_query($queryM) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsM = $row['numrows'];
				//Write M
				if ($numrowsM <> "0") { echo "<a href=\"#M\">M</a>&nbsp;"; } else { echo "M&nbsp;"; }

				// Check For N
				$queryN = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='N'";
				$resultLookupRows = mysql_query($queryN) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsN = $row['numrows'];
				//Write N
				if ($numrowsN <> "0") { echo "<a href=\"#N\">N</a>&nbsp;"; } else { echo "N&nbsp;"; }

				// Check For O
				$queryO = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='O'";
				$resultLookupRows = mysql_query($queryO) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsO = $row['numrows'];
				//Write O
				if ($numrowsO <> "0") { echo "<a href=\"#O\">O</a>&nbsp;"; } else { echo "O&nbsp;"; }

				// Check For P
				$queryP = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='P'";
				$resultLookupRows = mysql_query($queryP) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsP = $row['numrows'];
				//Write P
				if ($numrowsP <> "0") { echo "<a href=\"#P\">P</a>&nbsp;"; } else { echo "P&nbsp;"; }

				// Check For Q
				$queryQ = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='Q'";
				$resultLookupRows = mysql_query($queryQ) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsQ = $row['numrows'];
				//Write Q
				if ($numrowsQ <> "0") { echo "<a href=\"#Q\">Q</a>&nbsp;"; } else { echo "Q&nbsp;"; }

				// Check For R
				$queryR = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='R'";
				$resultLookupRows = mysql_query($queryR) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsR = $row['numrows'];
				//Write R
				if ($numrowsR <> "0") { echo "<a href=\"#R\">R</a>&nbsp;"; } else { echo "R&nbsp;"; }

				// Check For S
				$queryS = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='S'";
				$resultLookupRows = mysql_query($queryS) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsS = $row['numrows'];
				//Write S
				if ($numrowsS <> "0") { echo "<a href=\"#S\">S</a>&nbsp;"; } else { echo "S&nbsp;"; }

				// Check For T
				$queryT = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='T'";
				$resultLookupRows = mysql_query($queryT) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsT = $row['numrows'];
				//Write T
				if ($numrowsT <> "0") { echo "<a href=\"#T\">T</a>&nbsp;"; } else { echo "T&nbsp;"; }

				// Check For U
				$queryU = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='U'";
				$resultLookupRows = mysql_query($queryU) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsU = $row['numrows'];
				//Write U
				if ($numrowsU <> "0") { echo "<a href=\"#U\">U</a>&nbsp;"; } else { echo "U&nbsp;"; }

				// Check For V
				$queryV = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='V'";
				$resultLookupRows = mysql_query($queryV) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsV = $row['numrows'];
				//Write V
				if ($numrowsV <> "0") { echo "<a href=\"#V\">V</a>&nbsp;"; } else { echo "V&nbsp;"; }

				// Check For W
				$queryW = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='W'";
				$resultLookupRows = mysql_query($queryW) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsW = $row['numrows'];
				//Write W
				if ($numrowsW <> "0") { echo "<a href=\"#W\">W</a>&nbsp;"; } else { echo "W&nbsp;"; }

				// Check For X
				$queryX = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='X'";
				$resultLookupRows = mysql_query($queryX) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsX = $row['numrows'];
				//Write X
				if ($numrowsX <> "0") { echo "<a href=\"#X\">X</a>&nbsp;"; } else { echo "X&nbsp;"; }

				// Check For Y
				$queryY = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='Y'";
				$resultLookupRows = mysql_query($queryY) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsY = $row['numrows'];
				//Write Y
				if ($numrowsY <> "0") { echo "<a href=\"#Y\">Y</a>&nbsp;"; } else { echo "Y&nbsp;"; }

				// Check For Z
				$queryZ = "SELECT COUNT(*) AS numrows FROM cons_list WHERE substring(cons_list.cons_name,1,1)='Z'";
				$resultLookupRows = mysql_query($queryZ) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrowsZ = $row['numrows'];
				//Write Z
				if ($numrowsZ <> "0") { echo "<a href=\"#Z\">Z</a>"; } else { echo "Z"; }
				echo "</h4>\n";
				// End Write ABC Links

				//Write Items In Groups Of ABC
				//Write A Items
				if (($numrowsPreA <> "0") || ($numrowsA <> "0"))
				{
					echo "<a name=\"A\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)<'A' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='A' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write B Items
				if ($numrowsB <> "0")
				{
					echo "<a name=\"B\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='B' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write C Items
				if ($numrowsC <> "0")
				{
					echo "<a name=\"C\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='C' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write D Items
				if ($numrowsD <> "0")
				{
					echo "<a name=\"D\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='D' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write E Items
				if ($numrowsE <> "0")
				{
					echo "<a name=\"E\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='E' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write F Items
				if ($numrowsF <> "0")
				{
					echo "<a name=\"F\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='F' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write G Items
				if ($numrowsG <> "0")
				{
					echo "<a name=\"G\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='G' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write H Items
				if ($numrowsH <> "0")
				{
					echo "<a name=\"H\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='H' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write I Items
				if ($numrowsI <> "0")
				{
					echo "<a name=\"I\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='I' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write J Items
				if ($numrowsJ <> "0")
				{
					echo "<a name=\"J\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='J' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write K Items
				if ($numrowsK <> "0")
				{
					echo "<a name=\"K\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='K' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write L Items
				if ($numrowsL <> "0")
				{
					echo "<a name=\"L\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='L' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write M Items
				if ($numrowsM <> "0")
				{
					echo "<a name=\"M\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='M' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write N Items
				if ($numrowsN <> "0")
				{
					echo "<a name=\"N\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='N' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write O Items
				if ($numrowsO <> "0")
				{
					echo "<a name=\"O\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='O' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write P Items
				if ($numrowsP <> "0")
				{
					echo "<a name=\"P\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='P' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write Q Items
				if ($numrowsQ <> "0")
				{
					echo "<a name=\"Q\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='Q' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write R Items
				if ($numrowsR <> "0")
				{
					echo "<a name=\"R\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='R' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write S Items
				if ($numrowsS <> "0")
				{
					echo "<a name=\"S\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='S' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write T Items
				if ($numrowsT <> "0")
				{
					echo "<a name=\"T\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='T' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write U Items
				if ($numrowsU <> "0")
				{
					echo "<a name=\"U\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='U' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write V Items
				if ($numrowsV <> "0")
				{
					echo "<a name=\"V\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='V' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write W Items
				if ($numrowsW <> "0")
				{
					echo "<a name=\"W\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='W' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write X Items
				if ($numrowsX <> "0")
				{
					echo "<a name=\"X\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='X' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write Y Items
				if ($numrowsY <> "0")
				{
					echo "<a name=\"Y\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='Y' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}

				//Write Z Items
				if ($numrowsZ <> "0")
				{
					echo "<a name=\"Z\"></a>";
					$result = mysql_query("SELECT * FROM cons_list WHERE substring(cons_list.cons_name,1,1)='Z' AND cons_list.published = 1 ORDER BY cons_name ASC", $db);
					while ($myrow = mysql_fetch_array($result))
					{
						echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
						echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
					}
					echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
					echo "<div class=\"hr\"></div><hr />\n";
				}
			}

			// There Are 10 Or Fewer Results - Write Items
			if ($numrows <= 10)
			{
				$result = mysql_query("SELECT * FROM cons_list ORDER BY cons_name ASC", $db);
				while ($myrow = mysql_fetch_array($result))
				{
					echo "<p><strong><a href=\"linksdetail.php?ID=".$myrow["cons_id"]."\">".str_replace($oldchars, $newchars, $myrow["cons_name"])."</a></strong><br />";
					echo str_replace($oldchars, $newchars, $myrow["link_desc"])."</p>\n";
				}
				echo "<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\n";
				echo "<div class=\"hr\"></div><hr />\n";
			}
			?>
			<div class="clear"></div>
			<p style="color:#001c9d; padding-bottom:5px;">&raquo;&nbsp;<a href="index.php">Back to Search</a></p>
	</div>
</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>