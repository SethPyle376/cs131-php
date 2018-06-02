<html>

	<head>
		<title>Chat App</title>
		<link rel="stylesheet" href="style.css">
		<script src="source.js"></script>
	</head>

	<body>
		<script>
			getNickname(getCookie("chatAppID"));
		</script>
		<div id="top">
			<input type="text" id="messageContent" value="" placeholder="Enter Message ID">
			<button type="button" name="request" onClick="sendMessage()">Send Message</button>
		</div>
		<br>

		<div id="messageContainer">
			<div class = "card">
				<div class="container">
					<b>DIRECTIONS</b>
					<p>Currently there exists 10 messages from 4 different people in the database. Please enter 1-10 in the above textbox,
					   then click the button to have that message displayed. If you would like to see all the messages, please enter ALL into
					   the textbox then click the button.</p>
				</div>
			</div>
			<br>
		</div>

	</body>

</html>