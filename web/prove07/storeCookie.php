<?php

	$nickName = $_POST['nickname'];
	$cookie = $_POST['cookie'];


	$dbURL = getenv('DATABASE_URL');

	$dbopts = parse_url($dbURL);
	$dbHost = $dbopts["host"];
	$dbPort = $dbopts["port"];
	$dbUser = $dbopts["user"];
	$dbPassword = $dbopts["pass"];
	$dbName = ltrim($dbopts["path"],'/');
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$statement = $db->prepare("INSERT INTO chatUser(cookie, nickname) VALUES(?, ?)");
	$statement->execute(array($cookie, $nickName));
?>