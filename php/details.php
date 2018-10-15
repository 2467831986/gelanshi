<?php  
	
	include "conn.php";
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];//获取前端传入的id
	}

	$result=mysql_query("select * from spiclist where id = '$id'");
	
	$spicarr=array();
	
	for ($i=0; $i < mysql_num_rows($result); $i++) { 
		$spicarr[$i]=mysql_fetch_array($result,MYSQL_ASSOC);
	}

	echo json_encode($spicarr);

?><?php

?>