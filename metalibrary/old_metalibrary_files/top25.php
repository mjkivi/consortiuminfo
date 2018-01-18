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
  <td height="88" bgcolor="#A5DBC6"><?php include 'logo.php'; ?></td>
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
<td width="177" bgcolor="#D9F0E7" valign="top">  <table width="194" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="174" valign="top" bgcolor="#A5DBC6"><div align="center" class="style1">Browse</div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><span class="style1"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
      <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_library", $db);

$result = mysql_query("SELECT * FROM parent ORDER BY pname ASC", $db);
echo "<table border=0 cellspacing=0 cellpadding=0>\n";


while ($myrow = mysql_fetch_array($result)) 

	{
	echo "<tr><td valign='top' width='9%'><b>&nbsp;&middot;</b></td>";
	echo "<td valign='top' width='91%'><span class='style1'><b><a href='/metalibrary/bycat.php?PID=".$myrow["pid"]."'>".$myrow["pname"]."</a></b></span>";
	

}

echo "</table>";

?>
    </font></strong></font></strong></span></span></td>
  </tr>
</table>
  <br>
  <a href="/bulletins/"><img src="/images/csbsm.gif" width="177" height="75" border="0"></a><br>
</td><td width="10" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="10" height="1" border="0" alt=""></td><td width="594" bgcolor="#D9F0E7">
<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#9cbee6"><tr><td bgcolor="#FFFFFF">
<table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#ffffff"><tr><td height="46">
<center>
  <p><strong>25 Most Accessed MetaLibrary Articles</strong></p>
  </center></td>
</tr></table></td></tr></table>
<br><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr>
  <td valign="top" bgcolor="#FFFFFF"> <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>      
      <tr>
        <td>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
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

$SQL="SELECT * FROM entries GROUP BY entries.id ORDER BY entries.accessed DESC LIMIT 25";

// Run The Query With a Limit to get result 
$SQL_Result=mysql_db_query($DB_Name, $SQL); 
$SQL_Rows=mysql_num_rows($SQL_Result); 
#echo "$SQL";
// function to format mySQL DATE values
function fixDate($val)
{
//split it up into components
$arr = explode(" ", $val);
$datearr = explode("-", $arr[0]);
// create a timestamp with mktime(), format it with date() return  
date("d M Y", mktime(0, 0, 0, $datearr[1], $datearr[2], $datearr[0]));
} 
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
  $first3=$SQL_Array['first3'];
  $last3=$SQL_Array['last3'];
    $first4=$SQL_Array['first4'];
  $last4=$SQL_Array['last4'];
    $first5=$SQL_Array['first5'];
  $last5=$SQL_Array['last5'];
    $first6=$SQL_Array['first6'];
  $last6=$SQL_Array['last6'];
    $first7=$SQL_Array['first7'];
  $last7=$SQL_Array['last7'];
  $cite=$SQL_Array['cite'];
  $added=$SQL_Array['added'];
  $terms=$SQL_Array['terms'];
  $accessed=$SQL_Array['accessed'];
  echo "<tr><td valign='top' width='10%'>";
  echo"</td>";

	
if
($cite=="1")
{ 	
echo "<td width='90%'>";
//echo "<img src='/metalibrary/images/$cite.gif'>&nbsp;";
			if($last<>"")
				echo "<span class='style1'><i>$last</i></span>";
						
			if($first<>""){
			echo "<span class='style1'><i>,&nbsp;$first</i></span>";
						if($first2=="")
			echo ".";		
	}
			if($first2<> ""){
			if($first3=="")
			echo "<span class='style1'><i>&nbsp;and&nbsp;</i></span>";
			else
			echo ",&nbsp;";
			echo "<span class='style1'><i>$first2 $last2</i></span>";
			if($first3=="")
			echo ".";				
							}
			
			if($first3<> ""){
			if($first4=="")
			echo "<span class='style1'><i>&nbsp;and&nbsp;</i></span>";
			else
			echo ",&nbsp;";
			echo "<span class='style1'><i>$first3 $last3</i></span>";
			if($first4=="")
			echo ".";	
			}
							
			if($first4<> ""){
			if($first5=="")
			echo "<span class='style1'><i>&nbsp;and&nbsp;</i></span>";
			else
			echo ",&nbsp;";
			echo "<span class='style1'><i>$first4 $last4</i></span>";
			if($first5=="")
			echo ".";	
			}
										
			if($first5<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first5 $last5</i></span>";
							
			if($first6<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first6 $last6</i></span>";
							
			if($first7<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first7 $last7</i></span>";
							
			echo "<span class='style1'>&nbsp;&quot;$title.&quot;&nbsp;<i>$sitename.</i>&nbsp;</span>";
			
			if($day<> "0")
			echo "<span class='style1'><i>$day&nbsp;</i></span>";
						
			if($month<> "")
			echo "<span class='style1'><i>$month&nbsp;</i></span>";
						
	
			if($year<> "")
			echo "<span class='style1'><i>$year.&nbsp;</i></span>";
						
}
//Begin the citation style for the journal style
elseif
($cite==2)
{
echo "<td width='90%'>";
//echo "<img src='/metalibrary/images/$cite.gif'>&nbsp;";
			if($last<>"")
				echo "<span class='style1'><i>$last</i></span>";
						
			if($first<>""){
			echo "<span class='style1'><i>,&nbsp;$first</i></span>";
						if($first2=="")
			echo ".";		
	}
			if($first2<> ""){
			if($first3=="")
			echo "<span class='style1'><i>&nbsp;and&nbsp;</i></span>";
			else
			echo ",&nbsp;";
			echo "<span class='style1'><i>$first2 $last2</i></span>";
			if($first3=="")
			echo ".";	
			}
							
			if($first3<> ""){
			if($first4=="")
			echo "<span class='style1'><i>&nbsp;and&nbsp;</i></span>";
			else
			echo ",&nbsp;";
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first3 $last3</i></span>";
			if($first4=="")
			echo ".";	
			}
							
			if($first4<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first4 $last4</i></span>";
										
			if($first5<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first5 $last5</i></span>";
							
			if($first6<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first6 $last6</i></span>";
							
			if($first7<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first7 $last7</i></span>";
						
			echo "<span class='style1'>&nbsp;&quot;$title.&quot;&nbsp;$source.&nbsp;</span>";
			
			if($day<> "0")
			echo "<span class='style1'><i>$day&nbsp;</i></span>";
						
			if($month<> "")
			echo "<span class='style1'><i>$month&nbsp;</i></span>";
						
	
			if($year<> "")
			echo "<span class='style1'><i>$year.&nbsp;</i></span>";

}
//Begin the style for the book style
elseif
($cite==3)
{						
//echo "<img src='/metalibrary/images/$cite.gif'>&nbsp;";
if($last<>"")
				echo "<td width='90%'><span class='style1'><i>$last</i></span>";
						
			if($first<>"")
			echo "<span class='style1'><i>,&nbsp;$first</i></span>";
						
	
			if($first2<> "")
			echo "<span class='style1'><i>and&nbsp;$first2 $last2</i></span>";
							
			if($first3<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first3 $last3</i></span>";
							
			if($first4<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first4 $last4</i></span>";
										
			if($first5<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first5 $last5</i></span>";
							
			if($first6<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first6 $last6</i></span>";
							
			if($first7<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first7 $last7</i></span>";
			
			echo "<span class='style1'>.&nbsp;$title.&nbsp;$year&nbsp;$source.&nbsp;</span>";
			
}
//Begin the style for the article/chapter in book format
elseif
($cite==4)
{						
//echo "<img src='/metalibrary/images/$cite.gif'>&nbsp;";
if($last<>"")
				echo "<td width='90%'><span class='style1'><i>$last</i></span>";
						
			if($first<>"")
			echo "<span class='style1'><i>,&nbsp;$first</i></span>";
						
	
			if($first2<> "")
			echo "<span class='style1'><i>and&nbsp;$first2 $last2</i></span>";
							
			if($first3<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first3 $last3</i></span>";
							
			if($first4<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first4 $last4</i></span>";
										
			if($first5<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first5 $last5</i></span>";
							
			if($first6<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first6 $last6</i></span>";
							
			if($first7<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first7 $last7</i></span>";
			
			echo "<span class='style1'>.&nbsp;&quot;$title.&quot;&nbsp;<i>$source&nbsp;$year.&nbsp;</i></span>";
			
}
//Begin the formatting for the magazine style
elseif
($cite==5)
{						
//echo "<img src='/metalibrary/images/$cite.gif'>&nbsp;";
if($last<>"")
				echo "<td width='90%'><span class='style1'><i>$last</i></span>";
if($last=="")
				echo "<td width='90%'><span class='style1'></span>";
						
			if($first<>"")
			echo "<span class='style1'><i>,&nbsp;$first</i></span>";
						
	
			if($first2<> "")
			echo "<span class='style1'><i>and&nbsp;$first2 $last2</i></span>";
							
			if($first3<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first3 $last3</i></span>";
							
			if($first4<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first4 $last4</i></span>";
										
			if($first5<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first5 $last5</i></span>";
							
			if($first6<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first6 $last6</i></span>";
							
			if($first7<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first7 $last7</i></span>";
			
			if($last<> "")
			echo "<span class='style1'>.</span>";
			
			echo "<span class='style1'>&nbsp;&quot;$title.</u>&quot;&nbsp;$source</span>";
			
}
//Begin the style for the government publication format
elseif
($cite==6)
{						
//echo "<img src='/metalibrary/images/$cite.gif'>&nbsp;";
if($last<>"")
				echo "<td width='90%'><span class='style1'><i>$last</i></span>";
						
			if($sitename<>"")
			echo "<span class='style1'><i>,&nbsp;$sitename.</i></span>";
				
			echo "<span class='style1'>.&nbsp;&quot;$title.</u>&quot;&nbsp;$source</span>";
			
}
//Begin the style for a lecture or speech
elseif
($cite==7)
{						
//echo "<img src='/metalibrary/images/$cite.gif'>&nbsp;";
				
			if($last<>"")
			echo "<td width='90%'><span class='style1'><i>$last</i>,</span>";
			
			if($first<>"")
				echo "<span class='style1'><i>&nbsp;$first</i></span>";
	
			if($first2<> "")
			echo "<span class='style1'><i>and&nbsp;$first2 $last2</i></span>";
							
			if($first3<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first3 $last3</i></span>";
							
			if($first4<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first4 $last4</i></span>";
										
			if($first5<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first5 $last5</i></span>";
							
			if($first6<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first6 $last6</i></span>";
							
			if($first7<> "")
			echo "<span class='style1'><i>&nbsp;and&nbsp;$first7 $last7</i></span>";
			
			echo "<span class='style1'>&nbsp;&quot;$title,&quot;&nbsp;$source&nbsp;";
			
			if($day<> "")
			echo "<span class='style1'><i>$day&nbsp;</i></span>";
			
			if($month<> "")
			echo "<span class='style1'><i>$month&nbsp;</i></span>";
			
			if($year<> "")
			echo "<span class='style1'><i>$year&nbsp;</i></span>";
		
			
}
//Begin the else statement that give the link to the full abstract						
	else 
	{
	echo "$cite";
	}
	if
	($accessed > 1){
	echo "&nbsp;<span class='style1'><i>[Accessed $accessed times]</i></span>";
	}
	echo "<br><span class='style1'><a href='/metalibrary/out2.php?EID=$id'>View Abstract</a></span>";
	echo "<p><p><p></tr>";
echo "<td></tr></tr><tr></tr></td><td>";
}//end of for statement



    
    
   // Close Database Connection 
mysql_close($Connection); 



?>
          </span>&nbsp;
            <tr>
              <td>            
            </table>
    </td>
</tr></table>
</td></tr></table><br>
<br></td><td width="14" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></form></body>
</html>