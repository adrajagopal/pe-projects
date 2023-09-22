console.clear();

var $form = document.querySelector('form');
var lengthInput = document.querySelector('#length');
var widthInput = document.querySelector('#width');
var $output = document.querySelector('#form-result');
const CONVERSION_FACTOR = 0.09290304;

function calculateFeet(length, width) {
	return parseInt(length) * parseInt(width);
}

function calculateMeters(feetArea) {
	return Math.round(((feetArea * CONVERSION_FACTOR) + Number.EPSILON) * 100) / 100;
}

function renderResults(feetArea, metersArea, parentElement = document.body) {
	parentElement.innerHTML = `<p class='form-result'>You room is ${feetArea.toLocaleString()} square feet and ${metersArea.toLocaleString()} square meters.</p>`;	
}

function handleForm() {
	var areaFeet = calculateFeet(lengthInput.value, widthInput.value);

	var areaMeters = calculateMeters(areaFeet);

	renderResults(areaFeet, areaMeters, $output);
}

$form.addEventListener('submit', function(event){
	event.preventDefault();

	if (lengthInput.value && widthInput.value) {
		handleForm();
	} else {
		alert("Please submit two numbers");
	}
});