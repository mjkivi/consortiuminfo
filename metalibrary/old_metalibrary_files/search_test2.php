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
			<p><a href="/">Home</a> &gt; <a href="metalibrary_test2.php">MetaLibrary</a> &gt; Search Results</p>
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
				<p style="margin-bottom:5px"><strong>Search results for: <?php echo "$SEARCH"; ?></strong></p>
				
				<div class="clear"></div>
				<div class="hr" style="margin: -8px 0px 0px 20px;"></div><hr />
				
				<?php
				$host='localhost';   // Hostname of MySQL server
				$dbUser='consor5';    // Username for MySQL
				$dbPass='bgt667';    // Password for user
				$dbName='consor5_library'; // Database name
				
				// Make connection to MySQL server
				if (!$dbConn = mysql_connect($host, $dbUser, $dbPass)) {
					trigger_error('Could not connect to server: '.mysql_error());
					die ();
				}
				
				// Select the database
				if ( !mysql_select_db($dbName) ) {
					trigger_error ('Could not select database: '.mysql_error());
					die ();
				}
				
				// Select only those rows that match
				// $sql="SELECT * FROM books WHERE MATCH (TITLE,DESCR,AUTHOR) AGAINST ('XML')";
				
				// Select all rows but display relvance
				$sql="SELECT
						*, MATCH (title,abstract,first,last) 
					  AGAINST
						('$SEARCH')
					  AS
						score
					  FROM
						entries
					  ORDER BY score DESC";
				
				// Run the query, identifying the connection
				$queryResource=mysql_query($sql,$dbConn);
				
				// Fetch rows from MySQL one at a time
				while ($row=mysql_fetch_array($queryResource,MYSQL_ASSOC)) {
					if ($row["score"]>=1) { 
						echo "<p style=\"margin-bottom:20px;\">";
						echo ( "<strong>Title:</strong> <a href=\"/metalibrary/out2_test2.php?EID=".$row['id']."\">".$row['title']."</a><br />" );
						echo ( "<strong>Author:</strong> ".$row['last'].", ".$row['first']."<br />" );
						echo ( "<strong>Description:</strong> ");
						echo str_replace($SEARCH, "<strong>" .$SEARCH . "</strong>", $row['abstract']);
						echo ( "<br />");
						// echo ( "<strong>Score:</strong> ".$row['score']."<br />" );
						echo "</p>\n";
					}
				}
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