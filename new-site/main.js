export const database = window.localStorage;
export const palettes = document.querySelector('.palettes');
export const body = document.querySelector('body');

function initializeTheme() {
	
	//set an initial hue value
	let currentHue = 210;	

	//get from storage, or push to storage if there's no existing
	if (database.getItem("themeCode")) {
		currentHue = database.getItem("themeCode");
	} else {
		database.setItem("themeCode", currentHue);
	}

	//change var(--hue) property in CSS
	body.style.setProperty('--hue', currentHue);

	//add .active to hue and remove from any other value
	let activeTheme = document.querySelector(`[id="${currentHue}"]`);
	activeTheme.classList.add("active");

}

window.addEventListener("load", function() {
	initializeTheme();
});