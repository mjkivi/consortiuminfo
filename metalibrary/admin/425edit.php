<?php
  session_start();
  
  if($_SESSION['password'] ==""){     // if not logged in
    header("Location: members.php");  // redirect to login form
  }
?>


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

  <div align="center"><img src="/images/metalibheader.gif" width="762" height="120"></div></td></tr><tr><td width="100%" valign="top" bgcolor="#FFFFFF"><div align="right">

    <table width="100%"  border="0" cellspacing="0" cellpadding="0">

      <tr valign="top">

        <td width="100%" valign="top" bgcolor="#D9F0E7">
            <table width="99%"  border="0" cellspacing="0" cellpadding="0">

              <tr valign="middle">

                <td width="1%">&nbsp;</td>

                <td width="70%" class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif" size="2">&nbsp;<a

            href="http://www.consortiuminfo.org">Home</a> &gt;</font></b></font> <a href="/metalibrary/admin/index2.php"><span class="style2">Links Admin </span></a> </td>

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
mysql_select_db("library");

if ($action == "edit_two") {
//$ID=$_GET["ID"];
$cleantitle=addslashes(trim($title));
$cleanfirst=addslashes(trim($first));
$cleanlast=addslashes(trim($last));
$cleanpubdate=addslashes(trim($pubdate));
$cleanmonth=addslashes(trim($month));
$cleanday=addslashes(trim($day));
$cleanyear=addslashes(trim($year));
$cleanlink=addslashes(trim($link));
$cleansource=addslashes(trim($source));
$cleansitename=addslashes(trim($sitename));
$cleanabstract=addslashes(trim($abstract));
$cleanatitle=addslashes(trim($atitle));
$cleanfirst2=addslashes(trim($first2));
$cleanlast2=addslashes(trim($last2));
$cleanatitle2=addslashes(trim($atitle2));
$cleanfirst3=addslashes(trim($first3));
$cleanlast3=addslashes(trim($last3));
$cleanatitle3=addslashes(trim($atitle3));
$cleanfirst4=addslashes(trim($first4));
$cleanlast4=addslashes(trim($last4));
$cleanatitle4=addslashes(trim($atitle4));
$cleanfirst5=addslashes(trim($first5));
$cleanlast5=addslashes(trim($last5));
$cleanatitle5=addslashes(trim($atitle5));
$cleanfirst6=addslashes(trim($first6));
$cleanlast6=addslashes(trim($last6));
$cleanatitle6=addslashes(trim($atitle6));
$cleanfirst7=addslashes(trim($first7));
$cleanlast7=addslashes(trim($last7));
$cleanatitle7=addslashes(trim($atitle7));
$cleancite=addslashes(trim($cite));
$cleanref=addslashes(trim($ref));
$cleanterms=addslashes(trim($terms));





$sql = mysql_query("UPDATE entries SET title='$cleantitle', first='$cleanfirst', last='$cleanlast', pubdate='$cleanpubdate', month='$cleanmonth', day='$cleanday', year='$cleanyear', link='$cleanlink', source='$cleansource', sitename='$cleansitename', abstract='$cleanabstract', atitle='$cleanatitle', first2='$cleanfirst2', last2='$cleanlast2', atitle2='$cleanatitle2', first3='$cleanfirst3', last3='$cleanlast3', atitle3='$cleanatitle3', first4='$cleanfirst4', last4='$cleanlast4', atitle4='$cleanatitle4', first5='$cleanfirst5', last5='$cleanlast5', atitle5='$cleanatitle5', first6='$cleanfirst6', last6='$cleanlast6', atitle6='$cleanatitle6', first7='$cleanfirst7', last7='$cleanlast7', atitle7='$cleanatitle7', cite='$cleancite', ref='$cleanref', terms='$cleanterms' WHERE (id='$ID')");
?>
                                <div align="left" class="style2">The story is uploaded.. <BR>
          Title: <?php echo $title ?> <BR>
          ID <?php echo $id ?> <BR>
          <a href="/metalibrary/admin/index2.php">Return</a> to entry list
          <?php

}

else {

$query = mysql_query("SELECT * FROM entries WHERE(id='$ID')");

if (mysql_num_rows($query) != 1) {
        echo "The $Name / $Password Combination is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysql_fetch_array($query);
        echo("Edit ".$info['title']." Def");
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
                                      <TD width="83">Title:</TD>
                                      <TD width="543"><input name="title" type="text" id="title" value="<?php echo $info['title'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Publication Date: </TD>
                                      <TD><input name="pubdate" type="text" id="pubdate" value="<?php echo $info['pubdate'] ?>" size="60">
                                        In YYYY-MM-DD format </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Month</TD>
                                      <TD><input name="month" type="text" id="month" value="<?php echo $info['month'] ?>" size="60">
                                        ex: March </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Day</TD>
                                      <TD><input name="day" type="text" id="day" value="<?php echo $info['day'] ?>" size="60">
                                        ex: 25 </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Year</TD>
                                      <TD><input name="year" type="text" id="year" value="<?php echo $info['year'] ?>" size="60">
                                        ex: 2005 </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Link</TD>
                                      <TD><input name="link" type="text" id="link" value="<?php echo $info['link'] ?>" size="60">
                                        ex: http://www.google.com </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Source</TD>
                                      <TD><input name="source" type="text" id="source" value="<?php echo $info['source'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Site Name: </TD>
                                      <TD><input name="sitename" type="text" id="sitename" value="<?php echo $info['sitename'] ?>" size="60">
                                        ex: Google </TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Abstract</TD>
                                      <TD><textarea name="abstract" cols="50" rows="15" wrap="PHYSICAL" id="abstract"><?php echo $info['abstract'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Referenced:</TD>
                                      <TD><input name="ref" type="text" id="ref" value="<?php echo $info['ref'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD colspan="2" valign="top"><div align="center">Author Information </div></TD>
                                      </TR>
                                    <TR class="style2">
                                      <TD valign="top">First Name 1 </TD>
                                      <TD><input name="first" type="text" id="first" value="<?php echo $info['first'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Last Name 1 </TD>
                                      <TD><input name="last" type="text" id="last" value="<?php echo $info['last'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Title 1 </TD>
                                      <TD><input name="atitle" type="text" id="atitle" value="<?php echo $info['atitle'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">First Name 2 </TD>
                                      <TD><input name="first2" type="text" id="first2" value="<?php echo $info['first2'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Last Name 2 </TD>
                                      <TD><input name="last2" type="text" id="last2" value="<?php echo $info['last2'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Title 2 </TD>
                                      <TD><input name="atitle2" type="text" id="atitle2" value="<?php echo $info['atitle2'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">First Name 3 </TD>
                                      <TD><input name="first3" type="text" id="first3" value="<?php echo $info['first3'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Last Name 3 </TD>
                                      <TD><input name="last3" type="text" id="last3" value="<?php echo $info['last3'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Title 3 </TD>
                                      <TD><input name="atitle3" type="text" id="atitle3" value="<?php echo $info['atitle3'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">First Name 4 </TD>
                                      <TD><input name="first4" type="text" id="first4" value="<?php echo $info['first4'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Last Name 4 </TD>
                                      <TD><input name="last4" type="text" id="last4" value="<?php echo $info['last4'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Title 4 </TD>
                                      <TD><input name="atitle4" type="text" id="atitle4" value="<?php echo $info['atitle4'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">First Name 5 </TD>
                                      <TD><input name="first5" type="text" id="first5" value="<?php echo $info['first5'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Last Name 5 </TD>
                                      <TD><input name="last5" type="text" id="last5" value="<?php echo $info['last5'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Title 5 </TD>
                                      <TD><input name="atitle5" type="text" id="atitle5" value="<?php echo $info['atitle5'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">First Name 6 </TD>
                                      <TD><input name="first6" type="text" id="first6" value="<?php echo $info['first6'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Last Name 6 </TD>
                                      <TD><input name="last6" type="text" id="last6" value="<?php echo $info['last6'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Title 6 </TD>
                                      <TD><input name="atitle6" type="text" id="atitle6" value="<?php echo $info['atitle6'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">First Name 7 </TD>
                                      <TD><input name="first7" type="text" id="first7" value="<?php echo $info['first7'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Last Name 7 </TD>
                                      <TD><input name="last7" type="text" id="last7" value="<?php echo $info['last7'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Title 7 </TD>
                                      <TD><input name="atitle7" type="text" id="atitle7" value="<?php echo $info['atitle7'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Citation Type </TD>
                                      <TD><input name="cite" type="text" id="cite" value="<?php echo $info['cite'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD valign="top">Terms</TD>
                                      <TD><input name="terms" type="text" id="terms" value="<?php echo $info['terms'] ?>" size="60">
                                        0=Free &nbsp;&nbsp;&nbsp;1=Pay</TD>
                                    </TR>


                                                                        <TR class="style2">
                                      <TD COLSPAN=2><div align="center">
                                          <p>
                                            <input name="submit" type="submit" value="Edit Profile!">
                                          </p>
                                          </div></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2><div align="center"></div></TD>
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