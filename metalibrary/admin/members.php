<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE>Welcome to the Boston Chapter of the Association of Legal Administrators</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

<style type="text/css">
A:hover {color:"#FF0000";}
A:hover { text-decoration:none; }
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.style3 {font-size: 12px; font-family: Arial, Helvetica, sans-serif;}
.tborder {background-color: #739EC6;
	color: #739EC6;
	border: 1px solid #739EC6;
}
.vbmenu_control {	background-color: #739EC6;
	color: #FFFFFF;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	padding:0 px;
	white-space: nowrap;
}
.style4 {color: #FFFFFF;
	font-weight: bold;
}
.style4 {	color: #FFFFFF;
	font-weight: bold;
}
</style>

</HEAD>
<BODY BGCOLOR=#00244A vlink="#000000" alink="#FF0000" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<br>
<TABLE WIDTH=798 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
	<TR valign="top" bgcolor="#FFFFFF">
		<TD COLSPAN=12>&nbsp;</TD>
	</TR>
	<TR valign="top">
		<TD width="8" rowspan="3" valign="top" bgcolor="#DEEFF7">&nbsp;			</TD>
	    <TD width="143" valign="top" bgcolor="#DEEFF7">&nbsp;</TD>
	    <TD width="13" rowspan="3" bgcolor="#FFFFFF"><div align="center"><img src="/images/black.jpg" width="1" height="600"> </div></TD>
		<TD COLSPAN=7 rowspan="3" valign="top" bgcolor="#FFFFFF"><font color="003366"><b><font face="Arial, Helvetica, sans-serif" size="3"><em>Members Section </em></font></b></font><br>
		  <br>
		  <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td>
            <div align="right">
	            <?php
					echo "<font size='2' face='Arial, Helvetica, sans-serif'>";
					echo "<div align='right'>";
					echo( date("F d, Y") );
					echo "&nbsp;&nbsp;&nbsp;</div>";
				?>
			</div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3"><form action="checkuser.php" method="post" name="" id="">
  <table width="50%" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr class="style3"> 
      <td width="22%">Username</td>
      <td width="78%"><input name="username" type="text" id="username"></td>
    </tr>
    <tr class="style3"> 
      <td>Password</td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr class="style3"> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
            </td>
            </tr>
          <tr>
            <td width="10">&nbsp;</td>
            <td width="438">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
        </table>		  
		  <h3 align="center">&nbsp;</h3>
	  </TD><TD width="16" rowspan="3" bgcolor="#FFFFFF">			<div align="center">
	    <p><img src="/images/black.jpg" width="1" height="600"></p>
	    </div></TD>
		<TD width="181" rowspan="3" bgcolor="#FFFFFF"><p align="center" class="style1">&nbsp;</p>
          <p align="left"><p align="left"></p></p></p></TD></TR>
	<TR valign="top">
	  <TD valign="top" bgcolor="#FFFFFF"><font size="2" face="Arial, Helvetica, sans-serif">&nbsp;</font></TD>
  </TR>
	<TR valign="top">
	  <TD valign="top" bgcolor="#FFFFFF">&nbsp;</TD>
    </TR>
	<TR>
		<TD>
			</TD>
		<TD>
			</TD>
		<TD>
			</TD>
		<TD width="125">
			</TD>
		<TD width="34">
			<IMG SRC="images/spacer.gif" WIDTH=32 HEIGHT=1 ALT=""></TD>
		<TD width="51">
			<IMG SRC="images/spacer.gif" WIDTH=46 HEIGHT=1 ALT=""></TD>
		<TD width="14">
			<IMG SRC="images/spacer.gif" WIDTH=14 HEIGHT=1 ALT=""></TD>
		<TD width="47">
			<IMG SRC="images/spacer.gif" WIDTH=46 HEIGHT=1 ALT=""></TD>
		<TD width="32">
			<IMG SRC="images/spacer.gif" WIDTH=31 HEIGHT=1 ALT=""></TD>
		<TD width="138">
			<IMG SRC="images/spacer.gif" WIDTH=138 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=177 HEIGHT=1 ALT=""></TD>
	</TR>
</TABLE>
<!-- End ImageReady Slices -->

</BODY>
</HTML>