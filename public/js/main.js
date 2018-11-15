var app = {};


// Variable pre-sets
app.canUseLocalStorage = false;
app.tag = "home";


app.setTag = function(tag_name) {
	localStorage.setItem("jh-portfolio-tag", tag_name);
	app.tag = tag_name;
	window.location.hash = "#" + tag_name;

	// handles styling for navigation items that are selected
	var nav_items = document.getElementsByClassName("nav-item");

	for (var i=0; i < nav_items.length; i++) {
		var tag = nav_items[i].id;

		if (tag == app.tag) {
			nav_items[i].classList.add("nav-selected");
		} else {
			nav_items[i].classList.remove("nav-selected");
		}
	}

	document.getElementById("section-" + app.tag).scrollIntoView();

	console.log("set tag to " + tag_name);
}


app.onload = function() {
	if (localStorage) {
		app.canUseLocalStorage = true;
	}

	// Get or Set "jh-portfolio-tag" which determines what navigation section the user is viewing
	if (app.canUseLocalStorage) {
		var tag = localStorage.getItem("jh-portfolio-tag");
		if (tag) {
			app.setTag(tag);
		} else {
			app.setTag(app.tag);
		}
	}

	// Loop through navigation items and handle their scrolling functionality
	var nav_items = document.getElementsByClassName("nav-item");

	for (var i=0; i < nav_items.length; i++) {
		var tag = nav_items[i].id;

		var click = function(e) {
			var item = e.target || e.srcElement;
			var tag = item.id;

			app.setTag(tag);
		}

		nav_items[i].addEventListener("click", click);
	}
}


document.addEventListener("DOMContentLoaded", app.onload, false);
