<?php


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
	$content = $_POST['content'];
	$userID = NULL;

	foreach ($db->query("SELECT userid, cookie, nickname FROM chatuser WHERE cookie='$cookie'") as $user) {
		$userID = $user['userid'];
	}

	$timestamp = date('Y-m-d G:i:s');

	$statement = $db->prepare("INSERT INTO message(creatorid, content, ts) VALUES(?, ?, ?)");
	$statement->execute(array($userID, $content, $timestamp));
?>
