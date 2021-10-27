<?php
$db = mysql_connect('localhost','root','');
if(!$db){
	die('Baza bilan aloqa yo`q'.mysql_error());
}
else{
	mysql_select_db('testonline',$db);
}
	mysql_query("SET NAMES cp1251");
	  session_start();


$token=$_GET['token'];
$token=testinp($token);
if($token=="exit")
{
$_SESSION['user_id']="";
$_SESSION['login']="";	
$_SESSION['password']="";
$_SESSION['otm_id'] = "";
$_SESSION['yunalish_id'] = "";	
}

	function testinp($data)    ///  Belgilarni tekshirish
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		$data=str_replace('script','ss',$data);
		$data=str_replace('<?php','ss',$data);
		$data=str_replace('mysql','ss',$data);
		$data=str_replace('update','ss',$data);
		$data=str_replace('insert','ss',$data);
		$data=str_replace('delete','ss',$data);
		return $data;
	
	}
	function testfikr($data)    ///  Belgilarni tekshirish
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=str_replace('script','ss',$data);
		$data=str_replace('<?php','ss',$data);
		$data=str_replace('mysql','ss',$data);
		$data=str_replace('update','ss',$data);
		$data=str_replace('insert','ss',$data);
		$data=str_replace('delete','ss',$data);
		$data=str_replace("'",'`',$data);
		return $data;
	}
	
$day=date("Y-m-d");
$dayn=date("d.m.Y");

		
$lang=$_GET['lang'];
if($lang=="")
{
	if($_SESSION['lang']=="")
	{
	$lang='1';		
	}
	else
	{
	$lang=$_SESSION['lang'];	
	}
}
else
{
$_SESSION['lang']=$lang;	
}

?>
<!doctype html>

<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1251">	
<script src="js/jquery-3.4.1.js"></script>
	<link href="css/timeTo.css" type="text/css" rel="stylesheet">
	<script src="js/jquery.timeTo.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
<link rel="icon" href="images/icons.ico">
<style>
      
	 ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  /*content: "\2B06";*/
  content: url("55.jpg");
  color: black;
  display: inline-block;
  margin-right: 2px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */'
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
	.scrl{
                height: 250px; 
                overflow-x: hidden; 
                overflow-x: auto; 
	}
	
    </style>
	 <link href="css/floating-labels.css" rel="stylesheet">
<title>Test Online</title>
</head>