function getMessage(id) {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getMessage.php", true);
	xhttp.onreadystatechange = function() {
		alert(this.responseText);
		document.getElementById("messageContainer").innerHTML = this.responseText + document.getElementById("messageContainer").innerHTML;
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id=" + id);
}