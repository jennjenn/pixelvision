<?php
require_once('header.php');

if(!empty($_POST['imgadd']) && !empty($_POST['imgurl'])){
	$visionurl = mysql_real_escape_string($_POST['imgurl']);
//	echo $visionurl;
	$pull = pullPhoto($uid, $visionurl);
	addVision($bid, $pull);
}

if(!empty($_GET['i'])){
	$visionremoteurl = mysql_real_escape_string($_GET['i']);
}
?>

<div id="pin-form">
	<form method="POST" action="">
		<input type="text" id="imgurl" name="imgurl" value="<?php echo $visionremoteurl; ?>"> <input type="submit" id="imgadd" name="imgadd" value="add">
	</form>
</div>
<ul id="pins">
<?php
$pins = getPins($bid);
if(empty($pins)){
	echo "<p>no pins!</p>";
}else{
	foreach($pins as $pin => $pin_deets){
		$pid = $pin;
		$pinurl = $pin_deets['filename'];
		echo "<img class='pin' src='/pins/$uid/$pinurl'>";
	}	
}
?>
</ul>

<script src="/js/jquery.masonry.min.js"></script>

<?php require_once('footer.php'); ?>

