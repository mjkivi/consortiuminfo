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
mysql_select_db("consor5_library", $db);

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
echo "<font face='Arial' size='3'>";
echo "<b>".$myrow["pname"]."&nbsp;(All Titles)<br></b>";
}

$prevpid=$curpid;
}

?>
  </font></strong></font></strong></font></strong></font></strong></span> </p>
  </center></td></tr></table></td></tr></table>
<br><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">
<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr>
  <td valign="top" bgcolor="#FFFFFF"><table width="100%"  border="1" cellspacing="0" cellpadding="1">
      <tr>
        <td bgcolor="#E9FBFE">
		
		  <?php 
		echo "<div align='center'><span class='style11'><strong>Sort Options:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>";
		echo "&nbsp;&nbsp;<a href='/metalibrary/bycat.php?PID=$PID'>By Author</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<a href='/metalibrary/bycat-title.php?PID=$PID'>By Title</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "By Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "<a href='/metalibrary/bycat-accessed.php?PID=$PID'>By # Times Accessed</a></span></div>";
		?>
		</td>
      </tr>
    </table>
  
    <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>      
      <tr>
        <td class="style11">      
      <tr>
        <td>&nbsp;&nbsp;&nbsp;      
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

// Run The Query Without a 
  // Limit to get Total result 
$SQL="SELECT DISTINCT entries.id FROM (entries INNER JOIN lookup on entries.id = lookup.entry) WHERE lookup.pid='".$_GET["PID"]."' ORDER BY entries.last";                
$SQL_Result=mysql_db_query($DB_Name, $SQL); 
$SQL_Result_Array=mysql_fetch_array($SQL_Result); 
$Total=mysql_num_rows($SQL_Result); 
$Result_Set=$_GET["Result_Set"];

// Create a new SELECT Query with the 
  // ORDER BY clause and without the COUNT(*) 
 # echo "$Result_Set";
// Append a LIMIT clause to the SQL statement 
if (empty($Result_Set))

{ echo "";
   $Result_Set=0;
   }
$SQL="SELECT * FROM (entries INNER JOIN lookup on entries.id = lookup.entry) WHERE lookup.pid='".$_GET["PID"]."' GROUP BY entries.id ORDER BY entries.year DESC, entries.month DESC, entries.day DESC, entries.last DESC LIMIT $Result_Set, $Per_Page";

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
	echo "<br><span class='style1'><a href='/metalibrary/out.php?EID=$id&PID=$PID'>View Abstract</a></span>";
	echo "<p><p><p></tr>";
echo "<td></tr></tr><tr></tr></td><td>";
}//end of for statement
if
($Total < 1){
echo "<b><span class='style1'>There are currently no books in this category.</span>";
			}
  //there was one } here now it's gone.
    //echo "end of for loop";
   // Create Next / Prev Links and $Result_Set Value 
   if
				($Result_Set=="0"){
				echo "<td>";
				}
if ($Total>0) 
   { 
   			if ($Result_Set<$Total && $Result_Set>0) 
   			   { 
    			  $Res1=$Result_Set-$Per_Page; 
   				   echo "<A HREF=\"bycat-date.php?Result_Set=$Res1&PID=$PID\">Previous Page</A> "; 
// note: you hadn't done any \" at all, and also <;<; at previous didn;t seem to work either... 
     			} 
   // Calculate and Display Page # Links 
      if
				($Result_Set<>"0"){
				echo "<td>";
				}
   $Pages=$Total / $Per_Page; 
if ($Pages>1) 
		      { 
      			for 
				($b=0,$c=1; $b < $Pages; $b++,$c++) 
          	     { 
        		$Res1=$Per_Page * $b; 
		        echo "<A HREF=\"bycat-date.php?Result_Set=$Res1&PID=$PID\"> $c</A> \n"; 
         		 } //end of for loop
     		 } 
 if ($Result_Set>=0 && $Result_Set<$Total) 
    		 { 
  			    $Res1=$Result_Set+$Per_Page; 
     			 if ($Res1<$Total) 
					{ 
       				  echo " <A HREF=\"bycat-date.php?Result_Set=$Res1&PID=$PID\"> Next Page </A>"; 
       				} 
    	    } 
   } //end of total > 0
    
    
   // Close Database Connection 
mysql_close($Connection); 



?>
          </span>&nbsp;
            <tr>
              <td height="2">            
            </table>
    </td>
</tr></table>
</td></tr></table><br>
<br></td><td width="14" bgcolor="#D9F0E7"><img src="themes/DeepBlue/images/pixel.gif" width="6" height="1" border="0" alt=""><br><br></td></tr></table>
<br><center><font class="footmsg">
</font>
</center></form>
<table border=0 cellspacing=0 cellpadding=0 align=center>
  <script language="javascript">
var success=0; cRef=""; cRefType=""; cPage="";
var L10qstr,L10pc,L10ref,L10a,L10pg; L10pg=document.URL.toString(); L10ref=document.referrer;
if(top.document.location==document.referrer || (document.referrer == "" && top.document.location != "")) {L10ref=top.document.referrer;}
L10qStr = "pg="+escape(L10pg)+"&ref="+escape(L10ref)+"&os="+escape(navigator.userAgent)+"&nn="+escape(navigator.appName)+"&nv="+escape(navigator.appVersion)+"&nl="+escape(navigator.language)+"&sl="+escape(navigator.systemLanguage)+"&sa="+success+"&cR="+escape(cRef)+"&cRT="+escape(cRefType)+"&cPg="+escape(cPage);
if(navigator.appVersion.substring(0,1) > "3") { L10d = new Date(); L10qStr = L10qStr+"&cd="+screen.colorDepth+"&sx="+screen.width+"&sy="+screen.height+"&tz="+L10d.getTimezoneOffset();}
<!-- The L10 Hit Counter logo and links must not be removed or altered -->
if((location.href.substr(0,6)=="https:") || (location.href.substr(0,6)=="HTTPS:")) { L10pc="https"; } else { L10pc="http"; }
document.write('<tr><td><img border=0 hspace=0 vspace=0 width=25 height=25 src="'+L10pc+'://consortiuminfo.org/L10Apps/L10HC_Counter.php?'+L10qStr+'" alt="LevelTen Hit Counter 3.15"></td>');
</script>
  <noscript>
  <tr>
    <td><img border=0 hspace=0 vspace=0 width=25 height=25 src="http://consortiuminfo.org/L10Apps/L10HC_Counter.php?acct=." alt="L10 Web Stats Reporter 3.15"></td>
  </noscript>
  <!-- The credit logos must not be removed -->
  <td><img border='0' src='http://consortiuminfo.org/L10Apps/L10HC_Img_R.gif' width='70' height='25' alt='LevelTen Hit Counter - Free PHP Web Analytics Script'></td>
  </tr><tr>
    <td colspan=2><img border='0' src='http://consortiuminfo.org/L10Apps/L10HC_Img_B.gif' width='95' height='9' alt='LevelTen dallas web development firm - website design, flash, graphics & marketing'></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>