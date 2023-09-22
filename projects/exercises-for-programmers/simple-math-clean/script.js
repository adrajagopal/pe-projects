console.clear();

var $form = document.querySelector('form');
var $inputOne = document.querySelector('#firstNumber');
var $inputTwo = document.querySelector('#secondNumber');
var $output = document.querySelector('#form-result');

function calculateResults(firstNum, secondNum) {

	var operationsArray = [
		{
			name: "Sum",
			operation: firstNum + " + " + secondNum,
			result: firstNum + secondNum
		},
		{
			name: "Diff",
			operation: firstNum + " - " + secondNum,
			result: firstNum - secondNum
		},
		{
			name: "Product",
			operation: firstNum + " * " + secondNum,
			result: firstNum * secondNum
		},
		{
			name: "Quotient",
			operation: firstNum + " / " + secondNum,
			result: Math.round(((firstNum / secondNum) + Number.EPSILON) * 100) / 100
		}
	]

	return operationsArray;
}

function renderResults(results, parentElement = document.body) {
	var ul = `<ul class="form-result">`;

	results.forEach ( function (item) {
		ul = ul + `<li>${item.operation} = ${item.result}</li>`;
	});

	ul = ul + `</ul>`;

	parentElement.innerHTML = ul;
}

function handleForm() {
	var results = calculateResults($inputOne.value, $inputTwo.value);

	renderResults(results, $output);
}

$form.addEventListener('submit', function(event){
	event.preventDefault();

	if ($inputOne.value && $inputTwo.value) {
		handleForm();
	} else {
		alert("Please submit two numbers");
	}
});