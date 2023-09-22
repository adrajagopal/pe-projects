console.clear();

var $form = document.body.querySelector('form');
var $output = document.querySelector('.form-result');

var lengthFeetInput = document.body.querySelector('[name="lengthFeet"]');
var lengthInchesInput = document.body.querySelector('[name="lengthInches"]');

var widthFeetInput = document.body.querySelector('[name="widthFeet"]');
var widthInchesInput = document.body.querySelector('[name="widthInches"]');

// // get input values
// // convert feet + inches to a fraction
// // calculate area of a room based on length and width
// // calculate the number of gallons, rounded up always - use ceil()

function convertToFloat(feet, inches) {
	return Number(feet) + (Number(inches)/12);
}

function calculateArea(length, width) {
	return length * width;
}

function calculateGallons(roomArea) {
	return Math.ceil(roomArea/350);
}

// create function to render results

function handleForm() {
	var length = convertToFloat(lengthFeetInput.value, lengthInchesInput.value);
	var width = convertToFloat(widthFeetInput.value, widthInchesInput.value);

	var area = calculateArea(length, width);

	var gallons = calculateGallons(area);

	//add render() to here
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

