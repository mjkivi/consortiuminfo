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
.style2 {font-size: 12px; font-family: Arial, Helvetica, sans-serif;}















--></style>
<meta name="keywords" content="Laws, cases, regulations, antitrust, business interdependence, standard-setting, articles, industry regulation, enforcement, IP, ANSI's National Standards">
<meta name="description" content="Broadly stated, the basic objective of the US antitrust laws is to preserve and promote competition and the free enterprise system. They are premised on the assumption that private enterprise and free competition are the most efficient ways to allocate resources, to produce goods at the lowest possible price and to assure the production of high quality products. At their simplest, the antitrust laws require that business people make independent business decisions without consultation or agreement with competitors.">
</HEAD>
<BODY link="#178265" vlink="#178265" alink="#178265">
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
                <p class="style1">Consortiuminfo.org Consortium List Admin Interface- Edit an entry </p>
                <p align="left">
                <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="5%">&nbsp;</td>
                      <td width="89%"><CENTER>
                        <?php

mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_clist");

if ($action == "edit_two") {
$user = mysql_query("UPDATE cons_list
SET
cons_name='$cons_name',cons_url='$cons_url',link_desc='$link_desc',cons_overview='$cons_overview',cons_specs='$cons_specs', cons_ipr='$cons_ipr'
WHERE (cons_id='$ID')");

?>
                        <div align="left" class="style2">The story is uploaded.. <BR>
    ID: <?php echo $ID ?> <BR>
    Headline: <font size="2" face="Arial, Helvetica, sans-serif">
    <?php

$db = mysql_connect("localhost", "root", "root");

mysql_select_db("consor5_clist", $db);

$result = mysql_query("SELECT cons_name FROM cons_list WHERE $ID=cons_id", $db);

echo "<table border=0>\n";

echo "<TR><TD><B><center></B><TD><B><center></B></TR></center>";

while ($myrow = mysql_fetch_array($result))

	{

	echo "<tr><td><b><font size=2>".$myrow["cons_name"]."</b><p>";


}

echo "</TABLE>";





?>
    </font> <BR>
    <a href="/links/admin/index2.php">Return</a> to entry list
    <?php

}

else {

$query = mysql_query("SELECT * FROM cons_list WHERE $ID=cons_id");

if (mysql_num_rows($query) != 1) {
        echo "The $Name / $Password Combination is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysql_fetch_array($query);
        echo("Edit ".$info['cons_name']." consortium");
?>
                        </div>
                        <FORM METHOD="post" ACTION="<?php echo $PHP_SELF ?>">
                          <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
                          <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
                          <TABLE width="638">
                            <TR>
                              <TD COLSPAN=2><CENTER>
                              </CENTER></TD>
                            </TR>
                            <TR class="style2">
                              <TD width="106">Consortium  ID</TD>
                              <TD width="520"><?php echo $_GET['ID'] ?></TD>
                            </TR>
                            <TR class="style2">
                              <TD>Name</TD>
                              <TD><input type="text" name="cons_name" id="cons_name" size="60" value="<?php echo $info['cons_name'] ?>"></TD>
                            </TR>
                            <TR class="style2">
                              <TD>URL</TD>
                              <TD><input type="text" name="cons_url" id="cons_url" size="60" value="<?php echo $info['cons_url'] ?>"></TD>
                            </TR>
                            <TR class="style2">
                              <TD>Short Desc</TD>
                              <TD><textarea name="link_desc" cols="80" id="link_desc"><?php echo $info['link_desc'] ?></textarea></TD>
                            </TR>
                            <TR class="style2">
                              <TD>Overview</TD>
                              <TD><textarea name="cons_overview" cols="80" id="cons_overview"><?php echo $info['cons_overview'] ?></textarea>
                              </TD>
                            </TR>
                            <TR class="style2">
                              <TD>Specifications</TD>
                              <TD><textarea name="cons_specs" cols="80" id="cons_specs"><?php echo $info['cons_specs'] ?></textarea></TD>
                            </TR>
                            <TR class="style2">
                              <TD>IPR</TD>
                              <TD><textarea name="cons_ipr" cols="80" id="cons_ipr"><?php echo $info['cons_ipr'] ?></textarea></TD>
                            </TR>
                            <TR class="style2">
                              <TD COLSPAN=2><div align="center">
                                <p>
                                  <input name="submit" type="submit" value="Edit Profile!">
                                  </p>
                                <p><a href='/links/admin/index2.php?deleteitem=<?php echo $ID ?>'>Click here</a> to delete this entry. Note: Once deleted, it's gone forever.</p>
                              </div></TD>
                            </TR>
                          </TABLE>
                        </FORM>

                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>
                          <?php showfooter();
    }
}
?>
                        </p>
                        <p>&nbsp;</p>
                      </center>                        <p align="left">
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
