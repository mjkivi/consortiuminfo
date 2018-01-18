
<?php

mysql_connect("localhost", "consor5", "c0n$0r667");
mysql_select_db("news");

if ($action == "edit") {
$xsql="UPDATE items SET headline='$headline', author='$author', source='$source', date1='$date1', story='$story', link1='$link1' WHERE (ID='$ID')";
$sql = mysql_query($xsql);
echo " $xsql";
//$xsql="INSERT INTO items SET headline='$headline', author='$author', source='$source', date1='$date1', story='$story', link1='$link1'";
//$sql = mysql_query($xsql);
?>



<div align="left" class="style2">The story is uploaded.. <BR>
          name: <?php echo $headline ?> <BR>
          ID: <?php echo $ID ?> <BR>
		  author <?php echo $author ?>

          <a href="/news/admin/index2.php">Return</a> to entry list


  <?php

}

else {

$query = mysql_query("SELECT * FROM items WHERE(ID='$ID')");

if (mysql_num_rows($query) != 1) {
        echo "The $Name / $Password Combination is incorrect<P>Please Try Again.";
        exit;
    }
 else {
        $info = mysql_fetch_array($query);
        echo("Edit ".$info['headline']."");
?>

  <FORM METHOD="POST" ACTION="<?php echo $PHP_SELF ?>">
  <INPUT TYPE="hidden" NAME="ID" VALUE="<?php echo $ID ?>">

                                  <INPUT TYPE="hidden" NAME="action" VALUE="edit">

<TABLE width="638">
                                    <TR>
                                      <TD COLSPAN=2><CENTER>
                                      </CENTER></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD width="83">Headline:</TD>
                                      <TD width="543"><input name="headline" type="text" id="headline" value="<?php echo $info['headline'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Author</TD>
                                      <TD><input name="author" type="text" id="author" value="<?php echo $info['author'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Source</TD>
                                      <TD><input name="source" type="text" id="source" value="<?php echo $info['source'] ?>" size="60"></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Overview</TD>
                                      <TD><input name="date1" type="text" id="date1" value="<?php echo $info['date1'] ?>" size="60"></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Story</TD>
                                      <TD><textarea name="story" cols="50" id="story"><?php echo $info['story'] ?></textarea></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD>Link</TD>
                                      <TD><input name="link1" type="text" id="link1" value="<?php echo $info['link1'] ?>" size="60"></TD>
                                    </TR>


                                                                        <TR class="style2">
                                      <TD COLSPAN=2><div align="center">
                                          <p>
                                            <input name="submit" type="submit" value="Edit Profile!">
                                          </p>
                                          </div></TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2>&nbsp;</TD>
                                    </TR>
                                    <TR class="style2">
                                      <TD COLSPAN=2></TD>
                                    </TR>
                                  </TABLE>
</FORM>

                                  <?php showfooter();
    }
}
?>

