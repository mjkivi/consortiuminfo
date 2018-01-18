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
<!-- ALTERNATE -->
<link rel="alternate stylesheet" type="text/css" href="/consortiuminfo2017/css/metalib_default.css" title="metalib_default" />
<link rel="alternate stylesheet" type="text/css" href="/consortiuminfo2017/css/metalib_large.css" title="metalib_large" />
<script type="text/javascript" src="/scripts/styleswitcher.js"></script>
<!-- ********* -->
<link rel="home" title="home" href="http://www.consortiuminfo.org" />
<style type="text/css" title="text/css" media="all">
</style>
</head>
<body id="bulletin">
	<!-- ****************** -->
	<!--   ACCESSIBILITY    -->
	<!-- ****************** -->
	<?php include 'includes/accessibility.php'; ?>
	
	<!-- ************* -->
	<!--   MASTHEAD    -->
	<!-- ************* -->
	<?php include 'includes/masthead.php'; ?>
	
	<!-- *********** -->
	<!--   BANNER    -->
	<!-- *********** -->
	<div id="banner">
		<!--   SEARCH FORM   -->
		<?php include 'includes/searchform.php'; ?>
	</div>
	
	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div id="mainbody">
	
		<!-- CONTENT CONTROL -->
		<?php include 'includes/contentcontrol.php'; ?>
		
		<!-- BREADCRUMBS -->	
		<!-- fixes inconsistent spacing (namely IE6) -->
		<p class="spacefix">&nbsp;</p>
		<p class="breadcrumbs">&gt; <a href="/metalibrary/old_metalibrary_files/redesign_v2_test/metalibrary_test2.php">MetaLibrary</a>
			<?php
			$db = mysql_connect("localhost", "consor5", "bgt667");
			$prevpid="";
			mysql_select_db("consor5_library", $db);
			$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE category.pid='".$_GET["PID"]."' ORDER BY parent.pname, child.sort, child.cname", $db);
			while ($myrow = mysql_fetch_array($result)) {
				$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) {
						echo " &gt; ".$myrow["pname"];
					}
				$prevpid=$curpid;
			}
			?>
		</p>
		<p class="spacefix">&nbsp;</p>
		
		<!-- CONTENT -->		
		<div id="content2">
			<!-- SKIP/START CONTENT LINK -->
			<a name="startcontent" id="startcontent"></a>
			
			<!-- BODY SIDE NAV -->
			<?php include 'includes/bodysidenav.php'; ?>
			
			<!-- BODY CONTENT AREA -->
			<div class="bodymain">
				<div class="hr" style="margin: -12px 0px 0px 20px;"></div><hr />
				
				<?php
				// Write headline
				$db = mysql_connect("localhost", "consor5", "bgt667");
				$prevpid="";
				mysql_select_db("consor5_library", $db);
				$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE category.pid='".$_GET["PID"]."' ORDER BY parent.pname, child.sort, child.cname", $db);
				while ($myrow = mysql_fetch_array($result)) {
					$curpid=$myrow["pid"];
						if ($curpid <> $prevpid) {
							echo "<h2>".$myrow["pname"]." (All Titles)</h2>";
						}
					$prevpid=$curpid;
				}
				?>
				
				<p class="selectnew">(<a href="/metalibrary/old_metalibrary_files/redesign_v2_test/metalibrary_test2.php">Select a New Topic or Category</a>)</p>
				<?php
				// Write sort options
				echo "<p class=\"sortoptions\"><strong>Sort Options:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>";
				echo "<a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/bycat_test2.php?PID=$PID\">By Author</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/bycattitle_test2.php?PID=$PID\">By Title</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/bycatdate_test2.php?PID=$PID\">By Date</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
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
				$DB_Pass="bgt667"; 
				$Per_Page=15; 
				// Open MySQL Connection 
				$Connection=mysql_connect($DB_Host, $DB_User, $DB_Pass); 
				// Run The Query Without a Limit to get Total result 
				$SQL="SELECT DISTINCT entries.id FROM (entries INNER JOIN lookup on entries.id = lookup.entry) WHERE lookup.pid='".$_GET["PID"]."' ORDER BY entries.last";           
				$SQL_Result=mysql_db_query($DB_Name, $SQL); 
				$SQL_Result_Array=mysql_fetch_array($SQL_Result); 
				$Total=mysql_num_rows($SQL_Result);
				$Result_Set=$_GET["Result_Set"];
				// Create a new SELECT Query with the ORDER BY clause and without the COUNT(*) 
				# echo "$Result_Set";
				// Append a LIMIT clause to the SQL statement 
				if (empty($Result_Set)) {
					echo "";
					$Result_Set=0;
				}
				$SQL="SELECT * FROM (entries INNER JOIN lookup on entries.id = lookup.entry) WHERE lookup.pid='".$_GET["PID"]."' GROUP BY entries.id ORDER BY entries.accessed DESC LIMIT $Result_Set, $Per_Page";
				// Run The Query With a Limit to get result 
				$SQL_Result=mysql_db_query($DB_Name, $SQL); 
				$SQL_Rows=mysql_num_rows($SQL_Result); 
				# echo "$SQL";
				// Display Results using a for loop 
				for ($a=0; $a < $SQL_Rows; $a++) {
				$SQL_Array=mysql_fetch_array($SQL_Result);
				$PID=$SQL_Array['pid'];
				$CID=$SQL_Array['cid'];
				$title=$SQL_Array['title'];
				$id=$SQL_Array['id'];
				$first=$SQL_Array['first'];
				$last=$SQL_Array['last'];
				$pubdate=$SQL_Array['pubdate'];
				$month=$SQL_Array['month'];
				$day=$SQL_Array['day'];
				$year=$SQL_Array['year'];
				$link=$SQL_Array['link'];
				$source=$SQL_Array['source'];
				$sitename=$SQL_Array['sitename'];
				$abstract=$SQL_Array['source'];
				$postdate=$SQL_Array['postdate'];
				$atitle=$SQL_Array['atitle'];
				$first2=$SQL_Array['first2'];
				$last2=$SQL_Array['last2'];
				$first3=$SQL_Array['first3'];
				$last3=$SQL_Array['last3'];
				$first4=$SQL_Array['first4'];
				$last4=$SQL_Array['last4'];
				$first5=$SQL_Array['first5'];
				$last5=$SQL_Array['last5'];
				$first6=$SQL_Array['first6'];
				$last6=$SQL_Array['last6'];
				$first7=$SQL_Array['first7'];
				$last7=$SQL_Array['last7'];
				$cite=$SQL_Array['cite'];
				echo "<p>";
				if ($cite=="1") { 	
					// echo "<img src='/metalibrary/old_metalibrary_files/redesign_v2_test/images/$cite.gif'> ";
					if ($last<>"") echo "<em>$last</em>";
					if ($first<>"") { 
						echo "<em>, $first</em>";
						if ($first2=="") echo ".";
					}
					if ($first2<> "") {
						if ($first3=="") echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first2 $last2</em>";
						if ($first3=="") echo ".";
					}
					if ($first3<> "") {
						if ($first4=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first3 $last3</em>";
						if ($first4=="") echo ".";	
					}
					if ($first4<> "") {
						if ($first5=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first4 $last4</em>";
						if ($first5=="") echo ".";	
					}
					if ($first5<> "") echo "<em> and $first5 $last5</em>";
					if ($first6<> "") echo "<em> and $first6 $last6</em>";
					if ($first7<> "") echo "<em> and $first7 $last7</em>";
					echo "&quot;$title.&quot; <em>$sitename.</em> ";
					if ($day<> "0") echo "<em>$day </em>";
					if ($month<> "") echo "<em>$month </em>";
					if ($year<> "") echo "<em>$year. </em>";
				}
				//Begin the citation style for the journal style
				elseif ($cite==2) {
					// echo "<img src='/metalibrary/old_metalibrary_files/redesign_v2_test/images/$cite.gif'> ";
					if ($last<>"") echo "<em>$last</em>";
					if ($first<>"") {
						echo "<em>, $first</em>";
						if ($first2=="") echo "."; 
					}
					if ($first2<> "") {
						if ($first3=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em>$first2 $last2</em>";
						if ($first3=="") echo ".";	
					}
					if ($first3<> "") {
						if ($first4=="")
						echo "<em> and </em>";
						else
						echo ", ";
						echo "<em> and $first3 $last3</em>";
						if ($first4=="") echo ".";
					}
					if ($first4<> "") echo "<em> and $first4 $last4</em>";
					if ($first5<> "") echo "<em> and $first5 $last5</em>";
					if ($first6<> "") echo "<em> and $first6 $last6</em>";
					if ($first7<> "") echo "<em> and $first7 $last7</em>";
					echo "&quot;$title.&quot; $source. ";
					if ($day<> "0") echo "<em>$day </em>";
					if ($month<> "") echo "<em>$month </em>";
					if ($year<> "") echo "<em>$year. </em>";
				}
				//Begin the style for the book style
				elseif ($cite==3) {						
					//echo "<img src='/metalibrary/old_metalibrary_files/redesign_v2_test/images/$cite.gif'> ";
					if ($last<>"") echo "<em>$last</em>";
					if ($first<>"") echo "<em>, $first</em>";
					if ($first2<> "") echo "<em>and $first2 $last2</em>";
					if ($first3<> "") echo "<em> and $first3 $last3</em>";
					if ($first4<> "") echo "<em> and $first4 $last4</em>";
					if ($first5<> "") echo "<em> and $first5 $last5</em>";
					if ($first7<> "") echo "<em> and $first7 $last7</em>";
					echo ". $title. $year $source. ";
				}
				//Begin the style for the article/chapter in book format
				elseif ($cite==4) {						
					//echo "<img src='/metalibrary/old_metalibrary_files/redesign_v2_test/images/$cite.gif'> ";
					if ($last<>"") echo "<em>$last</em>";
					if ($first<>"") echo "<em>, $first</em>";
					if ($first2<> "") echo "<em>and $first2 $last2</em>";
					if ($first3<> "") echo "<em> and $first3 $last3</em>";
					if ($first4<> "") echo "<em> and $first4 $last4</em>";
					if ($first5<> "") echo "<em> and $first5 $last5</em>";
					if ($first6<> "") echo "<em> and $first6 $last6</em>";
					if ($first7<> "") echo "<em> and $first7 $last7</em>";
					echo ".&quot;$title.&quot; <em>$source $year. </em>";
				}
				//Begin the formatting for the magazine style
				elseif ($cite==5) {						
					//echo "<img src='/metalibrary/old_metalibrary_files/redesign_v2_test/images/$cite.gif'> ";
					if ($last<>"") echo "<em>$last</em>";
					if ($last=="") echo "";
					if ($first<>"") echo "<em>, $first</em>";
					if ($first2<> "") echo "<em>and $first2 $last2</em>";
					if ($first3<> "") echo "<em> and $first3 $last3</em>";
					if ($first4<> "") echo "<em> and $first4 $last4</em>";
					if ($first5<> "") echo "<em> and $first5 $last5</em>";
					if ($first6<> "") echo "<em> and $first6 $last6</em>";
					if ($first7<> "") echo "<em> and $first7 $last7</em>";
					if ($last<> "") echo ".";
					echo "&quot;$title.&quot; $source";
				}
				//Begin the style for the government publication format
				elseif ($cite==6) {						
					//echo "<img src='/metalibrary/old_metalibrary_files/redesign_v2_test/images/$cite.gif'> ";
					if ($last<>"") echo "<em>$last</em>";
					if ($sitename<>"") echo "<em>, $sitename.</em>";
					echo ".&quot;$title.&quot; $source";
				}
				//Begin the style for a lecture or speech
				elseif ($cite==7) {						
					//echo "<img src='/metalibrary/old_metalibrary_files/redesign_v2_test/images/$cite.gif'> ";
					if ($last<>"") echo "<em>$last</em>,";
					if ($first<>"") echo "<em> $first</em>";
					if ($first2<> "") echo "<em>and $first2 $last2</em>";
					if ($first3<> "") echo "<em> and $first3 $last3</em>";
					if ($first4<> "") echo "<em> and $first4 $last4</em>";
					if ($first5<> "") echo "<em> and $first5 $last5</em>";
					if ($first6<> "") echo "<em> and $first6 $last6</em>";
					if ($first7<> "") echo "<em> and $first7 $last7</em>";
					echo "&quot;$title,&quot; $source ";
					if ($day<> "") echo "<em>$day </em>";
					if ($month<> "") echo "<em>$month </em>";
					if ($year<> "") echo "<em>$year </em>";
				}
				//Begin the else statement that give the link to the full abstract						
				else {
					echo "$cite";
				}
				echo "<br /><a href=\"/metalibrary/old_metalibrary_files/redesign_v2_test/out_test2.php?EID=$id&amp;PID=$PID&amp;ID=$CID\">View Full Entry</a>";
				echo "</p>\n";
				} //end of for statement
				if ($Total < 1) {
					echo "<p><strong>There are currently no books in this category.</strong></p>";
				}
				//there was one } here now it's gone.
				//echo "end of for loop";
				
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
					echo "<a href=\"bycataccess_test2.php?Result_Set=$Res1&amp;PID=$PID\">Previous Page</a> "; 
					// note: you hadn't done any \" at all, and also <;<; at previous didn;t seem to work either... 
					} 
					$Pages=$Total / $Per_Page; 
					if ($Pages>1) { 
						for ($b=0,$c=1; $b < $Pages; $b++,$c++) {
							$Res1=$Per_Page * $b; 
							echo "<a href=\"bycataccess_test2.php?Result_Set=$Res1&amp;PID=$PID\"";
							if ($c == $Result_Set/15 + 1) echo " id=\"prevnexton\"";
							echo ">$c</a>\n";
						} //end of for loop
					}
					if ($Result_Set>=0 && $Result_Set<$Total) {
						$Res1=$Result_Set+$Per_Page; 
						if ($Res1<$Total) { 
							echo "<a href=\"bycataccess_test2.php?Result_Set=$Res1&amp;PID=$PID\">Next Page</a>";
							echo "</p>";
						} else echo "</p>";
					}
				} //end of total > 0
				
				// Close Database Connection 
				mysql_close($Connection); 
				?>
				
			</div>
		</div>
	</div>
	<!-- *********** -->
	<!--   FOOTER    -->
	<!-- *********** -->
	<?php include 'includes/footer.php'; ?>
</body>
</html>