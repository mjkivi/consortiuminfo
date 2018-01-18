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

            href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2"><b> </b></font></b></font></td>

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
                            <td width="89%"><CENTER>
                                <?php

mysql_connect("localhost", "consor5", "c0n$0r667");
mysql_select_db("news");

if ($action == "edit_two") {
$ID=$_GET["ID"];
$sql = mysql_query("UPDATE items SET headline='$headline' WHERE (ID='$ID')");

?>
                                <div align="left" class="style2">The story is uploaded.. <BR>
          name: <?php echo $headline ?> <BR>
          def: <?php echo $ID ?> <BR>
          <a href="/news/admin/index2.php">Return</a> to entry list
          <?php

}

else {

$query = mysql_query("SELECT * FROM items WHERE(ID='$ID')");

if (mysql_num_rows($query) != 1) {
        echo "The $Name / $Password Combination is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysql_fetch_array($query);
        echo("Edit ".$info['headline']." Def");
?>
                                </div>
                                <FORM METHOD="POST" ACTION="<?php echo $PHP_SELF ?>">
                                  <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
                                  <TABLE width="638">
                                    <TR>
                                      <TD width="83"><div align="left"></div>
                                          <div align="left" class="style2">Story ID                                        </div></TD>
                                      <TD width="543"><?php echo $info['ID'] ?></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Headline</TD>
                                      <TD><input type="text" name="headline" size="60" value="<?php echo $info['headline'] ?>"></TD>
                                    </TR>
                                                                        <TR class="style2">
                                                                          <TD>&nbsp;</TD>
                                                                          <TD>&nbsp;</TD>
                                                                        </TR>
                                                                        <TR class="style2">
                                      <TD COLSPAN=2><div align="center">
                                          <p>
                                            <input name="submit" type="submit" value="Edit Profile!">
                                            <br>
                                            <a href='/news/admin/index2.php?deleteitem=<?php echo $ID ?>'>Click here</a> to delete this entry. Note: Once deleted, it's gone forever.</p>
                                          </div></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2></TD>
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
                            <td width="6%">&nbsp;</td>
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