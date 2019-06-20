<?php 
	$pageTitle="版本更新记录";
	require_once 'includes/header.php';

	$rows=getVersionList();

	echo('<div class="container mt-5" >
		<ul class="list-group list-group-flush">
		');

	foreach ($rows as $row) {
		echo('
			<li class="list-group-item">
			  	<h5><span class="badge badge-secondary mr-1">V'.$row['version'].'</span>
			  		'.$row['dateTime'].'</h5>
			  	<p>'.$row['content'].'</p>
		  	</li>
		  ');
	};
	echo('</ul></div>');
?>
	<br><br>


<?php 
require_once 'includes/footer.php';
 ?>
