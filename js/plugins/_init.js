// Scripts - Client

$(function(){

	$('.toggle').text_toggle({
		animation: 300
	});

	$('.banner .slides').owlCarousel({
		singleItem:true,
		pagination: true,
		itemsCustom: [0, 1]
	});

	$('.slide .content').each(function() {
		var text_height = $(this).outerHeight(true);
		text_height = text_height/2;
		$(this).css({
			marginTop: '-'+text_height+'px'
		});
		console.log(text_height);
	});
	
});