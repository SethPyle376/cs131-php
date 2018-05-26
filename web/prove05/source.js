function getMessage(id) {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getMessage.php", true);
	xhttp.onreadystagechange = function() {
		document.getElementById("messageContainer").innerHtml = this.responseText;
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id=" + id);
	document.getElementById("messageContainer").innerHtml = "Pranked";
}