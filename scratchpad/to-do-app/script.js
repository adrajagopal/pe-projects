var tweets = [];
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

		output.innerHTML =
		`<tweet-card>
			<picture class="profile-photo">
				<img src="images/${profilePic}" alt="">
			</picture>

			<div class="identity">
				<p class="author">${username}</p>
				<p class="handle">@${handle}</p>
			</div>

			<p class="tweet-body">${content}</p>

			<div class="actions">
				<a>
					<picture>
						<img src="images/hide-content.svg" alt="">
					</picture>
				</a>
				<a>
					<picture>
						<img src="images/report-content.svg" alt="">
					</picture>
				</a>
				<a>
					<picture>
						<img src="images/dox.svg" alt="">
					</picture>
				</a>
			</div>
		</tweet-card>`;


		console.log(usernameInput.value);
		console.log(`@${handleInput.value}`);
		console.log(profilePicInput.value);
		console.log(contentInput.value);
	} else {
		alert("Please fill out all the fields");
	}
});