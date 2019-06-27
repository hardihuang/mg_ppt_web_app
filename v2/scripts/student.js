function fetchData(){
    var jsonData;
    $.ajax({
        type: 'GET',
        url: './apis/fetchData.api.php',
        
        success: function(data){
            console.log(data);
            jsonData = jQuery.parseJSON(data);
            var debug = 0;
            if(!jsonData){
              alert('老师已离开教室，本课程已结束，休息一下吧！');
              window.location.href="./courseList.php"; 
            }else{
              if(debug){
                $("#fetchData").html(
                "adminId:"+jsonData.aid
                +"  classId:" +jsonData.cid
                +"  currentPage:"+jsonData.page
                +"  classMode:"+jsonData.mode);
              }
              console.log('currentPage: '+jsonData.page+' classMode: '+jsonData.mode);
              $('#ppt_main').carousel(parseInt(jsonData.page));
            }
            
        }
    });

}

window.setInterval("fetchData()",1000);