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
<form name="form1" method="get" action="http://search.Blossom.com/query/320">
<table border="0" cellpadding="0" cellspacing="0" width="840" align="center">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="840">

<tr><td width="100%">

<table border="0" cellpadding="0" cellspacing="0" width="762">

<tr>
  <td height="88" bgcolor="#A5DBC6"><img src="/images/newsheader.gif" width="762" height="120"></td>
</tr>
<tr><td width="100%" valign="top" bgcolor="#D9F0E7">

  <div align="center">
    <?php include '../tab/tab.php'; ?>
  </div></td></tr><tr><td width="100%" height="10" valign="top" bgcolor="#A5DBC6"><div align="right"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF" face="Arial"><b>

    </b></font></b></font></span>

        <table width="100%"  border="0" cellspacing="0" cellpadding="0">

          <tr>

            <td width="17%" bgcolor="#D9F0E7"><div align="center" class="style1"><font face=arial size=-1>&nbsp;<a 
            href="/">Home</a> &gt; <a href="/news/">News</a><b> </b></font></div></td>

            <td width="75%" bgcolor="#D9F0E7"><div align="center"><span class="medium"><font color="#206260" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font><font face="Arial">
                <input type=text name=key>
                <input type=submit value=Search name="submit">
                <a href="/search/"><font size="2" face="Arial, Helvetica, sans-serif"><b>Advanced </b></font></a><b></b></font></b></font></span></div></td>

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

<td width="140" bgcolor="#D9F0E7" valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td width="100%" bgcolor="#FFFFFF"><span class="style11"><strong><font size="2" face="Arial, Helvetica, sans-serif"><strong><font size="2" face="Arial, Helvetica, sans-serif">
        <?php include('menu.php'); ?>
      </font></strong></font></strong></span> </td>
    </tr>
  </table> 
  <br>
  <div align="center"><br>
    <br>
  </div>
  </td>
<td width="10" bgcolor="#D9F0E7"></td><td width="594" bgcolor="#D9F0E7">

    <table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td bgcolor="#000000">

<table border="0" cellpadding="0" cellspacing="1" width="100%"><tr><td valign="top" bgcolor="#FFFFFF">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

<tr valign="top"><td width="100%" align="center" bgcolor="#FFFFFF"><table width=98% cellpadding=0 cellspacing=0 border=0>
  <tr valign=top>
    <td valign="top" class=article><font size="2" face="Arial, Helvetica, sans-serif">&nbsp; </font><font size="2" face="Arial, Helvetica, sans-serif">&nbsp; </font>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#C4EECE"><font size="2" face="Arial, Helvetica, sans-serif">
              <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_nnews", $db);

$result = mysql_query("SELECT cname FROM ((child INNER JOIN category ON child.child=category.cid) INNER JOIN parent on category.pid=parent.pid) WHERE child.child='".$_GET["CID"]."'", $db);


while ($myrow = mysql_fetch_array($result)) 

	{

	echo "<font size=3><b>".$myrow["cname"]."</font></b>";
	
	

	

}



?>
            </font><font size="3" face="Arial, Helvetica, sans-serif">&nbsp;</font></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="100%"><font size="2" face="Arial, Helvetica, sans-serif">
                  <?php

$db = mysql_connect("localhost", "consor5", "bgt667");

mysql_select_db("consor5_nnews", $db);

$result = mysql_query("SELECT items.ID, items.its, items.headline, items.author, items.source, items.date1, items.story, items.lkintro, items.link1, items.lkintro2, items.link2, items.link3, items.date2, items.blog, items.short_story, items.sort, lookup.cid, lookup.entry  FROM ((child INNER JOIN lookup on child.child = lookup.cid) INNER JOIN items on lookup.entry = items.ID) WHERE date2<=curdate() AND child.child='".$_GET["CID"]."' ORDER BY date2 DESC, sort DESC", $db);

while ($myrow = mysql_fetch_array($result)) 

	{
//Start the if statement- if it isn't a blog entry
	$blog=$myrow["blog"];
$author=$myrow["author"];	
$short_story=$myrow["short_story"];
if($blog=='No'){
	
$author=$myrow["author"];
echo "<a name='#".$myrow["ID"]."'></a><i><font size=2>".$myrow["its"]."</i><p>";
echo "<b><a href=".$myrow["link1"]." target='_hdl' style='color:#08305A'>".$myrow["headline"]."</b></a><br>";
if ($author<>""){
echo "<b>".$myrow["author"]."</b><br>";
}
echo "<font size=2><b>".$myrow["source"]." ".$myrow["date1"]."</b>&nbsp;".$myrow["story"]." <a href=".$myrow["link1"].">...Full Story</a>";
	echo "<br><br>";
echo "<center><img src=/bulletins/sep.gif></center>";
}
//Start the if statement- if this IS a blog entry

if($blog=='Yes'){
$short_story=$myrow["short_story"];
echo "<p><table width='100%'  border='1' cellpadding='1' cellspacing='0' bordercolor='#000000'><tr>";
echo "<td bordercolor='#003366' bgcolor='003366'><div align='left' class='style9'><font color='#FFFFFF'><i>From the Standards Blog</i></font> </div></td></tr>";
echo "<tr><td>";
  
echo "<a name='#".$myrow["ID"]."'></a><i><font size=2>".$myrow["its"]."</i><p>";
echo "<center><b>".$myrow["headline"]."</b></center>";
echo "<br><font size=2>&nbsp;<b>".$myrow["date1"]."</b>&nbsp;".$myrow["short_story"]."<a href='/newsblog/blog.php?ID=".$myrow["ID"]."'>...Full Story</a>";
echo "<br><br>";
echo "<div align='right'><a href='/newsblog'>Go to Standards Blog</a>&nbsp;&nbsp;</div>";
echo "</td> </tr></table><br><center><img src=/bulletins/sep.gif></center>";
}
	}
?>
</font></td>
                </tr>
            </table></td>
          </tr>
        </table>
        <font size="2" face="Arial, Helvetica, sans-serif">&nbsp; </font>
    </td>
  </tr>
  <tr valign=top>
    <td valign="top" class=article><div align="center">
      <?php include '../tab/footer.php'; ?>
    </div></td>
  </tr>
</table></td></tr></table>


</td></tr></table>

</td></tr></table><br>

<br></td><td width="14" bgcolor="#D9F0E7"><br><br></td></tr></table>

<br><center><font class="footmsg">&nbsp;

</font>

</form></body>

</html>