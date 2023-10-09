var tweets = [];
var lastId = 0;

function addTweet() {

	var tweet = {
		id: `t${lastId++}`,
		username,
		handle,
		profilePic,
		content,
		flagged: false
	};

	tweets = [...tweets, tweet];

	usernameInput.value = "";
	handleInput.value = "";
	contentInput.value = "";
}

const form = document.querySelector('form');
const output = document.querySelector('output');

var usernameInput = form.querySelector('#username');
var handleInput = form.querySelector('#handle');
var profilePicInput = form.querySelector('#profile-pic');
var contentInput = form.querySelector('#content');

let username = null;
let handle = null;
let profilePic = null;
let content = null;

form.addEventListener('submit', function(event) {
	event.preventDefault();

	username = usernameInput.value;
	handle = handleInput.value;
	profilePic = profilePicInput.value;
	content = contentInput.value;


	if (username && handle && profilePic && content) {

		addTweet();
	} else {
		alert("Please fill out all the fields");
	}
});
