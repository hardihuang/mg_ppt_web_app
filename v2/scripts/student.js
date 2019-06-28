function fetchData(){
    var jsonData;
    $.ajax({
        type: 'GET',
        url: './apis/fetchData.api.php',
        
        success: function(data){
            //console.log(data);
            jsonData = jQuery.parseJSON(data);
            console.log(jsonData);
            console.log(typeof jsonData);
            var debug = 0;
            if(!jsonData.classData){
              alert('老师已离开教室，本课程已结束，休息一下吧！');
              window.location.href="./courseList.php"; 
            }else{
              if(debug){
                $("#fetchData").html(
                "adminId:"+jsonData.classData.aid
                +"  classId:" +jsonData.classData.cid
                +"  currentPage:"+jsonData.classData.page
                +"  classMode:"+jsonData.classData.mode);
              }
              console.log('currentPage: '+jsonData.classData.page+' classMode: '+jsonData.classData.mode);
              if(jsonData.classData.mode==1){//sync mode
                $('.carousel-control-prev').hide();
                $('.carousel-control-next').hide();
                $('#ppt_main').carousel(parseInt(jsonData.classData.page));
              }else if(jsonData.classData.mode==2){//free mode
                $('.carousel-control-prev').show();
                $('.carousel-control-next').show();
              }
              $("#leaderBoardList").html('');
              for (var i = 0; i<jsonData.students.length; i++) {
                var num=i+1;
                $("#leaderBoardList").append(
                  '<li class="list-group-item" style="padding-top: 5px;padding-bottom: 5px">'+
                  '<span class="mr-2 font-weight-bold">'+ num +'</span>'+
                  '<img src="./images/uploads/avatar_50/'+jsonData.students[i].avatar+'" alt="..." style="width:70px; border-style:solid; border-width:medium;" class="rounded-circle mr-3 border-success" >'+
                  jsonData.students[i].name+'</li>'
                );
              }
              

              
            }
            
        }
    });

}

window.setInterval("fetchData()",1000);

window.onbeforeunload = studentExitHandler;
function studentExitHandler()
{
  
  $.ajax({
        type: 'POST',
        url: "doAction.php?act=leaveClass",
        data: {},
        success: function(data){
          console.log("success! ");
          //console.log(data);
        },
    });
}
