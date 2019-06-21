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

function newVersion(){
	$arr=$_POST;
	$arr['version']=$_POST['version'];
	$arr['dateTime']=date("Y-m-j"." "."H:i:s");//匹配数据库中的datetime时间格式
	$arr['content']=$_POST['content'];
	unset($arr['submit']);
	insert("mg_version", $arr);
	//return $arr;
	$msg="<meta http-equiv='refresh' content='0;url=version.php'/>";
	return $msg;
}

 ?>