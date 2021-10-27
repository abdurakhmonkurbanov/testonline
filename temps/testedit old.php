<?php
include("block/top.php");
?>


<body>
	<?php
//	if (isset($_POST['testlar']))
//	{
//		echo "<pre>";
//		print_r($_POST);
//		echo "</pre>";
//		
//	}
  if(isset($_POST['upload']))
  {
  	if($_POST['foldername'] != "")
  	{
  		$foldername=$_POST['foldername'];
  		if(!is_dir($foldername))
  			mkdir($foldername);
  		foreach($_FILES['files']['name'] as $i => $name)
		{
//  			if(!is_dir($name))
//  			{
//  				mkdir($foldername."/".name);
//  				if(strlen($_FILES['files']['name'][$i]) > 1)
//  				{
//  					move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername."/".$name);
//  				}
//  			}
//  			else
//  			{
  				if(strlen($_FILES['files']['name'][$i]) > 1)
  				{
					move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername."/".$name);
  				}
  			// }
  		}
		$namefile=$_FILES['tmp']['name'];
		$namefile="tmp.htm";
move_uploaded_file($_FILES['tmp']['tmp_name'],$namefile);
		
  		echo "Folder and file  are successfully uploaded";
  	}
  	else
		 
  		echo "Upload folder name is empty";
  }
  ?>
	
	
<form action="#" method="post" enctype="multipart/form-data">
<div class="container">
	<div class="row">
		<div class="col-10">
		 <div class="custom-file">
	
    <input type="file" name="tmp" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Faylni tanlang</label>
  		 </div>
		<div class="custom-file">
    <input type="file" class="custom-file-input" name="files[]" id="files" multiple directory="" webkitdirectory="" moxdirectory="" />
    <label class="custom-file-label" for="validatedCustomFile">Papkani tanlang</label>
  		 </div>
			
		</div>
		<div class="col-10 p-2 m-2">
			<div class="row">
				<div class="col-8">
			<input type="text" name="foldername" class="form-control w-50" placeholder="Papkaning nomini yozing"></div>
				
			</div>
			 
		<center><input type="submit" name="upload" class="btn btn-outline-success" value="       Export       ">&nbsp; &nbsp; &nbsp; 
			<a href="testedit.php" class="btn btn-outline-danger">Bekor qilish</a></center>
			
		</div>
	
	</div>
	
	</div>	
	
	
</form>


	<br>
	<div class="col-10" align="center">
	<form action="#" method="post" id="test">
		<input type="hidden" name="testlar">
	<span id="text" class="d-none"></span>
	<div class="container" align="center"> 
	<div class="row" id="testview">
		 
	</div>		
	</div>
		 
 <hr>
		<div class="col-8">
		<div class="input-group">
			<select class="custom-select" name="otm_yunalish" id="inputGroupSelect01">
		<option value="0">Fanni tanlang</option>
    <?php
	$otmdb = mysql_query("select  * from `test_type`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
		echo "<option value='".$otmmdb['id']."'>".$otmmdb['name']."</option>";
	}
	?>
  </select><div class="input-group-append"> <input  type="submit" class="btn btn-outline-primary"  value="       Saqlash        "/></div>
				</div> 
</div>
</form>	</div>
<br>	
 <div class="d-none">
<?php
	$ff = "tmp.htm";
	if(file_exists($ff)) {
		include("tmp.htm");
	}
		else echo "<b>tmp.htm</b> fayli topilmadi";
?> 
	</div>
<script>
	// https://grantlar.uz/yangi-zelandiya-fan-va-texnika-phd/   https://grantlar.uz/aqsh-dasturchilar-uchun-treyning/
	s = 1;
tdlen = document.getElementsByTagName("td").length;
for(let i = 0; i<tdlen; i++){
	f = document.getElementsByTagName("td")[i].innerHTML;
  var hid = document.createElement("textarea");
  var savol = document.createElement("div");
     //	hid.setAttribute("type","text");
  	hid.setAttribute("name","aa"+i);
	hid.setAttribute("rows",8);
	hid.setAttribute("cols",17);
	savol.setAttribute("class","col-2 border border-primary");
	hid.innerHTML = f;
	savol.innerHTML = f;
	if (i % 5 ==0){
		var div = document.createElement("div");
		div.setAttribute("class","col-2 border border-danger");
		div.innerHTML = s+"-Savol";
		s++;
		document.getElementById("testview").appendChild(div);
		
	}
  	document.getElementById("text").appendChild(hid);
  	document.getElementById("testview").appendChild(savol);
}
</script>
<div class="d">

</div>
<?php
	include("block/footer.php")
?>