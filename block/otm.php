<div class="container">
	  	<div class="row">
	  <div class="col-8">
	<div class="form-group">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="hidden" name="otm" value="1">
  <div class="input-group-prepend">
    <label>Yangi OTM lar nomi </label>
  </div>
		<textarea name="univ" class="form-control" rows="3"></textarea>
   
	<div>
    <input class="btn btn-outline-primary" type="submit" value="    Qo'shish   "> 
  </div>
    </div></form>
</div>
		 
	  <div class="col-4">
	  <?php
		  $scrl = "scrl";
	  $tbl='otm';
	  $col1='otm_name';
	  $fdb = "select * from `$tbl`";
	  include("block/freym.php");
	  ?>
	  </div></div>
<hr>
	 
<div class="row">
		  <div class="col-6">
			  <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
				  <input type="hidden" name="otm" value="2">
	<select class="custom-select" name="otm_id" id="inputGroupSelect01">
		<option value="0">Qaysi OTM?</option>
    <?php
	$otmdb = mysql_query("select  * from `otm`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
		echo "<option value='".$otmmdb['id']."'>".$otmmdb['otm_name']."</option>";
	}
	?>
  </select>
			  <div class="form-group">
  <div class="input-group-prepend">
    <label>Yangi yo'nalish nomi </label>
  </div>
		<textarea name="univ" class="form-control"  rows="3"></textarea>
   
	<div>
    <input class="btn btn-outline-primary" type="submit" value="    Qo'shish   "> 
  </div>
    </div></form></div>
		  <div class="col-6">
	 
	  <?php
	  $tbl = 'otm_yunalish';
	  $col1='otm_name';
	  $col2='name';
	  $fdb = "select otm.*,otm_yunalish.* from `otm`,`otm_yunalish` where otm.id = otm_yunalish.otm_id order by otm_yunalish.id asc";
	  include("block/freym.php");

	  ?>
	   
	</div>
	  </div> 
		  <hr>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
	 <input type="hidden" name="matching" value="true">
	 <div class="shadow p-3  bg-white rounded">
		 <center><strong>Testlarni bo'g'lash</strong></center>
	<div class="row">
		 <div class="col-4">
		 <label>OTMni tanlang</label>
		 <select class="custom-select" name="otm_id" id="otm">
		<option value="0">Qaysi OTM?</option>
    <?php
	$otmdb = mysql_query("select  * from `otm`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
	?>
		<option onClick="yunalish(<?php echo $otmmdb['id'] ?>)" value='<?php echo $otmmdb['id']; ?>'><?php echo $otmmdb['otm_name'];?></option>
		<?php
	}
	?>
  </select>
		<label>Yo'nalishni tanlang</label>
		 <select class="custom-select" name="yunalish_id" id="yunalish">
		<option value="0">Qaysi yo'nalish?</option>
     
  </select>
		 
		 </div>
	<div class="col-8 p-3">
		 <div class="card p-2"><center>Fanlarni tanlang</center>
			 <div class="scrl">
			 <?php
			 $i = 1;
			 $fan = mysql_query("select * from `test_type`");
			 while ($mfan = mysql_fetch_array($fan))
			 {
				 ?>
		 <div class="custom-control custom-checkbox">
		<input name="fan<?php echo $i;  ?>" value="<?php echo $mfan['id'];  ?>" type="checkbox" class="custom-control-input" id="cuschek<?php echo $i;  ?>"> 
		<label class="custom-control-label border border-success w-100" for="cuschek<?php echo $i;  ?>">
			<div class="form-row">
			<div class="col-8"><?php echo $mfan['name']  ?></div>
			<div class="col-2"><input name="son<?php echo $i;  ?>" type="text" class="form-control" id="cuschek<?php echo $i;  ?>" placeholder="testlar soni"> </div>
			<div class="col-2"><input name="ball<?php echo $i;  ?>" type="text" class="form-control" id="cuschek<?php echo $i;  ?>" placeholder="Ball"> </div>
			</div>
			
			
			
		</label>
		</div>
			 <?php 
					 $i++;
			 }

			 ?>
			 </div>
		</div>
		  
		 </div>
		<div class="col p-2">
	<center><input type="submit" value="        Saqlash       " class="btn-outline-success"></center></div>
	</div>
 </div>
</form>
	<hr>
	<div class="row">
	  <div class="col shadow p-3  bg-white rounded">
			<center><strong>Bog'langan testlar</strong></center>
		<table class="table table-bordered table-hover">
			<thead align="center" class=" table-danger">
				<tr>
					<td><strong>OTM</strong></td>
					<td><strong>Yo'nalishlar</strong></td>
					<td><strong>Mos bog'langan fanlar [testlar soni] [qo'yiladigan balli]</strong></td>
					<td><strong>Moslikni bekor qilish</strong></td>
				</tr>
			</thead>
			<tbody>
			 <?php
				 
				$otm = mysql_query("select otm.*,otm_yunalish.* from `otm`,`otm_yunalish` where otm.id = otm_yunalish.otm_id");
				while ($otmdb = mysql_fetch_array($otm)){
					echo "<tr><td>".$otmdb['otm_name']."</td><td>".$otmdb['name']."</td><td>";
					$fan = explode(':',$otmdb['test_type_ids']);
					foreach($fan as $val){
						
						$fandb = mysql_query("select * from `test_type` where id = '$val'");
						while ($fans = mysql_fetch_array($fandb)){
							echo $fans['name']." [<b>".$fans['soni']."</b>] [<b>".$fans['ball']."</b>]<br>";
						}
					}
					echo "</td>";
					echo "<td align='center' width='20%'><a href='".$_SERVER['PHP_SELF']."?cancel=".$otmdb['id']."' class='btn btn-outline-primary'>Cancel</a></td></tr>
			";
				}
				 
			 ?>
				 
			</tbody>
			
		  </table>
		</div>
	</div>

</div>