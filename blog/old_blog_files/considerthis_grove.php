<?php
$ct=$_GET["ct"];
?>
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
			<p><a href="/">Home</a> &gt; <a href="index_grove.php">Consider This</a></p>
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
			<div class="AllNav">
				<p class="AllNavLink">&raquo;&nbsp;<strong><a href="archive_grove.php" title="Archive">Consider This Archive</a></strong></p>
			</div>
			<?php
			// if (ct) exists and isn't the current entry, then show link to current entry
			// if (ct) isn't set then don't show link to current entry because it already is the current entry
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_sblog", $db);
			$result = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT 1", $db);
			while ($myrow = mysql_fetch_array($result)) {
				if (($ct > "") && ($ct != $myrow["id"])) {
					echo "\t\t\t<div class=\"AllNav\">\r
					\t\t\t\t<p class=\"AllNavLink\">&raquo;&nbsp;<a href=\"considerthis_grove.php?ct=".$myrow["id"]."\" title=\"View Current Entry\">View Current Entry</a></p>\r
					\t\t\t</div>";
				}
			}
			?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="ConThisMain">
			<div class="ConThisOpinionWrap">
				<p class="ConThisOpinion">The opinions expressed in the Consider This are those of the author alone, and not necessarily those of Gesmer Updegrove LLP</p>
			</div>
			<h4 style="padding:0px 0px 5px 0px; margin:0px;">CONSIDER THIS:</h4>
			<?php
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_sblog", $db);
			$result = mysql_query("SELECT * FROM items", $db);
			while ($myrow = mysql_fetch_array($result)) {
			if ($ct == $myrow["id"]) {
				echo "<h3 style=\"padding:0px 0px 8px 0px; margin:0px;\"><span class=\"red\">#".$myrow["id"]."</span> ".$myrow["title"]."</h3>\r
				<h6>".$myrow["ddate"]."</h6>\r
				".$myrow["story"]."\r";
				}
			}
			?>
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