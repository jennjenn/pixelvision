// javascript:(function(){if(window.myBookmarklet !== undefined){myBookmarklet();}else{document.body.appendChild(document.createElement('script')).src='http://tommy.com:8888/bookmarklet.js?'+new Date().getTime();}})();

(function(){

	// the minimum version of jQuery we want
	var v = "1.7.1";

	// check for jQuery. if it exists, verify it's not too old.
	if (window.jQuery === undefined || window.jQuery.fn.jquery < v) {
		var done = false;
		var script = document.createElement("script");
		script.src = "http://ajax.googleapis.com/ajax/libs/jquery/" + v + "/jquery.min.js";
		script.onload = script.onreadystatechange = function(){
			if (!done && (!this.readyState || this.readyState == "loaded" || this.readyState == "complete")) {
				done = true;
				initMyBookmarklet();
			}
		};
		document.getElementsByTagName("head")[0].appendChild(script);
	} else {
		initMyBookmarklet();
	}
	
	function initMyBookmarklet() {
		(window.myBookmarklet = function() {
			function getSelText() {
				var s = '';
				if (window.getSelection) {
					s = window.getSelection();
				} else if (document.getSelection) {
					s = document.getSelection();
				} else if (document.selection) {
					s = document.selection.createRange().text;
				}
				return s;
			}
			if ($("#wikiframe").length == 0) {
				var s = "";
				s = getSelText();
				if (s == "") {
					var s = prompt("Forget something?");
				}
				if ((s != "") && (s != null)) {
					$("body").append("\
					<div id='wikiframe'>\
						<div id='wikiframe_veil' style=''>\
							<p>Loading...</p>\
						</div>\
						<iframe src='http://en.wikipedia.org/w/index.php?&search="+s+"' onload=\"$('#wikiframe iframe').slideDown(500);\">Enable iFrames.</iframe>\
						<style type='text/css'>\
							#wikiframe_veil { display: none; position: fixed; width: 100%; height: 100%; top: 0; left: 0; background-color: rgba(255,255,255,.25); cursor: pointer; z-index: 900; }\
							#wikiframe_veil p { color: black; font: normal normal bold 20px/20px Helvetica, sans-serif; position: absolute; top: 50%; left: 50%; width: 10em; margin: -10px auto 0 -5em; text-align: center; }\
							#wikiframe iframe { display: none; position: fixed; top: 10%; left: 10%; width: 80%; height: 80%; z-index: 999; border: 10px solid rgba(0,0,0,.5); margin: -5px 0 0 -5px; }\
						</style>\
					</div>");
					$("#wikiframe_veil").fadeIn(750);
				}
			} else {
				$("#wikiframe_veil").fadeOut(750);
				$("#wikiframe iframe").slideUp(500);
				setTimeout("$('#wikiframe').remove()", 750);
			}
			$("#wikiframe_veil").click(function(event){
				$("#wikiframe_veil").fadeOut(750);
				$("#wikiframe iframe").slideUp(500);
				setTimeout("$('#wikiframe').remove()", 750);
			});
		})();
	}

})();

// var d = document; var s = location.href; //var imgcount = 0; 
// var o = '<div style="width:500px; height:300px; background:#fff; border:3px solid #ccc; position:fixed; z-index:9999">';
// 
// for(i = 0; i<d.images.length; i++){
// 	var img = d.images[i];
// 	if(d.img.height > 300 && d.img.width > 300){
// 		o += "<img src='" + d.img.src + "'>";
// 		//	alert(s + " / " + d.images[i].src);
// 	}
// }
// o += '</div>';
// d.getElementsByTagName('body').appendChild(o);