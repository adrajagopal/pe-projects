import {palettes, body} from './../../main.js';

palettes.addEventListener('click', function(event) {

	if (event.target.matches('input[type="radio"]')) {
		const currentSwatch = document.querySelector('.palettes .active'); //the preexisting theme

		let newHue = event.target.dataset.hue; //the new theme

		document.cookie = `themeCode=${newHue}`;
		body.style.setProperty('--hue', newHue);

		currentSwatch.classList.remove("active");
		event.target.closest('.colorSwatch').classList.add("active"); //handle the border colors
		document.querySelector('#favicon').setAttribute('href', `images/favicon-${newHue}.svg`);
	}
});