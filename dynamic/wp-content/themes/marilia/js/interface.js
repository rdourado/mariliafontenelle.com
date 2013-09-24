function my_gallery(_wrap, _view, _items, _width, _show) {
	var gallery = $(_wrap);
	if (gallery.length) {
		var view  = gallery.find(_view);
		var imgs  = view.find(_items);
		var total = Math.ceil(imgs.length / _show);
		var width = _width;
		var current = 0;
		var new_width = width * total;
		var view_class = _view.split('.').join('');
		
		if (total <= 1) {
			gallery.find('.prev,.next').remove();
		} else {
			view.width(new_width);
			gallery.on('click', '.next', function(e){
				e.preventDefault();
				current = (current + 1 < total) ? current + 1 : 0;
				view.removeClass().addClass(view_class + ' pos-' + current);
			});
			gallery.on('click', '.prev', function(e){
				e.preventDefault();
				current = (current > 0) ? current - 1 : total - 1;
				view.removeClass().addClass(view_class + ' pos-' + current);
			});
		}
		return true;
	}
	return false;
}

$(document).ready(function(){

	// Gallery
	my_gallery('.post-gallery', '.gallery-view', 'img', 706, 1);
	my_gallery('.more-wrap', '.matrix', '.matrix-item', 777, 3);
	if (my_gallery('.sidebar-gallery', '.sidebar-view', 'img', 220, 3)) {
		$('.page-thumbnail').wrapInner('<a href="#" class="call-fancy"></a>');
	}

	// Fancybox
	$('.fancybox').attr('rel','fancy').fancybox();
	$('.call-fancy').click(function(e){
		e.preventDefault();
		$('.fancybox').first().trigger('click');
	});

});

$(window).scroll(function(){
	var topHeight = $('.head').height();
	var scroll = $(window).scrollTop();
	if (scroll >= topHeight) {
		$("body").addClass("show-menu");
	}
	if (scroll < topHeight) {
		$("body").removeClass("show-menu");
	}
});
