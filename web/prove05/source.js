function getMessage(id) {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getMessage.php", true);
	xhttp.onreadystagechange = function() {
		if (this.status = 200) {
			document.getElementById("messageContainer").innerHtml = this.responseText;
		}
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id=" + id);
}