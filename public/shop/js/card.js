$(document).ready(function(){
	$('#product-card').hover(function(){
		$(this).addClass('animate');
		$('div.carouselNext, div.carouselPrev').addClass('visible');
	 }, function(){
		$(this).removeClass('animate');			
		$('div.carouselNext, div.carouselPrev').removeClass('visible');
});
});
