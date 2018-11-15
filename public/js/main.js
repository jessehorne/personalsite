var app = {};


// Variable pre-sets
app.canUseLocalStorage = false;
app.tag = "home";
app.current_favicon = 0;
app.favicons = [1, 2, 3, 3, 2];


app.nextFavicon = function() {
	if (app.current_favicon < app.favicons.length-1) {
		app.current_favicon += 1;
	} else {
		app.current_favicon = 0;
	}

	document.head || (document.head = document.getElementsByTagName('head')[0]);

	var link = document.createElement("link");
	var old_link = document.getElementById("old-favicon");

	link.id = "old-favicon";
	link.rel = "shortcut icon";
	link.href = "/images/favicon_0" + app.favicons[app.current_favicon] + ".ico";

	console.log(app.current_favicon, app.favicons[app.current_favicon]);
	console.log("/images/favicon_0" + app.favicons[app.current_favicon] + ".ico");

	if (old_link) {
		document.head.removeChild(old_link);
	}

	document.head.appendChild(link);
}


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
	// Handle favicon changing
	setInterval(app.nextFavicon, 1000);

	// Can use localStorage?
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
