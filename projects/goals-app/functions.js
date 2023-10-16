//*************************** FUNCTIONS

///////*************************** DOCUMENT STRUCTURE

export function createElementVar(elementName) {
	return document.querySelector(`${elementName}`);
}

export function renderView(module) {
	$main.innerHTML = templates[module];
}

///////*************************** USERS

export function setCurrentUser(user) {
	database.setItem('currentUser', user.username);

	$header.innerHTML = `
		<p class="small-voice currentUser">Account: ${database.getItem('currentUser')}</p>
			`;
}

function clearCurrentUser() {
	database.setItem('currentUser', null);
}

export function updateUsers(users) {

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

export function handleAccountCreation(form) {

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

export function handleSignIn(form) {
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