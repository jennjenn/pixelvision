<?php require_once('header.php'); ?>

<h1>hello <?php echo $username; ?>!</h1>

<?php
$boards = getVisions($uid);
foreach($boards as $board => $board_deets){
	$bid = $board;
	$privacy = $board_deets['privacy'];
	echo "<p><a href='/$username/$bid'>$bid</a> - $privacy</p>";
}
?>

<?php require_once('footer.php'); ?>

