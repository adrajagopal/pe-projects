console.clear();

/************* Init variables *************/
const $form = document.querySelector('form');
const $input = document.querySelector('textarea');
const $button = document.querySelector('button');
const $phpOutput = document.querySelector('.php-output');
const $output = document.querySelector('output');
var wordCount = 0;


/************* Functions *************/

function addClass(element, className) {
	element.classList.add(className);
}

// function removeClass(element, className) {
// 	element.classList.add(className);
// }

function createWordArray(string) {
	return string.split(" ");
}

function countWords(array) {
	return array.length;
}

function handleForm() {
	var array = createWordArray($input.value);

	wordCount = countWords(array);

	$output.innerHTML = `<p class="small-voice">${wordCount} words</p>`;	

	if (wordCount === 1) {
		$output.innerHTML = `<p class="small-voice">1 word</p>`;
	}
}

/************* Scripts to run *************/
addClass($button, 'hiddenByJS');
addClass($phpOutput, 'hiddenByJS');
$output.innerHTML = `<p class="small-voice">${wordCount} words</p>`;

$form.addEventListener('submit', function(event) {
	event.preventDefault();
});

$input.addEventListener('input', function() {
	handleForm()
});

	
