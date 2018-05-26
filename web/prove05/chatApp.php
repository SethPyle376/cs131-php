<html>

	<head>
		<title>Chat App</title>
		<link rel="stylesheet" href="style.css">
		<script src="source.js"></script>
	</head>

	<body>

		<input type="text" id="messageID" value="" placeholder="Enter Message ID">
		<button type="button" name="request" onClick="getMessage(document.getElementById('messageID').value">Get Message</button>
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