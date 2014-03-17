
(function($) {

	$(document).ready(function(){

		if($('.pane-node-field-idea-image .field-items .field-item').length > 3) {
			$('.pane-node-field-idea-image .field-items').bxSlider({
				default: false,
				pager: false,
				slideMargin: 10,
				minSlides: 1,
				maxSlides: 3,
				slideWidth: 190,
			});
		}

	});     

})(jQuery);   
