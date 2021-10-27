<?php  
if(isset($_GET['editcol'])){
	$ecol = $_GET['editcol'];
	$eid = $_GET['eid'];
	
	$edb = mysql_query("select * from $ecol where `id` = '$eid'");
	$medb = mysql_fetch_array($edb);
	$newfan = $medb['name'];
/*	$soni = $medb['soni'];
	$ball = $medb['ball'];
	$tms = $medb['times'];*/
}
else {
	$eid = 0;
}
?>
<div class="container">
<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">	
	<input type="hidden" name="eid" value="<?php echo $eid;  ?>">
	<div class="row">
		
<div class="col">
	 <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="newfan">Fan nomi</label>
      <input type="text" class="form-control" value="<?php echo $newfan;  ?>" id="newfan" name="newfan" placeholder="Fan nomi">
      
    </div>
    
		
	</div>
<div class="col" align="center"><input type="submit" value="    Saqlash   " class="btn btn-outline-primary"></div>
	
		</div></div></form>
	<div class="row">
	
		<div  class="col" align="center">
			<table class="table">
				<tr align="center"><td width="40%"><strong>Fanlar nomi</strong></td> 
					<td width="10%"><strong> O'chirish  </strong></td><td width="10%"><strong> O'zgartirish</strong></td><td width="10%"><strong> Testlarni tozalash</strong></td><td width="10%"><strong> Bazada  testlar</strong></td></tr>
				 <?php
				$mff = mysql_query("select * from `test_type`");
				while($mfdb = mysql_fetch_array($mff)){
					echo "<tr><td>".$mfdb['name']."</td> ";
					echo "<td align='center'><a href='".$_SERVER['PHP_SELF']."?col=test_type&id=".$mfdb['id']."' class='btn btn-outline-danger'><img src='images/delete.png' width='50%'></a></td>";
					echo "<td align='center'><a href='".$_SERVER['PHP_SELF']."?editcol=test_type&eid=".$mfdb['id']."' class='btn btn-outline-danger'><img src='images/edit.png' width='40%'></a></td>";
					
					echo "<td align='center'><a href='".$_SERVER['PHP_SELF']."?ccol=tests&id=".$mfdb['id']."' class='btn btn-outline-danger'><img src='images/clear3.webp' width='50%'></a></td>";

					$tid = $mfdb['id'];
					$mt = mysql_query("select * from `tests` where `test_type_id` = '$tid'");
					$mts = mysql_num_rows($mt);
					echo "<td align='center'><b>".$mts."</b></td></tr>";
				}
				
				?>
			</table>
		</div>
	
	</div>
	
	<br>
</div>