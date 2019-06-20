<?php 

function getAllCourses(){
	$sql="select * from mg_course";
	$rows = fetchAll($sql);
	return $rows;
}

function addCourse(){
	$arr=$_POST;
	array_splice($arr, -1);//remove the last element of this arr which is [submit]
	//return $arr;
	if(empty($arr['name']) || empty($arr['summary']) || empty($_FILES['thumbnail']['name']) ){
		$msg="请确保课程信息填写完整！<meta http-equiv='refresh' content='1;url=addCourse.php'/>";
		return $msg;
		exit;
	}

	$uploadFile=uploadFile('images/course/thumb/');

	if($uploadFile&&is_array($uploadFile)){
		$arr['thumbnail']=$uploadFile[0]['name'];
	}else{
		return "添加失败1<meta http-equiv='refresh' content='1;url=addCourse.php'/>";
	}
	//return $arr;
	if(insert("mg_course", $arr)){
		$msg="课程新建成功!<br/>2秒钟后跳转到课程列表!<meta http-equiv='refresh' content='2;url=courseList.php'/>";
	}else{
		$filename="images/course/thumb/".$uploadFile[0]['name'];
		if(file_exists($filename)){
			unlink($filename);
		}
		$msg="添加失败2!<meta http-equiv='refresh' content='1;url=addCourse.php'/>";
	}
	return $msg;



}

 ?>