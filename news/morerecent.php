<?php include '../includes/replace_specchars.php'; ?>
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
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/news.css" />
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
	<?php include '../includes/masthead_subs.php'; ?>
	
	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p><a href="/">Home</a> &gt; <a href="index.php">News</a> &gt; More Recent Articles</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
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
			<?php include 'includes/sidenav1_news.php'; ?>
			<?php include 'includes/sidenav2_news.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>
		
		<!-- BODY CONTENT AREA -->
		<div class="NewsMain">
			<p class="NewsLatestHead">Latest News: From all Sources</p>
			<?php
				// News Entries
				$db = mysql_connect("localhost", "root", "root");
				mysql_select_db("consor5_nnews", $db);
				$offset = 10;
				$rowsPerPage = 12;
				$resultx = mysql_query("SELECT items.ID, items.author, items.its, items.headline, items.source, items.date1, items.story, items.lkintro, items.link1, items.lkintro2, items.link2, items.link3, items.date2, items.blog, items.short_story FROM items WHERE items.headline<>'' AND items.date2<=curdate() ORDER BY items.date2 DESC, sort DESC, items.ID DESC limit $offset, $rowsPerPage", $db);
				while ($myrow = mysql_fetch_array($resultx)) {
					//Start the if statement - if it isn't a blog entry
					$blog=$myrow["blog"];
					$author=stripslashes($myrow["author"]);	
					$its=stripslashes($myrow["its"]);
					$headline=stripslashes($myrow["headline"]);
					$short_story=stripslashes($myrow["short_story"]);
					$source=stripslashes(trim($myrow["source"]));
					$story=stripslashes(trim($myrow["story"]));
					
					//Replace curlys and whatnot
					$story = str_replace($oldchars, $newchars, $story);
					$headline = str_replace($oldchars, $newchars, $headline);
					
					if($blog=='No') {
						echo "<p><strong><a href=\"".$myrow["link1"]."\" target=\"_blank\">".$headline."</a></strong></p>\r
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
						<div class=\"hr\"></div><hr />\r";
					}
					//Start the if statement- if this IS a blog entry
				}
			?>
			
			<p style="color:#001c9d">&raquo;&nbsp;<a href="index.php">Back To Standards News Main</a></p>
			<p style="color:#001c9d">&raquo;&nbsp;<a href="archive.php">Standards News Portal Archive</a></p>
		
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
