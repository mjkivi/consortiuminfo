<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>The Consortiuminfo.org MetaLibrary In Partnership with Sun Microsystems</title>
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

<body text="#000000" link="0000ff"><form name="find" id="find" method="GET" action="/metalibrary/search/index.php">
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
           
            <td width="20%" valign="middle" bgcolor="#D9F0E7"><div align="center" class="style1"><a href="/">Home</a> &gt; <a href="/metalibrary/">MetaLibrary</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
            <td>
                    <div align="center" class='style1'>Search Articles &nbsp;
                        <input name="SEARCH" type="text" id="SEARCH" />
                        <input name="sumbit" type="submit" id="SEARCH" />
                    </div>
              </td>  
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
    <strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
    <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_library", $db);

$result = mysql_query("SELECT * FROM parent ORDER BY pname ASC", $db);
echo "<table border=0 cellspacing=0 cellpadding=0>\n";


while ($myrow = mysql_fetch_array($result)) 

	{
	echo "<tr><td valign='top' width='9%'><b>&nbsp;&middot;</b></td>";
	echo "<td valign='top' width='60%'><span class='style1'><b><a href='/metalibrary/bycat.php?PID=".$myrow["pid"]."'>".$myrow["pname"]."</a></b></span>";
	

}

echo "</table>";

?>
    </font></strong></font></strong> </font></strong></font></strong></font></strong></font></strong></span></span></td>
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
<td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td>
<td width="594" bgcolor="#D9F0E7">

  <table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr>
  <td valign="top" bgcolor="#FFFFFF"> <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;&nbsp;      
      <tr>
        <td><span class="style1">
          <?php 
// Set Script Variables 
$DB_Host="localhost"; 
$DB_Name="consor5_library"; 
$DB_User="consor5"; 
$DB_Pass="bgt667"; 
$Per_Page=10; 
// Open MySQL Connection 
$Connection=mysql_connect($DB_Host, $DB_User, $DB_Pass); 
                
// Create a new SELECT Query with the 
  // ORDER BY clause and without the COUNT(*) 
 # echo "$Result_Set";
// Append a LIMIT clause to the SQL statement 

$SQL="SELECT * FROM entries WHERE entries.id='".$_GET["EID"]."'";

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
  $abstract=$SQL_Array['abstract'];
  $postdate=$SQL_Array['postdate'];
  $atitle=$SQL_Array['atitle'];
   $first2=$SQL_Array['first2'];
  $last2=$SQL_Array['last2'];
   $atitle2=$SQL_Array['atitle2'];
    $first3=$SQL_Array['first3'];
  $last3=$SQL_Array['last3'];
   $atitle3=$SQL_Array['atitle3'];
    $first4=$SQL_Array['first4'];
  $last4=$SQL_Array['last4'];
   $atitle4=$SQL_Array['atitle4'];
    $first5=$SQL_Array['first5'];
  $last5=$SQL_Array['last5'];
   $atitle5=$SQL_Array['atitle5'];
    $first6=$SQL_Array['first6'];
  $last6=$SQL_Array['last6'];
   $atitle6=$SQL_Array['atitle6'];
    $first7=$SQL_Array['first7'];
  $last7=$SQL_Array['last7'];
   $atitle7=$SQL_Array['atitle7'];
   $cite=$SQL_Array['cite'];
   $ref=$SQL_Array['ref'];
   $accessed=$SQL_Array['accessed'];
   $terms=$SQL_Array['terms'];
   $institution=$SQL_Array['institution'];
   $amo=$SQL_Array['amo'];
   $aday=$SQL_Array['aday'];
   $ayear=$SQL_Array['ayear'];
  
	echo "<tr><td valign='top' width='10%'><b><span class='style1'>Title:</span></b>";
  	echo"</td>";
	echo "<td width='90%'><span class='style1'>&quot;$title&quot;</span><br>";
//	if
//($last <> ""){
//	echo "<span class='style1'>$last,</span>";
	if
($first <> ""){ 
	echo "<br><tr><td valign='top'>";
	if ($last2==""){
	echo "<b><span class='style1'>Author:</span></b>";
	}
	if ($last2 <> ""){
	echo "<b><span class='style1'>Authors:</span></b>";
	}
	echo "</td>";
	echo "<td><span class='style1'>$first&nbsp;$last &nbsp;<i>$atitle</i></span>";
	}
if
($first2 <> ""){ 
	echo "<br><span class='style1'>$first2&nbsp;$last2 &nbsp;<i>$atitle2</i></span>";
	}
if
($first3 <> ""){ 
	echo "<br><span class='style1'>$first3&nbsp;$last3 &nbsp;<i>$atitle3</i></span>";
	}	
if
($first4 <> ""){ 
	echo "<br><span class='style1'>$first4&nbsp;$last4 &nbsp;<i>$atitle4</i></span>";
	}	
if
($first5 <> ""){ 
	echo "<br><span class='style1'>$first5&nbsp;$last5 &nbsp;<i>$atitle5</i></span>";
	}
if
($first6 <> ""){ 
	echo "<br><span class='style1'>$first6&nbsp;$last6 &nbsp;<i>$atitle6</i></span>";
	}
if
($first7 <> ""){ 
	echo "<br><span class='style1'>$first7&nbsp;$last7 &nbsp;<i>$atitle7</i></span>";
	}
echo "<p>";
if
($sitename <>""){
	echo "<tr><td valign='top' width='10%'><b><span class='style1'>Source:</span></b>";
  	echo"</td>";
	echo "<td width='90%'><span class='style1'>$sitename</span><br><p>";
}
	echo "<tr><td valign='top' width='10%'><b><span class='style1'>Date:</span></b>";
  	echo"</td>";
	echo "<td width='90%'>";
if
($day<> "0"){
	echo "<span class='style1'>$day&nbsp;</span>";
	}
if
($month<> "0"){
	echo "<span class='style1'>$month&nbsp;</span>";
	}
if
($year<> "0"){
	echo "<span class='style1'>$year&nbsp;</span><br><p>";
	}
	
if
($terms=="0"){
	echo "<tr><td valign='top' width='10%'><b><span class='style1'>Terms:</span></b>";
  	echo"</td>";
	echo "<td width='90%'><span class='style1'>Free Access</span><br><p>";
	}
if
($terms=="1"){
	echo "<tr><td valign='top' width='10%'><b><span class='style1'>Terms:</span></b>";
  	echo"</td>";
	echo "<td width='90%'><span class='style1'>Payment or membership required</span><br>";
	}
	
	echo "<p><tr><td valign='top' width='10%'><b><span class='style1'>Abstract:</span></b>";
  	echo"</td>";
	echo "<td width='90%'><span class='style1'>$abstract</span><p>";
	
if 
($link <> ""){
		echo "<p><tr><td valign='top' width='10%'><b><span class='style1'>Link:</span></b>";
  		echo"</td>";
		echo "<td width='90%'><span class='style1'><a href='$link'>Full Text</a></span>";
		}
	echo "<p><p><p></tr>";
echo "<td></tr></tr><tr></tr></td><td><center>";
   } 
    
  
    
    
   // Close Database Connection 
mysql_close($Connection); 



?>
          </span>&nbsp;
            <tr>
              <td><span class="style1">
               
              </span>            
            </table>
    <br>
</td>
</tr></table>
</td></tr></table><br>
<br></td><td width="14" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></form></body>
</html>