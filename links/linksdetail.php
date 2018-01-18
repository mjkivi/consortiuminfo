<?php
include '../includes/replace_specchars.php';

// Read In Vars
$Category = $_GET["Category"];
$SubCat = $_GET["SubCat"];
$ID = $_GET["ID"];
$ReturnID = $_GET["ReturnID"];

// Database Connection
$db = mysql_connect("localhost", "root", "root");
//$db = mysql_connect("localhost", "root", "");
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
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<?php include 'includes/sidenav2_links.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="LinksMain">
			<h1>Standard Setting Organizations<br />and Standards List</h1>
			<?php
			$result = mysql_query("SELECT cons_list.cons_id, cons_list.cons_name, cons_list.cons_url, cons_list.cons_overview, cons_list.cons_specs, cons_list.cons_specs_na, cons_list.cons_specs_avail, cons_list.cons_specs_avail_url, cons_list.cons_specs_custom, cons_list.cons_specs_custom_url, cons_list.cons_specs_custom_desc, cons_list.cons_ipr, cons_list.cons_ipr_na, cons_list.cons_ipr_avail, cons_list.cons_ipr_avail_url, cons_list.cons_ipr_custom, cons_list.cons_ipr_custom_url, cons_list.cons_ipr_custom_desc, cons_list.cur_stat, cons_list.last_updated, cons_list.no_link FROM cons_list WHERE cons_list.cons_id='".$ID."'", $db);
			while ($myrow = mysql_fetch_array($result))
			{
				$consname=$myrow["cons_name"];
				$overview=stripslashes(trim($myrow["cons_overview"]));
				$specs=stripslashes(trim($myrow["cons_specs"]));
				$specs_na = stripslashes(trim($myrow["cons_specs_na"]));
				$specs_avail = stripslashes(trim($myrow["cons_specs_avail"]));
				$specs_avail_url = stripslashes(trim($myrow["cons_specs_avail_url"]));
				if (strpos($specs_avail_url, 'http') === 0) {
					$specs_avail_url = $specs_avail_url;
				} else {
					$specs_avail_url = "http://".$specs_avail_url;
				}				
				$specs_custom = stripslashes(trim($myrow["cons_specs_custom"]));
				$specs_custom_url = stripslashes(trim($myrow["cons_specs_custom_url"]));
				if (strpos($specs_custom_url, 'http') === 0) {
					$specs_custom_url = $specs_custom_url;
				} else {
					$specs_custom_url = "http://".$specs_custom_url;
				}				
				$specs_custom_desc = stripslashes(trim($myrow["cons_specs_custom_desc"]));					
				$ipr=stripslashes(trim($myrow["cons_ipr"]));
				$ipr_na=stripslashes(trim($myrow["cons_ipr_na"]));
				$ipr_avail=stripslashes(trim($myrow["cons_ipr_avail"]));
				$ipr_avail_url=stripslashes(trim($myrow["cons_ipr_avail_url"]));
				if (strpos($ipr_avail_url, 'http') === 0) {
					$ipr_avail_url = $ipr_avail_url;
				} else {
					$ipr_avail_url = "http://".$ipr_avail_url;
				}
				
				$ipr_custom=stripslashes(trim($myrow["cons_ipr_custom"]));
				$ipr_custom_url=stripslashes(trim($myrow["cons_ipr_custom_url"]));
				if (strpos($ipr_custom_url, 'http') === 0) {
					$ipr_custom_url = $ipr_custom_url;
				} else {
					$ipr_custom_url = "http://".$ipr_custom_url;
				}				
				$ipr_custom_desc=stripslashes(trim($myrow["cons_ipr_custom_desc"]));
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
				echo "<p><strong>Overview:</strong> ".$overview."</p>\n";
				
				/*if ($specs_na==1){
					echo "<p><strong>Specifications:</strong> Not Available</p>\n";
				} else {
					echo "<p><strong>Specifications:</strong> ".$specs."</p>\n";
				}*/

				if ($specs_na == 1) {
					print "<p><b>Specifications:</b> Not Available</p>";
				} else if ($specs_avail == 1 ) {
					print "<p><b>Specifications:</b> Available <a href='".$specs_avail_url."' target='_blank'>here</a>.</p>";
				} else if ($specs_custom == 1 ) {
					print "<p><b>Specifications:</b> See<br/> <a href='".$specs_custom_url."' target='_blank'>".$specs_custom_url."</a>.<br/>";
					print "(".$specs_custom_desc.")</p>";				
				}
		
				if ($ipr_na == 1) {
					print "<p><b>IPR Policy:</b> Not Available</p>";
				} else if ($ipr_avail == 1 ) {
					print "<p><b>IPR Policy:</b> Available <a href='".$ipr_avail_url."' target='_blank'>here</a>.</p>";
				} else if ($ipr_custom == 1 ) {
					print "<p><b>IPR Policy:</b> See<br/> <a href='".$ipr_custom_url."' target='_blank'>".$ipr_custom_url."</a>.<br/>";
					print "(".$ipr_custom_desc.")</p>";				
				}				
				
				
				/*if ($ipr_na==1){
					echo "<p><strong>IPR Policy:</strong> Not Available</p>\n";
				} else {
					echo "<p><strong>IPR Policy:</strong> ".$ipr."</p>\n";
				}*/				
				//if (($cur_stat == 'Active') || ($cur_stat == 'Inactive')) {
				//	echo "<p><strong>Current Status:</strong> ".$cur_stat."</p>\n";
				//}
				
				if ($cur_stat > "") {
					echo "<p><strong>Current Status:</strong> ".$cur_stat."</p>\n";
				}
				
				if ($last_updated != '0000-00-00') {
					echo "<p><strong>Last Updated:</strong> ".$last_updated."</p>\n";	
				}
				
			}
			?>

			<div class="hr" style="margin-top:15px; margin-bottom:10px;"></div><hr />
			<div class="clear"></div>
			<p style="color:#001c9d; padding-bottom:5px;">&raquo;&nbsp;<?php echo "<a href=\"linkscats.php?ID=".$ReturnID."&Category=".$Category."&SubCat=".$SubCat."\">"; ?>Back to Search Results</a></p>
		</div>
</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>