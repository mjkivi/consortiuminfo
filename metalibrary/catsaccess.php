<?php
$PID =  $_GET["PID"];
$ID =  $_GET["ID"];
?>
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
		<!--   SEARCH FORM   -->
		<?php include 'includes/searchform_meta.php'; ?>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div id="mainbody">

		<!-- BREADCRUMBS -->
		<p class="breadcrumbs">&gt; <a href="/metalibrary/index.php">MetaLibrary</a>
			<?php
			$db = mysql_connect("localhost", "root", "root");
			$prevpid="";
			mysql_select_db("consor5_library", $db);
			$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE cid='".$_GET["ID"]."' AND category.pid='".$_GET["PID"]."' ORDER BY parent.pname, child.sort, child.cname", $db);
			while ($myrow = mysql_fetch_array($result)) {
				$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo " &gt; <a href=\"http://www.consortiuminfo.org/metalibrary/bycat.php?PID=".$_GET["PID"]."\">".$myrow["pname"]."</a>";
						if ($myrow["cid"] == "8") {
							echo " &gt; Antitrust (see also \"<a href=\"http://www.consortiuminfo.org/metalibrary/bycat.php?PID=8\">Litigation and Legal Issues</a>\")";
						} elseif ($myrow["cid"] == "29") {
							echo " &gt; IPR Policies (see also \"<a href=\"http://www.consortiuminfo.org/metalibrary/bycat.php?PID=8\">Litigation and Legal Issues</a>\")";
						} elseif ($myrow["cid"] == "33") {
							echo " &gt; Antitrust (see also \"<a href=\"http://www.consortiuminfo.org/metalibrary/bycat.php?PID=3\">Economics</a>\")";
						} elseif ($myrow["cid"] == "34") {
							echo " &gt; Intellectual Property Rights (see also \"<a href=\"http://www.consortiuminfo.org/metalibrary/bycat.php?PID=7\">separate category of the same name</a>\")";
						} else {
							echo " &gt; ".$myrow["cname"];
						}
					}
				$prevpid=$curpid;
			}
			?>
		</p>

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
				<div class="hr" style="margin: -12px 0px 0px 20px;"></div><hr />
				<?php
				// Write headline and subhead
				$db = mysql_connect("localhost", "root", "root");
				$prevpid="";
				mysql_select_db("consor5_library", $db);
				$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE cid='".$_GET["ID"]."' AND category.pid='".$_GET["PID"]."' ORDER BY parent.pname, child.sort, child.cname", $db);
				while ($myrow = mysql_fetch_array($result)) {
					$wlink=$myrow["wik"];
					$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo "<h2>".$myrow["pname"]."</h2>";
					}
					echo "<h3>".$myrow["cname"]."</h3>";
					if ($wlink <>"") {
						echo "<p>For more information, see: <a href=\"".$myrow["wik"]."\" target=\"_blank\">Wikipedia ".$myrow["cname"]." Entry</a></p>";
					}
					$prevpid=$curpid;
				}
				?>
				<p class="selectnew">(<a href="/metalibrary/index.php">Select a New Topic or Category</a>)</p>
				<?php
				// Write sort options
				echo "<p class=\"sortoptions\"><strong>Sort Options:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>";
				echo "<a href=\"/metalibrary/cats.php?PID=$PID&amp;ID=$ID\">By Author</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href=\"/metalibrary/catstitle.php?PID=$PID&amp;ID=$ID\">By Title</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href=\"/metalibrary/catsdate.php?PID=$PID&amp;ID=$ID\">By Date</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "By # Times Accessed</p>";
				?>
				<div class="clear"></div>
				<div class="hr" style="margin: 0px 0px 0px 20px;"></div><hr />
				<?php
				// Write list of entries and next-previous links
				// Set Script Variables
				$DB_Host="localhost";
				$DB_Name="consor5_library";
				$DB_User="consor5";
				$DB_Pass="c0n$0r667";
				$Per_Page=15;
				// Open MySQL Connection
				$Connection=mysql_connect($DB_Host, $DB_User, $DB_Pass);
				// Run The Query Without a
				// Limit to get Total result
				$SQL="SELECT COUNT(*) AS Total FROM (entries INNER JOIN lookup on entries.id = lookup.entry) WHERE lookup.cid='".$_GET["ID"]."' AND lookup.pid='".$_GET["PID"]."'";
				$SQL_Result=mysql_db_query($DB_Name, $SQL);
				$SQL_Result_Array=mysql_fetch_array($SQL_Result);
				$Total=$SQL_Result_Array['Total'];
				$Result_Set=$_GET["Result_Set"];
				if ($Total < 1) {
					echo "<p><strong>There are currently no articles in this category.</strong></p>";
				}
				// Create a new SELECT Query with the
				// ORDER BY clause and without the COUNT(*)
				# echo "$Result_Set";
				// Append a LIMIT clause to the SQL statement
				if (empty($Result_Set)) {
					echo "";
				   $Result_Set=0;
				}
				$SQL="SELECT * FROM (entries INNER JOIN lookup on entries.id = lookup.entry) WHERE lookup.cid='".$_GET["ID"]."' and lookup.pid='".$_GET["PID"]."' ORDER BY entries.accessed DESC LIMIT $Result_Set, $Per_Page";
				// Run The Query With a Limit to get result
				$SQL_Result=mysql_db_query($DB_Name, $SQL);
				$SQL_Rows=mysql_num_rows($SQL_Result);
				#echo "$SQL";
				// Display Results using a for loop
				for ($a=0; $a < $SQL_Rows; $a++) {
				$slashesetc = array('\\\\\\', '\\\'', '\\"');
				$repslashesetc = array('', '\'', '&quot;');
				$SQL_Array = str_replace($slashesetc, $repslashesetc, mysql_fetch_array($SQL_Result));
				$PID=$SQL_Array['pid'];
				$CID=$SQL_Array['cid'];
				$id=$SQL_Array['id'];
				$title=trim(htmlentities($SQL_Array['title']));
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
				$accessed=$SQL_Array['accessed'];
				echo "<p style=\"text-align:left;\">";
				//Begin if statements
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
					#if
					#($PRICE > 0) {
					#echo "<strong>Price:</strong> $PRICE<p><p><p>";
					#}
					echo "<br /><a href=\"/metalibrary/out.php?EID=$id&amp;PID=$PID&amp;ID=$CID\">View Full Entry</a><span style='color: #fff;'>$cite</span>";
					echo "</p>\n";
					if ($Total < 1) {
						echo "<p><strong>There are currently no books in this category.</strong></p>";
					}
				}

				// Create Next / Prev Links and $Result_Set Value
				if ($Result_Set=="0") {
					echo "<p class=\"prevnext\">";
				}
				if ($Total>0) {
					// Calculate and Display Page # Links
					if ($Result_Set<>"0") {
						echo "<p class=\"prevnext\">";
					}
					if ($Result_Set<$Total && $Result_Set>0) {
					$Res1=$Result_Set-$Per_Page;
						echo "<a href=\"catsaccess.php?Result_Set=$Res1&amp;PID=$PID&amp;ID=$CID\">Previous Page</a> ";
						// note: you hadn't done any \" at all, and also <;<; at previous didn;t seem to work either...
					}
					$Pages=$Total / $Per_Page;
					if ($Pages>1) {
						for ($b=0,$c=1; $b < $Pages; $b++,$c++) {
							$Res1=$Per_Page * $b;
							echo "<a href=\"catsaccess.php?Result_Set=$Res1&amp;PID=$PID&amp;ID=$CID\"";
							if ($c == $Result_Set/15 + 1) echo " id=\"prevnexton\"";
							echo ">$c</a>\n";
						} //end of for loop
					}
					if ($Result_Set>=0 && $Result_Set<$Total) {
					$Res1=$Result_Set+$Per_Page;
						if ($Res1<$Total) {
							echo " <a href=\"catsaccess.php?Result_Set=$Res1&amp;PID=$PID&amp;ID=$CID\">Next Page</a>";
							echo "</p>";
						} else echo "</p>";
					}
				}

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