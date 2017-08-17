var $window = $(window);
var navTop = -1;

function blockResize ()
{
	var h = $window.height();
	
	$('.block').each(function () {
		var $block = $(this),
			bh;
		
		$block.height('auto');
		
		if ((bh = $block.outerHeight()) < h)
			bh = h;
		
		if (BGSIZE.w)
		{
			if ($window.width() / $window.height() > BGSIZE.w / BGSIZE.h)
				$block.attr('style', 'background-size: 100% auto !important');
			else
				$block.attr('style', 'background-size: auto 100% !important');
		}
		
		if (bh == h)
			$block.outerHeight(bh);
	});
}

$(document).ready(function () {
	blockResize();
});

$window.resize(function () {
	blockResize();
});

$window.scroll(function () {
	if (navTop < 0)
		navTop = $('.nav').position().top;
	
	var top = navTop - $window.scrollTop();
	
	if (top < 0)
		top = 0;
	
	$('.nav').css('top', top);
});
