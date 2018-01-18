<?php
include '../includes/replace_specchars.php';

// Database Connection
$db = mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_nnews", $db);

// Page Navigation
$rowsPerPage = 20;
$pageNum = 1; // by default we show first page
// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
	$pageNum = $_GET['page'];
}
$offset = ($pageNum - 1) * $rowsPerPage;
?>
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
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/news.css" />
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
			<p><a href="/">Home</a> &gt; <a href="index.php">News</a> &gt; Quotes of the Day</p>
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
			<?php include 'includes/sidenav1_news.php'; ?>
			<?php include 'includes/sidenav2_news.php'; ?>
			<?php include '../includes/toolsets.php'; ?>
		</div>
		
		<!-- BODY CONTENT AREA -->
		<div class="NewsMain">
			<h1 style="padding-bottom:7px;">Quotes of the Day Archive</h1>
			<?php
			// Database Connection
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_nnews", $db);			
			$getx = mysql_query("SELECT * FROM items WHERE items.quote <>'' AND date2<=curdate() ORDER BY date2 DESC LIMIT $offset, $rowsPerPage",$db);
			while ($myrow = mysql_fetch_array($getx)) {
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
			
				echo "<p style=\"padding:10px 0px 0px 0px; margin:0px;\"><strong>".$quote."</strong></p>\r
				<p style=\"padding:5px 25px 10px 30px; margin:0px;\">".$myrow["date1"]." &ndash; <em>".$qsource." <a href=\"".$myrow["link1"]."\">&hellip;Full Story</a></em></p>\r
				<div class=\"hr\"></div><hr />\r";
				
				if ($quote2 <> '') {
					echo "<p style=\"padding:10px 0px 0px 0px; margin:0px;\"><strong>".$quote2."</strong></p>\r
					<p style=\"padding:5px 25px 10px 30px; margin:0px;\">".$myrow["date1"]." &ndash; <em>".$qsource2." <a href=\"".$myrow["link1"]."\">&hellip;Full Story</a></em></p>\r
					<div class=\"hr\"></div><hr />\r";
				}
			}
			
			// How Many Rows We Have In Database
			echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\r";
			$query = "SELECT COUNT(*) AS numrows FROM items WHERE items.quote <>'' AND date2<=curdate()";
			$resultItemsRows = mysql_query($query) or die('Error, query failed');
			$row = mysql_fetch_array($resultItemsRows, MYSQL_ASSOC);
			$numrows = $row['numrows'];
			
			// How Many Pages We Have When Using Paging
			$maxPage = ceil($numrows/$rowsPerPage);
			
			// Print The Link To Access Each Page
			$self = $_SERVER['PHP_SELF'];
			$nav  = '';
			for($page = 1; $page <= $maxPage; $page++)
			{
			   if ($page == $pageNum)
			   {
				  $nav .= "<span class=\"PageOn\">$page</span>"; // No Need To Create A Link To Current Page
			   }
			   else
			   {
				  $nav .= " <a href=\"$self?page=$page\">$page</a> ";
			   }
			}
			
			// Creating The Link To Go To The First And Last Page Plus Previous And Next Links (Not Using Prev/Next)
			if ($pageNum > 1)
			{
			   $page  = $pageNum - 1;
			   $prev  = " <a href=\"$self?page=$page\">[Prev]</a> ";
			   $first = " <a href=\"$self?page=1\">[First Page]</a> ";
			}
			else
			{
			   $prev  = '&nbsp;'; // We're On Page One, Don't Print Previous Link
			   $first = '&nbsp;'; // Nor The First Page Link
			}
			
			if ($pageNum < $maxPage)
			{
			   $page = $pageNum + 1;
			   $next = " <a href=\"$self?page=$page\">[Next]</a> ";
			   $last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
			}
			else
			{
			   $next = '&nbsp;'; // We're On The Last Page, Don't Print Next Link
			   $last = '&nbsp;'; // Nor The Last Page Link
			}
			
			// Print The Navigation Links (Took Out Prev And Next)
			echo "<tr><td align=\"center\"><p>".$first . $nav . $last."</p></td></tr>\r
			\t\t\t\t</table>\r
			<p><a class=\"returntotop\" href=\"#startcontent\" title=\"return to beginning of content\">return to top</a></p>\r";
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
