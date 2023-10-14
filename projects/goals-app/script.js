// window.localStorage.clear();

var database = window.localStorage;

//*************************** FUNCTIONS

///////*************************** DOCUMENT STRUCTURE

function createElementVar(elementName) {
	return document.querySelector(`${elementName}`);
}

function renderView(module) {
	$main.innerHTML = templates[module];
}

///////*************************** USERS

function setCurrentUser(user) {
	database.setItem('currentUser', user.username);

	$header.innerHTML = `
		<p class="small-voice currentUser">Account: ${database.getItem('currentUser')}</p>
			`;
}

// function clearCurrentUser() {
// 	database.setItem('currentUser', null);
// }

function updateUsers(users) {

	let stringifiedUsers = JSON.stringify(users);

	database.setItem('users', stringifiedUsers);
}

// function checkUser(credentials) {
// 	const userlistString = database.getItem('users');

// 	const parsedUsers = JSON.parse(userListString);

// 	parsedUsers.find( function(credentials) {
// 		return credentials.username === user.username;
// 	});
// }

///////*************************** ACCOUNT

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
			updateUsers(users);
			
			usernameInput.value = "";
			passwordInput.value = "";

			return true; //use this to load the next page
		}
	}

}

function handleSignIn(form) {
	let usernameInput = form.querySelector('#username');
	let passwordInput = form.querySelector('#password');

	const username = usernameInput.value;
	const password = passwordInput.value;

	if (username && password) { //if both inputs have a valid value
		let user = { username, password }; //create an object to pass into checker

		var foundUser = users.find( function(item) { //check whether user exists in database
			return item.username === user.username;
		});

		if (foundUser) { //if user does exist in database
			if (foundUser.password === user.password) {
				setCurrentUser(user);
				alert('success!');
				return true; //use this to load the next page
			} else {
				alert('The password you entered does not match the username');
			}

		} else {
			
			alert("the username you entered does not exist");
		}
	} else {
		alert('please enter a username and password');
	}
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

let users = [
	{username : 'derek', password : '1234'},
	{username: 'santa', password : 'claus'}
];





window.addEventListener('submit', function(event) {
	event.preventDefault();

	if (event.target.matches('[data-form]')) {
		const formTitle = event.target.dataset.form;
		const form = createElementVar('form');

		if (formTitle === 'createAccount') {
			var handle = handleAccountCreation(form);

			if (handle === true) {
				renderView('home');
			}
		}

		if (formTitle === 'signIn') {
			handle = handleSignIn(form);

			if(handle === true) {
				renderView('home');
			}
		}
	}


});

