console.clear();

var $form = document.querySelector('form');
var $inputOne = document.querySelector('#firstNumber');
var $inputTwo = document.querySelector('#secondNumber');
var $output = document.querySelector('#form-result');

$form.addEventListener('submit', function(event){
	event.preventDefault();

	if ($inputOne.value && $inputTwo.value) {

		var firstNum = Number($inputOne.value);
		var secondNum = Number($inputTwo.value);

		var sum = firstNum + secondNum;
		var diff = firstNum - secondNum;
		var product = firstNum * secondNum;
		var quotient = Math.round(((firstNum / secondNum) + Number.EPSILON) * 100) / 100;

		var results = [
			{
				name: "Sum",
				operation: firstNum + " + " + secondNum,
				result: sum
			},
			{
				name: "Diff",
				operation: firstNum + " - " + secondNum,
				result: diff
			},
			{
				name: "Product",
				operation: firstNum + " * " + secondNum,
				result: product
			},
			{
				name: "Quotient",
				operation: firstNum + " / " + secondNum,
				result: quotient
			}
		]

		console.log(results);

		var ul = `<ul class="form-result">`;

		results.forEach ( function (item) {
			ul = ul + `<li>${item.operation} = ${item.result}</li>`;
		});

		ul = ul + `</ul>`;

		$output.innerHTML = ul;

	} else {
		alert("Please submit two numbers");
	}
});