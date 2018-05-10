<!DOCTYPE html>
<html>
<head>
	<title>Teach03</title>
	<link rel="stylesheet" href="teach03.css" />
</head>
<body>
	<h1>Teach03</h1>
	
	<form action="send.php" method="post">
		name: <input type="text" name="name" /><br />
		E-Mail: <input type="text" name="email" /><br />
		Major: <br />
		
		<?php
			$majors = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");
			$majorsLen = count($majors);
			for ($i = 0; $i < $majorsLen; $i++){
				echo "<input type='radio' name='major' value='" . $majors[$i] . "'>" . $majors[$i] . "<br>"; 
			};
		?>

		Comments: <br />
		<textarea name="comments" rows="4" cols="40"></textarea><br />
			
		Continents You've Visited:<br />
		North America<input type="checkbox" name="continents[]" value="NA"><br />
		South America<input type="checkbox" name="continents[]" value="SA"><br />
		Europe<input type="checkbox" name="continents[]" value="EU"><br />
		Asia<input type="checkbox" name="continents[]" value="AS"><br />
		Africa<input type="checkbox" name="continents[]" value="AF"><br />
		Antarctica<input type="checkbox" name="continents[]" value="AN"><br />
		<input type="submit" id="submitBtn" value="Submit" />
    </form>
</body>
</html>