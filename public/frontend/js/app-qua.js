document.addEventListener('DOMContentLoaded', function () {
	var owl = $('.owl-carousel');
		  owl.owlCarousel({
		    
		    responsive: {
		      0: {
		        items: 1
		      },
		      600: {
		        items: 2
		      },
		      1000: {
		        items: 2
		      }
		    }
		  })

});

document.addEventListener('DOMContentLoaded', function () {
	$('.sort_mobile').click(function(event) {
		
	});

	$('.fillter_mobile').click(function(event) {
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$('.filter').removeClass('open');
			$('.button_close_mobile').removeClass('open');
		}else{
			$(this).addClass('open');
			$('.filter').addClass('open');
			$('.button_close_mobile').addClass('open');
		}
	});

	$('.sort_mobile').click(function(event) {
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$('.catalogSort_Sortby').removeClass('open');
			$('.button_close_mobile').removeClass('open');
		}else{
			$(this).addClass('open');
			$('.catalogSort_Sortby').addClass('open');
			$('.button_close_mobile').addClass('open');
		}
	});

	$('.button_close_mobile').click(function(event) {
		if($(this).hasClass('open')){
			$(this).removeClass('open');
			$('.filter').removeClass('open');
			$('.fillter_mobile').removeClass('open');
			$('.sort_mobile').removeClass('open');
			$('.catalogSort_Sortby').removeClass('open');
		}else{
			$(this).addClass('open');
			$('.filter').addClass('open');
			$('.fillter_mobile').addClass('open');
			$('.sort_mobile').addClass('open');
			$('.catalogSort_Sortby').addClass('open');
		}
	});
	
});