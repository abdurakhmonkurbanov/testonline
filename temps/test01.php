<?php
include("block/top.php");
?>

<body>
<?php 
if(isset($_POST['otm_id']) and isset($_POST['yunalish_id'])){
	
	$otm_id = $_POST['otm_id'];
	$y_id = $_POST['yunalish_id'];
	$_SESSION['otm_id'] = $otm_id;
	$_SESSION['yunalish_id'] = $y_id;
}

	if (($_SESSION['otm_id'] !="") and ($_SESSION['otm_id'] !="") and ($_SESSION['fio']!="") )
	{
	$otm_id = $_SESSION['otm_id'];
	$y_id = $_SESSION['yunalish_id'];

$otmd = mysql_query("select otm.*,otm_yunalish.* from otm,otm_yunalish where (otm.id = '$otm_id') and ( otm_yunalish.id = '$y_id')");
$motmd = mysql_fetch_array($otmd);
 $s = $motmd['test_type_ids'];
 $tti = explode(":",$s);
		$tm = 0;
		$tson = 0;
		$i = 1;
		foreach ($tti as $tid) {
			 $tstdb = mysql_query("select * from test_type where `id` = '$tid' ");
			while ($mtstdb = mysql_fetch_array($tstdb)){
				//echo $mtstdb['name']."<br>";
				$tm = $tm + $mtstdb['times'];   //  testga ajratilgan vaqt
				$tson = $tson + $mtstdb['soni'];	//  testlarning umumiy soni
				$tts = $mtstdb['soni'];		//  Har bir fanlar uchun son
				//echo "<br><hr><h2>".$mtstdb['name']."</h2><hr>";
				$iid = "";
				$otst = mysql_query("SELECT * FROM `tests` where test_type_id = '$tid' ORDER BY RAND() LIMIT 0, $tts");
				while ($otstm = mysql_fetch_array($otst)){
					//echo $otstm['id']."<br><b>".$i." - savol</b>  ".$otstm['savol'];
					$tst[$i][1] = $otstm['savol'];
					//$tst[$i][1] = str_replace('<','&#60;',$tst[$i][1]);
					$tst[$i][2] = $otstm['a'];
					$tst[$i][3] = $otstm['id']."_".$otstm['a_code'];
					$tst[$i][4] = $otstm['b'];
					$tst[$i][5] = $otstm['id']."_".$otstm['b_code'];
					$tst[$i][6] = $otstm['c'];
					$tst[$i][7] = $otstm['id']."_".$otstm['c_code'];
					$tst[$i][8] = $otstm['d'];
					$tst[$i][9] = $otstm['id']."_".$otstm['d_code'];
					$i++;
					//$iid = $iid." ".$otstm['id'];
				}
				//echo "<br>".$iid;
				
			}
		}
	 
	?>	
	<script>
		let jtst = [
			
			<?php
			for ($i=1; $i<=$tson; $i++){
				echo "['".$tst[$i][1]."','".$tst[$i][2]."','".$tst[$i][3]."','".$tst[$i][4]."','".$tst[$i][5] .$tst[$i][6]."','".$tst[$i][7]."','".$tst[$i][8]."','".$tst[$i][9]."'],";
			}
		?>
		];
		
		</script>
	<div class="fixed-top alert alert-primary">
		<div class="row">
		<div class="col-9">
		Hurmatli: <b><?php echo $_SESSION['fio'];?></b> siz <b><?php echo  $motmd['otm_name'] ?></b> ning <b><?php echo $motmd['name']; ?></b> yo`nalishini tanladingiz
	</div>
	<div class="col-3">		
	<div align="right" id="countdown-1" class="clock timeTo timeTo-white" style="font-family: Verdana, sans-serif; font-size: 28px;"><div class="first" style="width:26px; height:30px;"><ul style="left:3px; top:-30px"><li>0</li><li>0</li></ul></div><div style="width:26px; height:30px;"><ul style="left:3px; top:-30px"><li>0</li><li>0</li></ul></div><span>:</span><div class="first" style="width:26px; height:30px;"><ul style="left:3px; top:-30px"><li>2</li><li>2</li></ul></div><div style="width:26px; height:30px;"><ul style="left: 3px; top: -30px;" class=""><li>1</li><li>1</li></ul></div><span>:</span><div class="first" style="width:26px; height:30px;"><ul style="left: 3px; top: -30px;" class=""><li>3</li><li>3</li></ul></div><div style="width:26px; height:30px;"><ul style="left: 3px; top: -30px;" class=""><li>4</li><li>4</li></ul></div></div></div>
		</div>
	</div><br>
<br>

	
	
<div class="container">

<div class="col">
	<form action="result_user.php" name="testform" method="post">
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	<?php  
		for($i = 1; $i<=$tson; $i++){
			
				
		?>
  <li class="nav-item p-0" role="presentation">
    <a class="btn btn-outline-info" data-toggle="pill" href="#pills-<?php   echo $i; ?>" role="tab"  aria-selected="true" onClick="tst(<?php   echo $i; ?>)"><?php   echo $i; ?></a>
  </li>
	<?php
		}
			?>
   
		
</ul>
 
	
 
	
	<div class="alert alert-primary mb-4 mt-3" role="alert">
		<div class="qws" id="qws"> 
	 
		</div>
		 
	  </div>
		 
		<div class="alert alert-success" onClick="answ(1)" id="a">
  			A) javob:  simple secondary alert with  Give it a click if you like.
		</div>
		<div class="alert alert-success" onClick="answ(2)" id="b">
  			B) javob:  simple secondary alert with  Give it a click if you like.
		</div>
		<div class="alert alert-success" onClick="answ(3)"  id="c">
  			C) javob:  simple secondary alert with  Give it a click if you like.
		</div>
		<div class="alert alert-success" onClick="answ(4)"  id="d">
  			D) javob:  simple secondary alert with  Give it a click if you like.
		</div>
	  
 

 
		<center><input type="submit" class="btn btn-success" name="finish" value="      Testni tugatish     "> <a href="index.php?token=exit" class="btn btn-danger">Dasturdan chiqish</a>  </center>
</form>
		</div>
	
	
	</div>	


<script>
function tst(i){
	alert(jtst[i]);
	//$("#qws").html(jtst[i][1]);
}
	
	
function selectquestion(i){
 
}	
function answ(j){
	
}
	
</script>	
<?php
	}
	else echo "Kechirasiz siz ro`yxatdan o'tmadingiz <a href='idex.php'>orqaga</a>";
		?>
<?php
		include("block/js.php");
	include("block/footer.php")
?>
	 