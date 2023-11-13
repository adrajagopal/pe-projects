import {database, palettes, body} from './../../main.js';



palettes.addEventListener('click', function(event) {

	if (event.target.matches('.color')) {
		const currentTheme = document.querySelector('.palettes .active');

		let hue = Number(event.target.id);

		database.setItem("themeCode", hue);
		document.cookie = `themeCode=${hue}`;
		body.style.setProperty('--hue', hue);

		event.target.classList.add("active");
		currentTheme.classList.remove("active");
	}
});