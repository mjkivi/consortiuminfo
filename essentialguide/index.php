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
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/guide.css" />
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
			<p><a href="/">Home</a> &gt; Guide</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>
						
	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="GuideContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>
		
		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<div class="AllNav">
				<p class="AllNavTitle">The Essential Guide to Standards:</p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="/essentialguide/index.php#part1" title="Participating In An SSO">Participating In An SSO</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="/essentialguide/index.php#part2" title="Forming And Managing An SSO">Forming And Managing An SSO</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="/essentialguide/index.php#part3" title="Law and Policy">Law and Policy</a></p>
			</div>
			<?php include '../includes/toolsets.php'; ?>
		</div>
		
		<!-- BODY CONTENT AREA -->
		<div class="GuideMain">
			<h1>The Essential Guide to Standards</h1>
			<p>The Essential Guide is a concise handbook for anyone who wants to
			understand standards and standards development from a hands-on perspective:
			how to decide what standard setting organization (SSO) to join, how to get
			the most out of one after you do, and how to create an SSO if the right one
			doesn't already exist.
			</p>	
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
					<td style="padding:12px;" valign="top"><a href="http://gesmer.com/team.php?PeopleID=67"><img src="../images/andy.jpg" border="0" alt="Andy Updegrove" style="width: 130px; margin: 25px 0 0 0;" /></a></td>
					<td valign="top">
						<p class="GuideHelpHead">Can We Help You?</p>
						<p class="GuideHelpBody1"><a href="http://www.gesmer.com/industries.php?ServiceID=9">Gesmer Updegrove LLP</a> is, quite simply, the most experienced law firm in
						the United States when it comes to representing and creating standards
						setting organizations (SSOs) and open source foundations - 
						<a href="http://www.consortiuminfo.org/consortia-client-list/index.php#CLIENTLIST"><?php echo "more than ".$numrows; ?></a>
						to date. If you need advice about participating in the standards
						development process, representation in standards-related litigation,
						intellectual property advice, or help creating a brand new SSO or open
						source foundation, we'd be pleased to help. You can find a detailed list of our services and a complete client list <a href="http://www.consortiuminfo.org/consortia-client-list/">here</a>. 
						<br/>
						Contact <a href="/bio/index.php">Andy Updegrove</a> at:
						</p>
						<p class="GuideHelpBody2">Email: <script language="javascript" type="text/javascript">AuGesAdd();</script>
						<br />Tel: 617-350-6800</p>
					</td>
				</tr>
			</table>
			<div style="float: left; margin: 10px 0 10px 0;">
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
			<a name="part1"></a><p class="GuideSectionHeader">PARTICIPATING IN AN SSO</p>
			<div class="hr"></div><hr />
			<p class="GuideSectionTitle"><a href="whatisansso.php">What (and Why) is an SSO?</a></p>
			<p class="GuideSectionBody">There are over 500 technology SSOs in the world today, and more are being formed every week.  They must be doing something right. <a href="whatisansso.php">More +</a></p>
			<p class="GuideSectionTitle"><a href="participating1.php">Participating in SSOs Part I:  Value Propositions, Roles and Strategies</a></p>
			<p class="GuideSectionBody">With hundreds of SSOs to choose from, deciding which are central to your mission, and also most likely to succeed in achieving theirs, is essential to meeting your strategic objectives. <a href="participating1.php">More +</a></p>
			<p class="GuideSectionTitle"><a href="participating2.php">Participating in SSOs Part II:  Getting the Most from Your Membership</a></p>
			<p class="GuideSectionBody">SSO Participation is expensive in terms of cash and staff time. Some members are passive, while others are power users that influence results and reap the maximum rewards. <a href="participating2.php">More +</a></p>
			<p class="GuideSectionTitle"><a href="intellectual.php">Intellectual Property Rights (IPR) and Standard Setting</a></p>
			<p class="GuideSectionBody">IPR policies vary widely and are evolving rapidly, while governments watch closely.  It's essential to understand your obligations under an IPR policy before you become bound by it. <a href="intellectual.php">More +</a></p>
			<a name="part2"></a><p class="GuideSectionHeader">FORMING AND MANAGING AN SSO</p>
			<div class="hr"></div><hr />
			<p class="GuideSectionTitle"><a href="forming1.php">Forming a Successful SSO Part I:  Business Considerations</a></p>
			<p class="GuideSectionBody">Nobody has to join an SSO, or support its standards. As a result, there is as much art as science to forming an SSO that key stakeholders will want to join and support. <a href="forming1.php">More +</a></p>
			<p class="GuideSectionTitle"><a href="forming2.php">Forming a Successful SSO Part II:  Legal Considerations</a></p>
			<p class="GuideSectionBody">While governments everywhere support standards development, SSOs and their members must understand and comply with antitrust, tax, intellectual property and other laws around the world. <a href="forming2.php">More +</a></p>
			<p class="GuideSectionTitle"><a href="certification.php">Certification Testing and Branding</a></p>
			<p class="GuideSectionBody">Standards need to be credible in order to become widely implemented. Achieving trust relies on proving interoperability through testing, and advertising that value through branding. <a href="certification.php">More +</a></p>
			<p class="GuideSectionTitle"><a href="creating.php">Creating a Successful SSO Technical Process</a></p>
			<p class="GuideSectionBody">At the core of every SSO is its technical process.  Whether an SSO creates useful standards in a useful time frame is a result of how well that process is designed and run. <a href="creating.php">More +</a></p>
			<a name="part3"></a><p class="GuideSectionHeader">LAW AND POLICY</p>
			<div class="hr"></div><hr />
			<p class="GuideSectionTitle"><a href="government.php">Government Concerns and Policies</a></p>
			<p class="GuideSectionBody">Governments the world over are taking a greater interest in SSOs, as consumers, as regulators, and as protectors and advocates for domestic industry. <a href="government.php">More +</a></p>
			<p class="GuideSectionTitle"><a href="laws.php">Laws, Cases and Regulations</a></p>
			<p class="GuideSectionBody">SSOs are both encouraged and regulated under the antitrust and anticompetition laws of nations around the world.  They can also be the source of expensive private litigation. <a href="laws.php">More +</a></p>
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