console.clear();


const $form = document.querySelector('form');
const $input = document.querySelector('textarea');
const $button = document.querySelector('button');
const $output = document.querySelector('output');

$button.classList.add('hiddenByJS');
// $output.classList.add('hiddenByJS');

function createWordArray(string) {
	return string.split(" ");
}

function countWords(array) {
	return array.length;
}


//THIS DOESN'T WORK YET....
function renderMessage(wordCount) {
	$output.innerHTML = `
		<p class="small-voice"> ${wordCount}words</p>
		<p class="small-voice">This is more of a venting tool...you can't actually submit your complain. Let it out, though!</p>
	`;
}

function handleForm() {
	const array = createWordArray($input.value);
	const wordCount = countWords(array);

	return wordCount;

	// renderMessage("hi");

}

$form.addEventListener('submit', function(event) {
	event.preventDefault();
});

$input.addEventListener('input', function() {
	console.log(handleForm());
	handleForm();
});

	
