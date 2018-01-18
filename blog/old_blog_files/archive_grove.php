<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org &mdash; Consider This&hellip;</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/considerthis.css" />
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

	<!--   SEARCH FORM   -->
	<form class="search" name="form1" method="get" action="http://search.Blossom.com/query/320">

	<!-- ************* -->
	<!--   MASTHEAD    -->
	<!-- ************* -->
	<?php include 'includes/masthead_considerthis.php'; ?>

	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p><a href="/">Home</a> &gt; <a href="index_grove.php">Consider This</a> &gt; Archive</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="ConThisContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div class="ConThisSideSponsor">
				<script type="text/javascript">
					if (AC_FL_RunContent == 0) {
						alert("This page requires AC_RunActiveContent.js.");
					} else {
						AC_FL_RunContent(
							'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
							'width', '154',
							'height', '280',
							'src', '/ci_sponsors',
							'quality', 'high',
							'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
							'align', 'middle',
							'play', 'true',
							'loop', 'true',
							'scale', 'showall',
							'wmode', 'window',
							'devicefont', 'false',
							'id', '/ci_sponsors',
							'bgcolor', '#ffffff',
							'name', '/ci_sponsors',
							'menu', 'true',
							'allowFullScreen', 'false',
							'allowScriptAccess','sameDomain',
							'movie', '/ci_sponsors',
							'salign', ''
							); //end AC code
					}
				</script>
				<noscript>
					<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="154" height="280" id="/ci_sponsors" align="middle">
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="allowFullScreen" value="false" />
					<param name="movie" value="/ci_sponsors.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="/ci_sponsors.swf" quality="high" bgcolor="#ffffff" width="154" height="280" name="/ci_sponsors" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
					</object>
				</noscript>
			</div>
			<?php
			// dynamic link to view current entry
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_sblog", $db);
			$result = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT 1", $db);
			while ($myrow = mysql_fetch_array($result)) {
			echo "<div class=\"AllNav\">\r
			\t\t\t\t<p class=\"AllNavLink\">&raquo;&nbsp;<a href=\"considerthis_grove.php?ct=".$myrow["id"]."\" title=\"View Current Entry\">View Current Entry</a></p>\r
			\t\t\t</div>";
			}
			?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="ConThisMain">
			<h1>Consider This&hellip;</h1>
			<h2 style="margin:0px; padding:0px;">Reflections on Life, Standards and Everything</h2>
			<p>The study of standards has a reputation for being, how to say tactfully, <em>not exactly riveting</em>. Or, as Monty Python's John Cleese might pronounce it: "Dreadfully dull &mdash; dry as dust and thoroughly drab and awful, really". The purpose of this section of ConsortiumInfo.org is to convince you that the study of standards, as they are used everywhere in the world around us, can be interesting as well as necessary. And sometimes, perhaps entertaining as well.</p>
			<div class="hr"></div><hr />
			<h2 style="margin-top:10px;">Consider This Archive</h2>
			<div id="archive">
<?php
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_sblog", $db);

// select distinct years from date field and set as year
$result = mysql_query("SELECT DISTINCT DATE_FORMAT(date, '%Y') as year FROM items ORDER BY date DESC",$db);

while($myrow = mysql_fetch_array($result)) {

// write the year header
echo "\t\t\t\t<h3 style=\"margin:10px 0px 10px 0px;\">".$myrow['year']."</h3>\r
				<table class=\"tableArchive\">\r
					<caption>".$myrow['year']." Consider This Entries</caption>\r
					<tr>\r
						<th width=\"120\">Date</th>\r
						<th width=\"70\">Number</th>
						<th>Entry</th>\r
					</tr>\r";

	$result2 = mysql_query("SELECT * FROM items ORDER BY id DESC", $db);
	while ($myrow2 = mysql_fetch_array($result2)) {

	// get year from date field
	$entryyear = date("Y",strtotime($myrow2["date"]));
	// convert date field to writable month and year
	$entrydate = date("F Y",strtotime($myrow2["date"]));

	// if year matches the header year then write the entry
	if ($entryyear == $myrow['year']) {
		echo "\t\t\t\t\t<tr>\r
						<td>".$entrydate."</td>\r
						<td>".$myrow2["id"]."</td>\r
						<td><a href=\"considerthis_grove.php?ct=".$myrow2["id"]."\" title=\"Link to this entry\">".$myrow2["title"]."</a></td>\r
					</tr>\r";
		}
	}

echo "\t\t\t\t</table>\r
				<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\r
				<div class=\"hr\"></div><hr />\r";
}
?>
			</div>
		</div>
	</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</form>
</body>
</html>