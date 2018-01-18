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

.style10 {font-family: Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; font-weight: bold; }

.style2 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

}

.style25 {font-size: 12px}



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

  <div align="center"><img src="/bulletins/header.gif" width="762" height="120"></div></td></tr><tr><td width="100%" valign="top" bgcolor="#FFFFFF"><div align="right">

    <table width="100%"  border="0" cellspacing="0" cellpadding="0">

      <tr valign="top">

        <td width="100%" valign="top" bgcolor="#D9F0E7">
            <table width="99%"  border="0" cellspacing="0" cellpadding="0">

              <tr valign="middle">

                <td width="1%">&nbsp;</td>

                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a

            href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> <a href="/books/">Bookstore</a> &gt; <a href="/books/admin/">Admin</a> </b></font></b></font></td>

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

                        <td width="738" align="left"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="5%">&nbsp;</td>
                            <td width="93%"><CENTER>
                                <?php

mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_clist");

if ($action == "edit_two") {

$user = mysql_query("UPDATE cons_list SET
cons_name='$cons_name',
cons_url='$cons_url',
link_desc='$link_desc',
cons_overview='$cons_overview',
cons_specs='$cons_specs',
cons_ipr='$cons_ipr'
 WHERE (cons_id='$ID')");

?>
                                <div align="left" class="style2">
                                  <p>The story is uploaded.. <BR>
            ID: <?php echo $ID ?> <BR>
            Name:
            <font size="2" face="Arial, Helvetica, sans-serif">
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
            </font></p>
                                  <p>          <a href="/links/admin/index2.php">Return</a> to entry list
                                      <?php

}

else {

$query = mysql_query("SELECT * FROM cons_list WHERE(cons_id='$ID')");

if (mysql_num_rows($query) != 1) {
        echo "The $Name / $Password Combination is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysql_fetch_array($query);
        echo("Edit ".$info['cons_name']." ");
?>
                                      </p>
                                </div>
                                <FORM METHOD=POST ACTION="<?php echo $PHP_SELF ?>">
                                  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $info['ID'] ?>">
                                  <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
                                  <TABLE width="638">
                                    <TR>
                                      <TD COLSPAN=2><CENTER>
                                      </CENTER></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD width="83">BOOK ID</TD>
                                      <TD width="543"><?php echo $_GET['ID'] ?></TD>
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
                              </center>
                                <p align="left">
                              <p align="left">&nbsp;</p></td>
                            <td width="2%">&nbsp;</td>
                          </tr>
                        </table>
                          <p align="left"><font size="2" face="Arial, Helvetica, sans-serif">

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