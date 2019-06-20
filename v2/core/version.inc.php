<?php 

function getVersionList(){
	$sql="select * from mg_version order by dateTime desc";
	$rows=fetchAll($sql);
	return $rows;
}

function getCurrentVersion(){
	$sql="select version from mg_version order by dateTime desc limit 1";
	$row=fetchOne($sql);
	return $row;
}

 ?>