<?php
	$ans = $_POST['ans1'];
	if (isset($ans) != ""){
	
		//echo $ans;
		
		$rdb= mysql_query("select * from `result` where `user_id` = '$user_id' and `score` = '-1'");
		$mrdb = mysql_fetch_array($rdb);
			$res = $mrdb['answers'];
			$id = $mrdb['id'];
			$rs = explode('-',$res);
			$sana = $rs[0];
			$tm = $rs[1];
			$rrs = $rs[2];
			//echo "ddd".$rrs;
			$tst = explode('_',$rrs);
		foreach($tst as $val){
			
			$val1 = explode(':',$val);
			$tsid = $val1[0];
			$jav = $val1[1];
			
			echo $tsid."<br>";
			//$tdb = mysql_query("select tests from ")
		}
			
		
	
	}
	
	
	?>