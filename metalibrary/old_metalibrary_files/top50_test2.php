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
<!-- <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="atom.php" /> -->
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
		<div class="left">
			<p><a href="/">Home</a> &gt; <a href="metalibrary_test2.php">MetaLibrary</a> &gt; Top 50 List</p>
		</div>
		<!--   SEARCH FORM   -->
		<?php include 'includes/searchform.php'; ?>
	</div>
	
	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div id="mainbody">
	
		<!-- CONTENT CONTROL -->
		<?php include 'includes/contentcontrol.php'; ?>
		
		<!-- CONTENT -->		
		<div id="content2">
			<!-- SKIP/START CONTENT LINK -->
			<a name="startcontent" id="startcontent"></a>
			
			<!-- fixes inconsistent spacing (namely IE6) -->
			<p class="spacefix" style="font-size:12px;">&nbsp;</p>
			
			<!-- BODY SIDE NAV -->
			<?php include 'includes/bodysidenav.php'; ?>
			
			<!-- BODY CONTENT AREA -->
			<div class="bodymain">
				<h3 style="text-align:left">50 Most Accessed MetaLibrary Articles</h3>
				
				<div class="clear"></div>
				<div class="hr" style="margin: -8px 0px 0px 20px;"></div><hr />
				
				<?php 
				// Set Script Variables 
				$DB_Host="localhost"; 
				$DB_Name="consor5_library"; 
				$DB_User="consor5"; 
				$DB_Pass="bgt667"; 
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
				for ($a=0; $a < $SQL_Rows; $a++) 
				{ 
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
				$abstract=$SQL_Array['abstract'];
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
				$added=$SQL_Array['added'];
				$terms=$SQL_Array['terms'];
				$accessed=$SQL_Array['accessed'];
				
				if ($cite=="1") { 	
				echo "\t\t\t\t<p>";
				if($last<>"") echo "<em>$last</em>";
				if($first<>"") {
				echo "<em>, $first</em>";
				if($first2=="")
				echo ".";		
				}
				if($first2<> ""){
				if($first3=="")
				echo "<em> and </em>";
				else
				echo ", ";
				echo "<em>$first2 $last2</em>";
				if($first3=="")
				echo ".";				
				}
				
				if($first3<> ""){
				if($first4=="")
				echo "<em> and </em>";
				else
				echo ", ";
				echo "<em>$first3 $last3</em>";
				if($first4=="")
				echo ".";	
				}
				
				if($first4<> ""){
				if($first5=="")
				echo "<em> and </em>";
				else
				echo ", ";
				echo "<em>$first4 $last4</em>";
				if($first5=="")
				echo ".";	
				}
					
				if($first5<> "")
				echo "<em> and $first5 $last5</em>";
				
				if($first6<> "")
				echo "<em> and $first6 $last6</em>";
				
				if($first7<> "")
				echo "<em> and $first7 $last7</em>";
				
				echo " &quot;$title.&quot; <em>$sitename.</em> ";
				
				if($day<> "0")
				echo "<em>$day </em>";
				
				if($month<> "")
				echo "<em>$month </em>";
				
				
				if($year<> "")
				echo "<em>$year. </em>";
				
				}
				//Begin the citation style for the journal style
				elseif
				($cite==2)
				{
				echo "\t\t\t\t<p>";
				if($last<>"")
				echo "<em>$last</em>";
				
				if($first<>""){
				echo "<em>, $first</em>";
				if($first2=="")
				echo ".";		
				}
				if($first2<> ""){
				if($first3=="")
				echo "<em> and </em>";
				else
				echo ", ";
				echo "<em>$first2 $last2</em>";
				if($first3=="")
				echo ".";	
				}
				
				if($first3<> ""){
				if($first4=="")
				echo "<em> and </em>";
				else
				echo ", ";
				echo "<em> and $first3 $last3</em>";
				if($first4=="")
				echo ".";	
				}
				
				if($first4<> "")
				echo "<em> and $first4 $last4</em>";
					
				if($first5<> "")
				echo "<em> and $first5 $last5</em>";
				
				if($first6<> "")
				echo "<em> and $first6 $last6</em>";
				
				if($first7<> "")
				echo "<em> and $first7 $last7</em>";
				
				echo " &quot;$title.&quot; $source. ";
				
				if($day<> "0")
				echo "<em>$day </em>";
				
				if($month<> "")
				echo "<em>$month </em>";
				
				
				if($year<> "")
				echo "<em>$year. </em>";
				
				}
				//Begin the style for the book style
				elseif
				($cite==3)
				{						
				//echo "<img src='/metalibrary/images/$cite.gif'> ";
				if($last<>"")
				echo "\t\t\t\t<p><em>$last</em>";
				
				if($first<>"")
				echo "<em>, $first</em>";
				
				
				if($first2<> "")
				echo "<em>and $first2 $last2</em>";
				
				if($first3<> "")
				echo "<em> and $first3 $last3</em>";
				
				if($first4<> "")
				echo "<em> and $first4 $last4</em>";
					
				if($first5<> "")
				echo "<em> and $first5 $last5</em>";
				
				if($first6<> "")
				echo "<em> and $first6 $last6</em>";
				
				if($first7<> "")
				echo "<em> and $first7 $last7</em>";
				
				echo ". $title. $year $source. ";
				
				}
				//Begin the style for the article/chapter in book format
				elseif
				($cite==4)
				{						
				//echo "<img src='/metalibrary/images/$cite.gif'> ";
				if($last<>"")
				echo "\t\t\t\t<p><em>$last</em>";
				
				if($first<>"")
				echo "<em>, $first</em>";
				
				
				if($first2<> "")
				echo "<em>and $first2 $last2</em>";
				
				if($first3<> "")
				echo "<em> and $first3 $last3</em>";
				
				if($first4<> "")
				echo "<em> and $first4 $last4</em>";
					
				if($first5<> "")
				echo "<em> and $first5 $last5</em>";
				
				if($first6<> "")
				echo "<em> and $first6 $last6</em>";
				
				if($first7<> "")
				echo "<em> and $first7 $last7</em>";
				
				echo ". &quot;$title.&quot; <em>$source $year. </em>";
				
				}
				//Begin the formatting for the magazine style
				elseif
				($cite==5)
				{						
				//echo "<img src='/metalibrary/images/$cite.gif'> ";
				if($last<>"")
				echo "\t\t\t\t<p><em>$last</em>";
				if($last=="")
				echo "\t\t\t\t<p>";
				
				if($first<>"")
				echo "<em>, $first</em>";
				
				
				if($first2<> "")
				echo "<em>and $first2 $last2</em>";
				
				if($first3<> "")
				echo "<em> and $first3 $last3</em>";
				
				if($first4<> "")
				echo "<em> and $first4 $last4</em>";
					
				if($first5<> "")
				echo "<em> and $first5 $last5</em>";
				
				if($first6<> "")
				echo "<em> and $first6 $last6</em>";
				
				if($first7<> "")
				echo "<em> and $first7 $last7</em>";
				
				if($last<> "")
				echo ".";
				
				echo " &quot;$title.&quot; $source";
				
				}
				//Begin the style for the government publication format
				elseif
				($cite==6)
				{						
				//echo "<img src='/metalibrary/images/$cite.gif'> ";
				if($last<>"")
				echo "\t\t\t\t<p><em>$last</em>";
				
				if($sitename<>"")
				echo "<em>, $sitename.</em>";
				
				echo ". &quot;$title.&quot; $source";
				
				}
				//Begin the style for a lecture or speech
				elseif
				($cite==7)
				{						
				//echo "<img src='/metalibrary/images/$cite.gif'> ";
				
				if($last<>"")
				echo "\t\t\t\t<p><em>$last</em>,";
				
				if($first<>"")
				echo "<em> $first</em>";
				
				if($first2<> "")
				echo "<em>and $first2 $last2</em>";
				
				if($first3<> "")
				echo "<em> and $first3 $last3</em>";
				
				if($first4<> "")
				echo "<em> and $first4 $last4</em>";
					
				if($first5<> "")
				echo "<em> and $first5 $last5</em>";
				
				if($first6<> "")
				echo "<em> and $first6 $last6</em>";
				
				if($first7<> "")
				echo "<em> and $first7 $last7</em>";
				
				echo " &quot;$title,&quot; $source ";
				
				if($day<> "")
				echo "<em>$day </em>";
				
				if($month<> "")
				echo "<em>$month </em>";
				
				if($year<> "")
				echo "<em>$year </em>";
				
				
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
				echo "<br /><a href='/metalibrary/out2_test2.php?EID=$id'>View Abstract</a>";
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
	<?php include 'includes/footer.php'; ?>
</body>
</html>