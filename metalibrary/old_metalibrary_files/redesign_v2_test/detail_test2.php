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
			$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE cid='".$_GET["ID"]."' AND category.pid='".$_GET["PID"]."' ORDER BY parent.pname, child.sort, child.cname", $db);
			while ($myrow = mysql_fetch_array($result)) {
				$curpid=$myrow["pid"];
					if ($curpid <> $prevpid) { 
						echo " &gt; <a href=\"http://www.consortiuminfo.org/metalibrary/old_metalibrary_files/redesign_v2_test/bycat_test2.php?PID=".$_GET["PID"]."\">".$myrow["pname"]."</a>";
						echo " &gt; <a href=\"http://www.consortiuminfo.org/metalibrary/old_metalibrary_files/redesign_v2_test/cats_test2.php?PID=".$_GET["PID"]."&amp;ID=".$_GET["ID"]."\">".$myrow["cname"]."</a>";
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
				// Write headline and subhead
				$db = mysql_connect("localhost", "consor5", "bgt667");
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
				
				<p class="selectnew" style="margin-bottom:3px;">(<a href="/metalibrary/old_metalibrary_files/redesign_v2_test/metalibrary_test2.php">Select a New Topic or Category</a>)</p>
				
				<div class="clear"></div>
				<div class="hr" style="margin: 0px 0px 0px 20px;"></div><hr />
					
				<?php 
				// Write full entry
				// Set Script Variables 
				$DB_Host="localhost"; 
				$DB_Name="consor5_library"; 
				$DB_User="consor5"; 
				$DB_Pass="bgt667"; 
				$Per_Page=10; 
				// Open MySQL Connection 
				$Connection=mysql_connect($DB_Host, $DB_User, $DB_Pass); 
				// Create a new SELECT Query with the 
				// ORDER BY clause and without the COUNT(*) 
				# echo "$Result_Set";
				// Append a LIMIT clause to the SQL statement 
				$SQL="SELECT * FROM entries WHERE entries.id='".$_GET["EID"]."'";
				// Run The Query With a Limit to get result 
				$SQL_Result=mysql_db_query($DB_Name, $SQL); 
				$SQL_Rows=mysql_num_rows($SQL_Result); 
				#echo "$SQL";
				// Display Results using a for loop 
				for ($a=0; $a < $SQL_Rows; $a++) {
				$SQL_Array=mysql_fetch_array($SQL_Result);
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
				$abstract=$SQL_Array['abstract'];
				$postdate=$SQL_Array['postdate'];
				$atitle=$SQL_Array['atitle'];
				$first2=$SQL_Array['first2'];
				$last2=$SQL_Array['last2'];
				$atitle2=$SQL_Array['atitle2'];
				$first3=$SQL_Array['first3'];
				$last3=$SQL_Array['last3'];
				$atitle3=$SQL_Array['atitle3'];
				$first4=$SQL_Array['first4'];
				$last4=$SQL_Array['last4'];
				$atitle4=$SQL_Array['atitle4'];
				$first5=$SQL_Array['first5'];
				$last5=$SQL_Array['last5'];
				$atitle5=$SQL_Array['atitle5'];
				$first6=$SQL_Array['first6'];
				$last6=$SQL_Array['last6'];
				$atitle6=$SQL_Array['atitle6'];
				$first7=$SQL_Array['first7'];
				$last7=$SQL_Array['last7'];
				$atitle7=$SQL_Array['atitle7'];
				$cite=$SQL_Array['cite'];
				$ref=$SQL_Array['ref'];
				$accessed=$SQL_Array['accessed'];
				$terms=$SQL_Array['terms'];
				$institution=$SQL_Array['institution'];
				$amo=$SQL_Array['amo'];
				$aday=$SQL_Array['aday'];
				$ayear=$SQL_Array['ayear'];
				echo "<table class=\"details\">\n\t\t\t\t<tr>\n\t\t\t\t<td class=\"aright\">Title: </td>\n\t\t\t\t";
				echo "<td class=\"aleft\">&quot;$title&quot;</td>\n\t\t\t\t</tr>\n\t\t\t\t";
				//	if
				//($last <> "") {
				//	echo "<span class='style1'>$last,</span>";
					if ($first <> "" || $first2 <> "" || $first3 <> "" || $first4 <> "" || $first5 <> "" || $first6 <> "" || $first7 <> "") {
						echo "<tr>\n\t\t\t\t<td class=\"aright\">";
						if ($last2=="") {
							echo "Author: ";
						}
						if ($last2 <> "") {
							echo "Authors: ";
						}
						echo "</td>\n\t\t\t\t";
						echo "<td class=\"aleft\">$first $last <em>$atitle</em>";
					}
				
					if ($first2 <> "") {
						echo "<br />$first2 $last2 <em>$atitle2</em>";
					}
					
					if ($first3 <> "") { 
						echo "<br />$first3 $last3 <em>$atitle3</em>";
					}	
					
					if ($first4 <> "") { 
						echo "<br />$first4 $last4 <em>$atitle4</em>";
					}	
					
					if ($first5 <> "") { 
						echo "<br />$first5 $last5 <em>$atitle5</em>";
					}
				
					if ($first6 <> "") { 
						echo "<br />$first6 $last6 <em>$atitle6</em>";
					}
				
					if ($first7 <> "") { 
						echo "<br />$first7 $last7 <em>$atitle7</em>";
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
					
					//////////// TEST THIS
					echo "</td>\n\t\t\t\t</tr>\n\t\t\t\t";
				
					if ($terms=="0") {
						echo "<tr>\n\t\t\t\t<td class=\"aright\">Free/Fee: </td>\n\t\t\t\t";
						echo "<td class=\"aleft\">Free Access</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					}
				
					if ($terms=="1") {
						echo "<tr>\n\t\t\t\t<td class=\"aright\">Free/Fee: </td>\n\t\t\t\t";
						echo "<td class=\"aleft\">Payment or membership required</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					}
				
					echo "<tr>\n\t\t\t\t<td class=\"aright\">Reads: </td>\n\t\t\t\t";
					echo "<td class=\"aleft\">$accessed</td>\n\t\t\t\t</tr>\n\t\t\t\t";
					
					echo "<tr>\n\t\t\t\t<td class=\"aright\">Abstract: </td>\n\t\t\t\t";
					echo "<td class=\"aleft\">$abstract</td>\n\t\t\t\t</tr>\n\t\t\t\t";
				
					if ($link <> "") {
						echo "<tr>\n\t\t\t\t<td class=\"aright\">Link: </td>\n\t\t\t\t";
						echo "<td class=\"aleft\"><a href='$link'>Full Text</a></td>\n\t\t\t\t</tr>\n\t\t\t\t";
					}
				
					echo "</table>";
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
	<?php include 'includes/footer.php'; ?>
</body>
</html>