<?php
	$username="bsena";
	$password="sqlawl";
	$database="bsena+HandWave";

	$id= $_GET['id'];

	mysql_connect("sql.mit.edu",$	,$password);
	mysql_select_db($database) or die("Unable to select database");
	$result=mysql_query("select * from users where id=$id;");
	mysql_close();

	$user=mysql_result($result,0,"username");
	$psswd_hash=mysql_result($result,0,"psswd_hash");
?>