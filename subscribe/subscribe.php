<?php
    session_start();

	$loaded_time = time();
	$sname=$_POST["sname"];
	$semail=$_POST["semail"];
	$stitle=$_POST["stitle"];
	$scompany=$_POST["scompany"];
	$scategory=$_POST["scategory"];
	$scomments=$_POST["scomments"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>The Essential Guide to Consortia and Standards</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied" />
<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, " />
<meta name="author" content="Andrew Updegrove" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="/consortiuminfo2017/css/subscribe.css" />
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
<script type="text/javascript">
function validateForm() {
	var sname = document.forms[1].sname;
	var semail = document.forms[1].semail;
	var stitle = document.forms[1].stitle;
	var scompany = document.forms[1].scompany;
	var scategory = document.forms[1].scategory;
	// check sname
	if (sname.value == "") {
	alert ("Please enter your Name.");
	sname.focus();
	return false;
	}
	// check semail
	if (semail.value == "") {
	alert ("Please enter your Email Address.");
	semail.focus();
	return false;
	}
	// check stitle
	if (stitle.value == "") {
	alert ("Please enter your Title.");
	stitle.focus();
	return false;
	}
	// check scompany
	if (scompany.value == "") {
	alert ("Please enter your Company/University/Other.");
	scompany.focus();
	return false;
	}
	// check scategory
	if (scategory.value == "") {
	alert ("Please select a category.");
	scategory.focus();
	return false;
	}

return true;
}
</script>
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
			<p><a href="/">Home</a> &gt; Subscribe</p>
		</div>
		<!--   SEARCH FORM   -->
		<form class="search" name="form1" method="get" action="http://search.Blossom.com/query/320">
		<div class="right">
			<p><input type="text" name="key" /><input type="submit" name="Submit" value="Search" /> <a href="/search/">Advanced</a></p>
		</div>
		</form>
		<div class="clear"></div>
	</div>

	<!-- ************** -->
	<!--   MAIN BODY    -->
	<!-- ************** -->
	<div class="SubscribeContent">
	<!-- SKIP/START CONTENT LINK -->
	<a name="startcontent" id="startcontent"></a>

		<!-- SIDEBAR CONTENT AREA -->
		<div class="AllSidebar">
			<div>
				<?php include '../includes/clients.php'; ?>			
			</div>
			<?php include '../includes/toolsets.php'; ?>
		</div>

		<!-- BODY CONTENT AREA -->
		<div class="SubscribeMain">
			<?php
				$addentry=$_GET["addentry"];
				if (isset($addentry)): //If the user wants to add an entry
			?>
			<h1>Receive A Free Subscription<br />To Standards Today Today!</h1>
			<p>StandardsInfo LLC does not sell or otherwise make available to anyone any of the information that you submit below. You may read the complete privacy policy and terms of use for this site <a href="/terms/">here</a>.</p>
			<div class="hr"></div><hr />

			<?php
				$name = $_GET["name"];
				$email = $_GET["email"];
				$title = $_GET["title"];
				$company = $_GET["company"];
				$category = $_GET["category"];
				$comments = $_GET["comments"];
			?>

			<form action="subscribe.php" method="post" onsubmit="return validateForm();">
			<table cellpadding="0" cellspacing="0" border="0" class="Subscribe">
				<tr><td colspan="2" class="Note"><p class="Note"><b>NOTE:</b> If you use a verification program to block spam, you MUST "whitelist" this address or you will not receive issues of Standards Today: ConsortiumInfo.org@gesmer.com. To be clear, we will NOT respond to any return email that requires us to validate the sender address.</p></td></tr>
				<tr><td colspan="2"><p style="padding-bottom:18px;"><em>*Fields with asterisks are required.</em></p></td></tr>
				<tr>
					<td class="SubLeft"><p>Name:*</p></td>
					<td class="SubRight"><input name="sname" type="text" id="sname" value="<?php echo $name;?>"/></td>
				</tr>
				<tr>
					<td class="SubLeft"><p>Email:*</p></td>
					<td class="SubRight"><input name="semail" type="text" id="semail" value="<?php echo $email;?>"/></td>
				</tr>
				<tr>
					<td class="SubLeft"><p>Title:*</p></td>
					<td class="SubRight"><input name="stitle" type="text" id="stitle" value="<?php echo $title;?>" /></td>
				</tr>
				<tr>
					<td class="SubLeft"><p>Company/University/<br />Other:*</p></td>
					<td class="SubRight"><input name="scompany" type="text" id="scompany" value="<?php echo $company;?>"/></td>
				</tr>
				<tr>
					<td class="SubLeft"><p>Category:*</p></td>
					<td class="SubRight">
						<select name="scategory">
							<option <?php if ($category=="") { echo "selected='selected'";}?> value="">Select one...</option>
							<option value="consortium_staff" <?php if ($category=="consortium_staff") { echo "selected='selected'";}?>>Consortium staff</option>
							<option value="corporate_employee" <?php if ($category=="corporate_employee") { echo "selected='selected'";}?>>Corporate employee</option>
							<option value="gvt_employee" <?php if ($category=="gvt_employee") { echo "selected='selected'";}?>>Government employee</option>
							<option value="nonprofit_employee" <?php if ($category=="nonprofit_employee") { echo "selected='selected'";}?>>Nonprofit employee</option>
							<option value="media" <?php if ($category=="media") { echo "selected='selected'";}?>>Media</option>
							<option value="attorney" <?php if ($category=="attorney") { echo "selected='selected'";}?>>Attorney</option>
							<option value="professor_student" <?php if ($category=="professor_student") { echo "selected='selected'";}?>>Professor/Student</option>
							<option value="other" <?php if ($category=="other") { echo "selected='selected'";}?>>Other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="SubLeft"><p>Questions and/<br />or comments:</p></td>
					<td class="SubRight"><textarea name="scomments" cols="40" rows="5" id="scomments"><?php echo $comments;?></textarea></td>
				</tr>
				<tr>
					<td class="SubLeft"></td>
					<td class="SubRight">

					<div style="width: 430px; float: left; height: 90px">
					      <img id="siimage" align="left" style="padding-right: 5px; border: 0" src="captcha/securimage_show.php?sid=<?php echo md5(time()) ?>" />

					        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="19" height="19" id="SecurImage_as3" align="middle">
								    <param name="allowScriptAccess" value="sameDomain" />
								    <param name="allowFullScreen" value="false" />
								    <param name="movie" value="captcha/securimage_play.swf?audio=captcha/securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" />
								    <param name="quality" value="high" />

								    <param name="bgcolor" value="#ffffff" />
								    <embed src="captcha/securimage_play.swf?audio=captcha/securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" quality="high" bgcolor="#ffffff" width="19" height="19" name="SecurImage_as3" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
								  </object>

					        <br />

					        <!-- pass a session id to the query string of the script to prevent ie caching -->
					        <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'captcha/securimage_show.php?sid=' + Math.random(); return false"><img src="captcha/images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()" align="bottom" /></a>
					</div>
					<div style="clear: both"></div>
					Enter the code:<br />

					<!-- NOTE: the "name" attribute is "code" so that $img->check($_POST['code']) will check the submitted form field -->
					<input type="text" name="code" size="12" /><br /><br />


					</td>
				</tr>
				<tr>
					<td class="SubLeft">&nbsp;</td>
					<td class="SubRight"><input type="submit" name="submitjoke" value="SUBMIT" /></td>
				</tr>
				<tr><td colspan="2"><input name="loaded_time" type="hidden" id="loaded_time" value="<?php echo $loaded_time; ?>" /></td></tr>
			</table>
			<div class="human"><input name="telephone" type="text" id="telephone" /></div>
			</form>

<?php
else:
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "root", "root");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}

	// Select the jokes database
	if (! @mysql_select_db("consor5_signup") ) {
	echo( "<p>Unable to locate the db at this time</p>" );
	exit();
	}


if (isset($_POST['submitjoke']) && $_POST['submitjoke']=='SUBMIT') {
	//hidden field test and time test
	$human = $_POST['telephone'];
	$loaded_time = $_POST['loaded_time'];
	$submited_time = time();
	$time_difference = ($submited_time - $loaded_time);

  	include("captcha/securimage.php");
 	$img = new Securimage();
  	$valid = $img->check($_POST['code']);

  	if($valid != true) {
		$cleansname=addslashes(trim($sname));
		$cleansemail=addslashes(trim($semail));
		$cleanstitle=addslashes(trim($stitle));
		$cleanscompany=addslashes(trim($scompany));
		$cleanscategory=addslashes(trim($scategory));
		$cleanscomments=addslashes(trim($scomments));

    	echo "<center>Sorry, the code you entered was invalid.  <a href='subscribe-test.php?addentry=1&name=$cleansname&email=$cleansemail&title=$cleanstitle&company=$cleanscompany&category=$cleanscategory&comment=$cleanscomment'>Go back</a> to try again.</center>";
    	return false;
  	}


	if (($human != "") || ($time_difference < 4)) {
	// if human is not empty OR form was filled out in under 6 seconds, then I know its spam.
	//return false;
	echo "<p>Sorry, there was a problem with your submission. Please go back and try again.</p>";

	} else {
		//echo "send email";

		$cleansname=addslashes(trim($sname));
		$cleansemail=addslashes(trim($semail));
		$cleanstitle=addslashes(trim($stitle));
		$cleanscompany=addslashes(trim($scompany));
		$cleanscategory=addslashes(trim($scategory));
		$cleanscomments=addslashes(trim($scomments));
		$sql = "INSERT INTO verify SET
				sname='$cleansname',
				semail='$cleansemail',
				stitle='$cleanstitle',
				scompany='$cleanscompany',
				scomments='$cleanscomments',
				scategory='$cleanscategory',
				sverified='0',
				sip='$ianswer',
				sadddate=now()";
		if (@mysql_query($sql)) {
			echo("<h2>Thank You For Your Interest In Receiving<br />The Consortium Standards Bulletin</h2><p>A confirmation email has been sent to the address provided.</p>");
			//send the email.
			mail("$cleansemail", "ConsortiumInfo.org Subscription Activation", "Thank you very much for your Consortium Standards Bulletin subscription request. In order to verify your request and activate your subscription, please click the following link: http://www.consortiuminfo.org/subscribe/activate.php?semail=$cleansemail", "From:publications@gesmer.com");
			} else {
			echo("<p>Error adding entry: " . mysql_error() . "</p>");
		}
	}
}

endif;
?>



		</div>
	</div>
<div class="clear"><br /></div>
<!-- *********** -->
<!--   FOOTER    -->
<!-- *********** -->
<?php include '../includes/footer.php'; ?>
</body>
</html>