jQuery(function ($) {
$(window).scroll(function() {
		$('.highlight').each(function(){
		var position = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (position < topOfWindow+250) {
				$(this).addClass("slideUp");
			}
		});
	});
})