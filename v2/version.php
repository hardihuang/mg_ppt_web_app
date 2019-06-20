<?php 
	$currentVersion = '2.5.1';
	$pageTitle="版本更新记录";
	require_once 'includes/header.php';
?>

<!--

version control:

[2.5.1] Jun/20/2019 17.14 'go to class'button now can open different view based on the user level(teacher go to admin.php, student go to student.php) and with cid in the link
[2.5.0] Jun/20/2019 12:32 now we can add a new course with addCourse page
[2.4.0] Jun/20/2019 11:35 only admin account can access the addCourse page
[2.3.4] Jun/20/2019 11:14 improved header style
[2.3.3] Jun/20/2019 11:04 added index.php banner
[2.3.2] Jun/20/2019 10:42 added button open addCourse in courseList page
[2.3.1] Jun/20/2019 10:22 fixed upload form check error
[2.3.0] Jun/20/2019 10:00 added addCourse page
[2.2.0] Jun/19/2019 20:30 added courseList page
[2.1.0] Jun/19/2019 12:40 added login & signup page 
[2.0.0] Jun/17/2019 10:00 rebuild from ground up, using older version of php (php v5.x && xampp v3.2.1) and old libraries from zihuaxiang

-->

<div class="container mt-5" >

<ul class="list-group list-group-flush">
  <li class="list-group-item">
  	<h5>
  		<span class="badge badge-secondary mr-1">V2.0.0</span>
  		Jun/17/2019 10:00</h5>
  	<p>
  		rebuild from ground up, using older version of php (php v5.x && xampp v3.2.1) and old libraries from zihuaxiang
  	</p>
  </li>
</ul>

</div>

<?php 
require_once 'includes/footer.php';
 ?>

