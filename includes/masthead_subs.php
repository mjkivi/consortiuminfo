<div id="masthead">
		<div id="mastnav">
			<ul class="mast">
				<!--<li id="mastnav-about"><a href="/aboutsite/" title="About This Site">About</a></li>-->
				<!--<li id="mastnav-bookstore"><a href="/books/" title="Bookstore">Bookstore</a></li>-->
				<li id="mastnav-sitemap"><a href="/sitemap/" title="Sitemap">Sitemap</a></li>
			</ul>
		</div>
		<div id="header">
			<a href="http://www.gesmer.com/industries.php?ServiceID=9" title="Sponsored By GesmerUpdegrove LLP"><img class="imgsponserV2" src="/navigation/mast_spons_GU_v2.gif" alt="Sponsored By GesmerUpdegrove LLP" height="63" width="180" border="0" /></a>
			<h1>ConsortiumInfo.org<br /><span class="tagline">Your online research resource for Standards and Standard Setting</span></h1>
		</div>
			<?php 
				//get the current directory
				$path = dirname($_SERVER['PHP_SELF']);
			?>
		<!--  NAVIGATION -->
		<div id="nav">
			<ul class="top">
				<li id="nav-home"><a href="/" title="Home Page" <?php if ($path=="/") {echo "class='active'";}?>>Home</a></li>
				<li id="nav-about"><a href="/aboutsite" title="About Page" <?php if ($path=="/aboutsite") {echo "class='active'";}?>>About</a></li>
				<li id="nav-blog"><a href="/standardsblog/" title="The Standards Blog">Blog</a></li>
				<li id="nav-bulletin"><a href="/bulletins/" title="Consortium Standards Journal" <?php if ($path=="/bulletins") {echo "class='active'";}?>>Journal</a></li>
				<li id="nav-metalibrary"><a href="/metalibrary/" title="MetaLibrary" <?php if ($path=="/metalibrary") {echo "class='active'";}?>>MetaLibrary</a></li>
				<li id="nav-guide"><a href="/essentialguide/" title="The Essential Guide to Standard Setting and Consortia" <?php if ($path=="/essentialguide") {echo "class='active'";}?>>Guide</a></li>
				<li id="nav-news"><a href="/news/" title="Standards News" <?php if ($path=="/news") {echo "class='active'";}?>>News</a></li>
				<li id="nav-consider"><a href="/blog/" title="Consider This" <?php if ($path=="/blog") {echo "class='active'";}?>>Consider This</a></li>
				<li id="nav-list"><a href="/links/" title="Consortium and Standards List" <?php if ($path=="/links") {echo "class='active'";}?>>List</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	