$(document).ready(function(){

	// 
	// Gallery
	// 

	var gallery = $('.post-gallery');
	if (gallery.length) {
		var view  = $('.gallery-view');
		var imgs  = view.find('img');
		var total = imgs.length;
		var width = 706;
		var current = 0;
		var new_width = width * total;
		
		if (total <= 1) {
			// 
			gallery.find('.prev,.next').remove();
		} else {
			// 
			view.width(new_width);
			// 
			gallery.on('click', '.next', function(e){
				e.preventDefault();
				current = (current + 1 < total) ? current + 1 : 0;
				view.removeClass().addClass('gallery-view pos-' + current);
			});
			gallery.on('click', '.prev', function(e){
				e.preventDefault();
				current = (current > 0) ? current - 1 : total - 1;
				view.removeClass().addClass('gallery-view pos-' + current);
			});
		}
	}

	// 
	// Gallery
	// 

	var more = $('.more-wrap');
	if (more.length) {
		var more_view  = more.find('.matrix');
		var more_items = more_view.find('.matrix-item');
		var more_total = Math.ceil(more_items.length / 3);
		var more_width = 777;
		var more_current = 0;
		var more_new_width = more_width * more_total;
		
		if (more_total <= 1) {
			// 
			more.find('.prev,.next').remove();
		} else {
			// 
			more_view.width(more_new_width);
			// 
			more.on('click', '.next', function(e){
				e.preventDefault();
				more_current = (more_current + 1 < more_total) ? more_current + 1 : 0;
				more_view.removeClass().addClass('matrix pos-' + more_current);
			});
			more.on('click', '.prev', function(e){
				e.preventDefault();
				more_current = (more_current > 0) ? more_current - 1 : more_total - 1;
				more_view.removeClass().addClass('matrix pos-' + more_current);
			});
		}
	}
	
});