const bioControls = document.querySelector('biography-controls form');
const bioOutlet = document.querySelector('biography-card');

function renderBio(version) {
	return `
		<picture>
			<img src="images/${version.portrait}">
		</picture>
		<ul class="medium-voice bio-attributes">
			<li>
				<h3><strong class="bold">Type: </strong>${version.type}</h3>
			</li>
			<li>
				<h3><strong class="bold">Rarity: </strong>${version.rarity}</h3>
			</li>
			<li>
				<h3><strong class="bold">Interests: </strong>${version.interests}</h3>
			</li>
		</ul>

		<text-content>
			<h3 class="large-voice"><strong>Biography:</strong></h3>

			<p>${version.bioParagraph}</p>

			<p>${version.closingSentence}</p>
		</text-content>

		<button>Check out my work</button>
	`;
}

bioControls.addEventListener('change', function(event) {

	if (event.target.type === 'radio') {

		let versionId = event.target.id;
		// look into https://jsonplaceholder.typicode.com/, promise, fetch

		// bioOutlet.innerHTML = renderBio(versionId);
		bioOutlet.innerHTML = versionId;
	}

});