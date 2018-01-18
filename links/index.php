<?php
// Read In Vars
if (isset($_GET["Category"])) {
	$Category = $_GET["Category"];
}
if (isset($_GET["SubCat"])) {
	$SubCat = $_GET["SubCat"];
}

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
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/links.css" />
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
			$db = mysql_connect("localhost", "consor5", "c0n$0r667");
			//$db = mysql_connect("localhost", "root", "");
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
			
			<?php
				//query the cats joining with the cat group table on cat_group_id
				$query2 = "SELECT cc.cat_id, cc.cat_name, cg.id, cg.name FROM cons_cats cc
							INNER JOIN cat_groups cg
							ON cc.cat_group_id = cg.id WHERE cc.published = 1
							ORDER BY cg.id, cc.cat_name ASC";				   
				$result2 = mysql_query($query2) or die('Error, query failed');
				
				$row2 = mysql_fetch_array($result2);
				$groupname = $row2["name"];
				$catname = $row2["cat_name"];
				
				$last = $groupname;
				
				echo "<div class='LinksExpandLinks'><p style='margin-top: 5px;'><br/><b>".$groupname."</b>";

				while($row2 = mysql_fetch_array($result2)) {
					$groupname = $row2["name"];
					$groupid = $row2["id"];
					$catname = $row2["cat_name"];
					$catid = $row2["cat_id"];
					
					if($last != $groupname){
						if ($groupid == 3) {
							echo "</p></div><div class='LinksExpandLinks'><p style='margin-top: 5px;'>";
						}
						echo "<br/><b>$groupname</b>";
					}
					echo "<a href='/links/linkscats.php?ID=".$catid."'>".$catname."</a>";
					$last = $groupname;
				}
				echo "</p></div>";
			?>			
			
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