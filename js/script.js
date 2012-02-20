/* Author: JV

*/


var $container = $('#pins');
$container.imagesLoaded(function(){
	$container.masonry({
		itemSelector : '.pin',
		// columnWidth: function( containerWidth ) {
		// 	return containerWidth / 5;
		// },
		animationOptions: {
			duration: 400
		}
	});
});


// $('#pins').masonry({
	//   itemSelector: 'img',
	//   columnWidth: function( containerWidth ) {
		//     return containerWidth / 3;
		//   },
		//   
		// 
		// });
		
		
// var l = location.href, e = encodeURIComponent, u = e'http://vision.eightpixel.com/jenn/1'; wopen('http://vision.eightpixel.com/jenn/1?i'+e(l));