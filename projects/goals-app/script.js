var database = window.localStorage;

function createElementVar(elementName) {
	return document.querySelector(`${elementName}`);
}

function renderView(module) {
	$main.innerHTML = templates[module];
}

function setCurrentUser(user) {
	database.setItem('currentUser', user.username);
}

function clearCurrentUser() {
	database.setItem('currentUser', null);
}

//*************************** PAGE STRUCTURE
const $header = createElementVar('header inner-column');
const $main = createElementVar('main inner-column');
const $footer = createElementVar('footer inner-column');

//*************************** on app startup


// start with the sign-in page
//on submit, go to intake form the first time
	// go to menu after form completed
//on view = create-account, go to create-account

	$header.innerHTML = '';
	$footer.innerHTML = '';
	renderView('signIn');

window.addEventListener('click', function(event) {
	if (event.target.matches('[data-view]')) {
		const view = event.target.dataset.view;

		renderView(view);
	}
});

// function startupApp() {
// 	users = [];
// }

let users = [
	{username : 'derek',
	password : '1234'}
];

function handleAccountCreation(form) {

	let usernameInput = form.querySelector('#username');
	let passwordInput = form.querySelector('#password');

	const username = usernameInput.value;
	const password = passwordInput.value;

	if (username && password) {
		let user = { username, password };

		var userExists = users.find( function(item) {
			return item.username === user.username;
		});

		if (userExists) {
			alert('choose another username');
		} else {
			users = [...users, user];

			setCurrentUser(user);
			
			usernameInput.value = "";
			passwordInput.value = "";

			$header.innerHTML = `<p class="small-voice">${database.getItem('currentUser')}</p>
			`;

			return true; //use this to load the next page
		}
	}

}



window.addEventListener('submit', function(event) {
	event.preventDefault();

	if (event.target.matches('[data-form]')) {
		const formTitle = event.target.dataset.form;
		const form = createElementVar('form');

		if (formTitle === 'createAccount') {
			var handle = handleAccountCreation(form);

			if (handle === true) {
				renderView('signIn');
			}
		}

		if (formTitle === 'signIn') {
			// handle sign in
		}
	}


});

