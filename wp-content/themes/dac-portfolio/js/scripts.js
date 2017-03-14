jQuery(document).ready(function($) {
	$(function() {
	    $('body').removeClass('fade-out');
	});
	$(document).ready(function() {
		$('.headshot').css('opacity', '1');
	});

	$('.hide-caption').click(function(event) {
		$(this).parent().css('transform', 'translateY(0)');
	});

});
