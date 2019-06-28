function fetchData(){

  $.ajax({
      type: 'GET',
      //url: './apis/fetchData.api.php',
      url: './apis/getCurrentClass.api.php',
      
      success: function(data){
          //console.log(data);
          
          jsonData = jQuery.parseJSON(data);
          var uid=jsonData.uid;
          //console.log(jsonData);
          $('#currentClasses').html('');
          if(jsonData.data!=null){
            for(var i=0; i<jsonData.data.length; i++){
              if(jsonData.isAdmin == 1){
                var button = '';
              }else{
                var button = '<a class="btn btn-primary btn-sm float-right" href="doAction.php?act=joinClass&aid='+jsonData.data[i]['aid']+'&uid='+jsonData.uid+'&cid='+jsonData.data[i]['cid']+'">去上课</a> ';
              }
              $('#currentClasses').append(
                '<li class="list-group-item">'+jsonData.data[i]['course_name']+' - '+jsonData.data[i]['admin_name']+button+'</li>'
              );
            }
          }else{
            $('#currentClasses').html(
                '<li class="list-group-item">这里什么都没有~~</li>'
              );
          }
          

          
      }
  });
}



window.setInterval("fetchData()",1000);