$(document).ready(function() {
	var arr = document.cookie.split(';');
	if (Array.isArray(arr) && arr[0] != '') {
		for (i = 0; i < arr.length; i++) {
			tmp = arr[i].split('=');
			add(tmp[1]);
		}
	}
})

function ask() {
	var name = prompt("Please enter a name of new NOTE:");
	add(name);
}

function add(name) {
	if (name != '') {
		$('#ft_list').prepend($('<div>' + name + '</div>').click(del));
		document.cookie = name + "=" + name + ";";
	}
}

function del() {
    if (confirm("Do you want to delete this NOTE?")) {
		this.remove();
		document.cookie = this.innerHTML + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    }
}
