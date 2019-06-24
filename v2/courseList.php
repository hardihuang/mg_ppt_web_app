<?php 
$pageTitle="课程列表";
require_once 'includes/header.php';
$rows = getAllCourses();
$user = getUserByUid($uid);

echo('<div class="container" >');
	if(!empty($rows)){
		foreach($rows as $row){
			$btn1="";
			if($user['isAdmin'] == 1){
				$btnLink = 'doAction.php?act=newClass&cid='.$row['cid'].'&uid='.$uid;
				$btn1 = '<a href="'.$btnLink.'" class="btn btn-primary float-right">开课</a>';
			}

			$courseLink = 'courseInfo.php?cid='.$row['cid'];
			$btn2 = '<a href="courseInfo.php?cid='.$row['cid'].'" class="btn btn-success float-left">课程详情</a>';
			
			echo('<div class="card float-left mx-2 my-2 " style="width: 16rem;">');
			echo('<img src="images/course/'.$row['slides'].'/'.$row['thumbnail'].'"  style="height:190px;" class="card-img-top" alt="...">');
			echo('
					<div class="card-body">
			    		<h5 class="card-title">'.$row['name'].'</h5>
			    		<p class="card-text">'.$row['summary'].'</p>
			    		'.$btn1.$btn2.'
			  		</div>
		  		</div>

		  		');
		}	
	}

echo('</div>');
 ?>
 


<?php 

if($user['isAdmin'] == 1){
	echo('
		<div class="fixed-bottom float-right mb-5 ml-5">
			<a href="./addCourse.php">
				<button type="button" class="btn btn-success btn-lg rounded-circle font-weight-bold shadow"  data-toggle="tooltip" data-placement="top" title="新建课程">+</button>
			</a>
		</div>'
		);
}




?>



<?php 
require_once 'includes/footer.php';
 ?>