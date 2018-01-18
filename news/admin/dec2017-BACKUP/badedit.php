<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title>News:</title>

<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

<META HTTP-EQUIV="EXPIRES" CONTENT="0">

<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">

<META NAME="DISTRIBUTION" CONTENT="GLOBAL">

<META NAME="AUTHOR" CONTENT="GUNet">





<style type="text/css">



<!--































































  A:link {color:"blue";}

  A:link2 {color:"#000000";}































  A:visited {color:"blue";



}































  A:hover {color:"red";}































  A:hover { text-decoration:none; }



.style1 {	font-family: Arial, Helvetica, sans-serif;



	font-size: 12px;



}



body {

	margin-left: 0px;

	margin-top: 4px;

	margin-right: 0px;

	margin-bottom: 0px;

	background-color: #0E3259;

}

body,td,th {

	font-family: Arial, Helvetica, sans-serif;

}

.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style13 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }































































-->

</style>





</head>



<body text="#000000" link="0000ff">

<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="840">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="762">

<tr><td width="100%" height="88" bgcolor="#A5DBC6">

  <div align="center"><img src="/images/newsheader.gif" width="762" height="120"></div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>

    </b></font></b></font></span>

        <table width="100%"  border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="17%" bgcolor="#D9F0E7"><div align="center" class="style1"><font face=arial size=-1>&nbsp;<a
            href="/">Home</a> &gt;<b> </b>News<b> </b></font></div></td>

            <td width="75%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font><font face="Arial">
                </font></b></font></span></div></td>

            <td width="6%" bgcolor="#D9F0E7"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="/feed.php"><img src="/news/xml.gif" alt="RSS News Feed" width="36" height="14" border="0"></a></font></b></font></span></div></td>
            <td width="2%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font face="Arial"><b>

             </b></font></b></font></span></div></td>

          </tr>

        </table>

        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>        </b></font></b></font></span>

  </div></td></tr></table>

</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">

<tr valign="top">

<td width="1" bgcolor="#D9F0E7"></td>
<td width="1" bgcolor="#D9F0E7"></td><td width="704" bgcolor="#D9F0E7">

    <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td bgcolor="#000000">

<table width="97%" border="0" align="center" cellpadding="0" cellspacing="1"><tr><td valign="top" bgcolor="#FFFFFF">

  <table width="97%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="5%">&nbsp;</td>
      <td width="89%"><CENTER>
          <?php

mysql_connect("localhost", "consor5", "c0n$0r667");
mysql_select_db("news");

if ($action == "edit_two") {

$user = mysql_query("UPDATE items SET its='$its',headline='$headline',author='$author',link1='$link1',short_story='$short_story',hp='$hp',source='$source',date1='$date1',date2='$date2',flag='$flag',story='$story' WHERE (ID='$ID')");

?>
          <div align="left" class="style1">The story is uploaded.. <BR>
          ID: <?php echo $ID ?> <BR>
          Headline: <?php echo $headline ?> <BR>
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
              <TR class="style1">
                <TD width="83">Story ID</TD>
                <TD width="543"><?php echo $info['ID'] ?></TD>
              </TR>
              <TR class="style1">
                <TD>Headline</TD>
                <TD><input type="text" name="headline" size="60" value="<?php echo $info['headline'] ?>"></TD>
              </TR>
              <TR class="style1">
                <TD>Italics</TD>
                <TD><textarea name="its" cols="50"><?php echo $info['its'] ?></textarea></TD>
              </TR>
              <TR class="style1">
                <TD>Author</TD>
                <TD><INPUT NAME="author" TYPE="text" id="author" VALUE="<?php echo $info['author'] ?>" size="50"></TD>
              </TR>
              <TR class="style1">
                <TD>source</TD>
                <TD><INPUT NAME="source" TYPE="text" VALUE="<?php echo $info['source'] ?>" size="50"></TD>
              </TR>
              <TR class="style1">
                <TD>DisplayDate</TD>
                <TD><INPUT NAME="date1" TYPE="text" id="date1" VALUE="<?php echo $info['date1'] ?>" size="50"></TD>
              </TR>
              <TR class="style1">
                <TD>RealDate</TD>
                <TD><INPUT NAME="date2" TYPE="text" id="date2" VALUE="<?php echo $info['date2'] ?>" size="50"></TD>
              </TR>
              <TR class="style1">
                <TD>Short Desc for homepage </TD>
                <TD><textarea name="short_story" cols="60" id="short_story"><?php echo $info['short_story'] ?></textarea></TD>
              </TR>
              <TR class="style1">
                <TD>Story</TD>
                <TD><textarea name="story" cols="60" id="story"><?php echo $info['story'] ?></textarea>
                </TD>
              </TR>
              <TR class="style1">
                <TD>Link</TD>
                <TD><INPUT NAME="link1" TYPE="text" VALUE="<?php echo $info['link1'] ?>" size="50"></TD>
              </TR>
              <TR class="style1">
                <TD>Story on homepage?</TD>
                <TD><input name="hp" type="text" id="hp" value="<?php echo $info['hp'] ?>" size="50">
                1=Yes </TD>
              </TR>
              <TR class="style1">
                <TD><div align="left">Flag: </div></TD>
                <TD><INPUT NAME="flag" TYPE="text" VALUE="<?php echo $info['flag'] ?>" size="50"></TD>
              </TR>
              <TR class="style1">
                <TD COLSPAN=2><div align="center">
                    <p>
                      <input name="submit" type="submit" value="Edit Profile!">
                    </p>
                    <p><a href='/news/admin/index2.php?deleteitem=<?php echo $ID ?>'>Click here</a> to delete this entry. Note: Once deleted, it's gone forever.</p>
                </div></TD>
              </TR>
              <TR class="style1">
                <TD COLSPAN=2>Flag Guide </TD>
              </TR>
              <TR class="style1">
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
  <br>

</td></tr></table>

</td></tr></table><br>

<br></td><td width="56" bgcolor="#D9F0E7"><br><br></td></tr></table>

<br><center><font class="footmsg">&nbsp;

</font>
 <!-- Start Superstats code version 3.0b.  Copyright 1997-2001 MyComputer.com, Inc. More info available at http://www.mycomputer.com -->
    <script language="JavaScript">/* You may give each page an identifying name, server, and channel on the next lines. */var pageName = "ALL NEWS";/**** DO NOT ALTER ANYTHING BELOW THIS LINE! ****/var code = ' '; </script>
    <script src="http://code.superstats.com/code/ss/lgu/0/30b"></script>
    <script language="JavaScript">br = navigator.appName + parseInt(navigator.appVersion);if (code != ' ' || br == 'Netscape2') document.write(code);else document.write(''+ ' <im'+'g'+ ' src="http://stats.superstats.com/b/ss/lgu/1'+ '?pageName=' + escape(pageName) + '" border=0>');document.write('<'); document.write('!-- ');</script>
    </b></font></b></font></b>
  <p><b><font color="#009966" face="Arial"><b><font color="#009966" face="Arial"><b><noscript><img src="http://stats.superstats.com/b/ss/lgu/1" border=0></noscript>
    <script language="JavaScript">document.write(' --'); document.write('>');</script>
    <!-- End Superstats tracking code. -->
</body>

</html>