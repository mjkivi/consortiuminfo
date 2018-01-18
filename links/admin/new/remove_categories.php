<?php
		$db = mysql_connect("localhost", "consor5", "c0n$0r667");
		//$db = mysql_connect("localhost", "root", "");
		mysql_select_db("consor5_clist", $db);

		$consortia_id=$_POST['id'];

		$i = 0;
		foreach ($_POST as $key => $value) {
			if ($i == 0) {
	 			//echo "Consortium ID = ".$value."<br />";
	 			$consortium_id = $value;
			} else {
				//echo $key.'=>'.$value.'<br />';
				$delete_query = "DELETE FROM cat_lookup WHERE cons_no='$consortia_id' AND cat_id='$value'";
				$delete = mysql_query($delete_query) or die(mysql_error());
			}
			$i = $i + 1;
		}
		if ($i <= 1) {
			header("Location: catadd.php?addcat=$consortia_id&msg=no-categories");
		} else {
			header("Location: catadd.php?addcat=$consortia_id&msg=categories-removed");
		}
?>