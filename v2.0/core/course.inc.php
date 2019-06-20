<?php 

function getAllCourses(){
	$sql="select * from mg_course";
	$rows = fetchAll($sql);
	return $rows;
}

function addCourse(){
	$arr=$_POST;
	//return $arr;
	array_splice($arr, 1,1);
	if(empty($arr['course_name']) || empty($arr['course_content']) || empty($_FILES['thumbnail']['name']) ){
		$msg="请确保课程信息填写完整！<meta http-equiv='refresh' content='1;url=addCourse.php'/>";
		return $msg;
		exit;
	}
}

 ?>