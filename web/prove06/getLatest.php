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


	foreach ($db->query("SELECT messageid, creatorid, content, ts FROM message ORDER BY messageid DESC LIMIT 1") as $row) {
		echo $row['messageid'];	
	}
?>