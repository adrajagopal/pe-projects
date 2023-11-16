<biography-controls>
	<text-content>
		<h3 class="large-voice">Choose your vibe:</h3>
		<!-- <p class="medium-voice">which me? your choice.</p> -->
	</text-content>
	<form class="button-container">
		<div class="option">
			<input 
				id="normal"
				value="normal"
				type="radio"
				name="version"
				v-model="activeVersion"
				@click="log"
				checked="checked"
			>
			<label for="normal">Classic</label>
		</div>

		<div class="option">
			<input 
				id="anxious"
				value="anxious"
				type="radio"
				name="version"
				v-model="activeVersion"
				@click="log"
			>
			<label for="anxious">Anxious perfectionist</label>
		</div>

		<div class="option">
			<input 
				id="aggressive"
				value="aggressive"
				type="radio"
				name="version"
				v-model="activeVersion"
				@click="log"
			>
			<label for="aggressive">Aggressively confident</label>
		</div>

	</form>
</biography-controls>