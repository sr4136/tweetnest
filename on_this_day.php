<?php
	// PONGSOCKET TWEET ARCHIVE
	// Front page
	
	require "inc/preheader.php";
	$q = $db->query("SELECT `".DTP."tweets`.*, `".DTP."tweetusers`.`screenname`, `".DTP."tweetusers`.`realname`, `".DTP."tweetusers`.`profileimage` FROM `".DTP."tweets` LEFT JOIN `".DTP."tweetusers` ON `".DTP."tweets`.`userid` = `".DTP."tweetusers`.`userid` WHERE `".DTP."tweets`.`hidden` = 0 ORDER BY `".DTP."tweets`.`time` DESC LIMIT 25");
	$pageHeader = "Recent tweets";
	$home       = true;
	require "inc/header.php";
	echo(date("d"))
	echo tweetsHTML($q);
	require "inc/footer.php";