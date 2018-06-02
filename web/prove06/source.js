var latestMessage = 0;

function getMessage(id) {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getMessage.php", true);
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("messageContainer").innerHTML = this.responseText + document.getElementById("messageContainer").innerHTML;
		}
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id=" + id);
}

function setCookie() {
    var d = new Date();
    var newCookie = Math.floor(Math.random() * 1000).toString();
    d.setTime(d.getTime() + (30*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = "chatAppID" + "=" + newCookie + ";" + expires + ";path=/";

    var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "storeCookie.php", true);
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			window.location = "chatApp.php";
		}
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("cookie=" + newCookie + "&nickname=" + document.getElementById("nicknamebox").value);
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function userRedirect() {
	window.location = "chatApp.php";
}

function getNickname(cookie) {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getNickname.php", true);
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("top").innerHTML = "<h1>Welcome " + this.responseText + "</h1>" + document.getElementById("top").innerHTML;
		}
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("cookie=" + cookie);
}

function setMessageChecker() {
	window.setInterval(function(){
		retrieveMessage.call();
	}, 2000);
}

function sendMessage() {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "saveMessage.php", false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("cookie=" + getCookie("chatAppID") + "&content=" + document.getElementById("messageContent").value);
	retrieveMessage();
}

function retrieveMessage() {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getMessage.php", true);
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			document.getElementById("messageContainer").innerHTML = this.responseText + document.getElementById("messageContainer").innerHTML;
		}
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("latestMessage=" + latestMessage);
	updateLatest();
}

function updateLatest() {
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "getLatest.php", true);
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			latestMessage = parseInt(this.responseText);
		}
	}
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("latestMessage=" + latestMessage);
}