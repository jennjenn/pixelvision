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

if(!empty($_GET['d'])){
	$pintodelete = mysql_real_escape_string($_GET['d']);
	$pinname = getPinFile($pintodelete);
	deletePin($uid,$pintodelete,$pinname);
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
		?>
		<div class='pin-frame'>
			<div class='pin-tools'>
				<span id='pin-delete-<?php echo $pid; ?>' class='pin-delete'><a href='/<?php echo $username; ?>/<?php echo $bid; ?>/?d=<?php echo $pid; ?>'>delete</a></span>
			</div>
			<img class='pin' src='/pins/<?php echo $uid; ?>/<?php echo $pinurl; ?>'>
		</div>
		<?php
}	
}
?>
</ul>

<script src="/js/jquery.masonry.min.js"></script>

<?php require_once('footer.php'); ?>

