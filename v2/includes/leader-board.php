<div class="card mb-3">
  <div class="card-header font-weight-bolder">当前课堂学员</div>
  <div class="card-body" style="padding-top: 10px; padding-bottom: 10px; padding-left: 10px;">
    <ul class="list-group list-group-flush" id="leaderBoardList">

      <?php 

      /*
      $i=1;
      foreach ($students as $student) {
        echo('<li class="list-group-item" style="padding-top: 5px;padding-bottom: 5px">');
        echo('<span class="mr-2 font-weight-bold">'.$i.'</span>');
        echo('<img src="./images/uploads/avatar_50/'.$student['avatar'].'" alt="..." style="width:70px; border-style:solid; border-width:medium;" class="rounded-circle mr-3 border-success" >');
        echo($student['name']);
        echo('</li>');
        $i++;
      }
      */

       ?>

      <!--
        <li class="list-group-item" style="padding-top: 5px;padding-bottom: 5px">
          <span class="mr-2 font-weight-bold">1.</span>
          <img src="./images/uploads/avatar_50/<?php echo($avatar); ?>" alt="..." style="width:70px; border-style:solid; border-width:medium;" class="rounded-circle mr-3 border-success" ><?php echo($_SESSION['name']); ?>  
          
          <span class="badge badge-pill badge-success" style="margin-left: 20px">47 经验</span>
         
        </li>
       -->
        
      </ul>
  </div><!--end of card-body-->
</div><!--end of card mb-3-->