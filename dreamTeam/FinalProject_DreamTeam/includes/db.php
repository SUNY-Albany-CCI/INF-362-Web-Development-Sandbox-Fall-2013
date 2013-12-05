<?php
	$conn = mysql_connect('localhost','user1','user1pass');
	$db = mysql_select_db("test",$conn);
	session_start();
?>