import {bios} from "./bioData.js";


const form = document.querySelector('.controlsForm');
const bioCard = document.querySelector('biography-card');


function renderBio(input) {
	return `
		<picture>
			<img src="images/${input.portrait}" alt="${input.alt}">
		</picture>

		<ul class="medium-voice bio-attributes">
			<li>
				<h3><strong>Type: </strong><span class="medium-voice">${input.type}</span></h3>
			</li>
			<li>
				<h3><strong>Interests: </strong><span class="medium-voice">${input.interests}</span></h3>
			</li>
		</ul>

		<text-content>
			<h3 class="large-voice">Biography:</h3>

			<p>${input.bioParagraph}</p>

			<p>${input.bioClosingSentence}</p>
		</text-content>

		<a class="button" href="?page=work">See his work</a>
	`;
}

form.addEventListener('input', function(event) {

	let found = bios.find( function(item) {
		return event.target.id === item.version;
	});

	bioCard.innerHTML = renderBio(found);
		//when you can, work on getting this into one line of code inside the event listener
});










