<script language="javascript" type="application/javascript">
////////////////////////////////  Massivlar
let reg = [
<?php
	$js = mysql_query("select  * from `region`");
	while ($mjs = mysql_fetch_array($js)){
		echo "[".$mjs['id'].",".$mjs['vil_id'].",'".$mjs['rname']."'],
		";
	}
	?>
];
	
let school = [
<?php
	$js = mysql_query("select  * from `school`");
	while ($mjs = mysql_fetch_array($js)){
		echo "[".$mjs['id'].",".$mjs['reg_id'].",'".$mjs['mname']."'],
		";
	}
	?>
];
let sinf = [
<?php
	$js = mysql_query("select  * from `classes`");
	while ($mjs = mysql_fetch_array($js)){
		echo "[".$mjs['id'].",".$mjs['school_id'].",'".$mjs['cname']."'],
		";
	}
	?>
];

let yun = [
<?php
	$js = mysql_query("select  * from `otm_yunalish`");
	while ($mjs = mysql_fetch_array($js)){
		echo "[".$mjs['id'].",".$mjs['otm_id'].",'".$mjs['name']."'],
		";
	}
	?>
];


</script>


<script language="javascript" type="application/javascript">
	/////   Select region, school  and classes
	function regcall2(rid){
		//window.alert(eid);
		
	document.getElementById("reg2").innerHTML  = "<option value='0'>Qaysi tuman?</option>";
	 res = reg.filter(reg=>reg[1] == rid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById("reg2").innerHTML =document.getElementById("reg2").innerHTML  +  "<option onClick='mcall2("+res[i][0]+")' value='"+res[i][0]+"'>" + ree + "</option>";
	}	
}
	
function mcall2(mid){
	document.getElementById("school2").innerHTML  = "<option value='0'>Qaysi maktab?</option>";
	 res = school.filter(school=>school[1] == mid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById("school2").innerHTML =document.getElementById("school2").innerHTML  +  "<option value='"+res[i][0]+"'>" + ree + "</option>";
	}	
}

	//////////////  Select university section
function yunalish(yid){
		document.getElementById("yunalish").innerHTML  = "<option value='0'>Qaysi yunalish?</option>";
	 res = yun.filter(yun=>yun[1] == yid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById("yunalish").innerHTML =document.getElementById("yunalish").innerHTML  +  "<option value='"+res[i][0]+"'>" + ree + "</option>";
	}	
	}	
</script> 

<script language="javascript" type="application/javascript">////////  Select users filter  ikkinchisi

	function regcallf(rid){
	document.getElementById("regf").innerHTML  = "<option value='0'>Qaysi tuman?</option>";
	 res = reg.filter(reg=>reg[1] == rid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById("regf").innerHTML =document.getElementById("regf").innerHTML  +  "<option onClick='mcallf("+res[i][0]+")' value='"+res[i][0]+"'>" + ree + "</option>";
	}	
}
	
function mcallf(mid){
	document.getElementById("schoolf").innerHTML  = "<option value='0'>Qaysi maktab?</option>";
	 res = school.filter(school=>school[1] == mid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById("schoolf").innerHTML =document.getElementById("schoolf").innerHTML  +  "<option value='"+res[i][0]+"'>" + ree + "</option>";
	}	
}
	
</script>

<script language="javascript" type="application/javascript">
	/////////  Select users 
	function regcall(rid,eid){
		//window.alert(eid);
	document.getElementById(eid).innerHTML  = "<option value='0'>Qaysi tuman?</option>";
	 res = reg.filter(reg=>reg[1] == rid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById(eid).innerHTML =document.getElementById(eid).innerHTML  +  "<option onClick='mcall("+res[i][0]+")' value='"+res[i][0]+"'>" + ree + "</option>";
	}	
}
	
function mcall(mid){
	document.getElementById("school").innerHTML  = "<option value='0'>Qaysi maktab?</option>";
	 res = school.filter(school=>school[1] == mid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById("school").innerHTML =document.getElementById("school").innerHTML  +  "<option onClick='ccall("+res[i][0]+")' value='"+res[i][0]+"'>" + ree + "</option>";
	}	
}
	
function ccall(cid){
	document.getElementById("class").innerHTML  = "<option value='0'>Qaysi sinf?</option>";
	 res = sinf.filter(sinf=>sinf[1] == cid);
	for(let i = 0;i<res.length;i++){
		ree = res[i][2];
		document.getElementById("class").innerHTML =document.getElementById("class").innerHTML  +  "<option value='"+res[i][0]+"'>" + ree + "</option>";
	}	
}

</script>

<script>
function folder()
	{
		
		var checkBox = document.getElementById("foldercheck");
		var text = document.getElementById("foldertext");
  		if (checkBox.checked == true){
				text.style.display = "block";
  		} 
		else {
     			text.style.display = "none";
  }
	}
</script>

<script>  //////////  Timerniki
				function  strip_tags(str, allowed_tags) { 
              var key = '', allowed = false; 
              var matches = []; 
              var allowed_array = []; 
              var allowed_tag = ''; 
              var i = 0; 
              var k = ''; 
              var html = ''; 
     
              var replacer = function(search, replace, str) { 
                  return str.split(search).join(replace); 
              }; 
     
              // Build allowes tags associative array 
              if (allowed_tags) { 
                  allowed_array = allowed_tags.match(/([a-zA-Z]+)/gi); 
              } 
     
              str += ''; 
     
              // Match tags 
              matches = str.match(/(<\/?[\S][^>]*>)/gi); 
     
              // Go through all HTML tags 
              for (key in matches) { 
                  if (isNaN(key)) { 
                      // IE7 Hack 
                      continue; 
                  } 
     
                  // Save HTML tag 
                  html = matches[key].toString(); 
     
                  // Is tag not in allowed list? Remove from str! 
                  allowed = false; 
     
                  // Go through all allowed tags 
                  for (k in allowed_array) { 
                      // Init 
                      allowed_tag = allowed_array[k]; 
                      i = -1; 
     
                      if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+'>');} 
                      if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+' ');} 
                      if (i != 0) { i = html.toLowerCase().indexOf('</'+allowed_tag)   ;} 
     
                      // Determine 
                      if (i == 0) { 
                          allowed = true; 
                          break; 
                      } 
                  } 
     
                  if (!allowed) { 
                      str = replacer(html, "", str); // Custom replace. No regexing 
                  } 
              } 
     
              return str; 
          }
				
				
				$('#countdown-1').timeTo(<?php echo $tm*60;  ?>, function(){
					//location.replace("index.php?act=endtest&test=DSgolA==,DSgoHw==,DSgoBg==,DSgoNQ==,DShjHg==");
					document.testform.finish.click();
				});
				//alert($('#countdown-1').html());
				$(document).ready(function() {
						$("#question_"+StepKeys[CurrKey]).click();
						$("#qtotal").html(QuestionIds.length);
						$("#qcurrent").html(CurrKey+1);
				});
			
			</script>
