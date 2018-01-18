<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>The Consortiuminfo.org MetaLibrary In Partnership with Sun Microsystems</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="GUNet" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/metalibrary.css" />
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
			<p><a href="/">Home</a> &gt; <a href="index.php">MetaLibrary</a> &gt; Recent Additions</p>
		</div>
		<!--   SEARCH FORM   -->
		<?php include 'includes/searchform_meta.php'; ?>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div id="mainbody">

		<!-- CONTENT -->
		<div id="content2">
			<!-- SKIP/START CONTENT LINK -->
			<a name="startcontent" id="startcontent"></a>

			<!-- SIDEBAR CONTENT AREA -->
			<div class="AllSidebar">
				<div>
					<?php include '../includes/clients.php'; ?>			
				</div>
				<?php include 'includes/sidenav_meta.php'; ?>
				<?php include '../includes/toolsets.php'; ?>
			</div>

			<!-- BODY CONTENT AREA -->
			<div class="bodymain">
				<h1>Standards &lt;Meta&gt;Library</h1>

				<h3 style="text-align:left">Newest Additions to the MetaLibrary</h3>
				<p>To install an automatic RSS alert on your computer, see <a href="rss.php">RSS Feed Intallation</a>.</p>
				<div class="clear"></div>
				<div class="hr" style="margin: -8px 0px 0px 20px;"></div><hr />
				<?php
			
					function convert_smart_quotes($string) { 
						$search = array(chr(145), 
										chr(146), 
										chr(147), 
										chr(148), 
										chr(151),
										chr(167)); 				 
						$replace = array("'", 
										 "'", 
										 '"', 
										 '"', 
										 '-',
										 '&sect;'); 				 
						return str_replace($search, $replace, $string); 
					}					
				
				// Set Script Variables
				$DB_Host="localhost";
				$DB_Name="consor5_library";
				$DB_User="consor5";
				$DB_Pass="c0n$0r667";
				$Per_Page=10;

				// Open MySQL Connection
				$Connection=mysql_connect($DB_Host, $DB_User, $DB_Pass);
				$SQL="SELECT * FROM entries GROUP BY entries.id ORDER BY entries.id DESC LIMIT 25";

				// Run The Query With a Limit to get result
				$SQL_Result=mysql_db_query($DB_Name, $SQL);
				$SQL_Rows=mysql_num_rows($SQL_Result);

				// function to format mySQL DATE values
				function fixDate($val) {
				//split it up into components
				$arr = explode(" ", $val);
				$datearr = explode("-", $arr[0]);
				// create a timestamp with mktime(), format it with date() return
				date("d M Y", mktime(0, 0, 0, $datearr[1], $datearr[2], $datearr[0]));
				}

				echo "<table class=\"details\">";

				// Display Results using a for loop
				for ($a=0; $a < $SQL_Rows; $a++) {

					$slashesetc = array('\\\\\\', '\\\'', '\\"');
					$repslashesetc = array('', '\'', '&quot;');
					$SQL_Array = str_replace($slashesetc, $repslashesetc, mysql_fetch_array($SQL_Result));
					$title=trim(htmlentities($SQL_Array['title']));
					$id=$SQL_Array['id'];
					$first=trim(htmlentities($SQL_Array['first']));
					$last=trim(htmlentities($SQL_Array['last']));
					$pubdate=$SQL_Array['pubdate'];
					$month=$SQL_Array['month'];
					$day=$SQL_Array['day'];
					$year=$SQL_Array['year'];
					$link=$SQL_Array['link'];
					$source=trim(htmlentities($SQL_Array['source']));
					$sitename=trim(htmlentities($SQL_Array['sitename']));
					$abstract=convert_smart_quotes(trim($SQL_Array['abstract']));
					$postdate=$SQL_Array['postdate'];
					$atitle=trim(htmlentities($SQL_Array['atitle']));
					$first2=trim(htmlentities($SQL_Array['first2']));
					$last2=trim(htmlentities($SQL_Array['last2']));
					$first3=trim(htmlentities($SQL_Array['first3']));
					$last3=trim(htmlentities($SQL_Array['last3']));
					$first4=trim(htmlentities($SQL_Array['first4']));
					$last4=trim(htmlentities($SQL_Array['last4']));
					$first5=trim(htmlentities($SQL_Array['first5']));
					$last5=trim(htmlentities($SQL_Array['last5']));
					$first6=trim(htmlentities($SQL_Array['first6']));
					$last6=trim(htmlentities($SQL_Array['last6']));
					$first7=trim(htmlentities($SQL_Array['first7']));
					$last7=trim(htmlentities($SQL_Array['last7']));
					$cite=$SQL_Array['cite'];
					$added=$SQL_Array['added'];
					$terms=$SQL_Array['terms'];
					$added=$SQL_Array['added'];
					$convert = date("F j Y", strtotime($added));

					echo "\n\t\t\t\t<tr>\n\t\t\t\t<td class=\"aright\">Title: </td>\n\t\t\t\t";
					echo "<td class=\"aleft\">&quot;" . $title . "&quot;</td>\n\t\t\t\t</tr>\n\t\t\t\t";

					if ($first <> "" || $first2 <> "" || $first3 <> "" || $first4 <> "" || $first5 <> "" || $first6 <> "" || $first7 <> "") {
						echo "<tr>\n\t\t\t\t<td class=\"aright\">Author: </td>\n\t\t\t\t<td class=\"aleft\">";
						if ($first<> "") {
							echo "$first $last<br />";
						}
						if ($first2 <> "") {
							echo "$first2 $last2<br />";
						}
						if ($first3 <> "") {
							echo "$first3 $last3<br />";
						}
						if ($first4 <> "") {
							echo "$first4 $last4<br />";
						}
						if ($first5 <> "") {
							echo "$first5 $last5<br />";
						}
						if ($first6 <> "") {
							echo "$first6 $last6<br />";
						}
						if ($first7 <> "") {
							echo "$first7 $last7<br />";
						}
					}
					if ($first <> "" || $first2 <> "" || $first3 <> "" || $first4 <> "" || $first5 <> "" || $first6 <> "" || $first7 <> "") {
						echo "</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					}

					if ($source <>"") {
						echo "<tr>\n\t\t\t\t<td class=\"aright\">Source: </td>\n\t\t\t\t";
						echo "<td class=\"aleft\">$source</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					}

					echo "<tr>\n\t\t\t\t<td class=\"aright\">Publication Date: </td>\n\t\t\t\t";
					echo "<td class=\"aleft\">";
					if ($month<> "0") {
						echo "$month ";
					}
					if ($day<> "0") {
						echo "$day ";
					}
					if ($year<> "0") {
						echo "$year ";
					}
					echo "</td>\n\t\t\t\t</tr>\n\t\t\t\t";

					if($added<> "0000-00-00"){
						echo "<tr>\n\t\t\t\t<td class=\"aright\">Date Added: </td>\n\t\t\t\t<td class=\"aleft\">" . $convert . "</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					}

					echo "<tr>\n\t\t\t\t<td class=\"aright\">Free/Fee: </td>\n\t\t\t\t<td class=\"aleft\">";
						if($terms=="0") {
						echo "Free";
						}
						if ($terms=="1") {
						echo "Payment or membership required";
						}
					echo "</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					echo "<tr>\n\t\t\t\t<td class=\"aright\">Abstract: </td>\n\t\t\t\t<td class=\"aleft\">$abstract</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					echo "<tr>\n\t\t\t\t<td class=\"aright\">Link: </td>\n\t\t\t\t<td class=\"aleft\"><a href=\"$link\">Full Text</a></td>\n\t\t\t\t</tr>\n\t\t\t\t<tr><td colspan=\"2\"><div class=\"clear\"></div>\n\t\t\t\t<div class=\"hr\" style=\"margin: 0px;\"></div><hr /></td></tr>";
				}

				echo "</table>";

				// Close Database Connection
				mysql_close($Connection);
				?>

			</div>
		</div>
	</div>
	<!-- *********** -->
	<!--   FOOTER    -->
	<!-- *********** -->
	<?php include '../includes/footer.php'; ?>
</body>
</html>