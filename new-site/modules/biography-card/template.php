<biography-card>
	<!-- outlet -->
	<picture>
			<img src="images/ad-portrait-blonde.jpg">
	</picture>
	<ul class="medium-voice bio-attributes">
		<li>
			<h3><strong>Type:</strong> ${version.type}</h3>
		</li>
		<li>
			<h3><strong>Rarity:</strong> ${version.rarity}</h3>
		</li>
		<li>
			<h3><strong>Interests:</strong> ${version.interests}</h3>
		</li>
	</ul>

	<text-content>
		<h3 class="large-voice">Biography:</h3>

		<p>${version.bioParagraph}</p>

		<p>${version.closingSentence}</p>
	</text-content>

	<button>Check out my work</button>
</biography-card>
<script src="modules/biography-card/controller.js"></script>