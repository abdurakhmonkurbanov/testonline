<?php
if($_SESSION['user_id'] != ""){
?>
<div class="container w-50">
   
    <div class="col">
<form class="form-group" method="post" action="test.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="images/icons.ico" alt="" width="150">
	  <h1 class="h3 mb-3 font-weight-normal">Hurmatli: <b><?php echo $_SESSION['fio'];?></b></h1>
  </div>

	
  <div class="col-12">
		 <label class="text-primary">OTMni tanlang</label>
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
		<label class="text-success">Yo'nalishni tanlang</label>
		 <select class="custom-select" name="yunalish_id" id="yunalish">
		<option value="0">Qaysi yo'nalish?</option>
     
  </select>
		 
		 </div><hr>
	<div class="container">
	<div class="row">
		<div class="col"><button class="btn btn-lg btn-primary btn-block" type="submit">Test tizimiga kirish</button></div>
		<div class="col"><a href="result_user.php" class="btn btn-lg btn-primary btn-block">Natijalarni ko'rish</a></div>
		<div class="col"><a href="<?php echo $_SERVER['PHP_SELF']  ?>?token=exit" class="btn btn-lg btn-primary btn-block">Dasturdan chiqish</a></div>
		</div>
	
	</div>
		 
  
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2019 - 2020</p>
	
</form>
	  </div></div> 
<?php
}
	?>