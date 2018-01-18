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
			<p><a href="/">Home</a> &gt; <a href="index.php">Standards List</a> &gt; Recent Additions</p>
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
			<h2 style="margin-top:10px; margin-bottom:10px;">Recent Additions</h2>
			<p>To learn of new standards organizations as they are announced, bookmark <a href="http://www.consortiuminfo.org/news/archive.php?page=1&Category=1&SubCat=New%20Consortia">this section</a> of the Standards News Portal, or sign up for the Standard Setting Organizations and Standards List <a href="http://www.consortiuminfo.org/rss/">Recent Additions RSS Feed</a>.</p>
			<div class="hr" style="margin-top:0px; margin-bottom:10px;"></div><hr />
			<?php
			$result = mysql_query("SELECT * FROM cons_list ORDER BY cons_id DESC LIMIT 15", $db);
			while ($myrow = mysql_fetch_array($result))
			{
				$adddate = $myrow["adddate"];
				$convert = date("F j, Y", strtotime($adddate));

				$consname=$myrow["cons_name"];
				$overview=stripslashes(trim($myrow["cons_overview"]));
				$specs=stripslashes(trim($myrow["cons_specs"]));
				$ipr=stripslashes(trim($myrow["cons_ipr"]));
				$cur_stat=$myrow["cur_stat"];
				$last_updated=$myrow["last_updated"];
				if ($last_updated != '0000-00-00') {
					$last_updated = date("F j, Y", strtotime($last_updated));
				}
				
				$no_link=$myrow["no_link"];
				$cons_url=$myrow["cons_url"];
				if ($no_link == 'NoLink') {
					$cons_url = 'notactive.php';
				}
				
				//Replace curlys and whatnot
				$consname = str_replace($oldchars, $newchars, $consname);
				$overview = str_replace($oldchars, $newchars, $overview);
				$specs = str_replace($oldchars, $newchars, $specs);
				$ipr = str_replace($oldchars, $newchars, $ipr);

				echo "<p style=\"text-align:center;\"><strong><a href=\"".$cons_url."\">".$consname."</a></strong></p>\n";
				if (($adddate == "0000-00-00") || ($adddate == ""))
				{
					echo "";
				} else {
					echo "<p><strong>Date Entered:</strong> ".$convert."</p>\n";
				}
				echo "<p><strong>Overview:</strong> ".$overview."</p>\n";
				echo "<p><strong>Specifications:</strong> ".$specs."</p>\n";
				echo "<p><strong>IPR Policy:</strong> ".$ipr."</p>\n";
				
				//if (($cur_stat == 'Active') || ($cur_stat == 'Inactive')) {
				//echo "<p><strong>Current Status:</strong> ".$cur_stat."</p>\n";
				//}
				
				if ($cur_stat > "") {
					echo "<p><strong>Current Status:</strong> ".$cur_stat."</p>\n";
				}
				
				if ($last_updated != '0000-00-00') {
					echo "<p><strong>Last Updated:</strong> ".$last_updated."</p>\n";	
				}
				
				echo "<div class=\"hr\" style=\"margin-top:15px; margin-bottom:10px;\"></div><hr />";
			}
			?>
			<div class="clear"></div>
			<p style="color:#001c9d; padding-bottom:5px;">&raquo;&nbsp;<a href="index.php">Back to Standards List Main Page</a></p>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
		</div>
</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>