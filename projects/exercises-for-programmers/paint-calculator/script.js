console.clear();

const $form = document.querySelector('form');
const $output = document.querySelector('output');
const colorCheckbox = document.querySelector('[name="colorSelector"]');

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

function clearMessage() {
	$output.innerHTML = '';
}

// create function to render results
function renderMessage(roomArea, gallons) {
	let message = `Your room is ${roomArea} square feet, so you'll only need ${gallons} gallon to paint it.`;

	if (gallons > 1) {
		message = `Your room is ${roomArea} square feet, so you'll need ${gallons} gallons to paint it.`;
	}

	$output.innerHTML = `<p class="form-result">${message}</p>`;
}

function handleForm() {
	const length = convertToFloat(lengthFeetInput.value, lengthInchesInput.value);
	const width = convertToFloat(widthFeetInput.value, widthInchesInput.value);

	const area = calculateArea(length, width);

	const gallons = calculateGallons(area);

	renderMessage(area, gallons);
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
		$output.innerHTML = `

			<div class="color-picker-container">

				<div class="color-swatch"></div>

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
	} else {
		clearMessage();
	}

	//if it's checked, show it

});

//manages the color-picker UI ONLY when it exists
window.addEventListener('click', function(event) {
	if (event.target.matches('.color-picker')) {
		const colorPicker = document.querySelector('form.colorPicker');

		const hue = document.querySelector('#hue');
		const saturation = document.querySelector('#saturation');
		const lightness = document.querySelector('#lightness');

		// drag slider
		// change color attribute
		// change display

		console.log(hue.value + " " + saturation.value + " " + lightness.value);

	}
});













