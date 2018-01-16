

$(window).scroll(function(){
	if( $(this).scrollTop() > $('.hero').height()-50){
		$('.nav').addClass('fixed');
	}else {
		$('.nav').removeClass('fixed');
	}
});
