var totalItems = $('#ppt_main .carousel-item').length;
var currentIndex = $('div.active').index();
$('#ppt_preview').carousel(currentIndex + 1);

//writeData();
$('#ppt_main').on('slid.bs.carousel', function() {

  currentIndex = $('div.active').index();
  console.log("currentIndex: " + currentIndex + " totalItems: " + totalItems);
  $('.num').html(''+currentIndex+'/'+totalItems+'');
  $('#ppt_preview').carousel(currentIndex + 1);

  //writeData();
});


function writeData(){

    $.ajax({
        type: 'POST',
        url: './apis/writeData.api.php',
        data: {
          currentPage:currentIndex,
          somethingElse:"nothing"
        },
        success: function(data){
          console.log("success! "+currentIndex);
          console.log(data);

        }
    });

  }