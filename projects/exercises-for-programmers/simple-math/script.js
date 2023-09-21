console.clear();

var $form = document.querySelector('form');
var $inputOne = document.getElementById('firstNumber');
var $inputTwo = document.getElementById('secondNumber');
var $output = document.getElementById('form-result');

var ul = document.createElement('ul');

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

		results.forEach ( function (item) {
			var li = document.createElement('li');

			li.textContent = item.operation + " = " + item.result;

			ul.appendChild(li);

		});

		$output.classList.add("form-result");
		$output.appendChild(ul);


	} else {
		alert("Please submit two numbers");
	}
});