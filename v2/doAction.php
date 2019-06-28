<?php 
$pageTitle="doAction";
require_once 'include.php';
$act=$_REQUEST['act'];
if($act != 'login' && $act != 'logout' && $act != 'signup'){
	$uid=$_SESSION['uid'];
}


if($act==='signup'){
	$msg=signup();
}elseif($act==='login'){
	$msg=login();
}elseif($act==='logout'){
	$msg=logout();
}elseif($act==='addCourse'){
	$msg=addCourse();
}elseif($act==='newVersion'){
	$msg=newVersion();
}elseif($act==='newClass'){
	$msg=newClass($_REQUEST['uid']);
}elseif($act==='joinClass'){
	$msg=joinClass($_REQUEST['uid'],$_REQUEST['aid'],$_REQUEST['cid']);
}elseif($act==='updateClassData'){
	$msg=updateClassData($uid);
}elseif($act==='fetchClassData'){
	$msg=fetchClassData($uid);
}elseif($act==='closeClass'){
	$msg=closeClass($uid);
}elseif($act==='leaveClass'){
	$msg=leaveClass($uid);
}


 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
 <meta charset="utf-8">
 <meta name="description" content="">
 <meta name="keywords" content="">
 <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
 <meta http-equiv="x-ua-compatible" content="ie=7" />
 <title>do Action - <?php echo $act; ?></title>
 </head>
 <body>
 <?php 
if(@$msg){
	//echo $msg;
	print_r($msg);
}
?>
 </body>
 </html>
 