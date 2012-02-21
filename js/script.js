//**** JS MASONRY ****//
var $container = $('#pins');
$container.imagesLoaded(function(){
	$container.masonry({
		itemSelector : '.pin-frame',
		// columnWidth: function( containerWidth ) {
		// 	return containerWidth / 5;
		// },
		animationOptions: {
			duration: 400
		}
	});
});



// BOOKMARKLET CODE:
// var l = location.href, e = encodeURIComponent, u = e'http://vision.eightpixel.com/jenn/1'; wopen('http://vision.eightpixel.com/jenn/1?i'+e(l));