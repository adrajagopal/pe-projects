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

	var message = "";

	if (wordCount < 11) {
		message = "We're here to help!" 
	} else if (wordCount < 16) {
		message = "Sounds frustrating."
	} else if (wordCount < 21) {
		message = "Oh, wow, OK."
	} else if (wordCount < 31) {
		message = "I'm sorry, I'm going through a tunnel. I can't quite hear you."
	} else {
		message = "Just e--(fake static) and you'll be saved!"
	}

	$output.innerHTML = `
		<p class="small-voice">${wordCount} words</p>
		<p class="small-voice">${message}</p>
	`;	

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

	
