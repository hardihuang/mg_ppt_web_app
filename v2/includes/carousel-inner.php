<?php 
    $dir = 'images/course/'.getSlidesDir()['slides'].'/';
    $rows = sortImgByFilename($dir);
    $currentPage = 1;
    $active='';

  echo('<div class="carousel-inner">');

  $i=0;
  foreach ($rows as $row ) {
    if($currentPage == $i+1){$active = 'active';
    }else{$active = '';}

    echo('<div class="carousel-item '.$active.'"  >');
    echo('<img src="'.$dir.$row.'.jpg" class="d-block w-100" alt="...">');
    echo('</div>');
    $i++;
  }

?>


</div><!--end of carousel-inner-->
<a class="carousel-control-prev" href="#ppt_main" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#ppt_main" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>