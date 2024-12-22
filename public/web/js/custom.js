

$("#banner-slider").owlCarousel({
	items : 1,
	nav:true,
	dots:true,
	loop:true,
	autoplay:true,
	slideTransition: 'linear',
	autoplayTimeout: 3000,
	autoplaySpeed: 3000,
	mouseDrag:true,
	autoplayHoverPause:false,
	navText : ["<span><i class='fa-solid fa-angle-left'></i></span>","<span><i class='fa-solid fa-angle-right'></i></span>"]
});





$('.owl-carousel').owlCarousel({
loop: true,
nav: false,
responsiveClass: true,
responsive: {
  0: {
	items: 1,
	nav: true
  },
  600: {
	items: 2,
	margin:20  
  },
  1000: {
	items: 3,
	loop: true,
	margin:30
  }
}
});


$(document).ready(function(){
	$(window).scroll(function(){
	if($(this).scrollTop() > 200){
		$('.topup').fadeIn(400);
	}else{ $('.topup').fadeOut(400); }	
	});
	
	$('.topup').click(function(event){
	event.preventDefault();
	$('html, body').animate({scrollTop:0}, 400);
	});
		
});

















