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
.style12 {
	color: #FF0000;
	font-weight: bold;
}































































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

            <td width="22%" bgcolor="#D9F0E7"><div align="center" class="style1"><font face=arial size=-1>&nbsp;<a
            href="/">Home</a> &gt; <a href="/news/admin/"><strong>News Admin</strong></a> </font></div></td>

            <td width="70%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font><font face="Arial">
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

<td width="4" bgcolor="#D9F0E7"></td>

<td width="140" bgcolor="#D9F0E7" valign="top"><table width="140" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="140" bgcolor="#FFFFFF"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">

      </font></strong></font></strong></span> </td>
    </tr>
  </table>
        <div align="right">
          <table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center"></div></td>
            </tr>
          </table>


        </div></td><td width="10" bgcolor="#D9F0E7"></td><td width="594" bgcolor="#D9F0E7">

    <table border="0" cellpadding="0" cellspacing="0" width="92%"><tr><td bgcolor="#000000">

<table border="0" cellpadding="0" cellspacing="1" width="100%">
  <tr><td valign="top" bgcolor="#FFFFFF">

  <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><?php

mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_clist");

if ($action == "edit") {
$cleanits=$cons_name;

$xsql="UPDATE items SET cons_name='$cleanits' WHERE (cons_id='$cons_id')";
$sql = mysql_query($xsql);
//echo " $xsql";
//$xsql="INSERT INTO items SET headline='$headline', author='$author', source='$source', date1='$date1', story='$story', link1='$link1'";
//$sql = mysql_query($xsql);
?>



<div align="left" class="style2"><font size="2">Your changes have been saved.</font> <BR>
        &nbsp;&nbsp;<font size="2">  <b>Title:</b> <?php echo $cons_name ?> <BR>
        &nbsp;&nbsp;       <font size="2">   <b>ID:</b>  <?php echo $cons_id ?> <BR>


        <center>  <p><b><a href="/links/admin/index2.php">Return</a> to entry list</b></center>


  <?php

}

else {

$query = mysql_query("SELECT * FROM cons_list WHERE(cons_id='$cons_id')");

if (mysql_num_rows($query) != 1) {
        echo "The $Name / $Password Combination is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysql_fetch_array($query);
        echo("Edit ".$info['cons_name']."");
?>

  <FORM METHOD="POST" ACTION="<?php echo $PHP_SELF ?>">
  <INPUT TYPE="hidden" NAME="cons_id" VALUE="<?php echo $cons_id ?>">

                                  <INPUT TYPE="hidden" NAME="action" VALUE="edit">

<TABLE width="499">
                                    <TR>
                                      <TD COLSPAN=2><CENTER class="style12">
                                          Make your changes in the fields below, and when done, click &quot;Save Changes.&quot;
                                      </CENTER></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD width="83" class="style1">Consortium Name :</TD>
                                      <TD width="404"><input name="cons_name" type="text" id="cons_name" value="<?php echo $info['cons_name'] ?>" size="60"></TD>
                                    </TR>
                                                                        <TR class="style2">
                                      <TD COLSPAN=2><div align="center">
                                          <p>
                                            <input name="submit" type="submit" value="Save Changes">
                                          </p>
                                          </div></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2>&nbsp;</TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2></TD>
                                    </TR>
                                  </TABLE>
</FORM>

                                  <?php showfooter();
    }
}
?>
</td>
    </tr>
  </table>
  <br>

</td></tr></table>

</td></tr></table><br>

<br></td><td width="14" bgcolor="#D9F0E7"><br><br></td></tr></table>

<br><center><font class="footmsg">&nbsp;

</font>

</body>

</html>