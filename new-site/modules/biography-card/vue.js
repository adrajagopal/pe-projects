Vue.createApp({
	data() {
		return {
			activeVersion: "normal",
			portrait: "ad-portrait-blonde.jpg"
		}
	},

	computed: {
		newVersion() {
			newVersion = activeVersion;
			console.log(newVersion);
		}
	}
}).mount('.page-wrapper.home');