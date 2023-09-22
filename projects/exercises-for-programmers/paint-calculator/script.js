console.clear();

var $form = document.body.querySelector('form');
var $output = document.querySelector('output');

var lengthFeetInput = document.body.querySelector('[name="lengthFeet"]');
var lengthInchesInput = document.body.querySelector('[name="lengthInches"]');

var widthFeetInput = document.body.querySelector('[name="widthFeet"]');
var widthInchesInput = document.body.querySelector('[name="widthInches"]');

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

// create function to render results
function renderMessage(roomArea, gallons) {
	if (gallons === 1) {
		$output.innerHTML = `<p class="form-result">Your room is ${roomArea} square feet, so you'll only need ${gallons} gallon to paint it.</p>`;
	} else if (gallons > 1) {
		$output.innerHTML = `<p class="form-result">Your room is ${roomArea} square feet, so you'll need ${gallons} gallon to paint it.</p>`;
	}
}

function handleForm() {
	var length = convertToFloat(lengthFeetInput.value, lengthInchesInput.value);
	var width = convertToFloat(widthFeetInput.value, widthInchesInput.value);

	var area = calculateArea(length, width);

	var gallons = calculateGallons(area);

	renderMessage(area, gallons);
}


$form.addEventListener('submit', function(event){
	event.preventDefault();

	if (lengthFeetInput && lengthInchesInput && widthFeetInput && widthInchesInput) {
		handleForm();
	} else {
		alert("Please enter all values.");
	}

});

$form.addEventListener('input', function(event) {
	$output.innerHTML = '';
});

