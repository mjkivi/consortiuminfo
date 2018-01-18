<?php
// Read In Vars
$Category = $_GET["Category"];
$SubCat = $_GET["SubCat"];
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
	<?php include '../includes/masthead_subs.php'; ?>

	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p><a href="/">Home</a> &gt; Standards List</p>
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
			<?php include 'includes/sidenav1_links.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="LinksMain">
			<h1>Standard Setting Organizations<br />and Standards List</h1>
			<?php
			// # Of Listings
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_clist", $db);
			$query = "SELECT COUNT(*) AS numrows FROM cons_list";
			$resultLookupRows = mysql_query($query) or die('Error, query failed');
			$row = mysql_fetch_array($resultLookupRows, MYSQL_ASSOC);
			$numrows = $row['numrows'];
			?>
			<p>Welcome to the most complete list in existence of organizations that
			develop, promote and/or support information and communications technology
			standards. The list includes categorized links and overviews of <b><?php echo $numrows; ?></b>
			organizations, and more are added as they are announced. For each entry,
			you will also find links to the standards maintained by that organization
			and to its intellectual property rights policy (if available). You can find a detailed list of the firm's services and a complete client list <a href="http://www.consortiuminfo.org/consortia-client-list/">here</a>.
			</p>
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
			
			<table cellspacing="0" cellpadding="0" border="0" width="100%">
				<tr>
					<td>
						<p style="margin:0px; padding:0px; text-align:left;">Select from the categories below, or view the <a href="linksall.php">complete list</a>.</p>
					</td>
				</tr>
			</table>
			<a name="categories"></a>
			<div class="hr" style="margin-top:15px; margin-bottom:10px;"></div><hr />
			<div class="LinksExpandLinks">
				<p style="margin-top:5px;">
					<strong>Technical Categories</strong><br />
					<a href="linkscats.php?ID=1">Architecture and Infrastructure</a>
					<a href="linkscats.php?ID=14">Audio/Video/Multimedia</a>
					<a href="linkscats.php?ID=61">Cloud Computing</a>
					<a href="linkscats.php?ID=24">Credit/Debit/Smartcard</a>
					<a href="linkscats.php?ID=7">Electronic Media</a>
					<a href="linkscats.php?ID=51">Grid Computing</a>
					<a href="linkscats.php?ID=8">Hardware</a>
					<a href="linkscats.php?ID=9">Imaging</a>
					<a href="linkscats.php?ID=68">Information and Communication Technology</a>
					<a href="linkscats.php?ID=10">Internet</a>
					<a href="linkscats.php?ID=73">Internet of Things</a>
					<a href="linkscats.php?ID=11">Interoperability</a>
					<a href="linkscats.php?ID=12">Languages/Protocols</a>
					<a href="linkscats.php?ID=15">Network</a>
					<!--<a href="linkscats.php?ID=55">Network Centric Computing</a>-->
					<!--<a href="linkscats.php?ID=17">Operating Systems</a>-->
					<a href="linkscats.php?ID=22">Security &amp; Cybersecurity</a>
					<a href="linkscats.php?ID=23">Semiconductors</a>
					<a href="linkscats.php?ID=25">Software</a>
					<!--<a href="linkscats.php?ID=42">Web Services</a>-->
					<a href="linkscats.php?ID=27">Wireless and Mobile</a>
				</p>
				<p>
					<strong>Industry Categories</strong><br />
					<a href="linkscats.php?ID=60">Aeronautics</a>
					<a href="linkscats.php?ID=59">Automotive</a>
					<a href="linkscats.php?ID=38">BioIT and Life Sciences</a>
					<a href="linkscats.php?ID=62">Clean Tech &amp; Renewable Energy</a>
					<a href="linkscats.php?ID=58">Construction and Facilities Management</a>
					<a href="linkscats.php?ID=63">Consumer Electronics and Content</a>
					<a href="linkscats.php?ID=50">Defense</a>
					<a href="linkscats.php?ID=4">Digital and Distance Learning</a>
					<a href="linkscats.php?ID=5">e-Commerce</a>
					<a href="linkscats.php?ID=53">Electronics</a>
					<a href="linkscats.php?ID=52">Emergency Response</a>
					<a href="linkscats.php?ID=67">Financial Services</a>
					<a href="linkscats.php?ID=48">Health and Medical</a>
					<a href="linkscats.php?ID=64">Home Network</a>
					<a href="linkscats.php?ID=44">Manufacturing</a>
					<a href="linkscats.php?ID=13">Multi-Industry</a>
					<a href="linkscats.php?ID=70">Natural and Environmental Sciences</a>
					<a href="linkscats.php?ID=65">Power and SmartGrid</a>
					<a href="linkscats.php?ID=56">Real Estate</a>
					<a href="linkscats.php?ID=69">Sustainability, Efficiency and Green Initiatives</a>
					<a href="linkscats.php?ID=26">Telecom</a>
				</p>
			</div>
			<div class="LinksExpandLinks">
				<p style="margin-top:5px;">
					<strong>Other Categories</strong><br />
					<a href="linkscats.php?ID=45">Advocacy/Lobbying</a>
					<a href="linkscats.php?ID=2">Business Models and Collaboration</a>
					<a href="linkscats.php?ID=47">Categories of One</a>
					<!--<a href="linkscats.php?ID=3">Consortium Collaboratives</a>-->
					<a href="linkscats.php?ID=6">Educational Associations</a>
					<a href="linkscats.php?ID=18">Other Consortium Index Sites</a>
					<a href="linkscats.php?ID=21">Promotional &amp; Trade Associations</a>
				</p>
				<p>
					<strong>De Jure Standards Development Organizations</strong><br />
					<!--<a href="linkscats.php?ID=28">Global</a>-->
					<a href="linkscats.php?ID=30">National</a>
					<a href="linkscats.php?ID=29">Regional</a>
				</p>
				<p>
					<strong>Open Source Initiatives</strong><br />
					<!--<a href="linkscats.php?ID=39">Applications, Development<br />Tools, etc.</a>
					<a href="linkscats.php?ID=40">Enablement and Licensing</a>
					<a href="linkscats.php?ID=17">Operating Systems</a>-->
					<a href="linkscats.php?ID=66">Significant Open Source Foundations</a>
				</p>
				<p>
					<strong>Select by Geography</strong><br />
					<a href="linkscats.php?ID=31">Africa</a>
					<a href="linkscats.php?ID=32">Americas</a>
					<a href="linkscats.php?ID=33">Asia</a>
					<a href="linkscats.php?ID=34">Australia/Oceania</a>
					<a href="linkscats.php?ID=35">Europe</a>
					<a href="linkscats.php?ID=36">Near East</a>
				</p>
			</div>
			<div class="clear"><br /></div>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
	</div>
</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>