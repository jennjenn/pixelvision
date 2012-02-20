<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<div id="header"><h1>Add your vision</h1></div>
<div id="share-tools">
	<div id="share-imgs">
	</div>
</div>

<script>

var d = document, s = location.href, o = ""; //var imgcount = 0; 
alert(s);

for(i = 0; i<d.images.length; i++){
	var img = d.images[i];
	if(d.img.height > 300 && d.img.width > 300){
		o += "<img src='" + d.img.src + "'>";
		alert(s + " / " + d.images[i].src);
	}
}
$('#share-imgs').append(o);
</script>