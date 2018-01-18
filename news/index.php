<?php include '../includes/replace_specchars.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org News</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/css/news.css" />
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
		    url: '/standardsblog/feed/mostrecent.json', 
		    data: { get_param: 'value' }, 
		    dataType: 'json',
		    success: function (data) { 
		        $.each(data, function(index, element) {
		            var title = element.title;
		            var path = element.path;
		            var date = element.created;
		            var teaser = element.field_teaser;
		            var teaser = teaser.replace(/<img[^>]*>/g,"");
				 	$("#drupalfeed").append("<a href='"+path+"'><h2>"+title+"</h2></a><p class='author'>Andrew Updegrove</p><p><span class='date'>Standards Blog - "+date+":</span> "+teaser+"</p>");
		            
		            //$('#drupalfeed').append($('<div>', {
		                //text: element.title
		            //}));
		        });
		    }
		});

	});
</script>
<style type="text/css">
#drupalfeed a h2 {
	text-align: left;
}
</style>
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
			<p><a href="/">Home</a> &gt; News</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="NewsContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			

			<!--Newest Amazon Ad -->
			<table width="165" cellspacing="1" cellpadding="1" style="margin-top: 8px;">
				<tbody>
					<tr>
						<td style="text-align: center;">
							<a href="https://www.amazon.com/Doodlebug-War-Romantics-Adversego-Thrillers-ebook/dp/B01MD02P7R/ref=asap_bc?ie=UTF8" target="_blank"><img align="middle" width="150" src="http://www.consortiuminfo.org/standardsblog/layout/redesign/images/doodlebug.png" alt="" /></a>
						</td>
					</tr>
					<tr>
						<td style="text-align: center; font-size: 14px; font-style: italic;">
						<p>
							<a href="https://www.amazon.com/Doodlebug-War-Romantics-Adversego-Thrillers-ebook/dp/B01MD02P7R/ref=asap_bc?ie=UTF8" target="_blank" style="font-weight: bold; font-size: 15px;">
								Order your copy 
							</a>
							<br/>
							of
						</p>
						<p>
							<a href="https://www.amazon.com/Doodlebug-War-Romantics-Adversego-Thrillers-ebook/dp/B01MD02P7R/ref=asap_bc?ie=UTF8" target="_blank" style="color: rgb(204, 0, 0);  font-size: 15px; font-weight: bold;">
								The Doodlebug War: A Tale of Fanatics and Romantics
							</a>
							<br/>
							Now!
						</p>
						<!--new amazon code added by mjk 11/09/16--> 
						
						</td>
					</tr>
				</tbody>
			</table>						
			<!-- End Amazon Ad -->


			
			<!--Amazon Ad -->
			<table width="165" cellspacing="1" cellpadding="1" style="margin-top: 8px;">
				<tbody>
					<tr>
						<td style="text-align: center;">
							<a href="http://mybook.to/lafayettecampaign" target="_blank"><img align="middle" width="150" src="http://www.consortiuminfo.org/standardsblog/layout/redesign/images/lafayette.png" alt="" /></a>
						</td>
					</tr>
					<tr>
						<td style="text-align: center; font-size: 14px; font-style: italic;">
						<p>
							<a href="http://mybook.to/lafayettecampaign" target="_blank" style="font-weight: bold; font-size: 15px;">
								Order your copy 
							</a>
							<br/>
							of
						</p>
						<p>
							<a href="http://mybook.to/lafayettecampaign" target="_blank" style="color: rgb(204, 0, 0);  font-size: 15px; font-weight: bold;">
								The Lafayette Campaign: A Tale of Deception and Elections
							</a>
							<br/>
							Now!
						</p>
						<!--new amazon code added by mjk 01/03/12--> 
						
						</td>
					</tr>
				</tbody>
			</table>						

			<table width="165" cellspacing="1" cellpadding="1" style="margin-top: 8px;">
				<tbody>
					<tr>
						<td style="text-align: center;">
							<a href="http://mybook.to/AlexandriaProject" target="_blank"><img align="middle" width="150" height="240" src="http://www.consortiuminfo.org/images/alexandria-project-new.jpg" alt="" /></a>
						</td>
					</tr>
					<tr>
						<td style="text-align: center; font-size: 14px; font-style: italic;">
						<p>
							<a href="http://mybook.to/AlexandriaProject" target="_blank" style="font-weight: bold; font-size: 15px;">
								Order your copy 
							</a>
							<br/>
							of
						</p>
						<p>
							<a href="http://mybook.to/AlexandriaProject" target="_blank" style="color: rgb(204, 0, 0);  font-size: 15px; font-weight: bold;">
								The Alexandria Project, A Tale of Treachery and Technology
							</a>
							<br/>
							Now!
						</p>
						<!--new amazon code added by mjk 01/03/12--> 
						
						<!--<iframe scrolling="no" frameborder="0" src="http://rcm.amazon.com/e/cm?t=biffstechnolo-20&amp;o=1&amp;p=8&amp;l=as1&amp;asins=B006RLTOY4&amp;ref=qf_sp_asin_til&amp;fc1=000000&amp;IS2=1&amp;lt1=_blank&amp;m=amazon&amp;lc1=0000FF&amp;bc1=000000&amp;bg1=FFFFFF&amp;f=ifr" style="width: 120px; height: 240px;" marginwidth="0" marginheight="0"></iframe>-->
						</td>
					</tr>
				</tbody>
			</table>	
			
			<?php include 'includes/sidenav1_news.php'; ?>
			<?php include 'includes/sidenav2_news.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>
			<?php
				// Number Of Entries
				$db = mysqli_connect("localhost", "consor5", "c0n$0r667", "consor5_nnews_utf");
				//mysql_select_db("consor5_nnews_utf", $db);
				//$result = mysql_query("SELECT * FROM items ORDER BY ID DESC LIMIT 1",$db);
				//while ($myrow = mysql_fetch_array($result)) { 
					//echo number_format($myrow["ID"]); 
					//$article_num = number_format($myrow["ID"]);
				//}
				$result = mysqli_query($db, "SELECT COUNT(*) AS Total FROM items");
				while ($myrow = mysqli_fetch_array($result)) { 
						$article_num = $myrow["Total"];
				}
				
				// Month And Year Of Oldest Article
				$db = mysqli_connect("localhost", "consor5", "c0n$0r667", "consor5_nnews_utf");
				//mysql_select_db("consor5_nnews_utf", $db);
				$result = mysqli_query($db, "SELECT * FROM items WHERE date2 <> '0000-00-00' ORDER BY date2 ASC LIMIT 1");
				while ($myrow = mysqli_fetch_array($result)) {
					$launchdate = date("F Y",strtotime($myrow["date2"]));			
				}
				?>
		<!-- BODY CONTENT AREA -->
		<div class="NewsMain">
			<h1>Standards News Portal</h1>
			<p>The Standards News Portal is updated on a daily basis to bring you the most
			important news about standards - how they are created, how they affect you
			- and who's doing what to whom. The Standards News Portal was launched in
			February 2002 and currently contains <?php echo $article_num;?> categorized, searchable
			articles, perhaps the largest archive of its type in existence. You can
			search the archive by topic or date by visiting the <a href="archive.php">Portal Archive Page</a>.</p>
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
			<table class="NewsQuoteBlog">
				<tr>
					<td>
						<p class="NewsQuoteBlogHead">Quote of the Day:</p>
						<?php
							// Quote of the day
							$db = mysqli_connect("localhost", "consor5", "c0n$0r667", "consor5_nnews_utf");
							//mysql_select_db("consor5_nnews_utf", $db);
							$result = mysqli_query($db, "SELECT * FROM items WHERE items.quote <>'' AND date2<=curdate() ORDER BY ID DESC LIMIT 1");


							while ($myrow = mysqli_fetch_array($result)) {
								$quote=stripslashes($myrow["quote"]);
								$qsource=stripslashes($myrow["qsource"]);
								$quote2=stripslashes($myrow["quote2"]);
								$qsource2=stripslashes($myrow["qsource2"]);
								$source=stripslashes($myrow["source"]);
								$qlink2=stripslashes($myrow["qlink2"]);

								//Replace curlys and whatnot
								$quote = str_replace($oldchars, $newchars, $quote);
								$qsource = str_replace($oldchars, $newchars, $qsource);
								$quote2 = str_replace($oldchars, $newchars, $quote2);
								$qsource2 = str_replace($oldchars, $newchars, $qsource2);
								$source = str_replace($oldchars, $newchars, $source);

								//If there's only one quote
								if ($quote2 == "") {
									echo "<p><strong>".$quote."</strong></p>\n
									<p style=\"padding: 0px 25px 0px 30px;\"><em>".$qsource." <a href=\"".$myrow["link1"]."\">...Full Story</a></em></p>";
								}

								//If there is a second quote
								if ($quote2 <> "") {

									//If there's a second quote and both quotes come from different stories
									if ($qlink2 <> "") {
										echo "<p><strong>".$quote."</strong></p>\n
										<p style=\"padding: 0px 25px 0px 30px;\"><em>".$qsource." <a href=\"".$myrow["link1"]."\">...Full Story</a></em></p>\r
										<p><strong>".$quote2."</strong></p>\n
										<p style=\"padding: 0px 25px 0px 30px;\"><em>".$qsource2." <a href=\"".$myrow["qlink2"]."\">...Full Story</a></em></p>";
									}

									//If there's a second quote and both quotes go to the same story
									if ($qlink2 == "") {
										echo "<p><strong>".$quote."</strong></p>\n
										<p style=\"padding: 0px 25px 0px 30px;\"><em>".$qsource."</em></p>\r
										<p><strong>".$quote2."</strong></p>\n
										<p style=\"padding: 0px 25px 0px 30px;\"><em>".$qsource2."</em></p>\r
										<p style=\"padding: 0px 25px 0px 30px;\"><em>Both as quoted in <a href=\"".$myrow["link1"]."\">".$myrow["source"]."</a></em></p>";
									}
								}
							}
							echo "\r\t\t\t\t\t\t<p style=\"color:#001c9d\">&raquo;&nbsp;<a href=\"quotes.php\">See all Quotes</a></p>\r";
						?>
					</td>
				</tr>
			</table>

			<table class="NewsBlogEntry">
				<tr><td><p class="NewsBlogEntryHead">Latest News: <span class="NewsBlogEntryHead">From the Standards Blog</span></p></td></tr>
				<tr><td valign="bottom"><img src="images/standardsblog_main_sm.jpg" width="220" height="130" alt="Andy Updegrove" /></td></tr>
				<tr>
					<td>
						<div id="drupalfeed"></div>
					</td>
				</tr>
			</table>

			<div class="hr" style="margin-top:12px;"></div><hr />
			<p class="NewsLatestHead">Latest News: From all Sources (<a href="/news/archive.php">sort by topic instead</a>)</p>
			<?php
				// News Entries
				$db = mysqli_connect("localhost", "consor5", "c0n$0r667", "consor5_nnews_utf");
				//mysql_select_db("consor5_nnews_utf", $db);
				$resultx = mysqli_query($db, "SELECT items.ID, items.author, items.its, items.headline, items.source, items.date1, items.story, items.lkintro, items.link1, items.lkintro2, items.link2, items.link3, items.date2, items.blog, items.short_story FROM items WHERE items.headline<>'' AND items.date2<=curdate() ORDER BY items.date2 DESC, sort DESC, items.ID DESC limit 10");
				while ($myrow = mysqli_fetch_array($resultx)) {
					//Start the if statement - if it isn't a blog entry
					$blog=$myrow["blog"];
					$author=stripslashes($myrow["author"]);
					$its=stripslashes($myrow["its"]);
					$headline=stripslashes($myrow["headline"]);
					$short_story=stripslashes($myrow["short_story"]);
					$source=stripslashes(trim($myrow["source"]));
					$story=stripslashes(trim($myrow["story"]));

					//Replace curlys and whatnot
					$story = str_replace($oldchars, $newchars, $story);
					$headline = str_replace($oldchars, $newchars, $headline);

					if($blog=='No') {

						if ($its<>"") {
							echo "<p><em>".$myrow["its"]."</em></p>";
						}

						echo "<p><strong><a href=\"".$myrow["link1"]."\" target=\"_blank\">".$headline."</a></strong></p>\r
						<p>";

						if ($author<>"") {
							echo "<strong>".$author."</strong><br />";
						}

						if ($source<>"") {
							echo "<strong>".$source." &ndash; </strong>";
						}

						if ($myrow["date1"]<>"") {
							echo "<strong>".$myrow["date1"].": </strong>";
						}

						echo $story." <a href=\"".$myrow["link1"]."\">...Full Story</a></p>\r
						<div class=\"hr\"></div><hr />\r";
					}
					//Start the if statement- if this IS a blog entry
				}
			?>

			<p style="color:#001c9d">&raquo;&nbsp;<a href="morerecent.php">View additional recent articles</a></p>
			<p style="color:#001c9d">&raquo;&nbsp;<a href="archive.php">Search Full Archive</a></p>

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