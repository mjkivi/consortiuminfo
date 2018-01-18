<?php
session_start();
?><HTML>
<HEAD>
<TITLE>Welcome to the Boston Chapter of the Association of Legal Administrators</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
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
.style5 {font-weight: bold}

-->
</style>
</HEAD>
<BODY BGCOLOR=#00244A vlink="#000000" alink="#FF0000" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<form method=GET action="http://www.google.com/search">
<!-- ImageReady Slices (best top.psd) -->
<br>
<TABLE WIDTH=798 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
	<TR valign="top" bgcolor="#FFFFFF">
		<TD COLSPAN=12><div align="left"></div></TD>
	</TR>
	<TR valign="top">
		<TD width="8" rowspan="3" valign="top" bgcolor="#DEEFF7">&nbsp;			</TD>
	  <TD width="143" valign="top" bgcolor="#DEEFF7"><div align="left"></div></TD>
		<TD width="13" rowspan="3" bgcolor="#FFFFFF"><div align="center"><img src="/images/black.jpg" width="1" height="600"> </div></TD>
		<TD COLSPAN=7 rowspan="3" valign="top" bgcolor="#FFFFFF"><font color="003366"><b><font face="Arial, Helvetica, sans-serif" size="3"><em>Members Section </em></font></b></font><br>
		  <br>
		  <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td><div align="right"><?php
echo "<font size='2' face='Arial, Helvetica, sans-serif'>";
echo "<div align='right'>";
echo( date("F d, Y") );
echo "&nbsp;&nbsp;&nbsp;</div>";
?></div></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="top"><?php
if($_SESSION['password'] <>""){
echo "<font size='2' face='Arial, Helvetica, sans-serif'>";
echo "Welcome ". $_SESSION['username'] ." ". $_SESSION['last'] ."! You have made it to the members area!<br />";
echo "- <a href='/edit.php?AID=".$_SESSION['mid']."'>Edit your profile</a>";
}
if($_SESSION['password'] ==""){
echo "<font size='2' face='Arial, Helvetica, sans-serif'>";
echo "You are not currently logged in. ";
}


if($_SESSION['password'] <>""){
	echo "</td><td>&nbsp;</td></tr><tr><td colspan='3'><table width='100%'  border='0' cellspacing='0' cellpadding='0'>";
	echo "<tr> <td width='59%'><font color='003366'><font color='003366'><font face='Arial, Helvetica, sans-serif' size='3'>";
	echo "<b><a href='/forums/' target='_off'>Bulletin Board</a></b></font></font><br><font size='2' face='Arial, Helvetica, sans-serif'>";
	echo "See what the buzz is, post information, or create your own topic!</font></font><font color='003366'>&nbsp;</font></td>";          
	echo "<td width='41%'><div align='right'><a href='/members/forum/'><img src='/images/bboard.jpg' width='142' height='90' border='0'>";
	echo " </a></div></td></tr><tr><td colspan='2'><div align='center'><img src='/bottom_line.gif' width='400' height='6'></div></td>";
	echo "</tr><tr><td><p><font color='003366'><font face='Arial, Helvetica, sans-serif' size='3'><b><a href='/members/directory.php'>";
	echo "Member Directory</a></b></font></font><br><font color='003366'><font face='Arial, Helvetica, sans-serif' size='2'>";
	echo "Search the directory on-line or view the <a href='/memberdirectory.pdf' target='_blank'>entire Members Directory PDF</a>.</font></font></p>";
	echo "<p><font color='003366' face='Arial, Helvetica, sans-serif size='3'><a href='/members/firms.php'><b>Firm Directory</b></a></font>";
	echo "<font color='003366' size='2' face='Arial, Helvetica, sans-serif'><br>All Boston member firms </font></p></td><td><div align='right'>";
	echo "<a href='/members_directory.asp'><img src='/images/listing.jpg' width='142' height='162' border='0'></a></div></td></tr><tr><td colspan='2'>";
	echo "<div align='center'><img src='/bottom_line.gif' width='400' height='6'></div></td></tr><tr><td><font color='003366'>";
	echo "<font face='Arial, Helvetica, sans-serif' size='2'><a href='/members/official_documents.php'><strong><font size='3'>";
	echo "Official ALA Boston Documents<br></font></strong></a></font></font><font color='003366'><font face='Arial, Helvetica, sans-serif' size='2'>";
	echo "Forms, meeting minutes, bylaws, and other official ALA documents.</font></font></td><td><div align='right'><a href='/official_documents.asp'>";
	echo "<img src='/images/docs.jpg' width='142' height='75' border='0'></a></div></td></tr><tr><td colspan='2'><div align='center'>";
	echo "<img src='/bottom_line.gif' width='400' height='6'></div></td></tr><tr><td><font color='003366'><font color='003366'>";
	echo "<font face='Arial, Helvetica, sans-serif' size='3'><b><a href='/members/handouts.php'>Meeting Handouts</a> <br></b></font><font color='003366'>";
	echo "<font face='Arial, Helvetica, sans-serif' size='2'>Handouts from meetings, powerpoint slides, etc.</font></font></font></font></td><td>";
	echo "<a href='/members/handouts.php'><img src='/images/handout.jpg' width='142' height='95' border='0'></a></td></tr></table>";
	}
?>
   
              
              
                
                
              
                
                
                
              
            
              <!--#include file="footer.htm" -->
            </td>
            </tr>
          <tr>
            <td width="10">&nbsp;</td>
            <td width="438">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
        </table>		  
		  <p align="left">&nbsp;</p>
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
			<IMG SRC="images/spacer.gif" WIDTH=8 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=124 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=13 HEIGHT=1 ALT=""></TD>
		<TD width="125">
			<IMG SRC="images/spacer.gif" WIDTH=115 HEIGHT=1 ALT=""></TD>
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
</form>	
</BODY>
</HTML>