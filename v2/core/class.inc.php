<?php 

function getCurrentClass(){
	$sql="select mg_class.aid, mg_class.cid, mg_user.name as admin_name, mg_course.name as course_name from mg_class left join mg_user on mg_class.aid=mg_user.uid left join mg_course on mg_class.cid=mg_course.cid";
	$rows = fetchAll($sql);
	return $rows;
}

function updateClassData($aid){
	
	$arr['page'] = $_POST['currentPage'];
	$where = 'aid ='.$aid;
	update('mg_class',$arr,$where);

}

function fetchClassData($uid){

	$sql = "select aid from mg_student where uid=".$uid;
	$row = fetchOne($sql);
	$aid = $row['aid'];
	$sql = "select * from mg_class where aid = ".$aid;
	$row = fetchOne($sql);
	return $row;
}

function joinClass($uid, $aid, $cid){
	$arr['uid']=$uid;
	$arr['aid']=$aid;
	$arr['points']=0;

	$sql="select * from mg_student where uid =".$uid;
	if(!empty(fetchOne($sql))){
		delete('mg_student','uid='.$uid);
	}
	insert("mg_student",$arr);
	$msg="正在进入课堂...<meta http-equiv='refresh' content='2;url=student.php?cid=".$cid."'/>";
	return $msg;
}

function closeClass($uid){
	$where = 'aid = '.$uid;
	delete('mg_class',$where);
	delete('mg_student',$where);
	$msg="上课辛苦啦，休息一下吧！正在退出课堂...<meta http-equiv='refresh' content='1;url=courseList.php'/>";
	return $msg;
}

function newClass($uid){
	$arr['cid'] = $_GET['cid'];
	$arr['aid'] = $uid;
	$arr['page'] = 0;
	$arr['mode'] = 1;

	$sql="select * from mg_class where aid =".$arr['aid'];//check if there is already a class for this teacher
	if(!empty(fetchOne($sql))){
		delete('mg_class','aid ='.$arr['aid']);
	}
	insert("mg_class", $arr);
	$msg="正在为您新建课堂...<meta http-equiv='refresh' content='2;url=admin.php?cid=".$arr['cid']."'/>";
	return $msg;
}











?>