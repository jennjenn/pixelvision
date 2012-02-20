<?php

function addVision($bid, $url){
	$query = mysql_query("INSERT INTO pins(bid, pin_local_url) VALUES ($bid, '$url')");
	if($query){
		return true;
	}else{
		return false;
	}
}

function pullPhoto($uid, $url){
	$photohash = md5($url) . time();
	$ext = pathinfo($url, PATHINFO_EXTENSION);
	$photourl = $photohash . "." . $ext;
	copy($url, "/home/jennsothersites/vision.eightpixel.com/pins/$uid/$photourl");
	return $photourl;
}



?>