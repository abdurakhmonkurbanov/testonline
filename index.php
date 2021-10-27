<?php
include("block/top.php");
?>

<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$login = $_POST['login'];
	$password = $_POST['password'];
	$userdb = mysql_query("select * from `users` where `login` like '$login' and `password` like '$password'");
	$usermdb = mysql_fetch_array($userdb);
	if (($usermdb['login'] != "") and ($usermdb['password'] != ""))
	{
		
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		$_SESSION['user_id'] = $usermdb['id'];
		$_SESSION['fio'] = $usermdb['fio'];
		$_SESSION['school_id'] = $usermdb['school_id'];
		include('block/userform.php');
	}
	else {
		echo("<div class='alert alert-danger' role='alert'>Login yoki parol xato!</div>");
		include('block/autorize.php');
		}
?>
	
<?php
	}
	else{
		if($_SESSION['login']==""){
			include('block/autorize.php');
		}
		else {
			include('block/userform.php');
		}
		
		
	}
?>
	
	
	

<?php
	include("block/js.php");
	include("block/footer.php")
?>