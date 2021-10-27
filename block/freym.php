<?php 
if (isset($_GET['col']) and isset($_GET['id'])) 
{
	$col =  $_GET['col'];
	$did = $_GET['id'];
	mysql_query("delete from `$col` where `id` = '$did'");
}

?>

<?php    ///   testlarni tozalash
if (isset($_GET['ccol']) and isset($_GET['id'])) 
{
	$ccol =  $_GET['ccol'];
	$did = $_GET['id'];
	mysql_query("delete from `$ccol` where `test_type_id` = '$did'");
	$_SESSION['act'] = '4';
}

?>

<?php    /// test_type_ids ni o'zgartirish
if (isset($_GET['cancel'])) 
{
	$cancel_id =  $_GET['cancel'];
	mysql_query("update `otm_yunalish` set `test_type_ids` = '' where `id` = '$cancel_id'");
}

?>
		 
	<div class="<?php echo $scrl; ?>">
	<table class="table table-sm" width="100%">
		 
	<?php
	if($usr == true) {
		echo "<tr><td align='center'><strong>Ismi</strong></td><td align='center'><strong>Login</strong></td><td align='center'><strong>Parol</strong></td></tr>";
	}
		$fdb = mysql_query($fdb);
		while ($mfdb = mysql_fetch_array($fdb))
		{
			echo "<tr><td>".$mfdb[$col1]."</td>";
			if(isset($col2)){echo "<td>".$mfdb[$col2]."</td>";}
			if(isset($col3)){ echo "<td>".$mfdb[$col3]."</td>";}
			if(isset($col4)){ echo "<td>".$mfdb[$col4]."</td>";}
			if(isset($col5)){ echo "<td>".$mfdb[$col5]."</td>";}
			echo "<td align='center' width='20%'><a href='".$_SERVER['PHP_SELF']."?col=".$tbl."&id=".$mfdb['id']."' class='btn btn-outline-danger'>X</a></td></tr>
			";
			
		}
		
		?>
	 
	</table> 
	</div>

 