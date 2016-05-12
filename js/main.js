;(function(){
	var menuToggle = document.getElementById("ba-menu-toggle"),
		body = document.body;

	menuToggle.onclick = function(event){
		event.preventDefault();
		if(body.className === "ba-menu-opened"){
			body.className = "";
		} else {
			body.className = "ba-menu-opened";
		}

	}
})();
