"use strict"

function showHobbyList(str) {
	if (str.length == 0) {
		$('#hobbyList').text('')
		return
	} else {
		// someone typed some stuff!
		var xmlhttp = new XMLHttpRequest()
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				$("#hobbyList").html(this.responseText)
			}
		}
		xmlhttp.open("GET", "includes/hobbyhint.php?q=" + str, true)
		xmlhttp.send()
	}
}