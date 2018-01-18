<?php
header ("Content-type: text/xml");

echo ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
?>
<rdf:RDF xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:h="http://www.w3.org/1999/xhtml" xmlns:hr="http://www.w3.org/2000/08/w3c-synd/#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://purl.org/rss/1.0/">
<channel rdf:about="http://www.consortiuminfo.org/news.php">
        <title>ConsortiumInfo.org News</title>
        <description>News Stories Related to Standard-Setting and Consortia</description>
        <link>http://www.consortiuminfo.org/news/</link>
</channel>

<?php
mysql_connect ("localhost", "consor5", "c0n$0r667") or die ("Cannot connect to database server.");
mysql_select_db ("consor5_nnews") or die ("Cannot connect to database.");

$result = mysql_query ("SELECT items.ID, items.author, items.its, items.headline, items.source, items.date1, items.story, items.lkintro, items.link1, items.lkintro2, items.link2, items.link3, items.date2, items.blog, items.short_story  FROM items WHERE items.headline<>'' AND items.date2<=curdate() ORDER BY items.date2 DESC, sort DESC, items.ID DESC limit 10") or die (mysql_error());

while ($row = mysql_fetch_array ($result)) {
    echo ("<item rdf:about=\"http://www.consortiuminfo.org\">
        <title>");
    echo htmlspecialchars($row['headline'], ENT_QUOTES, 'UTF-8');
    echo ("</title>
        <description>");
    echo htmlspecialchars($row['story'], ENT_QUOTES, 'UTF-8');
    echo ("</description>
        <link>http://www.consortiuminfo.org/news/index.php#");
	echo $row[ID];
    echo ("</link>
    </item>\n\n");
}

mysql_free_result ($result);
?>
</rdf:RDF>