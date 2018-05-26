<html>

	<head>
		<title>Chat App</title>
		<link rel="stylesheet" href="style.css">
		
		<script>

			function getMessage(id) {
				document.getElementById("messageContainer").innerHtml = "Pranked";
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST", "getMessage.php", true);
				xhttp.onreadystagechange = function() {
					document.getElementById("messageContainer").innerHtml = this.responseText;
				}
				document.getElementById("messageContainer").innerHtml = "Pranked";
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("id=" + id);
			}

		</script>


	</head>

	<body>

		<input type="text" id="messageID" value="" placeholder="Enter Message ID">
		<button type="button" name="request" onClick="getMessage(document.getElementById('messageID').value)">Get Message</button>
		<br>

		<div id="messageContainer">
			
			<div class = "card">
				<div class="container">
					<b>User: Seth</b>
					<p>This is the message</p>
				</div>
			</div>
			<br>

		</div>

	</body>

</html>