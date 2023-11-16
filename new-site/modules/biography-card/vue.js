Vue.createApp({
	data() {
		return {
			portrait: "ad-portrait-blonde.jpg"
		}
	},

	computed: {
		log() {
			let bonk = this.activeVersion;
			console.log(bonk);
		}
	}
}).mount('.page-wrapper.home');