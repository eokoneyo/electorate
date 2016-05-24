(function ($) {

	$(document).ready(function() {
	  	$(".button-collapse").sideNav();

	  	var comment_count = $('.fb_comments_count').val();
		if (comment_count === '0') {
			$.('.btn-floating').hide();
		};
	});
	
})(jQuery);