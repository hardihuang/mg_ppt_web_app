<?php 
$pageTitle="课程列表";
require_once 'includes/header.php';
$rows = getAllCourses();
 
echo('<div class="container mt-3 col-md-6 card-deck" >');
	foreach($rows as $row){
		echo('<div class="card" style="width: 18rem;">');
		echo('<img src="images/course/thumb/'.$row['thumbnail'].'" class="card-img-top" alt="...">');
		echo('
				<div class="card-body">
		    		<h5 class="card-title">'.$row['name'].'</h5>
		    		<p class="card-text">'.$row['content'].'</p>
		    		<a href="student.php?cid=1" class="btn btn-primary">去上课</a>
		  		</div>
	  		</div>

	  		');
	}
echo('</div>');
 ?>
 



<?php 
require_once 'includes/footer.php';
 ?>