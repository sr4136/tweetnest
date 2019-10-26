<?php
	// PONGSOCKET TWEET ARCHIVE
	// Front page
	
	require "inc/preheader.php";
	
	$m = date("n");
	$d = date("d");
	$q = $db->query("SELECT `".DTP."tweets`.*, `".DTP."tweetusers`.`screenname`, `".DTP."tweetusers`.`realname`, `".DTP."tweetusers`.`profileimage` FROM `".DTP."tweets` LEFT JOIN `".DTP."tweetusers` ON `".DTP."tweets`.`userid` = `".DTP."tweetusers`.`userid` WHERE MONTH(FROM_UNIXTIME(`time`" . DB_OFFSET . ")) = '" . s($m) . "' AND DAY(FROM_UNIXTIME(`time`" . DB_OFFSET . ")) = '" . s($d) . "' ORDER BY `".DTP."tweets`.`time` DESC");
	
	$today = date("F d");
	
	$pageHeader = "Tweets On This Day:";
	
	//$home       = true;
	require "inc/header.php";
	echo( "<h2>$today</h2>" );
	echo tweetsHTML($q);
	require "inc/footer.php";