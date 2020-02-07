<?php
include("../db/db.php");
if (isset($_POST['search'])) {
	$candidate =$_POST['candidate'];
	@$position =$_POST['position'];
?>

 <div class="table-responsive">
 	 <table id="dtHorizontalExample" class=" table table-striped  table-bordered table-sm mt-2 w-auto" cellspacing="0"
  width="100%" style="padding: 0; margin: 0;">
  <thead>
    <tr>
      <th class="th-sm">Image
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Position
      </th>
      <th class="th-sm">Partylist
      </th>
    </tr>
  </thead>
    <tbody>
    <?php
    $date=date('Y');
if (empty($position)) {
	$sql=mysql_query("SELECT * from $candidate where date ='$date' ");
}else if(!empty($position)){
	$sql=mysql_query("SELECT * from $candidate where date ='$date' and position='$position' ");
	$sql1=mysql_query("SELECT * from $candidate where date ='$date' and position='$position' ");
	$row1=@mysql_fetch_array($sql1);
	if (empty($row1)) {
		echo "<tr><td>No candidate(s) recorded!<td>
          <td></td>
           <td></td>
		</tr>";
	}
}
while ($row=@mysql_fetch_array($sql)) {
    ?>
    <tr>
      <td><img src="images/<?php echo $row['image'] ?>" width="50px"></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['position'] ?></td>
      <td><?php echo $row['party_list'] ?></td>
    </tr>
    <?php
}

    ?>
  </tbody>
</table> 
 </div>

<?php
}
?>

