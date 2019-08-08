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