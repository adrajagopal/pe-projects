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

function showTweet(tweet) {
	return `
		<li data-id="${tweet.id}">
			<tweet-card class="${ tweet.flagged ? 'flagged' : ''}">
				<picture class="profile-photo">
					<img src="images/${tweet.profilePic}" alt="">
				</picture>

				<div class="identity">
					<p class="author">${tweet.username}</p>
					<p class="handle">@${tweet.handle}</p>
				</div>

				<p class="tweet-body">${tweet.content}</p>

				<div class="actions">
					<button class="hide">
						<picture>
							<img src="images/hide-content.svg" alt="Hide tweet">
						</picture>
					</button>
					<button class="flag">
						<picture>
							<img src="images/report-content.svg" alt="Flag tweet">
						</picture>
					</button>
					<button class="dox">
						<picture>
							<img src="images/dox.svg" alt="Dox author">
						</picture>
					</button>
				</div>
			</tweet-card>
		</li>
	`;
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
