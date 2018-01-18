<html><HEAD>
<TITLE>News:</TITLE>
<style type="text/css">
<!--
  A:link {color:#"178265";}
  A:visited {color:"#178265";}
  A:hover {color:"red";}
  A:hover { text-decoration:none; }
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style3 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
--></style>
<meta name="keywords" content="Laws, cases, regulations, antitrust, business interdependence, standard-setting, articles, industry regulation, enforcement, IP, ANSI's National Standards">
<meta name="description" content="Broadly stated, the basic objective of the US antitrust laws is to preserve and promote competition and the free enterprise system. They are premised on the assumption that private enterprise and free competition are the most efficient ways to allocate resources, to produce goods at the lowest possible price and to assure the production of high quality products. At their simplest, the antitrust laws require that business people make independent business decisions without consultation or agreement with competitors.">
</HEAD>
<BODY link="#178265" vlink="#178265" alink="#178265">
  <table cellspacing=0 cellpadding=0 width="100%" border=0>
    <tbody>
    <tr>
      <td width="1%">&nbsp;</td>
      <td>
        <div align="center"><b><font face="Arial, Helvetica, sans-serif" size="3">
          <style type="text/css"><!--
  A:link {color:#"178265";}
  A:visited {color:"#178265";}
  A:hover {color:"red";}
  A:hover { text-decoration:none; }
--></style>
            <a name="top"></a></font></b>

        </div>
      </td>
    </tr>
    </tbody>
  </table>
  <center>
  </center>
  <table>
    <tbody>
    <tr>
      <td></td>
    </tr>
    </tbody>
  </table>
  <table cellspacing=0 cellpadding=0 width="100%" bgcolor=white border=0>
    <tbody>
    <tr>
      <td height=1>
        <table cellspacing=0 cellpadding=0 border=0>
          <tbody>
          <tr>
            <td height=1></td>
          </tr>
          </tbody>
        </table>
      </td>
    </tr>
    </tbody>
  </table>
  <table width="98%" height="43" border=0 align="center" cellpadding=0 cellspacing=0>
    <tbody>
    <tr>
      <td valign="top" height="1893" >
        <table width="100%" height="11%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
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
                          <p align="left" class="style3">Consortium Name:
                              <input name="cons_name" type="text" id="cons_name">
                          </p>
                          <p align="left" class="style3">URL:
                            <input name="cons_url" type="text" id="cons_url">
                          </p>
                          <p align="left" class="style3">Link Description: <br>
                            <textarea name="link_desc" cols="40" rows="10" wrap id="link_desc">
                            </textarea>
</p>
                          <p align="left" class="style3">Consortium Overview:<br>
                            <textarea name="cons_overview" cols="40" rows="10" wrap id="cons_overview">
                            </textarea>
</p>
                          <p align="left" class="style3">Specifications:<br>
                            <textarea name="cons_specs" cols="40" rows="10" wrap id="cons_specs">
                            </textarea>
</p>
                          <p align="left" class="style3">IPR Policy<br>
                            <textarea name="cons_ipr" cols="40" rows="10" wrap id="cons_ipr">
                            </textarea>
                          </p>
                          <p align="left" class="style3"><br />
                          </p>
                          <p align="left" class="style3">&nbsp;						  </p>
                          <p align="left" class="style3">

</p>
                          <p align="left" class="style3">&nbsp;</p>
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
			cons_ipr='$cleancons_ipr'";
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
	$result = @mysql_query("SELECT * FROM cons_list ORDER BY cons_id DESC LIMIT 50");
	if (!result) {
		echo("<p>Error performing query: " .
			mysql_error() . "</p>");
		exit();
		}
	//Display the text of each consortium in a paragraph
	while ( $row = mysql_fetch_array($result) ) {
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
		"$link_desc".
		"<br>$cons_overview".
		"<br>".
		"$cons_specs".
		"<br>;".
		"$cons_ipr".
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
                  <p align="left">                </div>
              </td>
          </tr>
        </table>
      </td>
    </tr>
    </tbody>
  </table>
  <div align="center"></div>
  <p>
  <p>
  <p> <br
clear=all>
    <center>
    </center>
  <p align="center">

    </b></font></b></font></b>
  <p><br>
<P>
</BODY></HTML>
