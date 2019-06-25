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

function getCurrentClass(){
	$sql="select mg_class.aid, mg_class.cid, mg_user.name as admin_name, mg_course.name as course_name from mg_class left join mg_user on mg_class.aid=mg_user.uid left join mg_course on mg_class.cid=mg_course.cid";
	$rows = fetchAll($sql);
	return $rows;
}

function newClass($uid){
	$arr['cid'] = $_GET['cid'];
	$arr['aid'] = $uid;
	$arr['page'] = 1;
	$arr['mode'] = 1;

	$sql="select * from mg_class where aid =".$arr['aid'];//check if there is already a class for this teacher
	if(!empty(fetchOne($sql))){
		delete('mg_class','aid ='.$arr['aid']);
	}
	insert("mg_class", $arr);
	$msg="正在为您新建课堂...<meta http-equiv='refresh' content='2;url=admin.php?cid=".$arr['cid']."'/>";
	return $msg;
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