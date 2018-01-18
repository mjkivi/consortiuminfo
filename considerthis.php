<?php
header ("Content-type: text/xml");

echo ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
?>
<rdf:RDF xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:h="http://www.w3.org/1999/xhtml" xmlns:hr="http://www.w3.org/2000/08/w3c-synd/#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://purl.org/rss/1.0/">
<channel rdf:about="http://www.consortiuminfo.org/news.php">
        <title>ConsortiumInfo.org - Consider This</title>
        <description>Consider This...</description>
        <link>http://www.consortiuminfo.org/blog/</link>
</channel>

<?php
mysql_connect ("localhost", "consor5", "c0n$0r667") or die ("Cannot connect to database server.");
mysql_select_db ("consor5_sblog") or die ("Cannot connect to database.");

$result = mysql_query ("SELECT items.id, items.title, items.ddate, items.story FROM items ORDER BY date DESC limit 5") or die (mysql_error());

while ($row = mysql_fetch_array ($result)) {
	$title = strip_tags($row[title]);
    echo ("    <item rdf:about=\"http://www.consortiuminfo.org\">
        <title>");
    echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    echo ("</title>
           <link>http://www.consortiuminfo.org/blog/blog.php?ID=");
	echo $row[id];
    echo ("</link>
    </item>\n\n");
}

mysql_free_result ($result);
?>

</rdf:RDF>