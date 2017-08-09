$(function() {
	$('.newWorker').addClass('oculto');
	$("body").on("click",".setWorker",function(e){
		console.log('AQUI');
	});
	$('.setWorker').on('click',function(){
		$('.newWorker').addClass('showme');
	});
});