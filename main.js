BGSIZE = {
	w: 1792,
	h: 1192
}

function blockResize ()
{
	var $window = $(window),
		h = $window.height();
	
	$('.block').each(function () {
		var $block = $(this),
			bh;
		
		$block.height('auto');
		
		if ((bh = $block.outerHeight()) < h)
			bh = h;
		
		if ($block.width() / bh > BGSIZE.w / BGSIZE.h)
			$block.attr('style', 'background-size: 100% auto !important');
		else
			$block.attr('style', 'background-size: auto 100% !important');
		
		if (bh == h)
			$block.outerHeight(bh);
	});
}

$(document).ready(function () {
	blockResize();
});

$(window).resize(function () {
	blockResize();
});
