function updateTransition() {
	var el = document.querySelector("div.loading");
	
	if (el) {
		el.className = "loading1";
	}
	
	return el;
}

var intervalID = window.setInterval(updateTransition, 1000);