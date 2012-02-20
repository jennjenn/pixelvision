<?php
function getRequestedUser(){
	$requested_user = mysql_real_escape_string($_GET['user']);
	$query = mysql_query("SELECT * FROM users WHERE username = '$requested_user'");
	$row = mysql_fetch_assoc($query);
	$user['uid'] = $row['uid'];
	$user['username'] = $row['username'];
	return $user;
}

function getRequestedBoard(){
	$requested_board = mysql_real_escape_string($_GET['vision']);
	$query = mysql_query("SELECT * FROM boards WHERE bid = '$requested_board'");
	$row = mysql_fetch_assoc($query);
	$board['bid'] = $row['bid'];
	return $board;	
}

function getUsername($uid){
	$query = mysql_query("SELECT * FROM users WHERE uid = $uid");
	$row = mysql_fetch_assoc($query);
	$username = $row['username'];
	return $username;
}

function getVisions($uid){
	$query = mysql_query("SELECT * FROM boards WHERE uid = $uid");
	while($row = mysql_fetch_assoc($query)){
		$bid = $row['bid'];
		$boards[$bid] = array('privacy' => $row['privacy']);
	}
	return $boards;
}

function getPins($bid){
	$query = mysql_query("SELECT * FROM pins WHERE bid = $bid ORDER BY added DESC");
	while($row = mysql_fetch_assoc($query)){
		$pid = $row['pid'];
		$file = $row['pin_local_url'];
		$pins[$pid] = array('filename' => $file);
	}
	return $pins;
}
?>