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

	$sql = "UPDATE mg_class SET current_page =".$_POST['currentPage']." WHERE admin_id = 1";
	$result=$link->query($sql);

	echo json_encode($result);
	mysqli_close($link);


	

 ?>