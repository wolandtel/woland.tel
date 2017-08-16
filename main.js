var $window = $(window);
var navTop = -1;

function blockResize ()
{
	var h = $window.height();
	
	$('.block').each(function () {
		var $block = $(this);
		
		$block.height('auto');
		
		if ($block.outerHeight() < h)
			$block.outerHeight(h);
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
