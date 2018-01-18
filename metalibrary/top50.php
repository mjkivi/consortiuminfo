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
			<p><a href="/">Home</a> &gt; <a href="index.php">MetaLibrary</a> &gt; Top 50 List</p>
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

				<h3 style="text-align:left">50 Most Accessed MetaLibrary Articles</h3>
				<div class="clear"></div>
				<div class="hr" style="margin: -8px 0px 0px 20px;"></div><hr />
				<?php
				// Set Script Variables
				$DB_Host="localhost";
				$DB_Name="consor5_library";
				$DB_User="consor5";
				$DB_Pass="c0n$0r667";
				$Per_Page=10;
				// Open MySQL Connection
				$Connection=mysql_connect($DB_Host, $DB_User, $DB_Pass);

				$SQL="SELECT * FROM entries GROUP BY entries.id ORDER BY entries.accessed DESC LIMIT 50";

				// Run The Query With a Limit to get result
				$SQL_Result=mysql_db_query($DB_Name, $SQL);
				$SQL_Rows=mysql_num_rows($SQL_Result);
				#echo "$SQL";
				// function to format mySQL DATE values
				function fixDate($val)
				{
				//split it up into components
				$arr = explode(" ", $val);
				$datearr = explode("-", $arr[0]);
				// create a timestamp with mktime(), format it with date() return
				date("d M Y", mktime(0, 0, 0, $datearr[1], $datearr[2], $datearr[0]));
				}
				// Display Results using a for loop
				for ($a=0; $a < $SQL_Rows; $a++) {

				$slashesetc = array('\\\\\\', '\\\'', '\\"');
				$repslashesetc = array('', '\'', '&quot;');

				$SQL_Array = str_replace($slashesetc, $repslashesetc, mysql_fetch_array($SQL_Result));

				$PID=$SQL_Array['pid'];
				$CID=$SQL_Array['cid'];
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
				$abstract=trim(htmlentities($SQL_Array['source']));
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
				$accessed=$SQL_Array['accessed'];
				echo "<p>";
				if ($cite=="1") {
					// echo "<img src='/metalibrary/images/$cite.gif'> ";
					if ($last) { echo "<em>$last</em>";}
					if ($first) {
						if (!$last) {
							echo "<em>$first</em>";
						} else {
							echo "<em>, $first</em>";
						}
						if ($first2=="") { echo ",";}
					}
					if ($first2) {
						if ($first3=="") echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first2 $last2</em>";
						if ($first3=="") echo ",";
					}
					if ($first3) {
						if ($first4=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first3 $last3</em>";
						if ($first4=="") echo ",";
					}
					if ($first4) {
						if ($first5=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first4 $last4</em>";
						if ($first5=="") echo ",";
					}
					if ($first5) {
						if ($first6=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first5 $last5</em>";
						if ($first6=="") echo ",";
					}
					if ($first6) {
						if ($first7=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first6 $last6</em>";
						if ($first7=="") echo ",";
					}
					if ($first7) echo "<em> and $first7 $last7</em>";
					if ($title) { echo " &quot;$title,&quot; ";} 
					if ($sitename) { echo " <em>$sitename,</em> ";}
					if ($day<> "0") echo " $day";
					if ($month) echo " $month";
					if ($year) echo " $year";
				}
				//Begin the citation style for the journal style
				elseif ($cite==2) {
					// echo "<img src='/metalibrary/images/$cite.gif'> ";
					if ($last) echo "<em>$last</em>";
					if ($first) {
						echo "<em>, $first</em>";
						if ($first2=="") echo ", ";
					}
					if ($first2) {
						if ($first3=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first2 $last2</em>";
						if ($first3=="") echo ", ";
					}
					if ($first3) {
						if ($first4=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em> and $first3 $last3</em>";
						if ($first4=="") echo ", ";
					}
					if ($first4) {
						if ($first5=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first4 $last4</em>";
						if ($first5=="") echo ",";
					}
					if ($first5) {
						if ($first6=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first5 $last5</em>";
						if ($first6=="") echo ",";
					}					
					if ($first6) {
						if ($first7=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first6 $last6</em>";
						if ($first7=="") echo ",";
					}
					if ($first7) echo "<em> and $first7 $last7</em>";
					if ($title) { echo " &quot;$title,&quot; ";}
					if ($source) { echo " <em>$source,</em>";}
					if ($day<> "0") echo " $day";
					if ($month) echo " $month";
					if ($year) echo " $year";
				}
				//Begin the style for the book style
				elseif ($cite==3) {
					//echo "<img src='/metalibrary/images/$cite.gif'> ";
					if ($last) echo "<em>$last</em>";
					if ($first) echo "<em>, $first</em>";
					if ($first2) echo "<em> and $first2 $last2</em>";
					if ($first3) echo "<em> and $first3 $last3</em>";
					if ($first4) echo "<em> and $first4 $last4</em>";
					if ($first5) echo "<em> and $first5 $last5</em>";
					if ($first7) echo "<em> and $first7 $last7</em>";
					if ($title) { echo ", &quot;$title,&quot; ";}
					if ($year) { echo "$year";}
					if ($source) { echo ", <em>$source</em>";}					
					//echo ", $title. $year $source. ";
				}
				//Begin the style for the article/chapter in book format
				elseif ($cite==4) {
					//echo "<img src='/metalibrary/images/$cite.gif'> ";
					if ($last) echo "<em>$last</em>";
					if ($first) echo "<em>, $first</em>";
					if ($first2) echo "<em> and $first2 $last2</em>";
					if ($first3) echo "<em> and $first3 $last3</em>";
					if ($first4) echo "<em> and $first4 $last4</em>";
					if ($first5) echo "<em> and $first5 $last5</em>";
					if ($first6) echo "<em> and $first6 $last6</em>";
					if ($first7) echo "<em> and $first7 $last7</em>";
					if ($title) { echo ", &quot;$title,&quot; ";}
					if ($year) { echo "$year";}
					if ($source) { echo ", <em>$source</em>";}					
					//echo ", $title. $year $source. ";
				}
				//Begin the formatting for the magazine style
				elseif ($cite==5) {
					//echo "<img src='/metalibrary/images/$cite.gif'> ";
					if ($last) echo "<em>$last</em>";
					if ($last=="") echo "";
					if ($first) echo "<em>, $first</em>";
					if ($first2) echo "<em> and $first2 $last2</em>";
					if ($first3) echo "<em> and $first3 $last3</em>";
					if ($first4) echo "<em> and $first4 $last4</em>";
					if ($first5) echo "<em> and $first5 $last5</em>";
					if ($first6) echo "<em> and $first6 $last6</em>";
					if ($first7) echo "<em> and $first7 $last7</em>";
					if ($last<> "") echo ",";
					if ($title) { echo " &quot;$title,&quot; ";}
					if ($source) { echo "<em>$source</em>";}						
					//echo "&quot;$title.&quot; $source";
				}
				//Begin the style for the government publication format
				elseif ($cite==6) {
					//echo "<img src='/metalibrary/images/$cite.gif'> ";
					if ($last) echo "<em>$last</em>";
					if ($sitename) echo "<em>, $sitename.</em>";
					if ($title) { echo ", &quot;$title,&quot; ";}
					if ($source) { echo "<em>$source</em>";}											
					//echo ".&quot;$title.&quot; $source";
				}
				//Begin the style for a lecture or speech
				elseif ($cite==7) {
					//echo "<img src='/metalibrary/images/$cite.gif'> ";
					if ($last) echo "<em>$last</em>,";
					if ($first) echo "<em> $first</em>";
					if ($first2) echo "<em> and $first2 $last2</em>";
					if ($first3) echo "<em> and $first3 $last3</em>";
					if ($first4) echo "<em> and $first4 $last4</em>";
					if ($first5) echo "<em> and $first5 $last5</em>";
					if ($first6) echo "<em> and $first6 $last6</em>";
					if ($first7) echo "<em> and $first7 $last7</em>";
					if ($title) { echo ", &quot;$title,&quot; ";}
					if ($source) { echo "<em>$source</em>";}
					//echo "&quot;$title,&quot; $source ";
					if ($day) echo ", $day";
					if ($month) echo " $month";
					if ($year) echo " $year";
				}
				//Begin the else statement that give the link to the full abstract
				else
				{
				echo "$cite";
				}
				if
				($accessed > 1){
				echo " <em>[Accessed $accessed times]</em>";
				}

				// I don't know why but the old redirect page was accessing a different part of the database??
				echo "<br /><a href='/metalibrary/out2.php?EID=$id'>View Abstract</a>";
				echo "</p>\n";
				}//end of for statement

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