import {palettes, body} from './../../main.js';

palettes.addEventListener('click', function(event) {

	if (event.target.matches('.color')) {
		const currentTheme = document.querySelector('.palettes .active'); //the preexisting theme

		let hue = event.target.dataset.hue; //the new theme

		document.cookie = `themeCode=${hue}`;
		body.style.setProperty('--hue', hue);

		event.target.classList.add("active"); //handle the border colors
		currentTheme.classList.remove("active");
	}
});