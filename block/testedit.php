 
	<?php
 
  if(isset($_POST['upload']))
  {
	$_SESSION['act'] = '5';
	  $fcheck = $_POST['foldercheck'];
	  if ($fcheck!=""){
		  $foldername = $_POST['foldername'];
		  $_SESSION['act'] = '5';
  		if(!is_dir($foldername))
  			mkdir($foldername);
  		foreach($_FILES['files']['name'] as $i => $name)
		{
  				if(strlen($_FILES['files']['name'][$i]) > 1)
  				{
					move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername."/".$name);
  				}
  		}
		$namefile=$_FILES['tmp']['name'];
		$namefile="tmp.htm";
move_uploaded_file($_FILES['tmp']['tmp_name'],$namefile);
		
  		echo "Ma'lumotlar muvoffaqiyatli jo'natildi";
  	}
  	else
		 
  		$namefile=$_FILES['tmp']['name'];
		$namefile="tmp.htm";
	  move_uploaded_file($_FILES['tmp']['tmp_name'],$namefile);
		
  }
  ?>
	
	
<form action="#" method="post" enctype="multipart/form-data">
<div class="container">
	<div class="row">
		<div class="col">
			
		 <div class="custom-file">
    <input type="file" name="tmp" id="newfile" required>
    <label  class="btn btn-outline-success" style="cursor: pointer" for="newfile">Faylni tanlang</label>
  		 </div>
			
		<div class="custom-control custom-checkbox">	
		<input type="checkbox"  class="custom-control-input"  name="foldercheck" value="1" id="foldercheck" onClick="folder()">
			<label  class="custom-control-label"for="foldercheck">Agar papka mavjud bo'lsa</label>
			</div>
			
		<div class="custom-file" id="foldertext"  style="display:none">
    <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" moxdirectory=""  onClick="fname()"  />
    <label id="selectfile"  onClick="fname()"  class="btn btn-outline-success" style="cursor: pointer" for="files">Papkani tanlang</label> 
			Tanlangan papkaning nomi: <input name="foldername" id="foldername" type="text"  class="text" placeholder="Papkaning nomini yozing"> 
			 
  		 </div>
			
		</div>
		
		<div class="col-10 p-2 m-2">	
		<center><input type="submit" name="upload" class="btn btn-outline-success" value="       Export       ">&nbsp; &nbsp; &nbsp; 
			<a href="admin.php#tests" class="btn btn-outline-danger">Bekor qilish</a> <a onClick="fname()" class="btn btn-outline-danger">OK</a> </center>
			
		</div>
	
	</div>
	
	</div>	
	
	
</form>

<hr>
	<div class="col-10" align="center">
	<form action="#" method="post" id="test">
		<input type="hidden" name="testlar" id="testlar">
	<span id="text" class="d-none"></span>
	<div class="container" align="center"> 
	<div class="row" id="testview">
		 
	</div>		
	</div>
		 
 <hr>
<div class="col-8">
		<div class="input-group">
			<select class="custom-select" name="fan1" id="inputGroupSelect01">
		<option value="0">Fanni tanlang</option>
    <?php
	$otmdb = mysql_query("select  * from `test_type`");
	while ($otmmdb = mysql_fetch_array($otmdb)){
		echo "<option value='".$otmmdb['id']."'>".$otmmdb['name']."</option>";
	}
	?>
  </select><div class="input-group-append"> 
			<input  type="submit" class="btn btn-outline-primary"  value="       Saqlash        "/>
			</div>
				</div> 
</div>		
</form>	</div>
<br>	
 <dd class="d-none" id="test">  <!-- Ochilgan faylni ko'rsatmaslik kerak   -->
<?php
	$ff = "tmp.htm";
	if(file_exists($ff)) {
		include("tmp.htm");
	}
		else echo "<b>tmp.htm</b> fayli topilmadi";
?> 
	</dd>
 
<script>
	function fname(){
		//alert($("#newfile").val());
		 var file = $('#newfile')[0].files[0]
		 if (file){
			 fstr = file.name;
			 fstr = fstr.replace(".html",".files");
			 fstr = fstr.replace(".htm",".files");
			 $("#foldername").val(fstr) ;
		 	}
		

	}
	
	// https://grantlar.uz/yangi-zelandiya-fan-va-texnika-phd/   https://grantlar.uz/aqsh-dasturchilar-uchun-treyning/
$(document).ready(function(){
	s = 1;
//tdlen = document.getElementsByTagName("td").length;
tdlen = $("dd td").length;
	
for(let i = 0; i<tdlen; i++){
	//f = document.getElementsByTagName("td")[i].innerHTML;//////////////
	f = $("dd td").eq(i).html();
  var hid = document.createElement("textarea");
  var savol = document.createElement("div");
     //	hid.setAttribute("type","text");
  	hid.setAttribute("name","tst"+(i+1));
//	hid.setAttribute("rows",8);
//	hid.setAttribute("cols",17);
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
	$("#testlar").val(tdlen);
	});
</script>
 