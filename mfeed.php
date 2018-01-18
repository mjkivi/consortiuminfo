<?php
header ("Content-type: text/xml");

echo ("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");

?>
<rdf:RDF xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:h="http://www.w3.org/1999/xhtml" xmlns:hr="http://www.w3.org/2000/08/w3c-synd/#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://purl.org/rss/1.0/">
<channel rdf:about="http://www.consortiuminfo.org/metaconsor5_library">
        <title>ConsortiumInfo.org MetaLibrary</title>
        <description>The MetaLibrary is the only on-line research resource focusing exclusively on standards and standard setting.</description>
        <link>http://www.consortiuminfo.org/metalibrary/</link>
</channel>

<?php
mysql_connect ("localhost", "consor5", "c0n$0r667") or die ("Cannot connect to database server.");
mysql_select_db ("consor5_library") or die ("Cannot connect to database.");

$result = mysql_query ("SELECT id, title, abstract FROM entries ORDER BY id DESC limit 5") or die (mysql_error());

while ($row = mysql_fetch_array ($result)) {
    echo "<item rdf:about=\"http://www.consortiuminfo.org\"><title>";
    echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8');
    echo "</title><description>";
    echo htmlspecialchars($row['abstract'], ENT_QUOTES, 'UTF-8');
    echo "</description><link>http://www.consortiuminfo.org/metalibrary";
    echo "</link></item>\n\n";
}

mysql_free_result ($result);
?>
</rdf:RDF>