
<?php
$region = $_POST['region'];
if(isset($region))
{
	$_SESSION['act'] = '1';
	$cities = preg_split('/\n|[\n]/',$_POST['cities']);
	if($region == 1 ){  ///  Viloyat 
		foreach ($cities as $val){
			$val = testfikr($val);
			mysql_query("insert into `viloyat`(`vname`) values('$val')");
		}
	}
	if($region == 2 ){
		$town1 = $_POST['town1'];
		if($town1 != 0)
		{
			foreach ($cities as $val){
			$val = testfikr($val);
			mysql_query("insert into `region`(`rname`,`vil_id`) values('$val','$town1')");
			}
		}
		else echo "<h2 class='alert-warning'>Viloyat tanlanmadi!</h2>";
	}
	if($region == 3 ){
		$town1 = $_POST['town1'];
		$town2 = $_POST['town2'];
		if(($town1 != 0) and ($town2 != 0))
		{
			foreach ($cities as $val){
			$val = testfikr($val);
			mysql_query("insert into `school`(`mname`,`reg_id`) values('$val','$town2')");
			}
		}
		else echo "<h2 class='alert-warning'>Viloyat yoki tuman tanlanmadi!</h2>";
	}
	if($region == 4 ){
		$town1 = $_POST['town1'];
		$town2 = $_POST['town2'];
		$town3 = $_POST['town3'];
		if(($town1 != 0) and ($town2 != 0) and ($town3 != 0) )
		{
			foreach ($cities as $val){
			$val = testfikr($val);
			mysql_query("insert into `classes`(`cname`,`school_id`) values('$val','$town3')");
			}
		}
		else echo "<h2 class='alert-warning'>Viloyat yoki tuman tanlanmadi!</h2>";
	}
	
}
?>
<!--  OTM lar  ni saqlash   -->
<?php
$otm = $_POST['otm'];
if(isset($otm))
{
		$_SESSION['act'] = '2';
	$univ = preg_split('/\n|[\n]/',$_POST['univ']);
	if($otm == 1 ){  ///  OTM 
		foreach ($univ as $val){
			$val = testfikr($val);
			mysql_query("insert into `otm`(`otm_name`) values('$val')");
		}
	}
	if($otm == 2 ){  /// OTM yo'nalishlari
		$otm_id = $_POST['otm_id'];
		if($otm_id != 0)
		{
			foreach ($univ as $val){
			$val = testfikr($val);
			mysql_query("insert into `otm_yunalish`(`name`,`otm_id`) values('$val','$otm_id')");
		}
		}
		else echo "<h2 class='alert-warning'>Viloyat tanlanmadi!</h2>";
	}
	 
}
?>
<?php 	///  Testlarni moslashtirish
if((isset($_POST['matching'])) and (isset($_POST['otm_id'])))
   {
		$_SESSION['act'] = '2';
	   $otm_id = $_POST['otm_id'];
	   $yun_id = $_POST['yunalish_id'];
	$fandb = mysql_query("select * from `test_type`");
	$fans = mysql_num_rows($fandb);
	$j = 1;
	for($i = 1; $i <= $fans; $i++){
		if (isset($_POST['fan'.$i])){
			$fan[$j] = $_POST['fan'.$i];
			$j++;
		}
	}
	//shuffle($fan);   Bu keyin kerak bo'ladi testda
	$fans = implode(':',$fan);
	mysql_query("update `otm_yunalish` set `test_type_ids` = '$fans' where `id` = '$yun_id'");
   }					
			///  Testlarni moslashtirish tugadi
?>

<?php    // O'quvchilarni qo'shish
if(isset($_POST['user'])){
		$_SESSION['act'] = '3';
	if(isset($_POST['viloyat']) and isset($_POST['tuman']) and isset($_POST['maktab']) and isset($_POST['sinf'])){
		$vil_id = $_POST['viloyat'];
		$tum_id = $_POST['tuman'];
		$mak_id = $_POST['maktab'];
		$sinf_id = $_POST['sinf'];
		$users = preg_split('/\n|[\n]/',$_POST['users']);	
	if(($users != "") and ($vil_id !=0)  and ($tum_id !=0)  and ($mak_id !=0)  and ($sinf_id !=0)){   
		foreach ($users as $val){
			$val = testfikr($val);
			$login = strtolower($val);
			$login = str_replace("`","",$login);
			$login = str_replace("’","",$login);
			$login = str_replace("	","",$login);
			$login = str_replace(" ","",$login);
			$login = substr($login,0,rand(3,7));
			$son = (rand(0,9)).(rand(0,9));
			$login = $login.$son;
			$pass = chr(rand(97,122)).chr(rand(97,122)).chr(rand(40,59)).chr(rand(40,59)).chr(rand(40,59)).chr(rand(40,59)).chr(rand(40,59)).chr(rand(40,59));
			//$login = $val.
			mysql_query("insert into `users`(`fio`,`school_id`,`class_id`) values('$val','$mak_id','$sinf_id')");
			$ldb = mysql_query("select * from `users` ORDER BY `users`.`id` DESC
LIMIT 0 , 1");
			$mldb = mysql_fetch_array($ldb);
			$login = $login.$mldb['id'];
			$id = $mldb['id'];
			mysql_query("update `users` set `login` = '$login', `password` = '$pass' where `id` = '$id'");
			
		}
		
	}
	else {
		echo "<h2 class='alert-warning'>Barcha ma`lumotlarni to'ldiring</h2>";
	}
	}
}				// Userlarni qo'shish tugadi

?>

<?php			/// Yangi fanni saqlash
if(isset($_POST['eid']))
{
		$_SESSION['act'] = '4';
	$eid = $_POST['eid'];
	$newfan = $_POST['newfan'];

	
	if(($eid == 0) and ($newfan !="")){	
		mysql_query("insert into `test_type`(`name`) values('$newfan')");
		$newfan = "";

	}
	if(($eid != 0) and ($newfan !="")){	
		mysql_query("update `test_type` set `name` = '$newfan' where `id` = '$eid'");
		$newfan = "";

	}
	
	
}
	


?>

<?php   // Testlarni saqlash uchun
if(isset($_POST['testlar'])){
 $_SESSION['act'] = '5';
	$fan1 = $_POST['fan1'];
	$tsts = $_POST['testlar'];
	if($fan1 > 0){
	$j = 1;
	for($i = 1; $i <= $tsts; $i++){
			$tst[$i] = $_POST['tst'.$i];
		
		//$tstdb = htmlspecialchars($tst[$i]);
		//echo $tstdb."<br>";
	}
	for($i = 1; $i <= $tsts;$i = $i + 5){
		$savol = $tst[$i];
		$a = $tst[$i+1];
		$ac = chr(rand(97,122)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(97,122));
		$b = $tst[$i+2];
		$bc = chr(rand(97,122)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(97,122));
		$c = $tst[$i+3];
		$cc = chr(rand(97,122)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(97,122));
		$d = $tst[$i+4];
		$dc = chr(rand(97,122)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(65,90)).chr(rand(97,122));
		//echo "Savol ".$savol."<br>A) ".$a." <br>".$ac."<br>B) ".$b." <br>".$bc."<br>C) ".$c."<br>".$cc."<br>D) ".$d."<br>".$dc."<br>".$fan1;
		mysql_query("INSERT INTO `tests` (`savol`, `a`, `a_code`, `b`, `b_code`, `c`, `c_code`, `d`, `d_code`, `test_type_id`) VALUES ('$savol', '$a', '$ac', '$b', '$bc', '$c', '$cc', '$d', '$dc', '$fan1');");
	}	
	}
	 
}

/*$ss = '
  <p class="MsoNormal"><span style="font-size:12.0pt;font-family:"Times New Roman",serif"><img src="../keyingi.files/image003.png" width="141" height="41"></span></p>
  ';
$ss = '<p class="MsoNormal"><span style="font-size:11.0pt;font-family:"Calibri Light",sans-serif; color:black">Write(‘PAXTA’,’Q’,‘OY’) оператори бажарилгач екранда нима &#1203;осил бўлади.</span></p> ';
$ss1 =  htmlspecialchars($ss);          // Bazaga saqlash uchun shuni ishlataman
$ss2 = htmlspecialchars_decode($ss1);	// Bazadan olganda shuni ishlataman
echo $ss1;
echo "\n";
echo $ss2."-------------------------------<br>";
*/
?>

<?php    /////////////  Vkladka
if(($_SESSION['act']=='') or ($_SESSION['act']=='1'))
	{
		$act[1][1] = " active";
		$act[1][2] = " show active";
		$act[2][1] = " ";
		$act[2][2] = " ";
		$act[3][1] = " ";
		$act[3][2] = " ";
		$act[4][1] = " ";
		$act[4][2] = " ";
		$act[5][1] = " ";
		$act[5][2] = " ";
	
}
if($_SESSION['act']=='2')
	{
		$act[1][1] = " ";
		$act[1][2] = " ";
		$act[2][1] = " active ";
		$act[2][2] = " show active ";
		$act[3][1] = " ";
		$act[3][2] = " ";
		$act[4][1] = " ";
		$act[4][2] = " ";
		$act[5][1] = " ";
		$act[5][2] = " ";	
}
if($_SESSION['act']=='3')
	{
		$act[1][1] = " ";
		$act[1][2] = " ";
		$act[2][1] = " ";
		$act[2][2] = " ";
		$act[3][1] = " active ";
		$act[3][2] = " show active ";
		$act[4][1] = " ";
		$act[4][2] = " ";
		$act[5][1] = " ";
		$act[5][2] = " ";	
}
if($_SESSION['act']=='4')
	{
		$act[1][1] = " ";
		$act[1][2] = " ";
		$act[2][1] = " ";
		$act[2][2] = " ";
		$act[3][1] = " ";
		$act[3][2] = " ";
		$act[4][1] = " active ";
		$act[4][2] = " show active ";
		$act[5][1] = " ";
		$act[5][2] = " ";	
}
if($_SESSION['act']=='5')
	{
		$act[1][1] = " ";
		$act[1][2] = " ";
		$act[2][1] = " ";
		$act[2][2] = " ";
		$act[3][1] = " ";
		$act[3][2] = " ";
		$act[4][1] = " ";
		$act[4][2] = " ";
		$act[5][1] = " active ";
		$act[5][2] = " show active ";	
}

?>




