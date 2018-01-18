<?php
// Read In Vars
$From = $_GET["From"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org Sponsored by Gesmer Updegrove LLP</title>
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
<style type="text/css" title="text/css">
table.suggest {
	width: 100%;
}
table.suggest td {
	padding-top: 10px;
	vertical-align: top;
}
</style>
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
	<?php include 'includes/masthead_generic.php'; ?>
	
	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<div class="left">
			<p><a href="/">Home</a><?php if ($From == "ListSection") { echo " &gt; <a href=\"/links/index.php\">Standards List</a>"; } ?> &gt; Suggest A Site</p>
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
			<?php
			if ($From == "ListSection")
			{
				echo "<div class=\"AllNav\">\n";
				echo "<p class=\"AllNavLink\">&raquo;&nbsp;<a href=\"/links/index.php\" title=\"Search List\">Search List</a></p>\n";
				echo "<p class=\"AllNavLink\">&raquo;&nbsp;<a href=\"/links/recent.php\" title=\"Recent Additions\">Recent Additions</a></p>\n";
				echo "</div>\n";
			}
			?>
			<?php include '../includes/toolsets.php'; ?>
		</div>
		
		<!-- BODY CONTENT AREA -->
		<div class="LinksMain">
			<h1>Suggest a Consortium Site</h1>
			<form method="post" enctype="multipart/form-data" action="/suggest/mmex.php">
			<input type="hidden" name="settings" value="settings.php" />
			<?php
			if ($From == "ListSection")
			{
				echo "<input type=\"hidden\" name=\"From\" value=\"ListSection\" />\n";
			}
			?>
			
			
			<table cellpadding="0" cellspacing="0" border="0" class="suggest">
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Site Name:</strong></p><input name="name" type="text" id="name" size="40" /></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Site Category: (check all that apply)</strong></p></td></tr>
				<tr>
					<td width="50%">
						<p><strong>Technical Categories</strong></p>
						<p><input name="cat1" id="cat1" type="checkbox" value="Architecture and Infrastructure" />Architecture and Infrastructure</p>
						<p><input name="cat2" id="cat2" type="checkbox" value="Credit and Smartcard" />Credit and Smartcard</p>
						<p><input name="cat3" id="cat3" type="checkbox" value="Electronic Media" />Electronic Media</p>
						<p><input name="cat4" id="cat4" type="checkbox" value="Grid Computing" />Grid Computing</p>
						<p><input name="cat5" id="cat5" type="checkbox" value="Hardware" />Hardware</p>
						<p><input name="cat6" id="cat6" type="checkbox" value="Imaging" />Imaging</p>
						<p><input name="cat7" id="cat7" type="checkbox" value="Internet" />Internet</p>
						<p><input name="cat8" id="cat8" type="checkbox" value="Interoperability" />Interoperability</p>
						<p><input name="cat9" id="cat9" type="checkbox" value="Languages/Protocols" />Languages/Protocols</p>
						<p><input name="cat10" id="cat10" type="checkbox" value="Multimedia" />Multimedia</p>
						<p><input name="cat11" id="cat11" type="checkbox" value="Network Centric Computing" />Network Centric Computing</p>
						<p><input name="cat12" id="cat12" type="checkbox" value="Network" />Network</p>
						<p><input name="cat13" id="cat13" type="checkbox" value="Operating Systems" />Operating Systems</p>
						<p><input name="cat14" id="cat14" type="checkbox" value="RFID" />RFID</p>
						<p><input name="cat15" id="cat15" type="checkbox" value="Security" />Security</p>
						<p><input name="cat16" id="cat16" type="checkbox" value="Semiconductors" />Semiconductors</p>
						<p><input name="cat17" id="cat17" type="checkbox" value="Software" />Software</p>
						<p><input name="cat18" id="cat18" type="checkbox" value="Web Services" />Web Services</p>
						<p><input name="cat19" id="cat19" type="checkbox" value="Wireless and Mobile" />Wireless and Mobile</p>
						<p style="padding-top:10px;"><strong>Industry Categories</strong></p>
						<p><input name="cat20" id="cat20" type="checkbox" value="Aeronautics" />Aeronautics</p>
						<p><input name="cat21" id="cat21" type="checkbox" value="Automotive" />Automotive</p>
						<p><input name="cat22" id="cat22" type="checkbox" value="BioIT and Life Sciences" />BioIT and Life Sciences</p>
						<p><input name="cat23" id="cat23" type="checkbox" value="Construction" />Construction</p>
						<p><input name="cat24" id="cat24" type="checkbox" value="Defense" />Defense</p>
						<p><input name="cat25" id="cat25" type="checkbox" value="Digital and Distance Learning" />Digital and Distance Learning</p>
						<p><input name="cat26" id="cat26" type="checkbox" value="Electronics" />Electronics</p>
						<p><input name="cat27" id="cat27" type="checkbox" value="Emergency Response" />Emergency Response</p>
						<p><input name="cat28" id="cat28" type="checkbox" value="e-Commerce" />e-Commerce</p>
						<p><input name="cat29" id="cat29" type="checkbox" value="Health and Medical" />Health and Medical</p>
						<p><input name="cat30" id="cat30" type="checkbox" value="Manufacturing" />Manufacturing</p>
						<p><input name="cat31" id="cat31" type="checkbox" value="Multi-Industry" />Multi-Industry</p>
						<p><input name="cat32" id="cat32" type="checkbox" value="Real Estate" />Real Estate</p>
						<p><input name="cat33" id="cat33" type="checkbox" value="Telecom" />Telecom</p>
					</td>
					<td width="50%">
						<p><strong>Other Categories</strong></p>
						<p><input name="cat34" id="cat34" type="checkbox" value="Advocacy/Lobbying" />Advocacy/Lobbying</p>
						<p><input name="cat35" id="cat35" type="checkbox" value="Business Models and Collaboration" />Business Models and Collaboration</p>
						<p><input name="cat36" id="cat36" type="checkbox" value="Categories of One" />Categories of One</p>
						<p><input name="cat37" id="cat37" type="checkbox" value="Consortium Collaboratives" />Consortium Collaboratives</p>
						<p><input name="cat38" id="cat38" type="checkbox" value="Educational Associations" />Educational Associations</p>
						<p><input name="cat39" id="cat39" type="checkbox" value="Government Agencies" />Government Agencies</p>
						<p><input name="cat40" id="cat40" type="checkbox" value="Miscellaneous" />Miscellaneous</p>
						<p><input name="cat41" id="cat41" type="checkbox" value="Other Consortium Index Sites" />Other Consortium Index Sites</p>
						<p><input name="cat42" id="cat42" type="checkbox" value="Profiles, Roadmaps and Guidelines" />Profiles, Roadmaps and Guidelines</p>
						<p><input name="cat43" id="cat43" type="checkbox" value="Promotional &amp; Trade Associations" />Promotional &amp; Trade Associations</p>
						<p style="padding-top:10px;"><strong>De Jure Standards Development Organizations</strong></p>
						<p><input name="cat44" id="cat44" type="checkbox" value="Global" />Global</p>
						<p><input name="cat45" id="cat45" type="checkbox" value="Regional" />Regional</p>
						<p><input name="cat46" id="cat46" type="checkbox" value="National" />National</p>
						<p style="padding-top:10px;"><strong>Open Source Initiatives</strong></p>
						<p><input name="cat47" id="cat47" type="checkbox" value="Applications, Development Tools, etc." />Applications, Development Tools, etc.</p>
						<p><input name="cat48" id="cat48" type="checkbox" value="Enablement and Licensing" />Enablement and Licensing</p>
						<p><input name="cat49" id="cat49" type="checkbox" value="Operating Systems" />Operating Systems</p>
						<p style="padding-top:10px;"><strong>Select by Geography</strong></p>
						<p><input name="cat50" id="cat50" type="checkbox" value="Africa" />Africa</p>
						<p><input name="cat51" id="cat51" type="checkbox" value="Americas" />Americas</p>
						<p><input name="cat52" id="cat52" type="checkbox" value="Asia" />Asia</p>
						<p><input name="cat53" id="cat53" type="checkbox" value="Australia/Oceania" />Australia/Oceania</p>
						<p><input name="cat54" id="cat54" type="checkbox" value="Europe" />Europe</p>
						<p><input name="cat55" id="cat55" type="checkbox" value="Near East" />Near East</p>
					</td>
				</tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Geographic Focus (if any)</strong></p><input name="geo" type="text" id="geo" size="40" /></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Home Page URL:</strong></p>http:// <input type="text" name="homepageurl" size="40" /></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>URL for Specifications Page:</strong></p>http:// <input type="text" name="specs_url" size="40" /></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>URL for IPR Policy (if on a public page):</strong></p>http:// <input type="text" name="ipr_url" size="40" /></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Description of your organization:</strong></p><textarea name="organization_description" rows="3" cols="50"></textarea></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Your Name:</strong></p><input type="text" name="yourname" size="40" /></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Your email address:</strong></p><input type="text" name="email" size="40" /></td></tr>
				<tr><td colspan="2"><p style="padding-top:15px;"><strong>Press Releases</strong><br />We would like to include news from your organization at the Standards News Portal section of our site (<a href="http://www.consortiuminfo.org/news/">http://www.consortiuminfo.org/news</a>). If you would like us to do so, please add the following address to your press release distribution list:<br /><a href="mailto:&#110;&#101;&#119;&#115;&#64;&#99;&#111;&#110;&#115;&#111;&#114;&#116;&#105;&#117;&#109;&#105;&#110;&#102;&#111;&#46;&#111;&#114;&#103;">&#110;&#101;&#119;&#115;&#64;&#99;&#111;&#110;&#115;&#111;&#114;&#116;&#105;&#117;&#109;&#105;&#110;&#102;&#111;&#46;&#111;&#114;&#103;</a></p></td></tr>
				<tr><td colspan="2"><input type="submit" value="Send it " name="SUBMIT" /></td></tr>
				<tr><td colspan="2"><p align="center"><!--#include virtual="/include.shtml" --></p></td></tr>
			</table>
			</form>
			<div class="hr" style="margin-top:15px; margin-bottom:10px;"></div><hr />
			<div class="clear"></div>
			<?php if ($From == "ListSection") { echo "<p style=\"color:#001c9d; padding-bottom:5px;\">&raquo;&nbsp;<a href=\"/links/index.php\">Back to Standards List</a></p>\n"; } ?>
		</div>
</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>