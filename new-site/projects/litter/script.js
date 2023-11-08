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

function showFeed() {

	let feed = "<ul class='postFeed'>";
	

	tweets.forEach( function(tweet) {
		feed +=	showTweet(tweet);
	});

	feed += "</ul>";

	output.innerHTML = feed;

}

function hideTweet(id) {
	const filtered = tweets.filter( function (tweet) {
		return tweet.id != id;
	});

	tweets = [...filtered];
	showFeed();

}

function flagTweet(id) {
	const flaggedTweet = tweets.find( function(tweet) {
		return tweet.id === id;
	});

	flaggedTweet.flagged = !flaggedTweet.flagged;

	showFeed();

}

function doxUser(id) {
	const found = tweets.find( function(tweet) {
		return tweet.id === id;
	});

	alert(`The author of this tweet is ${found.username}. FUCK UP THEIR LIFE!!!!`);
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

		showFeed();

	} else {
		alert("Please fill out all the fields");
	}
});

output.addEventListener('click', function(event) {

	if (event.target.className === 'hide') {
		const id = event.target.closest('li').dataset.id;
		hideTweet(id);
	}

	if (event.target.className === 'dox') {
		const id = event.target.closest('li').dataset.id;
		doxUser(id);
	}

	if (event.target.className === 'flag') {
		const id = event.target.closest('li').dataset.id;
		flagTweet(id);
	}









})