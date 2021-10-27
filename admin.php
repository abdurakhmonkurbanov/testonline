<?php
include("block/top.php");
?>

<body>
 

 <div class="container">
	 <?php
		include("block/saveall.php"); // Barchasini saqlash uchun
	?>
	 
	<div class="alert alert-success mb-2  fixed-top" role="alert">
		<center>
		<?php   
			echo "Hurmatli <b>".$_SESSION['firsname']." ";
			echo $_SESSION['lastname']."</b> sizning testda ko'rsatgan natijalaringiz!";
		?>
  		 <a href="index.php" class="btn btn-primary">Testga qaytish</a> 
  		 <a href="index.php?token=exit" class="btn btn-danger">Dasturdan chiqish</a> 
  		 <a href="admin.php" class="btn btn-success">Yangilash</a> 
		</center></div>
	</div>
 
	<br>
	<br>
  <div class="container mt-4">
	
	<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link <?php echo $act[1][1]; ?>" id="nav-home-tab" data-toggle="tab" href="#region" role="tab" aria-controls="nav-home" aria-selected="true">Region</a>
    <a class="nav-item nav-link <?php echo $act[2][1]; ?>" id="nav-profile-tab" data-toggle="tab" href="#otm" role="tab" aria-controls="nav-profile" aria-selected="false">OTM/Yo'nalish</a>
   <a class="nav-item nav-link <?php echo $act[3][1]; ?>" id="nav-contact-tab" data-toggle="tab" href="#users" role="tab" aria-controls="nav-contact" aria-selected="false">O'quvchilar</a>
   <a class="nav-item nav-link <?php echo $act[4][1]; ?>" id="nav-contact-tab" data-toggle="tab" href="#testfan" role="tab" aria-controls="nav-contact" aria-selected="false">Test fanlari</a>    
	<a class="nav-item nav-link <?php echo $act[5][1]; ?>" id="nav-contact-tab" data-toggle="tab" href="#tests" role="tab" aria-controls="nav-contact" aria-selected="false">Testlar</a>
 
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade <?php echo $act[1][2]; ?>" id="region" role="tabpanel" aria-labelledby="nav-home-tab">
	 
	  <?php
	  include("block/region.php");
	  
	  ?>
	  
	</div>  
  <div class="tab-pane fade <?php echo $act[2][2]; ?>" id="otm" role="tabpanel" aria-labelledby="nav-profile-tab"> 
	
	<?php
	  include("block/otm.php");
	  
	  ?>
	  
	</div>
	<div class="tab-pane fade <?php echo $act[3][2]; ?>" id="users" role="tabpanel" aria-labelledby="nav-contact-tab">
	<?php
	  include("block/users.php");
	  
	  ?>
	
	</div>
	<div class="tab-pane fade <?php echo $act[4][2]; ?>" id="testfan" role="tabpanel" aria-labelledby="nav-contact-tab">
	<?php
		
		include("block/fanlar.php");
		include("block/js.php");
		
		
		
		?>
	</div><div class="tab-pane fade  <?php echo $act[5][2]; ?>" id="tests" role="tabpanel" aria-labelledby="nav-contact-tab"><?php
		
		include("block/testedit.php");
		?></div>
 	
  
</div>
	
	</div>
	
<script>
 
	
</script>	

<?php
	include("block/footer.php")
?>