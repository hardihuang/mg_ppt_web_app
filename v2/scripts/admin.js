var totalItems = $('#ppt_main .carousel-item').length;
var currentIndex = $('div.active').index();
$('#ppt_preview').carousel(currentIndex + 1);

//writeData();
var mode = 1;
$('#ppt_main').on('slid.bs.carousel', function() {

  currentIndex = $('div.active').index();
  console.log("currentIndex: " + currentIndex + " totalItems: " + totalItems);
  $('.num').html(''+currentIndex+'/'+totalItems+'');
  $('#ppt_preview').carousel(currentIndex + 1);

  writeData();
});

function changeMode(index){
  mode = index;
  currentIndex = $('div.active').index();
  writeData();
  console.log(mode);
}


function writeData(){
  //var temp = "doAction.php?act=updateClassData&aid="+ <?php echo($uid); ?>;
  var aid = "<?php echo $uid; ?>";
    $.ajax({
        type: 'POST',
        url: "doAction.php?act=updateClassData",
        data: {
          currentPage:currentIndex,
          mode: mode
        },
        success: function(data){
          console.log("success! "+currentIndex);
          //console.log(data);
        },
        error: function(returnval) {
          console.log(returnVal);
        },
    });

  }


window.onbeforeunload = adminExitHandler;
function adminExitHandler()
{
  
  $.ajax({
        type: 'POST',
        url: "doAction.php?act=closeClass",
        data: {},
        success: function(data){
          console.log("success! ");
          //console.log(data);
        },
    });
}
