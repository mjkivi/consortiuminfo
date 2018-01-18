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
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/osp.css" />
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
			<p><a href="/">Home</a> &gt; Professional Services Directory</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>
						
	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="OspContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>
		
		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<div class="AllNav">
				<p class="AllNavLink">&raquo;&nbsp;<a href="#act">Accounting</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#crt">Certification Testing</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#cc">Communications Consultants</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#consult">Consulting Services</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#is">Information Services</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#legal">Legal Services</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#mgt">Management Services</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#pubrel">Public Relations</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#sta">Standards Strategy</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#st">Supporting Technologies</a></p>
				<p class="AllNavLink">&raquo;&nbsp;<a href="#slr">Shameless Linking Requests</a></p>
			</div>
			<?php include '../includes/toolsets.php'; ?>
		</div>
		
		<!-- BODY CONTENT AREA -->
		<div class="OspMain">
			<h1>Professional Services Directory</h1>
			<p>Standards organizations are special organizations, with special requirements. A limited number of 
			service providers, including <a href="http://www.consortiuminfo.org/consortia-client-list/">Gesmer Updegrove</a>, 
			have made the commitment to learn about these needs, and to provide services specially tailored to meet them.  
			We have worked with many of the organizations listed below for many years and would be happy to provide 
			recommendations.</p>
			<!--<table class="OspHelp">
				<tr>
					<td style="padding:12px;" valign="top"><a href="http://www.gesmer.com/attorneys/updegrove.php"><img src="images/guide_updegrove.jpg" width="69" height="106" border="0" alt="" /></a></td>
					<td valign="top">
						<p class="OspHelpHead">Can We Help You?</p>
						<p class="OspHelpBody1"><a href="http://www.gesmer.com/">Gesmer Updegrove LLP</a> is, quite simply, the most experienced law firm in the United States when it comes to representing and creating standards development organizations &mdash; <a href="http://www.gesmer.com/practice_areas/consortium.php#CLIENTLIST">more than 100</a> &mdash; to date.  If you need advice about participating in the standards development process, representation in standards-related litigation, intellectual property advice, or help creating a brand new SSO or open source foundation, we'd be pleased to help. Contact:</p>
						<p class="OspHelpBody2">Email: <script language="javascript" type="text/javascript">AuGesAdd();</script><br />Tel: 617-350-6800</p>
					</td>
				</tr>
			</table>-->
			
			<?php
				$db = mysql_connect("localhost", "root", "root");
				mysql_select_db("consor5_clist", $db);
				$query = "SELECT COUNT(*) AS numrows FROM slist";
				$resultLookupRows = mysql_query($query) or die('Error, query failed');
				$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
				$numrows = $row['numrows'];
				//echo "more than ".$numrows;
			?>				
			<table class="OspHelp">
				<tr>
					<td style="padding:12px;" valign="top"><a href="http://gesmer.com/team.php?PeopleID=67"><img src="../images/andy.jpg" border="0" alt="Andy Updegrove" style="width: 130px; margin: 25px 0 0 0;" /></a></td>
					<td valign="top">
						<p class="OspHelpHead">Can We Help You?</p>
						<p class="OspHelpBody1"><a href="http://www.consortiuminfo.org/consortia-client-list/">Gesmer Updegrove LLP</a> is, quite simply, the most experienced law firm in
						the United States when it comes to representing and creating standards
						setting organizations (SSOs) and open source foundations - <a href="http://www.consortiuminfo.org/consortia-client-list/index.php#CLIENTLIST"><?php echo "more than ".$numrows; ?></a>
						to date. If you need advice about participating in the standards
						development process, representation in standards-related litigation,
						intellectual property advice, or help creating a brand new SSO or open
						source foundation, we'd be pleased to help. Contact <a href="/bio/index.php">Andy Updegrove</a> at:
						</p>
						<p class="OspHelpBody2">Email: <script language="javascript" type="text/javascript">AuGesAdd();</script><br />Tel: 617-350-6800</p>
					</td>
				</tr>
			</table>			
			<p>To obtain a listing on this page, please send an email to: <script language="javascript" type="text/javascript">AuConAdd();</script>.</p>
			<a name="act"></a><p class="OspSectionHeader">Accounting</p>
			<p><a href="http://www.ruanecpa.com/">Ruane and Company</a><br />An accounting firm that provides audit, tax and business consulting services to many consortia and trade associations.</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="crt"></a><p class="OspSectionHeader">Certification Testing</p>
			<p><a href="http://www.aptest.com/">Applied Testing and Technology (ApTest)</a><br />Founded by the President and Chief Technical Officer of 88open Consortium, Ltd., one of the first consortia to develop its own test suites and create and run its own on-site certification testing facility. Aptest develops test suites and/or offers testing services for web sites, application software, system software, middleware and Orbs.</p>
			<div class="hr"></div><hr />
			<p><a href="http://www.opengroup.org/">The Open Group</a><br />A consortium in its own right, TOG was formed by the union of the Open Software Foundation, the developer of Motif and other software and standards for the Unix community, and X/Open, a world-wide certification testing organization. Besides supporting its own members, it continues to provide worldwide testing services; hosts forums which guide the development of initiatives; organizes conferences where IT customers and vendors meet; and provides support services to other standard setting groups.</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="cc" id="cc"></a><p class="OspSectionHeader">Communications Consultants</p>
			<p><a href="http://www.karinch.com/CommunicationConsultant.html">Karinch Communications</a><br />Karinch Communications has developed public relations and marketing communications strategies for standards organizations and technology companies since 1993. Clients receive on-going tactical support in those areas, including development and placement of articles, brochures, case studies, press releases, and white papers. Maryann Karinch, the author of seven books on a variety of topics, personally assists each client with its projects.</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="consult"></a><p class="OspSectionHeader">Consulting Services</p>
			<p><a href="http://www.consortiuminfo.org/consortia-client-list/">Gesmer Updegrove LLP</a><br />
			Since 1988, GU has helped form scores of standard setting and promotional
			consortia, and has advised many more &#8212; in all, more than 115 standards
			organizations and open source foundations in a very wide range of
			technologies. Its advisory services include pre-formation advice on
			structural, membership, budget, promotional and other matters crucial to
			ensure a successful launch and ongoing growth; advice on standardization,
			certification and branding strategies; and advice on restructurings,
			mergers and alliances to help consortia successfully adapt to changing
			times. The firm believes that it has represented more standard setting and
			promotional consortia than any other law firm in the United States, and is
			the creator and host of this site and the electronic publisher of <a href="http://www.consortiuminfo.org/bulletins/">Standards
			Today</a>, as well as the <a href="<a href="http://www.consortiuminfo.org/essentialguide/">Essential Guide to Standards</a>, an on-line, book-length
			guide to getting the most out of participating in standards development
			organizations, or to form one yourself. To learn more, contact <a href="/bio/index.php">Andrew Updegrove</a> at
			617/350-6800, or by email at  <script language="javascript" type="text/javascript">AuConAdd();</script> (and also see the related
			entry below under <a href="http://www.consortiuminfo.org/osp/#legal">Legal Services</a>).</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="is"></a><p class="OspSectionHeader">Information Services</p>

			<p><a href="http://www.nssn.org/">www.NSSN.org's</a><br />Fee-based "STAR" service provides current status reports on more than 270,000 standards under development, revision and maintenance around the world. The service also identifies new project proposals and tracks changes in status. A one-year single-user subscription is $99, while enterprise-wide rights may be secured at a greater cost. Look <a href="/articles/#resources">here</a> for a summary of NSSN's free services. <a href="http://www.ansi.org">American National Standards Institute</a> ANSI is a non-profit organization that administers and coordinates the U.S. voluntary standardization and conformity assessment system. Founded in 1918, its mission is to enhance both the global competitiveness of U.S. business and the U.S. quality of life by promoting and facilitating voluntary consensus standards and conformity assessment systems, and safeguarding their integrity. ANSI provides access to numerous standards and links to SDOs, as well as publishes "Standards Action", an online bi-weekly status report on developing domestic, regional, and international standards.</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="legal"></a><p class="OspSectionHeader">Legal Services</p>
			<p><a href="http://www.consortiuminfo.org/consortia-client-list/">Gesmer Updegrove LLP</a><br />
			Gesmer Updegrove believes that it has represented more standard setting and
			promotional consortia than any other law firm in the United States. Since
			1988, it has helped form scores of standard setting and promotional
			consortia as well as open source foundaitons, and has advised many more &#8212;
			in all, more than 115 organizations in a very wide range of technologies.
			Its legal services for standards organizations include initial formation
			and structuring; securing tax exemptions and ongoing tax compliance;
			antitrust compliance monitoring and advice; administering worldwide
			trademark, service mark, and certification mark registration programs;
			structuring and documenting technical processes; advising on intellectual
			property rights issues and creating IPR policies; advising on licensing and
			technology transfer matters; addressing international issues; negotiating
			and documenting restructurings, mergers and alliances; addressing
			management and employment issues; and litigation services. For individual
			companies, the firm provides advice relating to participation in standards
			organizations; standards-related litigation services; preparation and
			filing of amicus briefs in standards litigation; and expert witness
			services. The firm is the creator and host of this site and the electronic
			publisher of <a href="http://www.consortiuminfo.org/bulletins/">Standards
			Today</a>. To learn more, contact <a href="/bio/index.php">Andrew Updegrove</a> at
			617/350-6800, or by email at  <script language="javascript" type="text/javascript">AuConAdd();</script> (and also see the related
			entry under <a href="http://www.consortiuminfo.org/osp/#consult">Consulting Services</a>).
</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="mgt"></a><p class="OspSectionHeader">Management Services</p>
			<p><a href="http://www.alliancesmanagement.com">Alliances Management</a><br />Alliances Management is a professional services firm that delivers operations management, administrative services, and strategic consultation to trade associations and standards organizations. Founded by Tono Aspinall, with ten years of experience in operations management, the company leverages streamlined processes and best practices to deliver its clients financial/budget management, board services, executive committee management, legal/compliance management, conference management, website management, general administration, and more. Alliances Management believes that while a professional services organization should leverage its best practices for efficiency's sake, it should also tailor its approach to each client's manner of doing business so as to achieve the best possible results.</p>
			<div class="hr"></div><hr />
			<p><a href="http://www.amsl.com/">Association Management Solutions (AMS)</a><br />Over the past fifteen years, AMS has helped start, organize and manage technical industry initiatives and fora. AMS's philosophy is to partner with technical leadership to provide association management expertise, manage day to day operations and provide collaborative tools to insure that important work gets done. AMS provides a turn-key solution that combines experienced staff with an established technology infrastructure that is customized for the unique needs of technical organizations. Areas of service include Board support, membership and financial management,  IT management and web-based collaborative tools, marketing program development, legal coordination, and comprehensive event and meetings services.</p>
			<div class="hr"></div><hr />
			<p><a href="http://www.inventures.com/">Global Inventures</a><br />Global Inventures has 15 years experience in creating and managing Information and Communications Technology (ICT) standards development organizations. Global Inventures range of professional consulting and management services includes strategic guidance, incubation consulting and launch services,   ongoing alliance/member operations and program management, marketing and event planning and execution,  IT and web services, and compliance/certification program management.</p>
			<div class="hr"></div><hr />
			<p><a href="http://www.virtualmgmt.com/">Virtual Inc.</a><br />Virtual provides a complete range of outsourced services for consortia and trade associations, including member recruitment and communications; membership fee invoicing and financial management; marketing strategy design and deployment; web design and administration; electronic and in-person meeting planning and hosting; and all other services necessary to permit an organization to operate without its own staff. Virtual is often retained before an organization is formed, and handles all aspects of its formation.</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			<p><a href="http://vtmgroup.com//">VTM Group </a><br />VTM Group is an association management company specializing in the
			high-tech industry since 1995. With over 90 employees, VTM offers
			support to startups and established standards organizations alike,
			providing expertise in helping industry organizations achieve their
			goals. Full scale services include best known methods and
			consultation, day-to-day operations, membership and licensing
			management, workgroup and committee support, tradeshow and event
			planning and execution, financial and budget management, initiatives
			and infrastructure formation support, web services, PR and strategic
			communications, professional employer organization services, and
			engineering and technical services to include compliance program
			management and test tool development.
			</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>			
			
			
			
			
			
			
			
			
			<a name="pubrel"></a><p class="OspSectionHeader">Public Relations</p>
			<p><a href="http://www.owenmedia.com/">Owen Media</a><br />Owen Media was founded in 1997 when IBM, Intel and Microsoft asked the company to launch and promote a new standards body for messaging technology.  Since then the agency has launched and promoted more than 100 technology organizations, including leading standards bodies and industry groups. The agency's previous and current clients include Climate Savers Computing Initiative, Desktop Management Task Force, Electronic Messaging Association, Home Plug Powerline Alliance, InfiniBand Trade Association, Itanium Solutions Alliance, Open Fabrics Alliance, The Green Grid and the Transaction Processing Performance Council.  Owen Media has offices in Seattle, Portland and Boston with remote managers in Tokyo, Hong Kong and London to service global technology brands and clients worldwide.</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="sta"></a><p class="OspSectionHeader">Standards Strategy</p>
			<p><a href="http://www.gtwassociates.com/">GTW Associates</a><br />This site carries news and alerts of current meetings, hearings and breaking news affecting the standard setting community, as well as articles on matters of interest to the same group. Also includes white papers and policy positions. In includes particularly good coverage of European and US government initiatives and European standards body activities. The site is hosted by GTW Associates, a Maryland based consulting firm which advises business, consortia, governments and trade associations regarding standards policy and assessment. George Willingmyre, the founder, is a former Vice-President/Public Policy of the American National Standards Institute (ANSI).</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="st"></a><p class="OspSectionHeader">Supporting Technologies</p>
			<p><a href="http://www.kavi.com">Kavi Corporation</a><br />Kavi has created a range of web-based products and services specifically designed to address the communication and management needs of associations. The base website package provides password protection, membership management and content editing, while its more sophisticated offerings add features such as content collaboration and meeting registration.</p>
			<p style="border-top: #999999 1px solid; margin-top:16px; margin-bottom:8px;"></p>
			
			<a name="slr"></a><p class="OspSectionHeader">Shameless Linking Requests</p>
			<p>Posting a linking request form on the World Wide Web is a bit like installing a pet port in your door. While you intend it for use by a given species (i.e., a dog or cat), there's nothing to prevent any other type of similarly-sized animal from enjoying the comforts of your home. Herewith, a sampling of some of the more bizarre linking requests received by ConsortiumInfo.org&hellip; <a href="shameless.php">Enter Shameless Linking Requests</a></p>
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