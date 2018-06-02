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

	$cookie = $_POST['cookie'];


	foreach ($db->query("SELECT userid, cookie, nickname FROM chatuser WHERE cookie='$cookie'") as $user) {
		echo $user['nickname'];
	}
?>