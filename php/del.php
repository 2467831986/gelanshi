<?php  
	require "conn.php";

	if(isset($_GET['id'])){
		$sid=$_GET['id'];
	}

	mysql_query("delete from banner where sid=$sid");
?>