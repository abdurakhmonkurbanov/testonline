<div class="container">
	  	<div class="row">
	  <div class="col-8">
	<div class="form-group">
	
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="hidden" name="region" value="1">
  <div class="input-group-prepend">
    <label>Yangi viloyatlar nomi </label>
  </div>
		<textarea name="cities" class="form-control" rows="3"></textarea>
   
	<div>
    <input class="btn btn-outline-primary" type="submit" value="    Qo'shish   "> 
  </div>
		</form>
		
    </div>
</div>
		 
	  <div class="col-4">
	  <?php
		  $scrl = "scrl";
	  $tbl='viloyat';
	  $col1='vname';
	  $fdb = "select * from `$tbl` order by id asc";
	  include("block/freym.php");
	  ?>
	  </div></div>
<hr>
	 
<div class="row">
		  <div class="col-8">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="hidden" name="region" value="2">		  
	<select class="custom-select" name="town1" id="inputGroupSelect01">
		<option value="0">Qaysi viloyat?</option>
    <?php
	$otmdb = mysql_query("select  * from `viloyat` order by id asc");
	while ($otmmdb = mysql_fetch_array($otmdb)){
		echo "<option value='".$otmmdb['id']."'>".$otmmdb['vname']."</option>";
	}
	?>
  </select>
			  <div class="form-group">
  <div class="input-group-prepend">
    <label>Yangi tumanlar nomi </label>
  </div>
		<textarea name="cities" class="form-control"  rows="3"></textarea>
   
	<div>
    <input class="btn btn-outline-primary" type="submit" value="    Qo'shish   "> 
  	</div>
				</div>
	</form>
		  </div>
		  <div class="col-4">
	 
	  <?php
	  $tbl = 'region';
	  $col1='vname';
	  $col2 = 'rname';
	  $fdb = "select viloyat.*,region.* from region,viloyat where region.vil_id = viloyat.id ORDER BY `region`.`vil_id` ASC";
	  include("block/freym.php");
	  ?>
	   
	</div>
	  </div> 
		  <hr>
<div class="row">
		  <div class="col-8">
			  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="hidden" name="region" value="3">
	<select class="custom-select" name="town1" id="vil">
		<option value="0">Qaysi viloyat?</option>
    <?php
	$otmdb = mysql_query("select  * from `viloyat`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
	?>
		<option onClick="regcall(<?php echo $otmmdb['id'] ?>,'reg1')" value='<?php echo $otmmdb['id']; ?>'><?php echo $otmmdb['vname'];?></option>
		<?php
	}
	?>
  </select>
	<select class="custom-select" name="town2" id="reg1">
		<option value="0">Qaysi tuman?</option>
    
  </select>
			  <div class="form-group">
  <div class="input-group-prepend">
    <label>Yangi maktablar nomi </label>
  </div>
		<textarea name="cities" class="form-control"  rows="3"></textarea>
   
	<div>
    <input class="btn btn-outline-primary" type="submit" value="    Qo'shish   "> 
  </div>
				  </div></form></div>
		  <div class="col-4">
	 
	  <?php
	  $tbl = 'school';
	  $col1='vname';
	  $col2 = 'rname';
	  $col3 = 'mname';
	  $fdb = "select viloyat.*, region.*, school.* from region,viloyat,school WHERE (region.vil_id = viloyat.id) and (region.id = school.reg_id) ORDER BY `school`.`id` ASC";
	  include("block/freym.php");
	  ?>
	   
	</div>
		  
		  </div>
		  <hr>
		  <div class="row">
		  <div class="col-6">
			  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="hidden" name="region" value="4">
	<select class="custom-select" name="town1" id="vil">
		<option value="0">Qaysi viloyat?</option>
   <?php
	$otmdb = mysql_query("select  * from `viloyat`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
	?>
		<option onClick="regcall2(<?php echo $otmmdb['id'] ?>,'reg2')" value='<?php echo $otmmdb['id']; ?>'><?php echo $otmmdb['vname'];?></option>
		<?php
	}
	?>
  </select>
	<select class="custom-select" name="town2" id="reg2">
		<option value="0">Qaysi tuman?</option>
   
  </select>
			  <select class="custom-select" name="town3" id="school2">
		<option value="0">Qaysi maktab?</option>
    
  </select>
			  <div class="form-group">
  <div class="input-group-prepend">
    <label>Yangi sinflar nomi </label>
  </div>
		<textarea name="cities" class="form-control"  rows="3"></textarea>
   
	<div>
    <input class="btn btn-outline-primary" type="submit" value="    Qo'shish   "> 
  </div>
				  </div></form></div>
		  <div class="col-6">
	 
	  <?php
	  $tbl = 'classes';
	  $col1='vname';
	  $col2 = 'rname';
	  $col3 = 'mname';
	  $col4 = 'cname';
	  $fdb = "select viloyat.*, region.*, school.*, classes.* from region,viloyat,school,classes WHERE (region.vil_id = viloyat.id) and (region.id = school.reg_id) and (school.id = classes.school_id) ORDER BY `school_id`  ASC";
	  include("block/freym.php");
	  ?>
	   
	</div>
		 
		  </div>
	  </div>