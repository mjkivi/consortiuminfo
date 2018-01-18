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
<body id="bulletin" onload="populateSubCat(document.CatList,document.CatList.Category.options[document.CatList.Category.selectedIndex].value); document.getElementById('SubCatMenu').selectedIndex = <?php echo $SelectValue; ?>;">
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
			<div class="LinksSideSponsor">
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
			<?php include 'includes/sidenav2_links.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="LinksMain">
			<p><strong>This consortium is no longer active, and no link to its former Web site is available at the Internet Archive.</strong></p>
			<div class="hr" style="margin-top:0px; margin-bottom:10px;"></div><hr />
			<div class="clear"></div>
			<p style="color:#001c9d; padding-bottom:5px;">&raquo;&nbsp;<a href="index.php">Back to Standards List Main Page</a></p>
		</div>
</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>