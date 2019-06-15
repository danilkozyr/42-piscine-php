window.onload = function() {
	var arr = document.cookie.split(';');
	if (Array.isArray(arr) && arr[0] != '') {
		for (i = 0; i < arr.length; i++) {
			tmp = arr[i].split('=');
			add(tmp[1]);
		}
	}
}

function ask() {
	var name = prompt("Please enter a name of new NOTE:");
	add(name);
}

function add(name) {
	if (name != '') {
		var node = document.createElement("DIV");
		var textnode = document.createTextNode(name);
        node.appendChild(textnode);
        node.addEventListener("click", delUser);
        node.addEventListener("click", function() { delCookies(name); } );
		document.getElementById("ft_list").insertBefore(node, document.getElementById("ft_list").firstChild);
		document.cookie = name + "=" + name + ";";
    }
}

function delUser() {
    if (confirm("Do you want to delete this NOTE?")) {
        this.parentNode.removeChild(this);
    }
}

function delCookies(name) {
	document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}
