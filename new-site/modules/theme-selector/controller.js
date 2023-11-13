const palettes = document.querySelector('.palettes');
const body = document.querySelector('body');

palettes.addEventListener('click', function(event) {

	if (event.target.matches('.color')) {
		const currentTheme = document.querySelector('.palettes .active');

		let hue = Number(event.target.id);

		body.style.setProperty('--hue', hue);

		event.target.classList.add("active");
		currentTheme.classList.remove("active");
	}
});