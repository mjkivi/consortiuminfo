<?php
$ct=$_GET["ct"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org &mdash; Consider This&hellip;</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />

<!--fb og tags-->
<meta property="og:title" content="Consortiuminfo.org - Consider This"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.consortiuminfo.org/blog/considerthis.php?ct=<?php echo $ct;?>"/>
<meta property="og:site_name" content="Consortiuminfo.org Standards Blog"/>
<meta property="fb:admins" content="100005492701469"/>
<meta property="fb:app_id" content="137378376433571" /> 
<meta property="og:description" content="Consortiuminfo.org - Consider This"/>

<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/considerthis.css" />
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
	<!--start fb sdk -->
	<div id="fb-root"></div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=137378376433571";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!--end fb sdk -->
	
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
			<p><a href="/">Home</a> &gt; <a href="index.php">Consider This</a></p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="ConThisContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<div class="AllNav">
				<p class="AllNavLink">&raquo;&nbsp;<strong><a href="archive.php" title="Archive">Consider This Archive</a></strong></p>
			</div>
			<?php
			// if (ct) exists and isn't the current entry, then show link to current entry
			// if (ct) isn't set then don't show link to current entry because it already is the current entry
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_sblog", $db);
			$result = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT 1", $db);
			while ($myrow = mysql_fetch_array($result)) {
				if (($ct > "") && ($ct != $myrow["id"])) {
					echo "\t\t\t<div class=\"AllNav\">\r
					\t\t\t\t<p class=\"AllNavLink\">&raquo;&nbsp;<a href=\"considerthis.php?ct=".$myrow["id"]."\" title=\"View Current Entry\">View Current Entry</a></p>\r
					\t\t\t</div>";
				}
			}
			?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="ConThisMain">
			<div class="ConThisOpinionWrap">
				<p class="ConThisOpinion">The opinions expressed in the Consider This are those of the author alone, and not necessarily those of Gesmer Updegrove LLP</p>
			</div>
			<h4 style="padding:0px 0px 5px 0px; margin:0px;">CONSIDER THIS:</h4>
			<?php
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_sblog", $db);
			$result = mysql_query("SELECT * FROM items", $db);
			while ($myrow = mysql_fetch_array($result)) {
				if ($ct == $myrow["id"]) {
					echo "<h3 style=\"padding:0px 0px 8px 0px; margin:0px;\"><span class=\"red\">#".$myrow["id"]."</span> ".$myrow["title"]."</h3>\r
					<h6>".$myrow["ddate"]."</h6>\r";
					
					echo "<div style='float: left; margin: 10px 0 5px 0;'>";
						echo "<!-- AddThis Button BEGIN -->";
						echo "<div class='addthis_toolbox addthis_default_style addthis_32x32_style'>";
						echo "<a class='addthis_button_preferred_1'></a>";
						echo "<a class='addthis_button_preferred_2'></a>";
						echo "<a class='addthis_button_preferred_3'></a>";
						echo "<a class='addthis_button_preferred_4'></a>";
						echo "<a class='addthis_button_compact'></a>";
						echo "<a class='addthis_counter addthis_bubble_style'></a>";
						echo "</div>";
						echo "<script type='text/javascript'>var addthis_config = {'data_track_addressbar':true};</script>";
						echo "<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js#pubid=updegrove'></script>";
						echo "<!-- AddThis Button END -->";
					echo "</div>";
					echo "<div style='clear: both;'></div>";

				?>
					<div style="margin: 8px 0; overflow: visible;">
						<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.consortiuminfo.org%2Fblog%2Fconsiderthis.php%3Fct=<?php echo $ct;?>&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
						<!--<div class="fb-like" data-href="http://www.consortiuminfo.org/blog/considerthis.php?ct=<?php echo $ct;?>" data-send="false" data-width="300" data-show-faces="false"></div>-->
					</div>					
				<?php
					
					// For any entry that begins with an image - add the image tag to the beginning of the story
					// Adding image tag for entries: 55, 56
					if ($myrow["id"] == '56') {
						echo "<img class=\"imgleft\" src=\"/bulletins/dec08/dec08_img5.jpg\" alt=\"\" width=\"175\" height=\"155\" border=\"0\" />" . $myrow["story"];
					}
					
					elseif ($myrow["id"] == '55') {
						echo "<img class=\"imgleft\" src=\"/bulletins/oct08/oct08_img2.jpg\" alt=\"\" width=\"150\" height=\"98\" border=\"0\" style=\"margin:7px 10px 3px 0px;\" />" . $myrow["story"];
					}
					
					elseif ($myrow["id"] == '58') {
						$Images58Story = str_replace("in the essential role of an press in a modern democracy", "in the essential role of an<img class='imgleft' src='/bulletins/apr09/apr09_img4.gif' alt='' width='180' height='80' border='0' /><img class='imgright' src='/bulletins/apr09/apr09_img5.gif' alt='' width='180' height='80' border='0' /> press in a modern democracy", $myrow["story"]);
						echo $Images58Story."\r";
					}
					
					 elseif ($myrow["id"] == '59') {
						$Images59Story = str_replace("<p>Some of the most beautiful artistic treasures created", "<img class=\"imgleft\" src=\"/bulletins/jun09/jun09_img6.jpg\" width=\"159\" height=\"162\" border=\"0\" alt=\"\" /><p><br /><br />ome of the most beautiful artistic treasures created", $myrow["story"]);
						echo $Images59Story."\r";
					}
					
					else {
						echo $myrow["story"]."\r";
					}

				}
			}
			?>
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