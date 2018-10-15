<?php  
	
	include "conn.php";

	$result=mysql_query("select * from spiclist");
	
	$spicarr=array();
	
	for ($i=0; $i < mysql_num_rows($result); $i++) { 
		$spicarr[$i]=mysql_fetch_array($result,MYSQL_ASSOC);
	}

	echo json_encode($spicarr);

?>