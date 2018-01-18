<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Common Escape Characters</title>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-size: 14px}
.style3 {font-size: 14; }
-->
</style>
</head>

<body>
<p class="style1">Here is a list of common characters that cause MySQL to choke during an import. To minimize this and ensure a clean(er) import, please do the following:</p>
<p class="style1">1. Save a copy of the spreadsheet (just the sheet, not the workbook) as a .csv (comma delimited file)</p>
<p class="style1">2. Open the .csv file in an editor such as Word or WordPad. </p>
<p class="style1">3. Use the find and replace function to find the characters listed below, and replace them with the fix below. </p>
<table width="50%"  border="0" cellspacing="0" cellpadding="1">
  <tr bgcolor="#DAFEE6">
    <td width="22%" class="style1"><div align="center"><strong>Character</strong></div></td>
    <td width="62%" class="style1"><div align="center"><strong>Example</strong></div></td>
    <td width="16%" class="style1"><div align="center"><strong>Fix</strong></div></td>
  </tr>
  <tr>
    <td class="style3"><div align="center" class="style3">&ouml;</div></td>
    <td class="style1">Bj&ouml;rn </td>
    <td class="style1">&amp;ouml;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center" class="style3">&copy;</div></td>
    <td class="style1">Java&copy;</td>
    <td class="style1">&amp;copy;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center"><span class="style2"><span class="style3">&aacute;</span></span></div></td>
    <td class="style1">Kvikmyndir <b>&aacute;</b> Strik.is </td>
    <td class="style1">&amp;aacute;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center"><span class="style2"><span class="style3">&reg;</span></span></div></td>
    <td class="style1">Tradmark<span class="style2"><span class="style3"> &reg;</span></span></td>
    <td class="style1">&amp;reg;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&egrave;</div></td>
    <td class="style1"><font size="-1">Vita <b>&egrave;</b> bella</font> </td>
    <td class="style1">&amp;egrave;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&ecirc;</div></td>
    <td class="style1">b&ecirc;te</td>
    <td class="style1">&amp;ecirc;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&eacute;</div></td>
    <td class="style1"><i>&eacute;xito</i></td>
    <td class="style1">&amp;eacute;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&ntilde;</div></td>
    <td class="style1">ma&ntilde;ana</td>
    <td class="style1">&amp;ntilde;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&#8212;</div></td>
    <td class="style1">this &#8212; not that </td>
    <td class="style1">&amp;#8212;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&#8220;</div></td>
    <td class="style3"><span class="style3">&#8220;</span>This is a quote </td>
    <td class="style1">&amp;#8220;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&#8221;</div></td>
    <td class="style3">...and now it's not&#8221;</td>
    <td class="style1">&amp;#8221;</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">'</div></td>
    <td class="style3">that's right </td>
    <td class="style1">\'</td>
  </tr>
  <tr>
    <td class="style3"><div align="center">&quot;</div></td>
    <td class="style3">&quot;whatever&quot;</td>
    <td class="style1">\&quot;</td>
  </tr>
  <tr>
    <td class="style3">&nbsp;</td>
    <td class="style3">&nbsp;</td>
    <td class="style1">&nbsp;</td>
  </tr>
</table>
</body>
</html>
