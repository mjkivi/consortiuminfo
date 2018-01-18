<?php include 'includes/replace_specchars.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org Sponsored by Gesmer Updegrove LLP</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="Since 1988, Lucash, Gesmer &amp; Updegrove has represented over 45 promotional and standard setting consortia, including many of the largest high technology consortia in the world. In the process, the firm has acquired a great depth of knowledge in how to structure, operate, evolve and eventually dissolve successful consortia in an effective fashion. Although typically the firm works with the founders of a consortium from the earliest stage, we have also frequently been engaged to convert a non-incorporated consortium into a corporate form, or to succeed earlier counsel. We have also been retained by major technology companies to advise them on implementing a standards strategy." />
<meta name="keywords" content="consortium law, standards law, consortia,consortium,standards,standard setting, technology,association,joint venture,cross license,adopter, promoter, alliance, patent cross license,trade association, best practices, specification,open system, open systems, open platform, work group, special interest group, architecture,tax exempt, 501(c)(6), IPR, IPR policy, antitrust, XML, interoperability, conformance, conformance testing, certification, certification testing, test suite" />
<meta name="author" content="GUNet" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/homepage.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/guide.css" />
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

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$.ajax({ 
		    type: 'GET', 
		    url: '/standardsblog/feed/articles.json', 
		    data: { get_param: 'value' }, 
		    dataType: 'json',
		    success: function (data) { 
		        $.each(data, function(index, element) {
		            var title = element.title;
		            var path = element.path;
				 	$("#drupalfeed").append("<a href='"+path+"'>"+title+"</a><br/><br/>");
		            
		            //$('#drupalfeed').append($('<div>', {
		                //text: element.title
		            //}));
		        });
		    }
		});

	});
</script>
<style type="text/css">
#drupalfeed a {
	font-size: .8em;
}
</style>
</head>

<body>
	<!-- ****************** -->
	<!--   ACCESSIBILITY    -->
	<!-- ****************** -->
	<?php include 'includes/accessibility.php'; ?>

	<!--   SEARCH FORM   -->
	<form class="search" name="form1" method="get" action="http://search.Blossom.com/query/320">
	
	<!-- ************* -->
	<!--   MASTHEAD    -->
	<!-- ************* -->
	<?php include 'includes/masthead_subs.php'; ?>
	
	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p>&nbsp;</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>
	
	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="HomeContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include 'includes/clients.php'; ?>			
			</div>
			<div class="SideProServDir">
				<p class="SideProServDirHead">Professional<br />Services<br />Directory</p>
				<img src="images/homepage/home_side_dots.gif" width="154" height="17" border="0" alt="" />
				<p class="SideSponsorTxt2">A listing of the law firms, management companies, platform providers and others that support standards organizations.</p>
				<a href="/osp/"><img src="images/homepage/home_side_go.gif" width="154" height="31" border="0" alt="" /></a>
			</div>
			<?php include 'includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="HomeMain">

			<!-- INTRO -->
			<p class="MainHeader1">WELCOME TO</p>
			<h1>ConsortiumInfo.org</h1>			
			<p class="MainBody1">
			The goal of ConsortiumInfo.org is to be the most complete source on the Internet of news, information and analysis about standards and the role 
			they play in society.</p>
			<?php
				$db = mysql_connect("localhost", "consor5", "c0n$0r667");
				mysql_select_db("consor5_clist", $db);
				$query = "SELECT COUNT(*) AS numrows FROM slist";
				$resultLookupRows = mysql_query($query) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrows = $row['numrows'];
				//echo "more than ".$numrows;
			?>					
			
			<table class="GuideHelp">
				<tr>
					<td style="padding:12px;" valign="top"><a href="http://gesmer.com/team.php?PeopleID=67"><img src="../images/andy.jpg" border="0" alt="Andy Updegrove" style="width: 130px; margin: 0;" /></a></td>
					<td valign="top">
						<p class="GuideHelpBody1" style="margin-top: 12px;">This site is hosted by Gesmer Updegrove LLP, a technology law firm internationally known for forming 
						and representing more of the consortia - <a href="http://www.consortiuminfo.org/consortia-client-list/index.php#CLIENTLIST"><?php echo "more than ".$numrows; ?></a> to date - that create and promote standards than any other 
						law firm in the U.S.  You can find a summary of our services <a href="/consortia-client-list">here</a>. To learn how GU can help you form a consortium or open source 
						foundation, represent you in standards-related litigation, optimize your standards strategy, or address intellectual property 
						rights issues, contact:  <script language="javascript" type="text/javascript">AuGesAdd();</script>
						</p>
						
					</td>
				</tr>
			</table>			
			
			
			<!--<strong>The goal of ConsortiumInfo.org is to be the most complete on-line source of
			information about standards and standards development, and to explain the
			essential role that standards play in our world today.</strong> This site is hosted
			by Gesmer Updegrove LLP, a technology law firm based in Boston,
			Massachusetts, USA. GU is internationally known for forming and
			representing more of the consortia that create and promote standards than
			any other law firm in the U.S. (you can find a list of them <a href="http://www.consortiuminfo.org/consortia-client-list/index.php#CLIENTLIST">here</a> and
			learn more about our services <a href="http://www.consortiuminfo.org/consortia-client-list/">here</a>). To learn how GU can help you form a
			consortium or open source foundation, optimize your standards strategy, or
			address intellectual property rights issues, contact:  <a href="/bio/index.php">Andy Updegrove</a>.-->

			<!--<script language="javascript" type="text/javascript">AuGesAdd();</script>-->

			<!--
			<div class="SiteTourBox">
				<p class="SiteTourHead">Site Tour</p>
				<p class="SiteTourBody">ConsortiumInfo.org offers you an eJournal, a blog that is quoted extensively by journalists around the world, the largest standards eLibrary and most complete list of standards organizations on the Web, and much more &mdash; all of it free. Take this quick tour to see what we have to offer.</p>
				<a href="xxxx"><img src="images/homepage/home_main_taketour.gif" width="67" height="17" border="0" alt="TAKE TOUR" class="TakeTourImg" /></a>
			</div>
			-->

			<!-- SECTION ANCHORS -->
			<!--<p class="SectionAnchors"><a href="/bulletins/">Standards Today</a>&nbsp;&nbsp;&nbsp;<a href="/standardsblog/">The Standards Blog</a>&nbsp;&nbsp;&nbsp;<a href="/news/">Standards News</a>&nbsp;&nbsp;&nbsp;<a href="/essentialguide/">Essentials Guide</a></p>-->

			<!-- STANDARDS NEWS -->
			<p class="SectionHeader" style="padding-top:20px;">STANDARDS NEWS:</p>
			<div class="hr"></div><hr />
			<div class="SectionContent">
				<table class="NewsBody" cellspacing="0">
				<?php
					$db = mysql_connect("localhost", "consor5", "c0n$0r667");
					mysql_select_db("consor5_nnews", $db);
					$result = mysql_query("SELECT * FROM items WHERE date2<=curdate() ORDER BY date2 DESC LIMIT 10", $db);
					while ($myrow = mysql_fetch_array($result)) {

						$newshead = stripslashes($myrow["headline"]);

						//Replace curlys and whatnot
						$newshead = str_replace($oldchars, $newchars, $newshead);

						echo "\n\t\t\t\t\t<tr>";
						echo "\n\t\t\t\t\t\t<td width=\"100\" valign=\"top\"><p class=\"NewsBody\" style=\"color: #333;\">" . $myrow["date2"] . "</p></td>";
						echo "\n\t\t\t\t\t\t<td width=\"465\" valign=\"top\"><p class=\"NewsBody\"><a href=\"" . $myrow["link1"] . "\" target=\"blank\">" . $newshead . "</a></p></td>";
						echo "\n\t\t\t\t\t</tr>";
					}
				?>

				</table>
				<p class="SectionViewHome" style="padding-top:10px">&raquo; <a href="/news/">Read all News</a></p>
			</div>			
		

			<!-- STANDARDS BLOG -->
			<p class="SectionHeader">THE STANDARDS BLOG:</p>
			<div class="hr"></div><hr />
			<div class="SectionContent" style="height: auto;">
				<div id="drupalfeed"></div>
				<?php
					//$db = mysql_connect("localhost", "consor5", "c0n$0r667");
					//mysql_select_db("consor5_geeklog3", $db);
					//$melbdate = date("Y-m-d H:i:s",time());
					//$result = mysql_query("SELECT * FROM gl_stories WHERE date<='$melbdate' AND draft_flag='0' ORDER BY date DESC LIMIT 6", $db);
					//while ($myrow = mysql_fetch_array($result)) {
					//$introNotags = strip_tags($myrow["introtext"], '<a>');
					//$introNonbsp = str_replace("&nbsp;", " ", $introNotags);
					//$shortIntro = explode (". ", $introNonbsp);
					//$date1=$myrow["date"];
					//$headline=$myrow["title"];
					//Replace curlys and whatnot
					//$headline = str_replace($oldchars, $newchars, $headline);
					//$headline = str_replace(chr(92), "", $headline);
						//echo "\n\t\t\t<p><a href=\"/standardsblog/article.php?story=" .$myrow["sid"]. "\">" . strip_tags($headline) . "</a></p>";
						//echo "\n\t\t\t<p class=\"BlogBody\">" . $shortIntro[0]. ". " . "<a href=\"/standardsblog/article.php?story=" . $myrow["sid"] . "\">...Read More</a></p>";
					//}
				?>

				<p class="SectionViewHome">&raquo; <a href="/standardsblog/">Read all Entries</a></p>
			</div>

			<!-- ESSENTIAL GUIDE -->
			<p class="SectionHeader">ESSENTIAL GUIDE:</p>
			<div class="hr"></div><hr />
			<div class="SectionContent" style="height: auto;">
				<p class="EssGuideBody"><a href="http://www.consortiuminfo.org/essentialguide/">Essential Guide Index</a></p>
				<p class="EssGuideHead"><em>Standard Setting Organization Participation Topics</em></p>				
				<p class="EssGuideBody"><a href="/essentialguide/whatisansso.php">What (&amp; Why) is a Consortium</a></p>
				<p class="EssGuideBody"><a href="/essentialguide/participating1.php">Participating in SSOs Part I: Propositions, Value Propositions and Strategies</a></p>
				<p class="EssGuideBody"><a href="/essentialguide/participating2.php">Participating in SSOs Part II: Getting the Most from Your Membership </a></p>
				<p class="EssGuideBody"><a href="/essentialguide/intellectual.php">Intellectual Property Rights and Standard Setting </a></p>
				<p class="EssGuideHead"><em>SSO Formation and Management Topics</em></p>
				<p class="EssGuideBody"><a href="/essentialguide/forming1.php">Forming a Consortium Part I: Business Considerations</a></p>
				<p class="EssGuideBody"><a href="/essentialguide/forming2.php">Forming a Successful Consortium Part II: Legal Considerations</a></p>
				<p class="EssGuideBody"><a href="/essentialguide/certification.php">Certification and Branding</a></p>
				<p class="EssGuideBody"><a href="/essentialguide/creating.php">Creating an SSO Technical Process</a></p>
				<p class="EssGuideHead"><em>Law and Policy Topics</em></p>
				<p class="EssGuideBody"><a href="/essentialguide/government.php">Government Issues &amp; Policy</a></p>
				<p class="EssGuideBody"><a href="/essentialguide/laws.php">Laws, Cases &amp; Regulations</a></p>
				<p class="SectionViewHome" style="padding-top:5px">&raquo; <a href="/essentialguide/">Guide Homepage</a></p>
			</div>
			
			<!-- STANDARDS TODAY -->
			<p class="SectionHeader">STANDARDS TODAY (an eJournal):</p>
			<div class="hr"></div><hr />
			<div class="SectionContent" style="height: auto;">
				<?php
					$db = mysql_connect("localhost", "consor5", "c0n$0r667");
					mysql_select_db("consor5_ci", $db);
					$result = mysql_query("SELECT * FROM issues WHERE id=68", $db);
					while ($myrow = mysql_fetch_array($result)) {
						echo "<p class=\"JournalHeader\">" . $myrow["month"] . ", <span>(" . $myrow["vol"] . " " . $myrow["num"] . ")</span><br /><a href=\"" . $myrow["link"] . "\">" . $myrow["subject"] . "</a></p>";
					}
					?>
					<?php
					$db = mysql_connect("localhost", "consor5", "c0n$0r667");
					mysql_select_db("consor5_ci", $db);
					$result = mysql_query("SELECT * FROM csb WHERE issue=68 ORDER BY csb.weighted ASC", $db);
					while ($myrow = mysql_fetch_array($result)) {
						echo "\n\t\t\t\t<p class=\"JournalSection\">" . $myrow["cat"] . "</p>";
						echo "\n\t\t\t\t<p class=\"JournalTitle\"><a href=\"" . $myrow["link"] . "\">" . $myrow["title"] . "</a></p>";
						echo "\n\t\t\t\t<p class=\"JournalBody\">" . $myrow["des"] . " <a href=\"" . $myrow["link"] . "\">More +</a></p>";
					}
				?>

				<p class="SectionViewHome">&raquo; <a href="/bulletins/archive.php">Cumulative Issue Archive</a></p>
			</div>			

		</div>
	</div>
	<div class="clear"><br /><br /><br /><br /></div>
	<!-- *********** -->
	<!--   FOOTER    -->
	<!-- *********** -->
	<?php include 'includes/footer.php'; ?>
</form>
</body>
</html>