<?php
header ("Content-type: text/xml");

echo ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
?>
<rdf:RDF xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:h="http://www.w3.org/1999/xhtml" xmlns:hr="http://www.w3.org/2000/08/w3c-synd/#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://purl.org/rss/1.0/">
<channel rdf:about="http://www.consortiuminfo.org/news.php">
        <title>ConsortiumInfo.org Standard Setting Organization and Standards List</title>
        <description>The ConsortiumInfo.org Standard Setting Organization and Standards List, the largest list in existence of organizations that create and/or promote standards.</description>
        <link>http://www.consortiuminfo.org/news/</link>
</channel>

<?php
mysql_connect ("localhost", "consor5", "c0n$0r667") or die ("Cannot connect to database server.");
mysql_select_db ("consor5_clist") or die ("Cannot connect to database.");

$result = mysql_query ("SELECT cons_id, cons_name, link_desc FROM cons_list ORDER BY adddate DESC limit 10") or die (mysql_error());

while ($row = mysql_fetch_array ($result)) {
    echo ("    <item rdf:about=\"http://www.consortiuminfo.org\">
        <title>");
    echo htmlspecialchars($row['cons_name'], ENT_QUOTES, 'UTF-8');
    echo ("</title>
        <description>");
    echo htmlspecialchars($row['link_desc'], ENT_QUOTES, 'UTF-8');
    echo ("</description>
        <link>http://www.consortiuminfo.org/links/detail.php?ID=");
	echo $row[cons_id];
    echo ("</link>
    </item>\n\n");
}

mysql_free_result ($result);
?>
</rdf:RDF>