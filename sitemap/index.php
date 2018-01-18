<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>The Essential Guide to Consortia and Standards</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/subs.css" />
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
			<p><a href="/">Home</a> &gt; Sitemap</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="SubsContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="SubsMain">
			<h1>Sitemap</h1>
			<table class="sitemap">
				<tr>
					<td valign="top">
						<p>&raquo;&nbsp;<b><a href="/">Home</a></b></p>
						<ul>
							<li><a href="/aboutsite/">About This Site</a></li>
							<li><a href="/books/">Bookstore</a></li>
							<li><a href="http://www.gesmer.com/">Site Sponsor</a></li>
						</ul>
						<p>&raquo;&nbsp;<b><a href="/osp/">Professional Services Directory</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/standardsblog/">The Standards Blog</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/bulletins/">Standards Today</a></b></p>
						<ul>
							<li><a href="/bulletins/archive.php">Standards Today Archive</a></li>
						</ul>
						<p>&raquo;&nbsp;<b><a href="/metalibrary/">Standards MetaLibrary</a></b></p>
						<ul>
							<li><a href="/metalibrary/recentadd.php">Recent Additions</a></li>
							<li><a href="/metalibrary/top50.php">Top 50 List</a></li>
							<li><a href="/metalibrary/learnmore.php">Learn More</a></li>
							<li><a href="/metalibrary/help.php">Submit an Article</a></li>
							<li><a href="http://www.gesmer.com/">About GU</a></li>
						</ul>
						<p>&raquo;&nbsp;<b><a href="/essentialguide/">The Essential Guide</a></b></p>
						<ul>
							<li><a href="/essentialguide/whatisansso.php">What (and Why) is an SSO?</a></li>
							<li><a href="/essentialguide/participating1.php">Participating in SSOs Part I: Value Propositions, Roles and Strategies</a></li>
							<li><a href="/essentialguide/participating2.php">Participating in SSOs Part II: Getting the Most from Your Membership</a></li>
							<li><a href="/essentialguide/intellectual.php">Intellectual Property Rights (IPR) and Standard Setting</a></li>
							<li><a href="/essentialguide/forming1.php">Forming a Successful SSO Part I: Business Considerations</a></li>
							<li><a href="/essentialguide/forming2.php">Forming a Successful SSO Part II: Legal Considerations</a></li>
							<li><a href="/essentialguide/certification.php">Certification Testing and Branding</a></li>
							<li><a href="/essentialguide/creating.php">Creating a Successful SSO Technical Process</a></li>
							<li><a href="/essentialguide/government.php">Government Concerns and Policies</a></li>
							<li><a href="/essentialguide/laws.php">Laws, Cases and Regulations</a></li>
						</ul>
					</td>
					<td valign="top">
						<p>&raquo;&nbsp;<b><a href="/news/">Standards News Portal</a></b></p>
						<ul>
							<li><a href="/news/archive.php">News Archive</a></li>
							<li><a href="/news/quotes.php">Quotes of the Day Archive</a></li>
							<li><a href="/submit/pressrelease/">Submit a News Article</a></li>
							<li><a href="/news/addourfeed.php">Add Our Feed to your Site</a></li>
							<li><a href="/link/">Link to ConsortiumInfo.org</a></li>
						</ul>
						<p>&raquo;&nbsp;<b><a href="/blog/">Consider This</a></b></p>
						<ul>
							<?php
							// dynamic link to view current entry
							$db = mysql_connect("localhost", "root", "root");
							mysql_select_db("consor5_sblog", $db);
							$result = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT 1", $db);
							while ($myrow = mysql_fetch_array($result)) {
							echo "<li><a href=\"/blog/considerthis.php?ct=".$myrow["id"]."\">View Current Entry</a></li>\r";
							}
							?>
							<li><a href="/blog/archive.php">Consider This Archive</a></li>
						</ul>
						<p>&raquo;&nbsp;<b><a href="/links/">Standards List</a></b></p>
						<ul>
							<li><a href="/suggest/index.php?From=ListSection">Suggest a Site</a></li>
							<li><a href="/links/recent.php">Recent Additions</a></li>
						</ul>
						<p>&raquo;&nbsp;<b><a href="/subscribe/">Subscribe to Standards Today</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/books/">Support Us &mdash; Buy books at Biff's</a></b></p>
						<p>&raquo;&nbsp;<b><script language="javascript" type="text/javascript">AuConMapAdd();</script></b></p>
						<p>&raquo;&nbsp;<b><a href="/commcenter/">Communications Center</a></b></p>
						<ul>
							<li><a href="/submit/pressrelease/">Press Release Submissions</a></li>
							<li><a href="/submit/news/">Submit News</a></li>
							<li><a href="/submit/hostedcontent/">Submit Content to be Hosted</a></li>
						</ul>
						<p>&raquo;&nbsp;<b><a href="/presscenter/">Press Center</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/rss/">RSS Feed</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/terms/">Terms of Use</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/faq/">FAQ</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/search/">Advanced Search</a></b></p>
						<p>&raquo;&nbsp;<b><a href="/articles/">Online Resources Directory</a></b></p>
					</td>
				</tr>
			</table>
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