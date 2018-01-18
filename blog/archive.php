<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Consortiuminfo.org &mdash; Consider This&hellip;</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/considerthis.css" />
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
			<p><a href="/">Home</a> &gt; <a href="index.php">Consider This</a> &gt; Archive</p>
		</div>
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		<div class="clear"></div>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="ConThisContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<?php
			// dynamic link to view current entry
			$db = mysql_connect("localhost", "root", "root");
			mysql_select_db("consor5_sblog", $db);
			$result = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT 1", $db);
			while ($myrow = mysql_fetch_array($result)) {
			echo "<div class=\"AllNav\">\r
			\t\t\t\t<p class=\"AllNavLink\">&raquo;&nbsp;<a href=\"considerthis.php?ct=".$myrow["id"]."\" title=\"View Current Entry\">View Current Entry</a></p>\r
			\t\t\t</div>";
			}
			?>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="ConThisMain">
			<h1>Consider This&hellip;</h1>
			<h2 style="margin:0px; padding:0px;">Reflections on Life, Standards and Everything</h2>
			<p>The study of standards has a reputation for being, how to say tactfully, <em>not exactly riveting</em>. Or, as Monty Python's John Cleese might pronounce it: "Dreadfully dull &mdash; dry as dust and thoroughly drab and awful, really". The purpose of this section of ConsortiumInfo.org is to convince you that the study of standards, as they are used everywhere in the world around us, can be interesting as well as necessary. And sometimes, perhaps entertaining as well.</p>
			<div class="hr"></div><hr />
			<h2 style="margin-top:10px;">Consider This Archive</h2>
			<div id="archive">
			
			<!-- START OF ARCHIVE LIST -->
			<h3 style="margin:10px 0px 10px 0px;">2013</h3>
			<table class="tableArchive">
				<caption>2013 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>July 2013</td>
					<td>68</td>
					<td><a href="considerthis.php?ct=68" title="Link to this entry">The Devil's in the Cloud: It's Time to Stop our Headlong Rush into Cyber Insecurity</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />			
			<h3 style="margin:10px 0px 10px 0px;">2012</h3>
			<table class="tableArchive">
				<caption>2012 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>January 2012</td>
					<td>67</td>
					<td><a href="considerthis.php?ct=67" title="Link to this entry">Election Day 2012: What would Darwin Think?</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2011</h3>
			<table class="tableArchive">
				<caption>2011 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>January 2011</td>
					<td>66</td>
					<td><a href="considerthis.php?ct=66" title="Link to this entry">Here We Go Again: How to Tell a Bubble When you See One</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2010</h3>
			<table class="tableArchive">
				<caption>2010 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>November 2010</td>
					<td>65</td>
					<td><a href="considerthis.php?ct=65" title="Link to this entry">Measuring in the New Year</a></td>
				</tr>
				<tr>
					<td>September 2010</td>
					<td>64</td>
					<td><a href="considerthis.php?ct=64" title="Link to this entry">Standards of Political Civility<br />and Darwin's Finches</a></td>
				</tr>
				<tr>
					<td>March 2010</td>
					<td>63</td>
					<td><a href="considerthis.php?ct=63" title="Link to this entry">How Now, Gold Bug?</a></td>
				</tr>
				<tr>
					<td>January 2010</td>
					<td>62</td>
					<td><a href="considerthis.php?ct=62" title="Link to this entry">The New Yorker Story (J.D. Salinger, R.I.P)</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2009</h3>
			<table class="tableArchive">
				<caption>2009 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>October 2009</td>
					<td>61</td>
					<td><a href="considerthis.php?ct=61" title="Link to this entry">Jazz, Jazz Standards, and Open Source</a></td>
				</tr>
				<tr>
					<td>October 2009</td>
					<td>60</td>
					<td><a href="considerthis.php?ct=60" title="Link to this entry">The Constantine Code and the <em>Missing Standard</em>!</a></td>
				</tr>
				<tr>
					<td>June 2009</td>
					<td>59</td>
					<td><a href="considerthis.php?ct=59" title="Link to this entry">Digitization and the (Vanishing) Arts of the Book</a></td>
				</tr>
				<tr>
					<td>April 2009</td>
					<td>58</td>
					<td><a href="considerthis.php?ct=58" title="Link to this entry">Googling to Newspaper Solvency</a></td>
				</tr>
				<tr>
					<td>February 2009</td>
					<td>57</td>
					<td><a href="considerthis.php?ct=57" title="Link to this entry">Killing the Cockroach: The Incredibly Illogical,<br />Fundamentally Odious &mdash; but Seemingly Ineradicable<br />&mdash; Billable Hour</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2008</h3>
			<table class="tableArchive">
				<caption>2008 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>December 2008</td>
					<td>56</td>
					<td><a href="considerthis.php?ct=56" title="Link to this entry">Standards of Patient Care</a></td>
				</tr>
				<tr>
					<td>October 2008</td>
					<td>55</td>
					<td><a href="considerthis.php?ct=55" title="Link to this entry">All Politics are Tribal:<br />The Myth of &quot;One Citizen, One Vote&quot;</a></td>
				</tr>
				<tr>
					<td>April 2008</td>
					<td>54</td>
					<td><a href="considerthis.php?ct=54" title="Link to this entry">All Standards are Created Equal<br />(but some are more equal than others)</a></td>
				</tr>
				<tr>
					<td>February 2008</td>
					<td>53</td>
					<td><a href="considerthis.php?ct=53" title="Link to this entry">Steve Jobs' Endangered Second Act</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2007</h3>
			<table class="tableArchive">
				<caption>2007 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>December 2007</td>
					<td>52</td>
					<td><a href="considerthis.php?ct=52" title="Link to this entry">How to Challenge a Virtual Brontosaurus</a></td>
				</tr>
				<tr>
					<td>October 2007</td>
					<td>51</td>
					<td><a href="considerthis.php?ct=51" title="Link to this entry">On Guilt or Innocence, and the Space Between</a></td>
				</tr>
				<tr>
					<td>August 2007</td>
					<td>50</td>
					<td><a href="considerthis.php?ct=50" title="Link to this entry">Standards, Virtual Worlds and The Big Question</a></td>
				</tr>
				<tr>
					<td>May 2007</td>
					<td>49</td>
					<td><a href="considerthis.php?ct=49" title="Link to this entry">Walking Among Great Trees: A Meditation on Heritage</a></td>
				</tr>
				<tr>
					<td>April 2007</td>
					<td>48</td>
					<td><a href="considerthis.php?ct=48" title="Link to this entry">The Slippery (and Colorful) Business of Standards</a></td>
				</tr>
				<tr>
					<td>March 2007</td>
					<td>47</td>
					<td><a href="considerthis.php?ct=47" title="Link to this entry">Standards and Innovation (and Standards Degradation) </a></td>
				</tr>
				<tr>
					<td>March 2007</td>
					<td>46</td>
					<td><a href="considerthis.php?ct=46" title="Link to this entry">Language Codes and a "Philosophy of Three-Part Service"</a></td>
				</tr>
				<tr>
					<td>January 2007</td>
					<td>45</td>
					<td><a href="considerthis.php?ct=45" title="Link to this entry">Product Evolution and Standards "Swarms"</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2006</h3>
			<table class="tableArchive">
				<caption>2006 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>November 2006</td>
					<td>44</td>
					<td><a href="considerthis.php?ct=44" title="Link to this entry">A Level Playing Field</a></td>
				</tr>
				<tr>
					<td>October 2006</td>
					<td>43</td>
					<td><a href="considerthis.php?ct=43" title="Link to this entry">The Wikipedia and the Death of Archaeology</a></td>
				</tr>
				<tr>
					<td>September 2006</td>
					<td>42</td>
					<td><a href="considerthis.php?ct=42" title="Link to this entry">Sovereignty, World Trade and Human Rights</a></td>
				</tr>
				<tr>
					<td>July 2006</td>
					<td>41</td>
					<td><a href="considerthis.php?ct=41" title="Link to this entry">Live'n the WiFi LifeStyle: the iPod Bows to the Router</a></td>
				</tr>
				<tr>
					<td>June 2006</td>
					<td>40</td>
					<td><a href="considerthis.php?ct=40" title="Link to this entry">Microsoft, Adobe and What's Wrong With RAND</a></td>
				</tr>
				<tr>
					<td>May 2006</td>
					<td>39</td>
					<td><a href="considerthis.php?ct=39" title="Link to this entry">Thinking About Standards Inside of the Box </a></td>
				</tr>
				<tr>
					<td>April 2006</td>
					<td>38</td>
					<td><a href="considerthis.php?ct=38" title="Link to this entry">The Minnesota Open Formats Bill: Bandwagon or Babel? </a></td>
				</tr>
				<tr>
					<td>March 2006</td>
					<td>37</td>
					<td><a href="considerthis.php?ct=37" title="Link to this entry">Where (if anywhere) are the Boundaries of the Open Source Concept?	</a></td>
				</tr>
				<tr>
					<td>January 2006</td>
					<td>36</td>
					<td><a href="considerthis.php?ct=36" title="Link to this entry">Body Type Standards, Crash Test Dummies, and Sleeping with Big Agnes</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2005</h3>
			<table class="tableArchive">
				<caption>2005 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>December 2005</td>
					<td>35</td>
					<td><a href="considerthis.php?ct=35" title="Link to this entry">Objectivity and my Secret Life as Simon Hoggart</a></td>
				</tr>
				<tr>
					<td>November 2005</td>
					<td>34</td>
					<td><a href="considerthis.php?ct=34" title="Link to this entry">The way ain't far, but you can't get there from here </a></td>
				</tr>
				<tr>
					<td>October 2005</td>
					<td>33</td>
					<td><a href="considerthis.php?ct=33" title="Link to this entry">Tell the Government What You Think About the Future of the Internet </a></td>
				</tr>
				<tr>
					<td>September 2005</td>
					<td>32</td>
					<td><a href="considerthis.php?ct=32" title="Link to this entry">Clay Tablets, iPods and Evo/Devolution</a></td>
				</tr>
				<tr>
					<td>August 2005</td>
					<td>31</td>
					<td><a href="considerthis.php?ct=31" title="Link to this entry">How do you Define a Wilderness?</a></td>
				</tr>
				<tr>
					<td>July 2005</td>
					<td>30</td>
					<td><a href="considerthis.php?ct=30" title="Link to this entry">Standards Relativity and the Return of the Shuttle </a></td>
				</tr>
				<tr>
					<td>June 2005</td>
					<td>29</td>
					<td><a href="considerthis.php?ct=29" title="Link to this entry">For Your Reference</a></td>
				</tr>
				<tr>
					<td>May 2005</td>
					<td>28</td>
					<td><a href="considerthis.php?ct=28" title="Link to this entry">All Social Standards are Local (or are they?) </a></td>
				</tr>
				<tr>
					<td>April 2005</td>
					<td>27</td>
					<td><a href="considerthis.php?ct=27" title="Link to this entry">Social Standards, School Violence and Taboos:  In respect of Red Lake</a></td>
				</tr>
				<tr>
					<td>March 2005</td>
					<td>26</td>
					<td><a href="considerthis.php?ct=26" title="Link to this entry">Creation 3.0</a></td>
				</tr>
				<tr>
					<td>February 2005</td>
					<td>25</td>
					<td><a href="considerthis.php?ct=25" title="Link to this entry">How strict a standard? In Praise of the Hammond B-3 Organ</a></td>
				</tr>
				<tr>
					<td>January 2005</td>
					<td>24</td>
					<td><a href="considerthis.php?ct=24" title="Link to this entry">Two Canyons </a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2004</h3>
			<table class="tableArchive">
				<caption>2004 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>December 2004</td>
					<td>23</td>
					<td><a href="considerthis.php?ct=23" title="Link to this entry">Railroads, Standards, Lock In and Conventions </a></td>
				</tr>
				<tr>
					<td>November 2004</td>
					<td>22</td>
					<td><a href="considerthis.php?ct=22" title="Link to this entry">This One's for You, Albert</a></td>
				</tr>
				<tr>
					<td>October 2004</td>
					<td>21</td>
					<td><a href="considerthis.php?ct=21" title="Link to this entry">Soy Sauce, Kimchi, and the Golden Rule</a></td>
				</tr>
				<tr>
					<td>September 2004</td>
					<td>20</td>
					<td><a href="considerthis.php?ct=20" title="Link to this entry">Predictability and Standards Denial </a></td>
				</tr>
				<tr>
					<td>August 2004</td>
					<td>19</td>
					<td><a href="considerthis.php?ct=19" title="Link to this entry">A Standard for the Ages</a></td>
				</tr>
				<tr>
					<td>July 2004</td>
					<td>18</td>
					<td><a href="considerthis.php?ct=18" title="Link to this entry">Standards, the Constitution and (Im)Mutability</a></td>
				</tr>
				<tr>
					<td>June 2004</td>
					<td>17</td>
					<td><a href="considerthis.php?ct=17" title="Link to this entry">Avoiding a New Dark Age</a></td>
				</tr>
				<tr>
					<td>May 2004</td>
					<td>16</td>
					<td><a href="considerthis.php?ct=16" title="Link to this entry">RMBS and (Another) Dark Side of the Internet</a></td>
				</tr>
				<tr>
					<td>April 2004</td>
					<td>15</td>
					<td><a href="considerthis.php?ct=15" title="Link to this entry">Is Iraq "Another Vietnam?" </a></td>
				</tr>
				<tr>
					<td>March 2004</td>
					<td>14</td>
					<td><a href="considerthis.php?ct=14" title="Link to this entry">Dan Mullen, Andrew Jackson and the Dark Side of the Internet </a></td>
				</tr>
				<tr>
					<td>March 2004</td>
					<td>13</td>
					<td><a href="considerthis.php?ct=13" title="Link to this entry">The Knowledge of the Spheres</a></td>
				</tr>
				<tr>
					<td>January 2004</td>
					<td>12</td>
					<td><a href="considerthis.php?ct=12" title="Link to this entry">I have the virus du Jour (you know, the whatchamacallit)</a></td>
				</tr>
				<tr>
					<td>January 2004</td>
					<td>11</td>
					<td><a href="considerthis.php?ct=11" title="Link to this entry">From Postal Runners to Email </a></td>
				</tr>
				<tr>
					<td>January 2004</td>
					<td>10</td>
					<td><a href="considerthis.php?ct=10" title="Link to this entry">Round Three: The Judge Gives it to Eolas:</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<h3 style="margin:10px 0px 10px 0px;">2003</h3>
			<table class="tableArchive">
				<caption>2003 Consider This Entries</caption>
				<tr>
					<th width="120">Date</th>
					<th width="70">Number</th>
					<th>Entry</th>
				</tr>
				<tr>
					<td>December 2003</td>
					<td>9</td>
					<td><a href="considerthis.php?ct=9" title="Link to this entry">Betamax and the Blu-ray Group: Will History Repeat Itself?</a></td>
				</tr>
				<tr>
					<td>December 2003</td>
					<td>8</td>
					<td><a href="considerthis.php?ct=8" title="Link to this entry">Standards, New Frontiers and ROI.</a></td>
				</tr>
				<tr>
					<td>November 2003</td>
					<td>7</td>
					<td><a href="considerthis.php?ct=7" title="Link to this entry">A Second Chance for Self-Regulation.</a></td>
				</tr>
				<tr>
					<td>November 2003</td>
					<td>6</td>
					<td><a href="considerthis.php?ct=6" title="Link to this entry">What a Difference a Decade Makes (or does it?) </a></td>
				</tr>
				<tr>
					<td>November 2003</td>
					<td>5</td>
					<td><a href="considerthis.php?ct=5" title="Link to this entry">If XML be the standard of music, code on.</a></td>
				</tr>
				<tr>
					<td>October 2003</td>
					<td>4</td>
					<td><a href="considerthis.php?ct=4" title="Link to this entry">Savoring the Unicode.</a></td>
				</tr>
				<tr>
					<td>October 2003</td>
					<td>3</td>
					<td><a href="considerthis.php?ct=3" title="Link to this entry">Standards, Similes, Pancakes and Kansas.</a></td>
				</tr>
				<tr>
					<td>October 2003</td>
					<td>2</td>
					<td><a href="considerthis.php?ct=2" title="Link to this entry">Alpha Predators and Cyber Insecurity</a></td>
				</tr>
				<tr>
					<td>October 2003</td>
					<td>1</td>
					<td><a href="considerthis.php?ct=1" title="Link to this entry">A <i>What</i> Blog?</a></td>
				</tr>
			</table>
			<p><a class="returntotop" href="#startcontent" title="return to beginning of content">return to top</a></p>
			<div class="hr"></div><hr />
			<!-- END OF ARCHIVE LIST -->
			
			</div>
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