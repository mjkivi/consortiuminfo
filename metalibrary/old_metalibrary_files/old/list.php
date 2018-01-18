<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Consortiuminfo.org Presents Biff's Technology Bookstore</title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT">
<META NAME="DISTRIBUTION" CONTENT="GLOBAL">
<META NAME="AUTHOR" CONTENT="GUNet">


<style type="text/css">

<!--































  A:link {color:"blue";}















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

.style5 {

	color: #FF0000;

	font-weight: bold;

}

.style7 {

	color: #333399;

	font-weight: bold;

	font-size: 16px;

}

.style10 {color: #FF0000; font-style: italic; font-size: 16px; font-weight: bold; }
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style11 {font-size: 12px; font-style: normal; line-height: normal; font-variant: normal; text-transform: none; color: #000000; font-family: Arial, Helvetica, sans-serif;}































-->
</style>


</head>

<body text="#000000" link="0000ff">
<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">
<tr><td width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="840">
<tr><td width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="762">
<tr>
  <td height="88" bgcolor="#A5DBC6"><img src="/images/metalibheader.gif" width="762" height="120"></td>
</tr>
<tr><td width="100%" bgcolor="#D9F0E7">
  <div align="center">
    <?php include '../tab/tab.php'; ?> 
    </div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>
    </b></font></b></font></span>
       <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr valign="top" bgcolor="#D9F0E7" class="style1">
            <form name="find" id="find" method="GET" action="/books/search/index.php">
            <td width="20%" valign="middle" bgcolor="#D9F0E7"><div align="center" class="style1"><a href="/">Home</a> &gt; <a href="/metalibrary/">MetaLibrary</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
            <td>
                    <div align="center" class='style1'>Search Articles &nbsp;
                        <input name="SEARCH" type="text" id="SEARCH" />
                        <input name="sumbit" type="submit" id="SEARCH" />
                    </div>
              </td>  </form>
          </tr>
        </table>
        <span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>        </b></font></b></font></span>
  </div></td></tr></table>
</td></tr><tr><td width="100%"><table width="762" cellpadding="0" bgcolor="#A5DBC6" cellspacing="0" border="0">
<tr valign="top">
<td width="11" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""></td>
<td width="133" bgcolor="#D9F0E7" valign="top"><table width="130" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000"><tr>
  <td width="126" valign="top" bgcolor="#A5DBC6">
    <div align="center" class="style1">Subcategories</div></td></tr></table>
<table width="133" border="0" cellpadding="0" cellspacing="1">
<tr><td width="133" bgcolor="#000000"><table width="129"  border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="#000000">
  <tr>
    <td width="127" height="22" valign="top" bgcolor="#FFFFFF"><span class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
<?php include 'bycatnav.php'; ?>    </font></strong></font></strong></font></strong></font></strong></span></span></td>
  </tr>
</table>
</td>
</tr></table><br>
<table width="99%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td bgcolor="#A5DBC6"> <div align="center" class="style11">Links </div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="style11">&nbsp;&nbsp;<a href="/subscribe/">Subscribe to Bulletins  </a></span><br></td>
  </tr>
</table>
<br>
</td>
<td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="594" bgcolor="#D9F0E7">
<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6"><tr><td bgcolor="#FFFFFF">
<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#ffffff"><tr><td height="46">
<center>
  <p align="center" class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
    <?php

$db = mysql_connect("localhost", "consor5", "bgt667");
$prevpid="";
mysql_select_db("metalib", $db);

$result = mysql_query("SELECT  parent.pid, parent.pname, child.cname, child.sort, child.child, category.cid, category.pid FROM ((child INNER JOIN category on child.child = category.cid) INNER JOIN parent on category.pid = parent.pid) WHERE category.pid='".$_GET["PID"]."' ORDER BY parent.pname, child.sort, child.cname", $db);

while ($myrow = mysql_fetch_array($result)) 
{
$catsid=$myrow["pid"]."-".$myrow["cid"];
$curpid=$myrow["pid"];
$pos=strpos($catsid,"-");
$pid1=substr($catsid, 0, $pos);
$cid1=substr($catsid, $pos+1, strlen($catsid)-($pos+1));
if
($curpid <> $prevpid){ 
echo "<font face='Arial' size='2'>";
echo "<b><br>".$myrow["pname"]."&nbsp;(All Titles)<br></b>";
}

$prevpid=$curpid;
}

?>
  </font></strong></font></strong></font></strong></font></strong></span> </p>
  </center></td></tr></table></td></tr></table>
<br><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr>
  <td valign="top" bgcolor="#FFFFFF"> <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><span class="style1">
          <?php 
// Set Script Variables 
$DB_Host="localhost"; 
$DB_Name="metalib"; 
$DB_User="consor5"; 
$DB_Pass="bgt667"; 
$Per_Page=500; 
// Open MySQL Connection 
$Connection=mysql_connect($DB_Host, $DB_User, $DB_Pass); 

// Run The Query Without a 
  // Limit to get Total result 
$SQL="SELECT COUNT(*) AS Total FROM (entries INNER JOIN lookup on entries.id = lookup.entry) ORDER BY entries.last";                
$SQL_Result=mysql_db_query($DB_Name, $SQL); 
$SQL_Result_Array=mysql_fetch_array($SQL_Result); 
$Total=$SQL_Result_Array['Total']; 
$Result_Set=$_GET["Result_Set"];

// Create a new SELECT Query with the 
  // ORDER BY clause and without the COUNT(*) 
 # echo "$Result_Set";
// Append a LIMIT clause to the SQL statement 
if (empty($Result_Set))

{ echo "";
   $Result_Set=0;
   }
$SQL="SELECT * FROM entries ORDER BY id ASC LIMIT $Result_Set, $Per_Page";

// Run The Query With a Limit to get result 
$SQL_Result=mysql_db_query($DB_Name, $SQL); 
$SQL_Rows=mysql_num_rows($SQL_Result); 
#echo "$SQL";
// Display Results using a for loop 
for ($a=0; $a < $SQL_Rows; $a++) 
    { 
  $SQL_Array=mysql_fetch_array($SQL_Result);
 
   $title=$SQL_Array['title'];
   $id=$SQL_Array['id'];
    $first=$SQL_Array['first'];
  $last=$SQL_Array['last'];
  $pubdate=$SQL_Array['pubdate'];
  $month=$SQL_Array['month'];
  $day=$SQL_Array['day'];
  $year=$SQL_Array['year'];
  $link=$SQL_Array['link'];
  $source=$SQL_Array['source'];
  $sitename=$SQL_Array['sitename'];
  $abstract=$SQL_Array['source'];
  $postdate=$SQL_Array['postdate'];
  $atitle=$SQL_Array['atitle'];
  
	echo "<tr><td valign='top' width='10%'>";
  	echo"</td>";
	echo "<td width='90%'><span class='style1'><b>$id</b>&quot;$title&quot;</span><br>";
	
	echo "<p><p><p></tr>";
echo "<td></tr></tr><tr></tr></td><td><center>";
if
($Total < 1){
echo "<b><span class='style1'>There are currently no books in this category.</span>";
}
   } 
    
   // Create Next / Prev Links and $Result_Set Value 
if ($Total>0) 
   { 
   if ($Result_Set<$Total && $Result_Set>0) 
      { 
      $Res1=$Result_Set-$Per_Page; 
      echo "<td><A HREF=\"bycat.php?Result_Set=$Res1&PID=$PID\">Previous Page</A> "; 
// note: you hadn't done any \" at all, and also <;<; at previous didn;t seem to work either... 
      } 
   // Calculate and Display Page # Links 
   $Pages=$Total / $Per_Page; 
   if ($Pages>1) 
      { 
      for 
($b=0,$c=1; $b < $Pages; $b++,$c++) 
          { 
          $Res1=$Per_Page * $b; 
          echo "<A HREF=\"bycat.php?Result_Set=$Res1&PID=$PID\"> $c</A> \n"; 
          } 
      } 
   if ($Result_Set>=0 && $Result_Set<$Total) 

     { 
      $Res1=$Result_Set+$Per_Page; 
      if ($Res1<$Total) 
          
{ 
         echo " <A HREF=\"bycat.php?Result_Set=$Res1&PID=$PID\"> Next Page </A>"; 
         } 
      } 
   } 
    
    
   // Close Database Connection 
mysql_close($Connection); 



?>
          </span>&nbsp;
            </table>
    <br>
</td>
</tr></table>
</td></tr></table><br>
<br></td><td width="14" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></body>
</html>