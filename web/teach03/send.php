<html>
	<body>
		Welcome <?php echo $_POST["name"]; ?><br>
		Your email address is: <a href="mailto:<?php echo $_POST["email"];?>" target="_blank"><?php echo $_POST["email"] ?> </a><br>
		Your major is: <?php echo $_POST["major"]; ?><br>
		Your Comments: <?php echo $_POST["comments"]; ?><br><br>
		Continents You've Visited:<br>

		<?php

		$continents = $_POST['continents'];

		$continentsMap = array("NA" => "North America", "SA" => "South America", "EU" => "Europe", "AS" => "Asia", "AF" => "Africa", "AN" => "Antarctica");

		foreach ($continents as $value) {
			echo $continentsMap[$value]."<br>";
		}

		?>

	</body>
</html>