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

	$greatest = $_POST['latestMessage'];


	foreach ($db->query("SELECT messageid, creatorid, content, ts FROM message WHERE messageid > '$greatest' ORDER BY messageid DESC") as $row) {
		$tempUser = $row['creatorid'];
		foreach ($db->query("SELECT userid, cookie, nickname FROM chatuser WHERE userid='$tempUser'") as $user) {
			echo '<div class = "card"> 
					<div class = "container">
						<b>User:' . $user['nickname'] . '</b>
						<p>User Cookie: ' . $user['cookie'] . '</p>
						<p>Message ID: '. $row['messageid'] . '</p>
						<p>Message: ' . $row['content'] . '</p>
						<p>Creation Timestamp ' . $row['ts'] . '</p>
					</div>
				</div>';
			}
		}

?>