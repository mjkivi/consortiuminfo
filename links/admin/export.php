<?
	if(!empty($_GET['format']) && $_GET['format'] == 'xls')
	{
		header('content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="output.xls"');
	}
?>
<table>
  <tr>
  <th>Link ID</th>
	<th>Categories</th>
  <th>Link Name</th>
  <th>Link URL</th>
  <th>Company URL</th>
  <th>Company Name</th>
  <th>Link Description</th>
  <th>Company Overview</th>
  <th>Company Specs</th>
  <th>Company IPR</th>
  <th>Press</th>
  <th>License</th>
  <th>Link to company news</th>
  <th>Date Added (they look like they're all blank)</th>
  <th>Date Updated (looks almost all blank)</th>
  <th>Current Status</th>
  <th>Last Updated</th>
  <th>No Link</th>
  </tr>
<?

$db = mysql_connect("localhost", "root", "root");
mysql_select_db("consor5_clist", $db);

$results = mysql_query('SELECT * FROM cons_list') or die('Error, query failed');
while($row = mysql_fetch_array($results, MYSQL_ASSOC)) {
	$cat_results = mysql_query("SELECT CC.cat_name FROM cons_cats CC, cat_lookup CL WHERE CC.cat_id=CL.cat_id AND CL.cons_no=${row['cons_id']}");

	$categories = array();
	while($category = mysql_fetch_array($cat_results, MYSQL_ASSOC))
		$categories[] = $category['cat_name'];
?>
	<tr>
		<td><?= $row['cons_id'] ?></td>
	  <td><?= implode(', ',$categories) ?></td>
		<td><?= $row['cons_name'] ?></td>
		<td><?= $row['link_url'] ?></td>
		<td><?= $row['cons_url'] ?></td>
		<td><?= $row['cons_abbr'] ?></td>
		<td><?= $row['link_desc'] ?></td>
		<td><?= $row['cons_overview'] ?></td>
		<td><?= $row['cons_specs'] ?></td>
		<td><?= $row['cons_ipr'] ?></td>
		<td><?= $row['press'] ?></td>
		<td><?= $row['license'] ?></td>
		<td><?= $row['url2'] ?></td>
		<td><?= $row['adddate'] ?></td>
		<td><?= $row['updated'] ?></td>
		<td><?= $row['cur_stat'] ?></td>
		<td><?= $row['last_updated'] ?></td>
		<td><?= $row['no_link'] ?></td>
	</tr>
<? } // while ?>
</table>