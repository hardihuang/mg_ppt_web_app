$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

function stopVideo(){
	$('#videoElement').get(0).pause();
}