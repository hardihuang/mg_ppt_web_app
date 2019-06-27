<?php 

function getAllCourses(){
	$sql="select * from mg_course order by cid desc";
	$rows = fetchAll($sql);
	return $rows;
}

function getSlidesDir(){
	$sql="select slides from mg_course where cid = ".$_GET['cid'];
	$dir = fetchOne($sql);
	return $dir;
}


function addCourse(){
	$arr=$_POST;
	array_splice($arr, -1);//remove the last element of this arr which is [submit]
	//return $_FILES;
	//return $arr;
	if(empty($arr['name']) || empty($arr['summary']) || empty($_FILES['slides']['name'][0])){
		$msg="请确保课程信息填写完整！<meta http-equiv='refresh' content='1;url=addCourse.php'/>";
		return $msg;
		exit;
	}

	//take care of the slides file
	$slides_folder = getUniName();
	mkdir('images/course/'.$slides_folder,0777,true);
	$arr['slides'] = $slides_folder;
	$uploadFile=uploadFile('images/course/'.$slides_folder,array("gif","jpeg","png","jpg","wbmp"),2097152,true,false);
	//return $uploadFile;

	//use the first slide as the thumbnail
	$arr['thumbnail'] = sortImgByFilename('images/course/'.$slides_folder)[0].'.jpg';

	//return $arr;
	if(insert("mg_course", $arr)){

		$msg="课程新建成功!<br/>2秒钟后跳转到课程列表!<meta http-equiv='refresh' content='2;url=courseList.php'/>";
	}else{
		$folder="images/course/".$slides_folder;
		if(file_exists($folder)){
			unlink($folder);
		}
		$msg="添加失败!<meta http-equiv='refresh' content='1;url=addCourse.php'/>";
	}
	return $msg;

}


 ?>