<?php
$ans = $_POST['ans'];
$id = $_POST['id'];
if((isset($ans)) and (isset($id))){
	mysql_query("update `result` set `answers` = '$ans',`date` = '$day' where `id` = '$id'");
}


?>