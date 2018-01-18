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
//$ID=$_GET["ID"];
$sql = mysql_query("UPDATE items SET its='$its' WHERE (ID='$ID')");
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
        echo("Edit ".$info['Name']." News Story");
?>
</div>
                                <FORM METHOD="POST" ACTION="<?php echo $PHP_SELF ?>">
                                  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">
                                  <INPUT TYPE="hidden" NAME="action" VALUE="edit_two">
                                  <TABLE width="638">
                                    <TR>
                                      <TD COLSPAN=2><CENTER>
                                      </CENTER></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD width="83">Story ID</TD>
                                      <TD width="543"><?php echo $info['ID'] ?></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Headline</TD>
                                      <TD><input type="text" name="headline" size="60" value="<?php echo $info['headline'] ?>"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Italics</TD>
                                      <TD><textarea name="its" cols="50"><?php echo $info['its'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Author</TD>
                                      <TD><INPUT NAME="author" TYPE="text" id="author" VALUE="<?php echo $info['author'] ?>" size="50"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>source</TD>
                                      <TD><INPUT NAME="source" TYPE="text" VALUE="<?php echo $info['source'] ?>" size="50"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>DisplayDate</TD>
                                      <TD><INPUT NAME="date1" TYPE="text" id="date1" VALUE="<?php echo $info['date1'] ?>" size="50"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>RealDate</TD>
                                      <TD><INPUT NAME="date2" TYPE="text" id="date2" VALUE="<?php echo $info['date2'] ?>" size="50"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Short Desc for homepage </TD>
                                      <TD><textarea name="short_story" cols="60" id="short_story"><?php echo $info['short_story'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Story</TD>
                                      <TD><textarea name="story" cols="60" id="story"><?php echo $info['story'] ?></textarea>
                                      </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Link</TD>
                                      <TD><INPUT NAME="link1" TYPE="text" VALUE="<?php echo $info['link1'] ?>" size="50"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Story on homepage?</TD>
                                      <TD><input name="hp" type="text" id="hp" value="<?php echo $info['hp'] ?>" size="50">
      1=Yes </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD><div align="left">Flag: </div></TD>
                                      <TD><INPUT NAME="flag" TYPE="text" VALUE="<?php echo $info['flag'] ?>" size="50"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2><div align="center">
                                          <p>
                                            <input name="submit" type="submit" value="Edit Profile!">
                                          </p>
                                          <p><a href='/news/admin/index2.php?deleteitem=<?php echo $ID ?>'>Click here</a> to delete this entry. Note: Once deleted, it's gone forever.</p>
                                      </div></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2>Flag Guide </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2><?php
$db = mysql_connect("localhost", "consor5", "c0n$0r667");
mysql_select_db("news", $db);
$result = mysql_query("SELECT cid, cat FROM cats ORDER BY cid ASC", $db);
while ($myrow = mysql_fetch_array ($result))
{
echo "<b></b>".$myrow["cid"]." &nbsp;&nbsp;".$myrow["cat"]."<br>";
}
?></TD>
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