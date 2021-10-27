 
<div class="container">

		  <div class="row p-2">
		  <div class="col">
			  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				  <input type="hidden" name="user" value="1">
				  <div class="form-row">
					  <div class="col-3">
	<select class="form-control" name="viloyat" id="vil">
		<option value="0">Qaysi viloyat?</option>
    <?php
	$otmdb = mysql_query("select  * from `viloyat`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
	?>
		<option onClick="regcall(<?php echo $otmmdb['id'] ?>,'reg')" value='<?php echo $otmmdb['id']; ?>'><?php echo $otmmdb['vname'];?></option>
		<?php
	}
	?>
  </select></div>
   <div class="col-3">
	<select class="form-control" name="tuman" id="reg">
		<option value="0">Qaysi tuman?</option>
					  </select>
					  </div>
	<div class="col-3">				  
			  <select class="form-control" name="maktab" id="school">
		<option value="0">Qaysi maktab?</option>
 			 </select>
	</div>
	<div class="col-3">
			 <select class="form-control" name="sinf" id="class">
		<option value="0">Qaysi sinf?</option>
  			</select>
	</div>
			  <div class="col-12">
  <div class="input-group-prepend">
    <label>Yangi o'quvchilar</label>
  </div>
		<textarea name="users" class="form-control"  rows="5"></textarea>
   <br>
	<div align="center">
    <input class="btn btn-outline-primary p-2" type="submit" value="        Qo'shish        "> 
  </div>
				  </div>
			</div>  </form>
			  </div>
		  </div>
	<hr>  			
	
	<!--               Login parollarni ekranga chiqarish                      -->
	
	<div class="row">
		<div class="col-12">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				  <div class="form-row">
					  <div class="col">
	<select class="form-control" name="viloyatf" id="vilf">
		<option value="0">Qaysi viloyat?</option>
    <?php
	$otmdb = mysql_query("select  * from `viloyat`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
	?>
		<option onClick="regcallf(<?php echo $otmmdb['id'] ?>)" value='<?php echo $otmmdb['id']; ?>'><?php echo $otmmdb['vname'];?></option>
		<?php
	}
	?>
  </select></div>
   <div class="col">
	<select class="form-control" name="tumanf" id="regf">
		<option value="0">Qaysi tuman?</option>
					  </select>
					  </div>
	<div class="col">				  
			  <select class="form-control" name="maktabf" id="schoolf">
		<option value="0">Qaysi maktab?</option>
 			 </select>
	</div>
			  <div class="col">
    <input class="btn btn-info" type="submit" value=" Filterlash "> 
				  <a href="<?php echo $_SERVER['PHP_SELF']?>" class="btn btn-info">Bekor qilish</a>

				  </div>
			</div>  </form>
		</div>
	</div>
		<div class="row p-3"> 
	<div class="col">
		<table class="table table-bordered table-hover">
		<thead class="table-primary"><tr><td>O'quvchining FIO</td><td>login</td><td>Parol</td><td>Viloyat</td><td>Tuman</td><td>Maktab</td><td>Sinf</td><td>o'chirish</td></tr></thead>
			<tbody>
			<?php
				if(isset($_POST['viloyatf']) and isset($_POST['tumanf']) and isset($_POST['maktabf'])){
					
					$vil_id = $_POST['viloyatf'];
					$tum_id = $_POST['tumanf'];
					$mak_id = $_POST['maktabf'];
					$udb = mysql_query("select viloyat.*, region.*, school.*, classes.*,users.* from  viloyat, region, school, classes,users WHERE (region.vil_id = viloyat.id) and (region.id = school.reg_id) and (users.school_id = school.id ) and (school.id = '$mak_id' ) and (users.class_id = classes.id) ORDER BY `users`.`id`  deSC ");
				}
			else	$udb = mysql_query("select viloyat.*, region.*, school.*, classes.*,users.* from  viloyat, region, school, classes,users WHERE (region.vil_id = viloyat.id) and (region.id = school.reg_id) and (users.school_id = school.id) and (users.class_id = classes.id) ORDER BY `users`.`id`  deSC limit 0, 30");
				
				while($umdb = mysql_fetch_array($udb)){
					echo "<tr><td>".$umdb['fio']."</td><td>".$umdb['login']."</td><td>".$umdb['password']."</td><td>".$umdb['vname']."</td><td>".$umdb['rname']."</td><td>".$umdb['mname']."</td><td>".$umdb['cname']."</td><td><a href='".$_SERVER['PHP_SELF']."?col=users&id=".$umdb['id']."' class='btn btn-outline-danger'>X</a></td></tr>";
				}
				?>
			</tbody>
		</table>
		</div>
		</div>
	</div>
