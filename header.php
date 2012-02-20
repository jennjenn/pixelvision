<?php
require_once('connect.php');
require_once('functions/functions-base.php');
require_once('functions/functions-post.php');

$user = getRequestedUser();
$uid = $user['uid'];
$username = $user['username'];

$board = getRequestedBoard();
$bid = $board['bid'];
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>pixelvision</title>
	<meta name="description" content="">

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/css/style.css">
	
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="/js/libs/modernizr-2.5.3.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<header class="clearfix">
		<h1><?php echo $user['username']; ?>'s pixelvision</h1>
		<nav>
			<ul>
				<li><a href="/">home</a></li>
				<li><a href="#">my visions</a></li>
				<li><a href="#">other visions</a></li>
			</ul>
		</nav>
	</header>
	<div role="main" class="clearfix">