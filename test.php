<?php
include("block/top.php");

		///////////  Update
		
		include("block/saveresult.php");
		
	//////////// Update tugadi  ////////////
?>

<body>
<?php 
if(isset($_POST['otm_id']) and isset($_POST['yunalish_id'])){
	
	$_SESSION['otm_id'] = $_POST['otm_id'];
	$_SESSION['yunalish_id'] = $_POST['yunalish_id'];
		//echo "1-".$_SESSION['otm_id']." 2-".$_SESSION['yunalish_id']." 3- ".$_SESSION['fio']." 4-".$_SESSION['user_id'];
}
	if (($_SESSION['otm_id'] !=0) and ($_SESSION['yunalish_id'] !=0) and ($_SESSION['fio']!="") and ($_SESSION['user_id']!="") )
	{
	$user_id = $_SESSION['user_id'];
	$school_id = $_SESSION['school_id'];
	$otm_id = $_SESSION['otm_id'];
	$y_id = $_SESSION['yunalish_id'];

	$resdb = mysql_query("select * from `result` where `user_id` = '$user_id' ORDER BY `id` DESC");
	$resmdb = mysql_fetch_array($resdb);
		

if(($resmdb['score'] =='') or ($resmdb['score'] >= 0) or ($resmdb['score'] =="")) //////  agar ro'yxatdan o'tmagan yoki yana topshirmoqchi  (shu yer chalaga o'xshaydi) bo'lsa
		{
	//echo "<h1>".$y_id."</h1>";	
			$otmd = mysql_query("select * from otm_yunalish where  otm_yunalish.id = '$y_id'");
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
					$otst = mysql_query("SELECT * FROM `tests` where test_type_id = '$tid' ORDER BY RAND() LIMIT 0, $tts");
					while ($otstm = mysql_fetch_array($otst)){
						$iid = $iid.$otstm['id'].":0_";
						}
					}
				}
			$anw = $dayn."-".$tm."-".$iid;
			//////////////////////   resultga yangi yozish
			mysql_query("INSERT INTO `result` (`user_id`, `school_id`, `otm_id`, `otm_yunalish_id`, `answers`, `date`) VALUES ('$user_id', '$school_id', '$otm_id', '$y_id', '$anw', '$day');");
			
		}
	$resdb = mysql_query("select * from `result` where `user_id` = '$user_id' ORDER BY `id` DESC");
	$resmdb = mysql_fetch_array($resdb);
		
	$otm_id = $resmdb['otm_id'];
	$y_id = $resmdb['otm_yunalish_id'];
		
	$id = $resmdb['id'];
		
	$anw = $resmdb['answers'];
	$anws = explode('-',$anw);
	$tm = $anws[1];
	$kun = $anws[0];
	$i = 1;
	$anws = explode('_',$anws[2]);
	foreach($anws as $tst){
		$tst = explode(':',$tst);
		$sav[$i] = $tst[0];
		$jav[$i] = $tst[1];
		$i++;
	}
		$tson = $i-2;
		for($i=1;$i<=$tson;$i++){
			$t_id = $sav[$i];
			$tstdb = mysql_query("select * from `tests` where id = '$t_id'");
			$tstmdb = mysql_fetch_array($tstdb);
				$tst[$i][1] = $tstmdb['savol'];
				$tst[$i][2] = $tstmdb['a'];
				$tst[$i][3] = $tstmdb['id'].":".$tstmdb['a_code'];
				$tst[$i][4] = $tstmdb['b'];
				$tst[$i][5] = $tstmdb['id'].":".$tstmdb['b_code'];
				$tst[$i][6] = $tstmdb['c'];
				$tst[$i][7] = $tstmdb['id'].":".$tstmdb['c_code'];
				$tst[$i][8] = $tstmdb['d'];
				$tst[$i][9] = $tstmdb['id'].":".$tstmdb['d_code'];
			}					
	
	 ///////////  OTM, yo'nalish va maktabni aniqlash 
	
	$ot = mysql_query("select * from `otm` where `id` = '$otm_id'");
	$otm = mysql_fetch_array($ot);
	
	$oty = mysql_query("select * from `otm_yunalish` where `id` = '$y_id'");
	$otym = mysql_fetch_array($oty);
		
	///////////  OTM, yo'nalish va maktabni aniqlash  tugadi 	

	
	?>	
	<script language="javascript">
		
		let tstj = [
	<?php 
	 for($i=1;$i<=$tson;$i++){
		  
			 echo "'".$sav[$i].":".$jav[$i]."',";		  
	 }
	?>
		];
	</script>
	<div class="fixed-top alert alert-primary"> <!-- -->
		<div class="row">
		<div class="col-9">
		FIO: <b><?php echo $_SESSION['fio'];?> </b> Siz <b><?php   echo $otm['otm_name'];  ?></b> ning <b><?php   echo $otym['name'];  ?></b> ga topshirdingiz &nbsp; &nbsp; &nbsp; &nbsp;  Sana <b><?php   echo $kun ?> </b> 
			 
			
	</div>
	<div class="col-3">		
	<div align="right" id="countdown-1" class="clock timeTo timeTo-white" style="font-family: Verdana, sans-serif; font-size: 28px;">
		 
		
		</div></div>
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
  <li class="nav-item" role="presentation">
    <a class="<?php  if($jav[$i]=='0'){ echo "btn btn-outline-info";} else {echo "btn btn-success";} ?>" id="<?php   echo $i; ?>s" data-toggle="pill" href="#pills-<?php   echo $i; ?>" role="tab"  aria-selected="true"><?php   echo $i; ?></a>
  </li>
	<?php
		}
			?>

</ul>
<div class="tab-content" id="pills-tabContent">
	
	<?php  
		for($i = 1; $i<=$tson; $i++){
		$rt = array(2,4,6,8);
		shuffle($rt);	
		shuffle($rt);	
		$s = $sav[$i].":".$jav[$i];
			
		?>
  <div class="tab-pane fade <?php  if($i==1) echo "active show";   ?>" id="pills-<?php   echo $i; ?>" role="tabpanel"  aria-labelledby="pills-contact-tab">
	
	<div class="alert alert-danger mb-4 mt-3" role="alert">
		<div class="qws" id="qws"> 
			 
	<?php   
			echo $i."-savol:".$tst[$i][1]; 
			
			?> 
		</div>
		 
	  </div>
		 
		<div class="<?php  if($s == ($tst[$i][$rt[0]+1])){ echo "alert alert-dark";} else {echo "alert alert-success";} ?>" style="cursor: pointer"  onClick="answ('<?php echo $tst[$i][$rt[0]+1]   ?>','a',<?php echo $i;   ?>)" id="<?php echo $i;   ?>a">
  			<?php 
			//echo $sav[$i].":".$jav[$i]."=======".$tst[$i][$rt[0]+1];
			echo "A)".$tst[$i][$rt[0]]; 
			
			?> 
		</div>
		<div class="<?php  if($s == ($tst[$i][$rt[1]+1])){ echo "alert alert-dark";} else {echo "alert alert-success";} ?>" style="cursor: pointer"  onClick="answ('<?php echo $tst[$i][$rt[1]+1]   ?>','b',<?php echo $i;   ?>)" id="<?php echo $i;   ?>b">
  			<?php  
			//echo $sav[$i].":".$jav[$i]."=======".$tst[$i][$rt[1]+1];
			echo "B)".$tst[$i][$rt[1]]; 
			
			?> 
		</div>
		<div class="<?php  if($s == ($tst[$i][$rt[2]+1])){ echo "alert alert-dark";} else {echo "alert alert-success";} ?>" style="cursor: pointer"  onClick="answ('<?php echo $tst[$i][$rt[2]+1]   ?>','c',<?php echo $i;   ?>)"  id="<?php echo $i;   ?>c">
  			<?php   
			//echo $sav[$i].":".$jav[$i]."=======".$tst[$i][$rt[2]+1];
			echo "C)".$tst[$i][$rt[2]]; 
			
			?> 
		</div>
		<div class="<?php  if($s == ($tst[$i][$rt[3]+1])){ echo "alert alert-dark";} else {echo "alert alert-success";} ?>" style="cursor: pointer" onClick="answ('<?php echo $tst[$i][$rt[3]+1]   ?>','d',<?php echo $i;   ?>)"  id="<?php echo $i;   ?>d">
  			<?php 
			//echo $sav[$i].":".$jav[$i]."=======".$tst[$i][$rt[3]+1];
			echo "D)".$tst[$i][$rt[3]]; 
			
			?> 
		</div>
	  
	</div>

	<?php
		}
			?>
   
	
	
	</div>
			<div id='tst1' class="d-none">
		
		</div>
		<center><input type="submit" class="btn btn-success" name="finish" value="      Testni tugatish     "> <a href="index.php?token=exit" class="btn btn-danger">Dasturdan chiqish</a>  </center>
</form>
	<form name="f2" id="f2" action="<?php echo  $_SERVER['PHP_SELF'];?>" method="post" class="d-none">
		<input type="hidden" name="id" value="<?php  echo $id  ?>">
	<div id='tst'>
		
		</div>
	
	<input type="submit" name="f3" id="f3">
	</form>
		</div>
	
	
	</div>	


<script>
	tson = <?php echo $tson; ?>;
	kn  = '<?php echo $kun; ?>';
	anw   = '<?php echo $anw; ?>';
	d = 0;
	
	ans = document.createElement('textarea');
	ans.setAttribute("name","ans");
	ans.setAttribute("cols","120");
	ans.setAttribute("row","50");
	ans.setAttribute("id","ans");
	ans.setAttribute("class","d");
	document.getElementById("tst").appendChild(ans);
	document.getElementById('ans').innerHTML = anw;
	
	ans1 = document.createElement('textarea');
	ans1.setAttribute("name","ans1");
	ans1.setAttribute("cols","120");
	ans1.setAttribute("row","50");
	ans1.setAttribute("id","ans1");
	ans1.setAttribute("class","d");
	document.getElementById("tst1").appendChild(ans1);
	document.getElementById('ans1').innerHTML = anw;
	
	
function answ(s,dj,i){
	
	tstj[i-1] = s;
	//document.getElementById('ans').innerHTML = tstj;	
	d++;
	document.getElementById(i+'a').className = 'alert alert-success';
	document.getElementById(i+'b').className = 'alert alert-success';
	document.getElementById(i+'c').className = 'alert alert-success';
	document.getElementById(i+'d').className = 'alert alert-success';
	document.getElementById(i+dj).className = 'alert alert-dark';
	document.getElementById(i+'s').className = 'btn btn-success';
	
	document.getElementById('pills-'+(i)).className = 'tab-pane fade';
	if (i == tson){
		i = 0;
	}
	
	document.getElementById('pills-'+(i+1)).className = 'tab-pane fade active show';
	document.getElementById((i+1)+'s').className = document.getElementById((i+1)+'s').className + ' active';
	
	tim = document.getElementById('countdown-1').innerText;
 	tim = parseInt((tim[0]+tim[4])*60) + parseInt(tim[10]+tim[14]);
	res = kn + "-" + tim +"-" + tstj.join('_')+"_";
	document.getElementById('ans').innerHTML = res;
	document.getElementById('ans1').innerHTML = res;
	if(d % 5 == 0 ){
		document.f2.f3.click();
	}
}	

//document.getElementById('tst').innerHTML = tstj;
	
</script>	
<?php
	}
	else echo "Kechirasiz siz ro`yxatdan o'tmadingiz <a href='index.php'>orqaga</a>";
		?>
<?php
	include("block/js.php");
	include("block/footer.php")
?>
	 