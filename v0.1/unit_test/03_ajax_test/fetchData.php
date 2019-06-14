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
	//echo "success!";

	//mysqli_query($link, "INSERT INTO mg_class (admin_id, ppt_mode, class_mode) VALUES(2,1,0)");
	$sql = "SELECT * FROM mg_class";
	$result=$link->query($sql);
	$row=$result->fetch_array();

	echo "pptMode: ".$row['ppt_mode']."<br/>";
	echo "classMode: ".$row['class_mode']."<br/>";
	echo "currentPage: ".$row['current_page'];


	//while($row=$result->fetch_array()){
		//echo "admin_id: ".$row["admin_id"]." ppt_mode: ".$row["ppt_mode"]." class_mode: ".$row["class_mode"]."<br />";
		//print_r($row);
	//}


	mysqli_close($link);


?>