<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<P3P: policyref="/w3c/p3p.xml"><link rel="P3Pv1" href="/w3c/p3p.xml">

<title>Consortiuminfo.org Consortium Standards Bulletin</title>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

<META HTTP-EQUIV="EXPIRES" CONTENT="0">

<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">

<META NAME="DISTRIBUTION" CONTENT="GLOBAL">

<meta name="keywords" content="standard setting, promotional consortia, structuring of consortia, standardize, intellectual property policies, procedures, founding company, model, best practices, promoter/adopter structurer, joint venture, IPR, ">

<meta name="description" content="While standard setting has been an important aspect of industrial society for over a hundred years, the formation of unofficial, fast-acting standard setting and promotional consortia is a more recent phenomenon which is only now beginning to be seriously studied">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">





<style type="text/css">

<!--



  A:link {color:"#178265";}

  A:visited {color:"#178265";}

  A:hover {color:"red";}

  A:hover { text-decoration:none; }

body {

	margin-left: 0px;

	margin-top: 4px;

	margin-right: 0px;

	margin-bottom: 0px;

	background-color: #0E3259;

}

.unnamed1 {	font-weight: bold;

	color: #FF0000;

	text-decoration: none;

}

.style2 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

}
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}



-->

</style>

</style>

<SCRIPT LANGUAGE="JavaScript">











<!-- Begin



function formHandler(form){



var URL = document.form.site.options[document.form.site.selectedIndex].value;



window.location.href = URL;



}



// End -->



</SCRIPT>



</head>



<body text="#000000">

<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="840">

<tr><td width="100%" valign="top">

<table border="0" cellpadding="0" cellspacing="0" width="762">

<tr><td width="100%" height="88" bgcolor="#A5DBC6">

  <div align="center"><img src="/images/consortiumlist.gif" width="762" height="120"></div></td></tr><tr><td width="100%" valign="top" bgcolor="#FFFFFF"><div align="right">

    <table width="100%"  border="0" cellspacing="0" cellpadding="0">

      <tr valign="top">

        <td width="100%" valign="top" bgcolor="#D9F0E7">
            <table width="99%"  border="0" cellspacing="0" cellpadding="0">

              <tr valign="middle">

                <td width="1%">&nbsp;</td>

                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a

            href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font> <a href="/links/admin/"><span class="style2">Links Admin </span></a> </td>

                <td width="29%"><div align="right"><span class="medium">

                </span></div></td>

              </tr>

            </table>



        <td width="0%" bgcolor="#D9F0E7"><div align="center"><span class="medium"></span></div></td>

      </tr>

    </table>

    <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b> </b></font></b></font></span> </div></td></tr></table>

<tr>

  <td width="100%" valign="top"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">

    <tr valign="top">

      <td bordercolor="#08305A" bgcolor="#D9F0E7"><table width="740"  border="0" align="center" cellpadding="1" cellspacing="0">

          <tr>

                  <td width="740" align="center" valign="top" bgcolor="#000000">

<table width="738" height="130" border="0" align="center" cellpadding="0" cellspacing="0">

                      <tr align="left" valign="top" bgcolor="#FFFFFF">

                        <td width="738" align="left"><table width="100%" height="11%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
                          <tr>
                            <td valign="top"><div align="center">
                                <p class="style1">Consortiuminfo.org Add a Consortium Entry </p>
                                <p align="left">
                                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="5%">&nbsp;</td>
                                    <td width="89%"><p align="left">
                                        <?php
if (isset($addentry)): //If the user wants to add an entry
?>
                                        <form action="<?=$PHP_SELF?>" method="post">
                                          <p align="left" class="style2">Consortium Name:
                                              <input name="cons_name" type="text" id="cons_name">
                                          </p>
                                          <p align="left" class="style2">URL:
                                              <input name="cons_url" type="text" id="cons_url">
                                          </p>
                                          <p align="left" class="style2">Link Description: <br>
                                              <textarea name="link_desc" cols="40" rows="10" wrap id="link_desc">
                            </textarea>
                                          </p>
                                          <p align="left" class="style2">Consortium Overview:<br>
                                              <textarea name="cons_overview" cols="40" rows="10" wrap id="cons_overview">
                            </textarea>
                                          </p>
                                          <p align="left" class="style2">Specifications:<br>
                                              <textarea name="cons_specs" cols="40" rows="10" wrap id="cons_specs">
                            </textarea>
                                          </p>
                                          <p align="left" class="style2">IPR Policy<br>
                                              <textarea name="cons_ipr" cols="40" rows="10" wrap id="cons_ipr">
                            </textarea>
                                          </p>
                                          <p align="left" class="style2"><br />
                                          </p>
                                          <p align="left" class="style2">&nbsp; </p>
                                          <p align="left" class="style2"> </p>
                                          <p align="left" class="style2">&nbsp;</p>
                                          <p align="left">
                                            <input type="submit" name="submit" value="submit" />
                                          </p>
                                        </form>
                                        <?php
else:  //Default Page Dislplay
	// Connect to db server
	$dbcnx = @mysql_connect("localhost", "root", "root");
	if (!$dbcnx) {
	echo( "<p>Unable to connect to the dbserver</p>");
	exit();
	}

	// Select the consortium list database
	if (! @mysql_select_db("consor5_clist") ) {
	echo( "<P>Unable to locate the db at this time</p>" );
	exit();
	}

	//If a consortia has been submitted, add it to the db
	if ($submit == "submit") {
	$cleancons_name=addslashes(trim($cons_name));
	$cleanlink_desc=addslashes(trim($link_desc));
	$cleancons_overview=addslashes(trim($cons_overview));
	$cleancons_specs=addslashes(trim($cons_specs));
	$cleancons_ipr=addslashes(trim($cons_ipr));
	$sql = "INSERT INTO cons_list SET
			cons_name='$cleancons_name',
			cons_url='$cons_url',
			link_desc='$cleanlink_desc',
			cons_overview='$cleancons_overview',
			cons_specs='$cleancons_specs',
			cons_ipr='$cleancons_ipr',
			adddate=now()";
	if (@mysql_query($sql)) {
		echo("<p>Your entry has been added.</p>");
	} else {
		echo("<p>Error adding entry: " .
				mysql_error() . "</p>");
		}
	}

//If an entry has been deleted, remove it
if (isset($deleteitem)) {
	$sql = "DELETE FROM cons_list
			WHERE ID=$deleteitem";
	if (@mysql_query($sql)) {
	echo("<p>The entry has been deleted.</p>");
} else {
	echo("<p>error deleting entry: " .
	mysql_error() . "</p>");
}
}
	echo("<p> Here are all the entries<p>" .
		"<a href='$PHP_SELF?addentry=1'>".
		"<font face='Arial' size='3'>Add an entry!</font></a>".
		"</p>");

	//Request the text of all the entries
	$result = @mysql_query("SELECT cons_id, cons_name, cons_url, link_desc, cons_overview, cons_specs, cons_ipr FROM cons_list ORDER BY cons_name ASC LIMIT 500");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each consortium in a paragraph
	while ( $row = @mysql_fetch_array($result) ) {
	$cons_id = $row["cons_id"];
	$cons_name = $row["cons_name"];
	$cons_url = $row["cons_url"];
	$link_desc = $row["link_desc"];
	$cons_overview = $row["cons_overview"];
	$cons_specs = $row["cons_specs"];
	$cons_ipr = $row["cons_ipr"];
	echo("<font face='Arial' size='2'>".
		"<a href='$cons_url'>".
		"<p><b>$cons_name</b>-</a> ".
		//"$link_desc".
		//"<br>".substr($cons_overview,0,100)."...".
		//"<br>".
		//"$cons_specs".
		//"<br>;".
		//"$cons_ipr".
		"<a href='/links/admin/catadd.php?addcat=$cons_id'>".
		"Add this entry to a category</a>&nbsp;| ".
		"<a href='/links/admin/edit.php?ID=$cons_id'>" .
		"Edit this entry</a>&nbsp;| ".
		"<p>");
}

	//When clicked the link will load this page
		echo("<p><a href='$PHP_SELF?addentry=1'>" .
			"Add an entry!</a></p>");

	endif;
?>
                                        <p align="left">&nbsp;</p></td>
                                    <td width="6%">&nbsp;</td>
                                  </tr>
                                </table>
                                <p align="left">
                            </div></td>
                          </tr>
                        </table>                        <p align="left"><font size="2" face="Arial, Helvetica, sans-serif">

                            </font>
                          </p>

                          <blockquote><blockquote>&nbsp;</blockquote>

                          </blockquote></td>

                      </tr>

                    </table>

                <div align="center"></div></td>

          </tr>

        </table>

          <blockquote>

            <blockquote>&nbsp;</blockquote>

          </blockquote>

          <b><font color="#009966" face="Arial"><b>

          </b></font></b></td>

    </tr>

  </table>

</body>

</html>