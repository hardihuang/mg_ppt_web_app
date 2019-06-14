<?php 
	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PWD","");
	define("DB_DBNAME","mg_web_app");
	define("DB_CHARSET","utf8");

	$link=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_DBNAME);
	if(!$link){
		echo "Error: unable to connect to MySQL";
		exit;
	}

	$sql = "SELECT * FROM mg_class";
	$result=$link->query($sql);
	$row=$result->fetch_array();

	echo json_encode($row);
	mysqli_close($link);


?>