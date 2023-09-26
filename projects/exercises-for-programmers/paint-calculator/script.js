console.clear();


/**************		Paint calculator form section			**************/
const $form = document.querySelector('form');
const $calcOutput = document.querySelector('output.calculator');
const $swatchOutput = document.querySelector('output.swatch');
const colorCheckbox = document.querySelector('[name="colorPickerToggle"]');

const lengthFeetInput = document.querySelector('[name="lengthFeet"]');
const lengthInchesInput = document.querySelector('[name="lengthInches"]');

const widthFeetInput = document.querySelector('[name="widthFeet"]');
const widthInchesInput = document.querySelector('[name="widthInches"]');

// convert feet + inches to a fraction
function convertToFloat(feet, inches) {
	return Number(feet) + (Number(inches)/12);
}

// calculate area of a room based on length and width
function calculateArea(length, width) {
	return length * width;
}

// calculate the number of gallons, rounded up always - use ceil()
function calculateGallons(roomArea) {
	return Math.ceil(roomArea/350);
}

function clearMessage(element) {
	element.innerHTML = '';
}

// create function to render results
function renderMessage(roomArea, gallons) {
	let message = `Your room is ${roomArea.toLocaleString('en-US', {maximumFractionDigits:2})} square feet, so you'll only need ${gallons} gallon to paint it.`;

	if (gallons > 1) {
		message = `Your room is ${roomArea.toLocaleString('en-US', {maximumFractionDigits:2})} square feet, so you'll need ${gallons} gallons to paint it.`;
	}

	$calcOutput.innerHTML = `<p class="form-result">${message}</p>`;
}

function handleForm() {
	const length = convertToFloat(lengthFeetInput.value, lengthInchesInput.value);
	const width = convertToFloat(widthFeetInput.value, widthInchesInput.value);

	const area = calculateArea(length, width);

	const gallons = calculateGallons(area);

	renderMessage(area, gallons);
}

function toNumber(string) {
	return Number(string);
}

function toPercent(number) {
	return (Number(number)/100).toLocaleString('en-US', {style: 'percent'});
}

$form.addEventListener('submit', function(event){
	event.preventDefault();

	if (lengthFeetInput && lengthInchesInput && widthFeetInput && widthInchesInput) { // fix this
		handleForm();
	} else {
		alert("Please enter all values.");
	}
});

//manages the checkbox
colorCheckbox.addEventListener('click', function() {
	if (colorCheckbox.checked) {
		$swatchOutput.innerHTML = `

			<div class="color-picker-container">

				<div class="colorSwatch"></div>

				<form class="colorPicker">

					<label class="field slider span-two">
						<span class="label">Hue</span>
						<input-container>
							<input id="hue" type="range" min="0" max="360" step="10">
							<label for="hue">0-360, incr = 10</label>
						</input-container>
					</label>

					<label class="field slider span-two">
						<span class="label">Saturation</span>
						<input-container>
							<input id="saturation" type="range" min="0" max="100" step="1">
							<label for="saturation">0-100, incr = 1</label>
						</input-container>
					</label>

					<label class="field slider span-two">
						<span class="label">Lightness</span>
						<input-container>
							<input id="lightness" type="range" min="0" max="100" step="1">
							<label for="lightness">0-100, incr = 1</label>
						</input-container>
					</label>

				</form>

			</div>

		`;

		$swatchOutput.style.display = 'block';
		$swatchOutput.style.margin = '40px 0 0 0';
	} else {
		clearMessage($swatchOutput);
	}

});

//manages the color-picker UI ONLY when it exists
window.addEventListener('input', function(event) {
	if (event.target.matches('#hue, #saturation, #lightness')) {

		const html = document.querySelector('html');

		const colorSwatch = document.querySelector('.colorSwatch');

		const hueInput = document.querySelector('#hue');
		const hue = toNumber(hueInput.value);

		const saturationInput = document.querySelector('#saturation');
		const saturation = toPercent(saturationInput.value);

		const lightnessInput = document.querySelector('#lightness');
		const lightness = toPercent(lightnessInput.value);
		const lightnessInverse = toPercent(Math.abs(lightnessInput.value - 100));

		colorSwatch.style.backgroundColor = `hsl(${hue}, ${saturation}, ${lightness})`;
		colorSwatch.innerHTML = `
			<p class="hslOutput">Hue: ${hue}</p>
			<p class="hslOutput">Saturation: ${saturation}</p>
			<p class="hslOutput">Lightness: ${lightness}</p>
		`;
		
		html.style.setProperty('--hue', hue + 180);
		html.style.setProperty('--lightness', lightnessInverse);

	}
});










